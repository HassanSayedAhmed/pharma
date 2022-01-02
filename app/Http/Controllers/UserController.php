<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\User;

class UserController extends Controller
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

            $query = User::select('id','name','username','password','active')
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

        return view('backend.user.index');
    }

    public function save(Request $request)
    {
        if($request->id == 0)
        {
            $user = new User();
            $user->name = $request->name;
            $user->username = $request->username;
            $user->password = $request->password;
            $user->active = User::ACTIVE;
            // if($request->has('image')){
            //     $file = $request->file('image');
            //     $blog->image = '/uploads/blogs/'. $file->getClientOriginalName();
            //     $destinationPath = '/uploads/blogs';
            //     $file->move(public_path($destinationPath), $file->getClientOriginalName());
            // }
            $user->save();
        }
        else
        {
            $user = User::find($request->id);
            $user->name = $request->name;
            $user->username = $request->username;
            $user->password = $request->password;

            // if($request->has('image')){
            //     $file = $request->file('image');
            //     $blog->image = '/uploads/categories/'. $file->getClientOriginalName();
            //     $destinationPath = '/uploads/categories';
            //     $file->move(public_path($destinationPath), $file->getClientOriginalName());
            // }
            $user->save();
        }
        return response()->json($request);
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json($id);
    }
}
