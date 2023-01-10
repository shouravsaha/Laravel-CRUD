<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    // navigation bar
    public function navigation()
    {
        return view('navbar');
    }

    //add customer form 
    public function add_customer()
    {
        return view('add_customer');
    }

    // form data processing
    public function dataprocess(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request['name'];
        $customer->address = $request['address'];
        $customer->email = $request['email'];
        $customer->save();
        return redirect()->route('index');
    }

    // customer data table
    public function customer_table()
    {
        $customer = Customer::all();
        return view('customer_table', compact('customer'));
    }

    // edit customer data
    public function editcustomer($id = null)
    {
        $customer = Customer::find($id);
        return view('edit_form', compact('customer'));
    }

    // update customer data
    public function updatecustomer(Request $request, $id = null)
    {
        $customer = Customer::find($id);
        $customer->name = $request['name'];
        $customer->address = $request['address'];
        $customer->email = $request['email'];
        $customer->save();
        return redirect()->route('index');
    }

    public function deletecustomer($id = null)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('index');
    }
}
