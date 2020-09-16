<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\UPersonalInfo;

use App\UOfficialData;

use App\LoanRepaymentSchedule;

use Auth;

class UserPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $user_id = Auth::user()->id;

        $offdata = DB::table('u_official_data')->where('user_id', $user_id)->first();

        if($offdata){
            $loanschedule = DB::table('loan_repayment_schedules')->where('grade_level', $offdata->grade_level)->first();

            return view('user.home',[
                'loan_schedule' => $loanschedule,
                'offdata' => $offdata
            ]);
        }

        else{

            $loanschedule = DB::table('loan_repayment_schedules')->where('grade_level', '1')->first();

            return view('user.home',[
                
                'offdata' => $offdata
            ]);

        }

        
    }

    public function profile()
    {
        $user_id = Auth::user()->id;

        $upstatus = DB::table('u_personal_infos')->where('user_id', $user_id )->first();
        $offstatus = DB::table('u_official_data')->where('user_id', $user_id )->first();

        return view('user.profile', [
            'upstatus' => $upstatus,
            'offstatus' => $offstatus
        ]);
    }

    public function loans()
    {
        return view('user.loans');
    }

    public function notifications()
    {
        return view('user.notifications');
    }

    public function wallet()
    {
        return view('user.wallet');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
