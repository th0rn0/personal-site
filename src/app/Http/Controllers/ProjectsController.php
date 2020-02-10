<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show Index.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('projects.index');
    }

    /**
     * Show Eventula.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function eventula()
    {
        return view('projects.eventula.index');
    }

    /**
     * Show LanOps.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function lanops()
    {
        return view('projects.lanops.index');
    }

    /**
     * Show Site.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function site()
    {
        return view('projects.site.index');
    }
}
