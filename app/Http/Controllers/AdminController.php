<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends BaseController
{

    protected string $category_name = 'admins & roles';
    protected string $page_name = 'admins';

    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    protected function getViewFolderName(): string
    {
        return 'Admin';
    }

}
