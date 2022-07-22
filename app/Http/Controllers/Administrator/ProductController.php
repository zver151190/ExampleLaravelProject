<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(
            [
                'user',
                'status',
                'order',
            ])
            ->orderBy('updated_at', 'DESC')
            ->paginate();
        return view('administrator.product.index', compact('products'));
    }
}
