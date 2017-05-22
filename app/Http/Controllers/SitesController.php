<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;

class SitesController extends Controller
{
    public function __constsruct() {

        $this->middleware('auth');
    }

    public function index()
    {
        $sites = Site::all();
        return view('sites.index', compact('sites'));
    }

    public function add() {
        return view('sites.add');
    }

    public function show(Site $site) {
       return view('sites.show', compact('site'));
    }

    public function save(Request $request) {
        // $site = new Site();
        // $site->title = $request->input('title');
        // $site->description = $request->input('description');
        // $site->save();

        Site::create($request->all());
    }
}
