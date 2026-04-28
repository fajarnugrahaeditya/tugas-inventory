<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    // tampilkan data
    public function index()
    {
        $products = Product::with('category')->latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    // INSERT
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

    // UPDATE
    public function update($id = null)
    {
        // cek kalau ID tidak diisi
        if (!$id) {
            return "Tambahkan id dari product yang mau diupdate, misalnya /update/2";
        }

        $product = Product::find($id);

        // cek kalau data tidak ditemukan
        if (!$product) {
            return "Data tidak ditemukan";
        }

        $product->name = 'Produk Updated';
        $product->price = 99999;

        $product->save();

        return redirect('/products');
    }

    // DELETE
    public function delete($id = null)
    {
        // cek kalau ID tidak diisi
        if (!$id) {
            return "Tambahkan id dari product yang mau didelete, misalnya /delete/2";
        }

        $product = Product::find($id);

        // cek kalau data tidak ditemukan
        if (!$product) {
            return "Data tidak ditemukan";
        }

        $product->delete();

        return redirect('/products');
    }
}