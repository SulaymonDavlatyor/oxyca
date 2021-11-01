<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class APIController extends Controller
{

    public function getCustomers()
    {
        $query = Customer::select('first_name', 'middle_name', 'last_name','phone_number','email');
        return datatables($query)->make(true);
    }
}
