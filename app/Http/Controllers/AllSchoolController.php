<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AllSchool;

class AllSchoolController extends Controller
{
    public function addschool(Request $request)
    {

        $regCode = "GSSKUJ/2020/" .rand(111,999);

        $allschool = new AllSchool;

        $allschool->school_name = $request->input('school_name');
        $allschool->school_address = $request->input('school_address');
        $allschool->lab_super = $request->input('lab_super');
        $allschool->contact_email = $request->input('contact_email');
        $allschool->school_code = $regCode;

        $allschool->save();

        return redirect('admin/allschools');
    }
}
