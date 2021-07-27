<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];
    // fillable untuk memvalidasi fill yang boleh diisi
    // guarded untuk memvalidasi fill yang tidak boleh diisi
    protected $guarded = ['id'];

    public function category()
    {
        // relasinya yaitu 1 post dimiliki oleh 1 category
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
