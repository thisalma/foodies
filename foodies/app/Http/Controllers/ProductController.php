<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // ← Make sure this line exists

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%');
        }

        $products = $query->get();

        return view('product', compact('products'));
    }
}
