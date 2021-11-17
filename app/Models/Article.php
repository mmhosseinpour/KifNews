<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'content', 'visit','categoryId'];

    public function ArticleCategory()
    {
        return $this->hasOne(ArticleCategory::class, 'Id', 'categoryId');
    }
}
