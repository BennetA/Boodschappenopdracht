<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grocery extends Model
{
    use HasFactory;
    protected $table = 'groceries';
    protected $fillable = [
        'name',
        'category',
        'price',
        'quantity',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
