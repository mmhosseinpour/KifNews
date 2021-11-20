<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'categoryId', 'price', 'inventory', 'galleryId'];

    public function ProductGallery(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(ProductGallery::class, 'Id', 'galleryId');
    }

    public function ProductCategory(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(ProductCategory::class, 'Id', 'categoryId');
    }

    public function GetCategory(): string
    {
        try {
            $category = $this->ProductCategory()->first();
            return $category->title;

        } catch (\Exception $e) {
            return "none";
        }

    }
}
