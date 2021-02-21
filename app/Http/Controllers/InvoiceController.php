<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class InvoiceController extends Controller
{
    public function index(): Response
    {
        $invoices = Invoice::query()
            ->latest()
            ->forPage(request()->get('page', 1))
            ->paginate(5);

        return Inertia::render('Invoices/Index', [
            'invoices' => $invoices,
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('Invoices/Create');
    }

    public function store(): RedirectResponse
    {
        $data = request()->validate([
            'title' => ['required', 'max:80'],
            'description' => ['required', 'max:200'],
        ]);

        Invoice::create($data);

        return redirect()->route('invoices');
    }

    public function delete(Invoice $invoice)
    {
        $invoice->delete();

        return redirect()->route('invoices');
    }
}
