<?php

namespace App\Http\Controllers;

use App\Models\Couter;
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

    public function create_invoice(Request $request)
    {

        $formData = [
            'number' => 'INV-'.rand(1,9999),
            'customer_id' => null,
            'customer' => null,
            'date' => date('Y-m-d'),
            'due_date' => null,
            'discount' => 0,
            'items' => [
                [
                    'product_id' => null,
                    'product' => null,
                    'price' => 0,
                    'quantity' => 1,
                ]
            ]
        ];
        return response()->json($formData);
    }
}
