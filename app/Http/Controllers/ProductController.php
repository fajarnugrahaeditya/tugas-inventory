<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::with('category')->latest()->paginate(10);

        return view('products.index', compact('products'));
    }

    
    public function create()
    {
        $categories = Category::all();

        return view('products.create', compact('categories'));
    }

    
    public function store()
    {
        $product = new Product;

        $product->category_id = request('category_id');
        $product->name = request('name');
        $product->price = request('price');
        $product->stock = request('stock');

        
        $product->description = null;

        $product->status = request('status');

        $product->save();

        return redirect('/products');
    }

    
    public function edit($id = null)
    {
      
        if (!$id) {
            return "Tambahkan id dari product yang mau diedit, misalnya /edit/2";
        }

        $product = Product::find($id);

        
        if (!$product) {
            return "Data tidak ditemukan";
        }

        $categories = Category::all();

        return view('products.edit', compact('product', 'categories'));
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

        $product->category_id = request('category_id');
        $product->name = request('name');
        $product->price = request('price');
        $product->stock = request('stock');
        $product->status = request('status');

        $product->save();

        return redirect('/products');
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