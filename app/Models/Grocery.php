<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grocery extends Model
{
    use HasFactory;
    protected $table = 'groceries';
}


// Schema::create('groceries', function (Blueprint $table) {
//     $table->id();
//     $table->string('name');
//     $table->decimal('price');
//     $table->integer('quantity');
//     $table->timestamps();
// });