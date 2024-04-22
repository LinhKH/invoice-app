<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function get_all_invoices() 
    {
        $invoices = Invoice::with('customer')->orderBy('id', 'desc')->get();
        return response()->json($invoices);
    }
}
