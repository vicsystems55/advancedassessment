<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UOfficialData;

class UOfficialDataController extends Controller
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

        $offdata = new UOfficialData;

        $image = $request->file('gazette');
        $new_name = rand().".".$image->getClientOriginalExtension();

        $image->move(public_path("gazette"), $new_name);

        $offdata->user_id           = $request->input('user_id');
        $offdata->MDA               = $request->input('MDA');
        $offdata->division          = $request->input('division');
        $offdata->rank              = $request->input('rank');
        $offdata->service_no        = $request->input('service_no');
        $offdata->date_first_app    = $request->input('date_first_app');
        $offdata->date_present_app  = $request->input('date_present_app');
        $offdata->grade_level       = $request->input('grade_level');
        $offdata->step              = $request->input('step');
        $offdata->pensionable       = $request->input('pensionable');
        $offdata->gazette           = $new_name;
        $offdata->pen_administrator = $request->input('pen_administrator');
        $offdata->pen_id            = $request->input('pen_id');
        $offdata->status            = 'updated';

        $offdata->save();

        return back();


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
