<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\JobApplicant;

class JobApplicantController extends Controller
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

            $query = JobApplicant::join('jobs', 'jobs.id', 'job_applicants.job_id')
            ->select('job_applicants.*','jobs.title')
            ->orderBy($orderBy, $orderDir);


            if ($textSearch) {
              $textSearch = mb_ereg_replace(" ", "%", $textSearch);
              $query->Where(\DB::raw("COALESCE(first_name,'')") , "like", "%$textSearch%");
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

        return view('backend.job_applicant.index');
    }

    public function save(Request $request)
    {
        if($request->id == 0)
        {
            $JobApplicant = new JobApplicant();
            $JobApplicant->name = $request->name;
            //$JobApplicant->active = JobApplicant::ACTIVE;
            if($request->has('image')){
                $file = $request->file('image');
                $JobApplicant->image = '/uploads/categories/'. $file->getClientOriginalName();
                $destinationPath = '/uploads/categories';
                $file->move(public_path($destinationPath), $file->getClientOriginalName());
            }
            $JobApplicant->save();
        }
        else
        {
            $JobApplicant = JobApplicant::find($request->id);
            $JobApplicant->name = $request->name;
            if($request->has('image')){
                $file = $request->file('image');
                $JobApplicant->image = '/uploads/categories/'. $file->getClientOriginalName();
                $destinationPath = '/uploads/categories';
                $file->move(public_path($destinationPath), $file->getClientOriginalName());
            }
            $JobApplicant->save();
        }
        return response()->json($request);
    }

    public function delete($id)
    {
        $JobApplicant = JobApplicant::find($id);
        $JobApplicant->delete();
        return response()->json($id);
    }
}
