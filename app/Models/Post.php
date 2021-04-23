<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'extract',
        'body',
        'category_id',
        'user_id',
        'status'
    ];


    public function getRouteKeyName()
    {
        return "slug";
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function getNameByLang($lang)
    {
        $translates = (array) json_decode($this->name);
        return $this->name = $translates[$lang] ?? $translates['es'];
    }

    public function getExtractByLang($lang)
    {
        $translates =(array) json_decode($this->extract);
        return $this->extract = $translates[$lang] ?? $translates['es'];
    }

    public function getBodyByLang($lang)
    {
        $translates =(array) json_decode($this->body);
        return $this->body = $translates[$lang] ?? $translates['es'];
    }
}
