<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
    public function index(Request $request)
    {
        if($request->has('search')){
            $customer = Customer::where('name', 'LIKE','%'. $request->search. '%')->get();
        }else{
            $customer = Customer::orderBy('created_at', 'DESC')->get();
        }
  
        return view('customers.index', compact('customer'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        Customer::create($request->all());
 
        return redirect()->route('customers')->with('success', 'Customer added successfully');
    }

    public function show(string $id)
    {
        $customer = Customer::findOrFail($id);
  
        return view('customers.show', compact('customer'));
    }

    public function edit(string $id)
    {
        $customer = Customer::findOrFail($id);
  
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, string $id)
    {
        $customer = Customer::findOrFail($id);
  
        $customer->update($request->all());
  
        return redirect()->route('customers')->with('success', 'Customer updated successfully');
    }

    public function destroy(string $id)
    {
        $customer = Customer::findOrFail($id);
  
        $customer->delete();
  
        return redirect()->route('customers')->with('success', 'Customer deleted successfully');
    }
}
