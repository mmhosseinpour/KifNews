<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    use HasFactory;

    protected $fillable = ['parentId', 'title', 'article_category_galleryId'];

    public function ArticleCategoryGallery()
    {
        return $this->hasOne(ArticleCategoryGallery::class, 'id', 'article_category_galleryId');
    }
}
