<?php

namespace App\Http\Controllers;

// use App\Models\models\Product;
// use App\Models\models\Produk;
// use App\Models\Product as ModelsProduct;
use App\Models\models\Product;
use App\Http\Requests\ProductRequest;
use App\routes\web;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Container\Productincludes;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Product::all();
        //
        return view('pages.products.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validated = $request->validate([
           
            'name'=>'required'| 'max:255',            
            'type'=>'required' | 'max:255',
            'description'=>'required' | 'max:255',
            'price'=>'required' | 'integer',
            'quantity'=>'required' | 'integer'
        ]);
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        Product::create($data);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
