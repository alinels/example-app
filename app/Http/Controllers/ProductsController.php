<?php

namespace App\Http\Controllers;
use Redirect; 
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Extention;
use Illuminate\Http\UploadedFile;
Use Illuminate\Http\Response;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function index()
    {
      $products = Product::get();
      return view('products.list', ['products' => $products]);
    }

    public function new(){
      return view('products.form'); 
    }

    public function add( Request $request ){
      $product = new Product;
      $request -> validate(['name' => 'required', 'image'=> 'required']);
      
      if($request->File('image')){
        $nameFile = $request->name.'.'.$request->image->extension();
        $request->file('image')->storeAs('products', $nameFile);

      }
      $product = $product->create( $request->all() );
      return Redirect::to('/products');
    }

    public function edit( $id ){
      $product = Product::findOrFail( $id );
      return view('products.form', ['product' => $product]);
    }

    public function update( $id, Request $request){
      $product = Product::findOrFail( $id );

      $request -> validate(['name' => 'required', 'image'=> 'required']);
      
      if($request->File('image')){
        $nameFile = $request->name.'.'.$request->image->extension();
        $request->file('image')->storeAs('products', $nameFile);

      }

      $product ->update( $request->all() );    
      return Redirect::to('/products');

    }

    public function delete( $id ){
      $product = Product::findOrFail( $id );
      $product->delete();
      return Redirect::to('/products');

    }

}    
  