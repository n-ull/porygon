<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Draft extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'published',
        'category_id',
        'user_id',
        'views',
        'tags',
        'images'
    ];

    protected $casts = [
        'published' => 'boolean',
        'tags' => 'array',
        'images' => 'array'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function shards(){
        return $this->hasMany(DraftShard::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
