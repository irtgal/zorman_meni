<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price'
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function activeItems()
    {
        return $this->hasMany(Item::class)->where('active', true);
    }
}
