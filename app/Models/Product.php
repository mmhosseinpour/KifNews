<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'categoryId', 'price', 'inventory', 'galleryId'];

    public function ProductGallery()
    {
        return $this->hasOne(ProductGallery::class, 'Id', 'galleryId');
    }

    public function ProductCategory()
    {
        return $this->hasOne(ProductCategory::class, 'Id', 'categoryId');
    }
}
