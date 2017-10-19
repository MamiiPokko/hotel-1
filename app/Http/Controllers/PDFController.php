<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use App\Custoomers;
use PDF;

class PDFController extends Controller
{
    public function pdf()
    {
    	$customers = "asdfasdf"
    	$pdf = PDF::loadview('pdf',['Custoomers' => $customers]);
    	return @$pdf->stream();
    }
}
