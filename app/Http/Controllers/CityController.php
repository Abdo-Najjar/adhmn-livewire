<?php

namespace App\Http\Controllers;

use App\City;
use Yajra\DataTables\Facades\DataTables;

class CityController extends BaseController
{
    public string $category_name  = 'locations';
    public string $page_name  = 'city';
     
    public function __construct(City $city)
    {
        parent::__construct($city);
    }

    public function datatable()
    {
        return DataTables::of(
            City::select(['id', 'name->en as name_en', 'name->ar as name_ar'])
        )
            ->addColumn('action', function ($object) {

               return '
                <div class="btn-group">
                    <a href="'.route('countries.show' , $object).'" class="btn btn-sm">Open</a>
                    <button type="button" class="btn  btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference5" style="will-change: transform;">
                      <a class="dropdown-item " href="'.route('countries.edit' , $object).'">Edit</a>
                      <a class="dropdown-item" href="#">Delete</a>
                    </div>
                  </div>
            ';
            })
            ->addColumn('status', function ($object) {
                return $object->status;
            })
            ->toJson();
    }

}
