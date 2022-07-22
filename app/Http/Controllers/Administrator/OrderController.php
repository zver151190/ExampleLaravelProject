<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with(
            [
                'products',
                'status',
            ])
            ->orderBy('id', 'DESC')
            ->paginate();
        return view('administrator.order.index', compact('orders'));
    }

    public function edit(Order $order)
    {
        $order->load(
            [
                'products',
                'status'
            ]);
        return view('administrator.order.edit', compact('order'));
    }
}
