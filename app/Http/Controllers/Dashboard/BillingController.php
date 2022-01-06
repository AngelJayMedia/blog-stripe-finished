<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BillingController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth']);
    }

    public function index()
    {
        return view('dashboard.billing.index', [
            'invoices' => Auth::user()->invoices(),
        ]);
    }

    public function download(Request $request, $invoiceId)
    {
        return $request->user()->downloadInvoice($invoiceId, [
            'vendor'    => 'BOLD Inc.',
            'product'   => auth()->user()->subscription(),
        ]);
    }
}
