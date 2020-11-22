<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends BaseController
{
    protected string $category_name = 'admins & roles';
    protected string $page_name ='roles';
    
    public function __construct(Role $role)
    {
        parent::__construct($role);
    }
}
