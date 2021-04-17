<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'qty',
        'date',
    ];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
