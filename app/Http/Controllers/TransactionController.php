<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\customer;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaction = transaction::all();
        return view('shop.transaction_show', compact('transaction'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customer = \App\Models\Customer::all();
        return view('shop.transaction_create', compact('customer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $transaction = new transaction;
        $transaction->pay_amount = $request->pay_amount;
        $transaction->sell_amount = $request->sell_amount;
        $transaction->transaction_date = $request->transaction_date;
        $transaction->item = $request->item;
        $transaction->customer_id = $request->customer_id;
        $transaction->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $transaction = transaction::findOrFail($id);
        $customer = \App\Models\Customer::all();
        return view('shop.transaction_edit', compact('transaction', 'customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $transaction = \App\Models\transaction::findOrFail($id);

        $transaction->pay_amount = $request->pay_amount;
        $transaction->sell_amount = $request->sell_amount;
        $transaction->transaction_date = $request->transaction_date;
        $transaction->item = $request->item;
        $transaction->customer_id = $request->customer_id;
        $transaction->save();

        return redirect()->route('transaction.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $transaction = transaction::find($id);
        if ($transaction) {
            $transaction->delete();
        }
        return redirect()->back();
    }
    public function search(Request $request)
    {
        $search = $request->get('q');
        return \App\Models\Customer::where('name', 'like', "%{$search}%")->get();
    }
}
