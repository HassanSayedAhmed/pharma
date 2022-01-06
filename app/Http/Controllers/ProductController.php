<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\category;
use App\product;
use App\SubCategory;

class ProductController extends Controller
{
    public function index(Request $request){
        if($request->ajax())
        {
            $draw = $request->draw;
            $start = $request->start;
            $length = $request->length;
            $columns = $request->columns;
            $order = $request->order[0]['column'];
            $orderBy = $columns[$order]["name"];
            $orderDir = $request->order[0]['dir'];
            $textSearch = $request->search['value'];

            Paginator::currentPageResolver(function () use ($start, $length) {
                return ($start / $length + 1);
            });

            $query = product::select('products.id',
            'products.name as product_name',
            'products.type',
            'products.image',
            'products.category_id',
            'categories.name as category_name',
            'products.active')
                ->join('categories','products.category_id','categories.id')
                ->orderBy($orderBy, $orderDir);


            if ($textSearch) {
              $textSearch = mb_ereg_replace(" ", "%", $textSearch);
              $query->Where(\DB::raw("COALESCE(name,'')") , "like", "%$textSearch%");
            }

            $rows = $query->paginate($length);

            $result = [
                'draw' => $draw,
                'recordsTotal' => $rows->total(),
                'recordsFiltered' => $rows->total(),
                'data' => $rows
            ];

            return $result;
        }

        $categories = Category::select('id','name','description','image','parent_id','active')
            ->where('parent_id', null)->orderBy('id', 'desc');
          
        $categories = $categories->paginate(Category::where('parent_id', null)->count('id'));
      
        $categories->getCollection()->transform(function ($value) {
            
            $value->subCategory = Category::where('parent_id',$value->id)->get();

            return $value;
        });
      
        return view('backend.product.index', compact('categories'));
    }

    public function save(Request $request)
    {
        if($request->id == 0)
        {
            $product = new product();
            $product->name = $request->name;
            $product->active = product::ACTIVE;
            $product->category_id = $request->category_id;
            if($request->has('image')){
                $file = $request->file('image');
                $product->image = '/uploads/products/'. $file->getClientOriginalName();
                $destinationPath = '/uploads/products';
                $file->move(public_path($destinationPath), $file->getClientOriginalName());
            }
            $product->save();
        }
        else
        {
            $product = product::find($request->id);
            $product->name = $request->name;
            $product->category_id = $request->category_id;
            $product->type = $request->type;
            if($request->has('image')){
                $file = $request->file('image');
                $product->image = '/uploads/products/'. $file->getClientOriginalName();
                $destinationPath = '/uploads/products';
                $file->move(public_path($destinationPath), $file->getClientOriginalName());
            }
            $product->save();
        }
        return response()->json($request);
    }

    public function delete($id)
    {
        $product = product::find($id);
        $product->delete();
        return response()->json($id);
    }
}
