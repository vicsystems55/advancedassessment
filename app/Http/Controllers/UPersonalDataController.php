<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\UPersonalInfo;

class UPersonalDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
        $this->validate($request, [
           
            'user_id' => ['required', 'string', 'max:255', 'unique:u_personal_infos'],
            'user_name' => ['required', 'string', 'max:255', 'unique:u_personal_infos'],
            'user_email' => ['required', 'string', 'email', 'max:255', 'unique:u_personal_infos'],
           

        ]);


       
        $upinfo = new UPersonalInfo();


        $image = $request->file('user_sign');
        $new_name = rand().".".$image->getClientOriginalExtension();

        $image->move(public_path("users_signature"), $new_name);

        $upinfo->user_id        = $request->input('user_id'); 
        $upinfo->user_name      = $request->input('user_name');
        $upinfo->user_email     = $request->input('user_email');
        $upinfo->user_phone     = $request->input('user_phone');
        $upinfo->user_gender    = $request->input('user_gender');
        $upinfo->user_dob       = $request->input('user_dob');
        $upinfo->user_state     = $request->input('user_state');
        $upinfo->user_lga       = $request->input('user_lga');
        $upinfo->user_address   = $request->input('user_address');
        $upinfo->user_sign      = $new_name;
        $upinfo->status         = 'updated';
        
        $upinfo->save();

        return back()->with('preg_update', 'Updated');
        


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
