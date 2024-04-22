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

    public function search_invoice(Request $request)
    {
        $search = $request->get('s');
        if ($search) {
            $invoices = Invoice::with('customer')
                ->where('id', 'like', '%' . $search . '%')
                ->orderBy('id', 'desc')
                ->get();
            return response()->json($invoices);
        } else {
            return $this->get_all_invoices();
        }
    }
}
