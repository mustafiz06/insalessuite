<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
   public function index()
    {
        // $categories = Customer::paginate(5);
        // return view('dashboard.category.index', compact('categories'));
        return view('dashboard.customer.index');
    }
     public function add()
    {
        // $categories = Customer::paginate(5);
        // return view('dashboard.category.index', compact('categories'));
        return view('dashboard.customer.add_customer');
    }
}
