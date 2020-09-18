<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\GradeSession;

use App\WeightDeviation;

use Auth;

class GradeSessionController extends Controller
{
   

    public function submit_session(Request $request)
    {
        # code...
        $gradesession = new GradeSession;

        $gradesession->weight1 = $request->input('weight1');
        $gradesession->length_change1 = $request->input('length_change1');

        $gradesession->weight2 = $request->input('weight2');
        $gradesession->length_change2 = $request->input('length_change2');

        $gradesession->weight3 = $request->input('weight3');
        $gradesession->length_change3 = $request->input('length_change3');

        $gradesession->weight4 = $request->input('weight4');
        $gradesession->length_change4 = $request->input('length_change4');

        $gradesession->weight5 = $request->input('weight5');
        $gradesession->length_change5 = $request->input('length_change5');

        $gradesession->weight6 = $request->input('weight6');
        $gradesession->length_change6 = $request->input('length_change6');

        $gradesession->user_name = Auth::user()->name;

        $gradesession->user_id = Auth::user()->id;

        $gradesession->score = rand(44, 100);

        $gradesession->save();

        return redirect('/user/submit_success');
        

    }
}
