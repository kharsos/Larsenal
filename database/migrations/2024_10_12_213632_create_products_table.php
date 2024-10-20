<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_products_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing ID column
            $table->string('name'); // Name of the product
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Reference to the categories table
            $table->text('description')->nullable(); // Detailed description of the product
            $table->decimal('price', 10, 2); // Price of the product
            $table->integer('stock')->default(0); // Quantity in stock
            $table->timestamps(); // Created at and updated at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
