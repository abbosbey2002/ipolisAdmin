<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        //
        $company = $request->input('campany');
        $productIds = $request->input('product_ids');
        $amount = $request->input('amount');
        $state = $request->input('state');
        $paymentType = $request->input('payment_type');
        $policyId = $request->input('policy_id');
        $data = $request->input('data');

        $order = Order::create([
            'campany' => $company,
            'product_ids' => $productIds,
            'amount' => $amount,
            'state' => $state,
            'payment_type' => $paymentType,
            'policy_id' => $policyId,
            'data' => $data
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
