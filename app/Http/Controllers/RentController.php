<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
