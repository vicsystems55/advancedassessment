<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class ChooseRole extends Controller
{
    public function index()
    {
        if (Auth::user()->role =='admin') {
            return redirect('/admin');
        }

        elseif (Auth::user()->role =='user') {
            return redirect('/user');
        }

        elseif (Auth::user()->role =='partner') {
            return redirect('/partners');
        }

        else{
            abort(403);
        }
    }
}
