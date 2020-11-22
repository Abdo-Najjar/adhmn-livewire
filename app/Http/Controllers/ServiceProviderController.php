<?php

namespace App\Http\Controllers;

use App\ServiceProvider;
use Illuminate\Http\Request;

class ServiceProviderController extends BaseController
{

    protected string $category_name = 'serviceProivders';
    protected string $page_name ='serviceProvider';

    public function __construct(ServiceProvider $serviceProvider)
    {
        parent::__construct($serviceProvider);
    }

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
