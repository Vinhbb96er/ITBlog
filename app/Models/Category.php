<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'parent_id',
        'name',
    ];

    public function posts() {
        return $this->hasMany(Post::class)->orderBy('created_at', 'desc');
    }
}
