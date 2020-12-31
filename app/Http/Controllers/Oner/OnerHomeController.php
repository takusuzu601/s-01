<?php

namespace App\Http\Controllers\Oner;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class OnerHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:oner')->except('logout');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('oner.home');
    }
}
