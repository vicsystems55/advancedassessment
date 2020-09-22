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

        
        
        $e11 = $request->input('length_change1');
        $e12 = $request->input('stand_change1');

        $diff1 = ((abs($e11 - $e12))/$e12) * 100;

        $gradesession->weight1 = $request->input('weight1');
        $gradesession->length_change1 = $request->input('length_change1');
        $gradesession->diff1 = $diff1;

        
        $e21 = $request->input('length_change2');
        $e22 = $request->input('stand_change2');
        $diff2 = ((abs($e21 - $e22))/$e22) * 100;

        $gradesession->weight2 = $request->input('weight2');
        $gradesession->length_change2 = $request->input('length_change2');
        $gradesession->diff2 = $diff2;
       

        
        $e31 = $request->input('length_change3');
        $e32 = $request->input('stand_change3');
        $diff3 = ((abs($e31 - $e32))/$e32) * 100;

        $gradesession->weight3 = $request->input('weight3');
        $gradesession->length_change3 = $request->input('length_change3');
        $gradesession->diff3 = $diff3;
       

        
        $e41 = $request->input('length_change4');
        $e42 = $request->input('stand_change4');
        $diff4 = ((abs($e41 - $e42))/$e41) * 100;

        $gradesession->weight4 = $request->input('weight4');
        $gradesession->length_change4 = $request->input('length_change4');
        $gradesession->diff4 = $diff4;
        

        
        $e51 = $request->input('length_change5');
        $e52 = $request->input('stand_change5');
        $diff5 = ((abs($e51 - $e52))/$e52) * 100;

        $gradesession->weight5 = $request->input('weight5');
        $gradesession->length_change5 = $request->input('length_change5');
        $gradesession->diff5 = $diff5;
        

        
        $e61 = $request->input('length_change6');
        $e62 = $request->input('stand_change6');
        $diff6 = ((abs($e11 - $e21))/$e21) * 100;

        $gradesession->weight6 = $request->input('weight6');
        $gradesession->length_change6 = $request->input('length_change6');
        $gradesession->diff6 = $diff6;
        

        $gradesession->user_name = Auth::user()->name;

        $gradesession->user_id = Auth::user()->id;

        $gradesession->score = rand(44, 100);

        $gradesession->save();

        return redirect('/user/submit_success');
        

    }
}
