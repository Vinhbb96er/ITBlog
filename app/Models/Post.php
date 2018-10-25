<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'preview',
        'content',
        'total_view',
        'total_like',
        'image'
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function comments() 
    {
        return $this->hasMany(Comment::class);
    }

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

    public function getCreatedAtAttribute() {
        return Carbon::parse($this->attributes['created_at'])->format('M d Y');
    }
}
