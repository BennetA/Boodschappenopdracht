<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groceries', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->unsignedBigInteger('category_id');
                $table->foreign('category_id')->references('id')->on('categories'); // TOOD: vervang deze string voor een biginteger foreign key die naar de categories table verwijst. Zie laravel documentatie over foreign keys.
                //$table->foreignId('category_id')->constrained();
                $table->decimal('price');
                $table->integer('quantity');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groceries');
    }
};
