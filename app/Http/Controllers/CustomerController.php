<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function countCustomers()
{
$customersCount = DB::table('customers')->count();
return response()->json(['customersCount' => $customersCount]);
    }
    public function getCustomerEmail(Request $request)
{
       // Get the name from the form data
       $name = $request->input('name');
       // Use LIKE for wildcard search
       $customers = DB::table('customers')
       ->where('name','like','%'. $name .'%')
       ->get();
    // Check if any customers were found
    if ($customers->isEmpty()) {
    return view('customer-email')->with('error','No customers found.');
}
// Return the view with the list of customers
return view('customer-email')->with('customers', $customers);}
}
