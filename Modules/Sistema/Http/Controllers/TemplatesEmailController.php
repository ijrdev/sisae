<?php

namespace Modules\Sistema\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class TemplatesEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('sistema::utilitarios.templates-email.index');
    }

    public function create()
    {
        return view('sistema::utilitarios.templates-email.index');
    }
}
