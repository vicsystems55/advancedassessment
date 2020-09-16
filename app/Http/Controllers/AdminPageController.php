<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\User;

use App\UPersonalData;

use App\LoanApplication;

use Paystack;

class AdminPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $user_data = User::all();

        return view('admin.home', compact('user_data'));
    }

    public function accounts_details($id)
    {

        $user_data = DB::table('users')->where('id', $id)->first();
        
        return view('admin.account_details', [

            'user_data' => $user_data
        ]);
    }

    public function manage_accounts()
    {
        return view('admin.manage_accounts');
    }

    public function partners_account()
    {
        $user_data = DB::table('users')->where('role', 'partner')->get();

        return view('admin.partners_account',[

            'user_data' => $user_data
        ]);
    }

    public function gurantors_accounts()
    {
        return view('admin.gurantors_account');
    }

    public function users_account()
    {
        $user_data = DB::table('users')->where('role', 'user')->get();

        return view('admin.users_account',[
            'user_data' => $user_data
        ]);
    }

    public function reports()
    {
        $trans_data = Paystack::getAllTransactions();

        $trans_data = json_decode(json_encode($trans_data), FALSE);

       

        return view('admin.reports', [

            'trans_data' => $trans_data
        ]);
    }

    public function settings()
    {
               
        $loan_schedule = DB::table('loan_repayment_schedules')->get();

        

        return view('admin.settings', [

            'loan_schedule' => $loan_schedule
        ]);
    }

    public function loan_applications()
    {
  
        $applications = LoanApplication::all();
  
        return view('admin.loan_applications', compact('applications'));
    }

    public function application_details($id)
    {

        $application_data = DB::table('loan_applications')->where('id', $id)->first();

        $application_user_id = $application_data->user_id;

        $user_data = DB::table('users')->where('id', $application_user_id )->first();

        return view('admin.application_details', [

            'user_data'    => $user_data,
            'application_data' => $application_data
        ]);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function regUser(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $regCode = "FGSHLB/2020/" .rand(111,999);

        
        $user = new User;

        $user->name = $request->input('name');
        $user->email = $request->input('name');
        $user->role = $request->input('role');
        $user->type = $request->input('type');
        $user->reg_code = $regCode;
        $user->password = $request->input('password');
        $user->email_verified_at = now();

        $user->save();

        return view('admin.user_regsuccess',[
            'type' => 'User',
            'email' => $request->input('email'),
            'password' => $request->input('password')
    
        ]);



    }

    public function regPartner(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $regCode = "FGSHLB/2020/" .rand(111,999);

        
        $user = new User;

        $user->name = $request->input('name');
        $user->email = $request->input('name');
        $user->role = $request->input('role');
        $user->type = $request->input('type');
        $user->reg_code = $regCode;
        $user->password = $request->input('password');
        $user->email_verified_at = now();

        $user->save();

        return view('admin.user_regsuccess',[
            'type' => 'Partner',
            'email' => $request->input('email'),
            'password' => $request->input('password')
    
        ]);
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
    public function singprofile($id)
    {
        $user_data = DB::table('users')->where('id', $id)->first();

        $upersonalinfo = DB::table('u_personal_infos')->where('user_id', $user_data->id)->first();
        
        return view ('admin.singprofile',[
            'user_data' => $user_data,
            'upersonalinfo' => $upersonalinfo
        ]);
    }

    public function singpartner($id)
    {
         
        return view ('admin.singprofile.singpartner',[
         
        ]);
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
