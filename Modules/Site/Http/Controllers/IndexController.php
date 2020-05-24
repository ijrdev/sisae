<?php

namespace Modules\Site\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('site::index.index');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
