<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('dashboard.customer.index', compact('customers'));
    }
    public function add()
    {
        return view('dashboard.customer.add_customer');
    }
    public function add_customer(Request $request)
    {
        // printf($request->fullname);
        $request->validate([
            'fullname' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
        Customer::insert([
            'name' => $request->fullname,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'type' => $request->type,
            'created_at' => now(),
        ]);
        return back()->with('customer_added_success', 'New Customer Added successfully.');
    }

    public function delete_customer($id)
    {
        Customer::find($id)->delete();
        return back()->with('customer_delete_success', 'Customer deleted successfully.');
    }
}
