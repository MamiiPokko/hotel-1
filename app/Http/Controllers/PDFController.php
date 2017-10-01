<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use PDF;

class PDFController extends Controller
{
    public function pdf()
    {
    	$orders = Orders::all();
    	$pdf = PDF::loadview('pdf',['Orders' => $orders]);
    	return @$pdf->stream();
    }
}
