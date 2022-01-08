<?php

namespace App\Http\Controllers;

use App\Carrier;
use App\job;
use App\JobWhatWeExpect;
use App\JobRequirements;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class CarrierController extends Controller
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

            $query = job::select('jobs.*')->orderBy($orderBy, $orderDir);


            if ($textSearch) {
              $textSearch = mb_ereg_replace(" ", "%", $textSearch);
              $query->Where(\DB::raw("COALESCE(name,'')") , "like", "%$textSearch%");
            }

            $rows = $query->paginate($length);

            $rows->getCollection()->transform(function ($value) {
                
                $value->requirements = JobRequirements::where('job_id',$value->id)->get();
                $value->whatWeExpect = JobWhatWeExpect::where('job_id',$value->id)->get();

                return $value;
            });

            $result = [
                'draw' => $draw,
                'recordsTotal' => $rows->total(),
                'recordsFiltered' => $rows->total(),
                'data' => $rows
            ];

            return $result;
        }

        return view('backend.job.index');
    }

    public function save(Request $request)
    {
        if($request->id == 0)
        {
            $job = new job();
            $job->title = $request->title;
            $job->description = $request->description;
            $job->what_you_have_got = $request->what_you_have_got;
            $job->title_ar = $request->title_ar;
            $job->description_ar = $request->description_ar;
            $job->what_you_have_got_ar = $request->what_you_have_got_ar;
            $job->active = $request->active;
            
            $job->save();
        }
        else
        {
            $job = job::find($request->id);
            $job->title = $request->title;
            $job->description = $request->description;
            $job->what_you_have_got = $request->what_you_have_got;
            $job->title_ar = $request->title_ar;
            $job->description_ar = $request->description_ar;
            $job->what_you_have_got_ar = $request->what_you_have_got_ar;
            $job->active = $request->active;
            
            $job->save();
        }
        return response()->json($request);
    }

    public function delete($id)
    {
        $job = job::find($id);
        $job->delete();
        return response()->json($id);
    }

    public function saveRequirement(Request $request)
    {
        if($request->id == 0)
        {
            $requirement = new JobRequirements();
            $requirement->name = $request->name;
            $requirement->name_ar = $request->name_ar;
            $requirement->job_id = $request->job_id;
            $requirement->active = 1;
            
            $requirement->save();
        }
        else
        {
            $requirement = JobRequirements::find($request->id);
            $requirement->name = $request->name;
            $requirement->name_ar = $request->name_ar;
            $requirement->job_id = $request->job_id;
            $requirement->active = 1;
            
            $requirement->save();
        }
        return response()->json($request);
    }

    public function deleteRequirement($id)
    {
        $requirement = JobRequirements::find($id);
        $requirement->delete();
        return response()->json($id);
    }

    public function saveWhatWeExpect(Request $request)
    {
        if($request->id == 0)
        {
            $whatWeExpect = new JobWhatWeExpect();
            $whatWeExpect->name = $request->name;
            $requirement->name_ar = $request->name_ar;
            $whatWeExpect->job_id = $request->job_id;
            $whatWeExpect->active = 1;
            
            $whatWeExpect->save();
        }
        else
        {
            $whatWeExpect = JobWhatWeExpect::find($request->id);
            $whatWeExpect->name = $request->name;
            $requirement->name_ar = $request->name_ar;
            $whatWeExpect->job_id = $request->job_id;
            $whatWeExpect->active = 1;
            
            $whatWeExpect->save();
        }
        return response()->json($request);
    }

    public function deleteWhatWeExpect($id)
    {
        $whatWeExpect = JobWhatWeExpect::find($id);
        $whatWeExpect->delete();
        return response()->json($id);
    }

}
