<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function  index(Request $request){

        $data['type']='My Invoices';
        $data['inv']=Invoice::with('projects','customer','realtor')->where('customer_id',Auth::user()->account_id)->get();
        return view('admin.stock.proceeded-files')->with(compact('data'));
    }


}
