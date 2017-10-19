<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Validator;
use Redirect;

class RentController extends Controller
{
    public function getrent()
    {
        return view('page.rent');
    }

    public function getwelcome()
    {
    	return view('welcome');
    }

    public function getbooking()
    {
    	return view('page.booking');
    }

    public function getresult(Request $request, $id)
    {
        $customers = Customer::find($id);

        return view('page.result', compact('customers'));
    }
}
