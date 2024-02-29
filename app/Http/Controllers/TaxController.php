<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Tax;

class TaxController extends Controller
{
    public function fetchTaxByCustID($id){
        $customer = Customer::findOrFail($id);
        $taxid = Customer::find($id)->taxid->taxid;
        return view('show_tax', compact('customer','taxid'));
    }
    public function fetchCustIDByTax($id){
        $customer_info = Tax::findOrFail($id);
        $taxid_info = Tax::find($id);
        return view('show_customer', compact('customer_info','taxid_info'));
    }
}
