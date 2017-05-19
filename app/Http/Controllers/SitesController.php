<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitesController extends Controller
{
     public function index()
    {
        echo "Laravel intro";
    }

    public function add()
    {

        
        return view('sites.add');
    }
}
