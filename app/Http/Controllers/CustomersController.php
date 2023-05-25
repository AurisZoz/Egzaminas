<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Http\Requests\CustomersRequest;
use Illuminate\Support\Facades\App;

class CustomersController extends Controller
{
    public function index(Request $request)
    {

       return view("customers.index",[
       "customers"=>$customers
       ]);

    }

   public function create()
   {
    return view("customers.create");
   }

    public function store(CustomersRequest $request)
   {
    $customer=new Customers();
    $customer->id=$request->id;
    $customer->name=$request->name;
    $customer->surname=$request->surname;
    $customer->phone=$request->phone;
    $customer->email=$request->email;
    $customer->comment=$request->comment;

    $customer->save();
    return redirect()->route('customers.index');
   }

   public function show(Customers $customer)
   {
    return view('customers.show', compact('customer'));
   }

   public function edit(Customers $customer)    
   {
    return view("customers.edit",[
        "customer"=>$customer
      
    ]);
   }

   public function update(CustomersRequest $request, Customers $customer)
   {
    $customer->id=$request->id;
    $customer->name=$request->name;
    $customer->surname=$request->surname;
    $customer->phone=$request->phone;
    $customer->email=$request->email;
    $customer->comment=$request->comment;

    $customer->save();
    return redirect()->route('customers.index');
   }

   public function destroy(Customers $customer)
   {

    $customer->delete();
    return redirect()->route('customers.index');
   }

}
