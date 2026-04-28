<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::with('category')->latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    
    public function insert()
    {
        $product = new Product;

        $product->category_id = 1;
        $product->name = 'Produk Baru';
        $product->price = 50000;
        $product->stock = 10;
        $product->description = 'Produk contoh';
        $product->status = 'tersedia';

        $product->save();

        return redirect('/products');
    }

    
    public function update($id = null)
    {
      
        if (!$id) {
            return "Tambahkan id dari product yang mau diupdate, misalnya /update/2";
        }

        $product = Product::find($id);

        
        if (!$product) {
            return "Data tidak ditemukan";
        }

        $product->name = 'Produk Updated';
        $product->price = 99999;

        $product->save();

        return redirect('/products');
    }

    
    public function delete($id = null)
    {
       
        if (!$id) {
            return "Tambahkan id dari product yang mau didelete, misalnya /delete/2";
        }

        $product = Product::find($id);

        
        if (!$product) {
            return "Data tidak ditemukan";
        }

        $product->delete();

        return redirect('/products');
    }
}