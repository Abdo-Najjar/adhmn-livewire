<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{

    public function smartDetactions()
    {
        $data = [
            'category_name' => 'smart-decisions',
            'page_name' => 'home',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',

        ];
        return view('pages.Smart Decisions.index')->with($data);
    }

}
