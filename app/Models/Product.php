<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category; // tambah ini

class Product extends Model
{
    use HasFactory;

    // field yang boleh diisi (WAJIB untuk create & update)
    protected $fillable = [
        'category_id',
        'name',
        'price',
        'stock',
        'description',
        'status'
    ];

    // relasi ke category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}