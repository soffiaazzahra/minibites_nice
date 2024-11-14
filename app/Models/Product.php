<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'harga', 'deskripsi', 'image'];

    public function wishlists()
    {
    return $this->hasMany(Wishlist::class);
    }
}
