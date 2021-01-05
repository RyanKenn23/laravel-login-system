<?php

namespace App\Models;
use App\Models\Article;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Reply extends Model
{
    use HasFactory;

     public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
