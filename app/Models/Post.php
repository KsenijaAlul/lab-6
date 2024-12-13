<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'description', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    } //
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name' 
            ]
        ];
    }
}
