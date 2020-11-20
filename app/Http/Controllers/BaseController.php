<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BaseController extends Controller
{

    private array $data;
    private Model $model;
    protected string $category_name;
    protected string $page_name;

    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->setData();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pages.{$this->getViewFolderName()}.index")->with($this->data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->setBreadcrumb('create');

        return view("pages.{$this->getViewFolderName()}.create")->with($this->data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model  $model
     * @return \Illuminate\Http\Response
     */
    public function show(Model $model)
    {
        $this->setBreadcrumb('details');

        return view("pages.{$this->getViewFolderName()}.show", compact('model'))->with($this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model  $model
     * @return \Illuminate\Http\Response
     */
    public function edit(Model $model)
    {
        $this->setBreadcrumb('edit');
        

        return view("pages.{$this->getViewFolderName()}.edit", compact('model'))->with($this->data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model  $model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model $model)
    {
        $model->delete();

        return redirect()->back();
    }

    /**
     * Set data for navbar Section.
     *
     * @param string $category_name
     * @param string $page_name
     * @return void
     */
    protected function setData()
    {
        $this->data = [
            'category_name' => $this->category_name,
            'page_name' => $this->page_name,
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
            'breadcrumb' => $this->setBreadcrumb()
        ];
    }

    /**
     * Get view Folder name.
     *
     * @return string
     */
    private function getViewFolderName(): string
    {
        return class_basename($this->model);
    }

    private function setBreadcrumb($sub_page = '')
    {

        $bread_crumb =  '<li class="breadcrumb-item"><a href="javascript:void(0);">' . ucfirst($this->category_name) . '</a></li>
        <li class="breadcrumb-item active" aria-current="page"><span>' . ucfirst(Str::plural($this->page_name)) . '</span></li>';

        !$sub_page ?: $bread_crumb .= ' <li class="breadcrumb-item active" aria-current="page"><span>' . ucfirst($sub_page) . '</span></li>';


       return  $this->data['breadcrumb'] = $bread_crumb;
    }
}
