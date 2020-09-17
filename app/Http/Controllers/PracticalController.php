<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Practical;

class PracticalController extends Controller
{
    public function addpractical(Request $request)
    {

        $practical = new Practical;

        $practical->title = $request->input('title');

        $practical->description = $request->input('description');

        $practical->subject_area = $request->input('subject_area');

        $practical->class = $request->input('class');

        $practical->session = $request->input('session');

        $practical->term = $request->input('term');

        

        $practical->save();

        return redirect('admin/practical_catalogue');
    }
}
