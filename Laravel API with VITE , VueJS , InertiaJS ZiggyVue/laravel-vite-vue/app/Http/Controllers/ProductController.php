<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all('id','name','price');
        return Inertia::render('Products/Index', ['products' => $products]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create()
    {
        return Inertia::render('Products/Create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name' => ['required'],
            'price' => ['required'],
        ])->validate();

        Product::create($request->all());

        return redirect()->route('products.index');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function edit(Product $product)
    {
        return Inertia::render('Products/Edit', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        Validator::make($request->all(), [
            'name' => ['required'],
            'price' => ['required'],
        ])->validate();

        Product::find($id)->update($request->all());
        return redirect()->route('products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index');
    }
}
