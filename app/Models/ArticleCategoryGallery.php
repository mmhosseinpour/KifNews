<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategoryGallery extends Model
{
    use HasFactory;

    protected $fillable = ['alt', 'source', 'article_categoryID'];

    public function ArticleCategory()
    {
        return $this->hasOne(ArticleCategory::class, 'id', 'article_categoryID');
    }
}
