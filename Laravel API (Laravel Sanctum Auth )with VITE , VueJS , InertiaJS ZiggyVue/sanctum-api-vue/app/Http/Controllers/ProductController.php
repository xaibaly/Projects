<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    public function index()
    {
        $products = ['products'=>Product::all('id','name','price')];
        return $products;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        if(!Auth::user()->tokenCan('Create_Products_Token')){
            abort(403,'Unauthorized');
            Auth::user()->tokens()->delete();
        }
        Validator::make($request->all(), [
            'name' => ['required'],
            'price' => ['required'],
        ])->validate();

        Auth::user()->tokens()->delete();
        return Product::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        return Product::find($id);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $products = Product::find($id)->update($request->all());
        return $request;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function destroy($id)
    {
        return Product::find($id)->delete();
    }

    public function search($name)
    {
        return Product::where('name', 'like', '%'.$name.'%')->get();
    }
}
