<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'category_name' => 'dashboard',
            'page_name' => 'home',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',

        ];
        return view('dashboard')->with($data);
    }
}
