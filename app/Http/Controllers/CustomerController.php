<?php

namespace App\Http\Controllers;

use App\Customer;

class CustomerController extends BaseController
{
    protected string $category_name = 'customers';
    protected string $page_name = 'customers';

    public function __construct(Customer $customer)
    {
        parent::__construct($customer);
    }

}
