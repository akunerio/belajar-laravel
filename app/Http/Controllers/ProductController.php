<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prods = Product::get();

        //$prods = Product::with('variantCheck')->get();

        return view('product.index', ['list' => $prods]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.form', [
            'title' => 'Tambah',
            'method' => 'POST',
            'action' => 'product'
          ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $prod = new Product;
        $prod->name = $request->name;
        $prod->price = $request->price;
        $prod->save();
        return redirect('/product')->with('msg', 'Tambah berhasil');
    }

    public function show($id)

  {

    return Product::find($id);

  }



  public function edit($id)

  {

    return view('product.form', [

      'title' => 'Edit',

      'method' => 'PUT',

      'action' => "product/$id",

      'data' => Product::find($id)

    ]);

  }



  public function update(Request $request, $id)

  {

    $prod = Product::find($id);

    $prod->name = $request->name;

    $prod->price = $request->price;

    $prod->save();

    return redirect('/product')->with('msg', 'Edit berhasil');

  }



  public function destroy($id)

  {

    Product::destroy($id);

    // atau

    /* $prod = Product::find($id);

    $prod->delete(); */

    return redirect('/product')->with('msg', 'Hapus berhasil');

  }
}
