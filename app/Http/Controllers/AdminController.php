<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $data = [
            'category_name' => 'dashboard',
            'page_name' => 'home',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',

        ];
        return view('pages.Admin.index')->with($data);
    }

}
