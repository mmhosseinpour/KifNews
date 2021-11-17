<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleInteraction extends Model
{
    use HasFactory;

    protected $fillable =['likeStatus','comments','userId','articleId'];
    
    public  function Article(){
        return $this->hasOne(Article::class,'id','articleId');
    }
}
