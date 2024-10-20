<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductAttributesTable extends Migration
{
    public function up()
    {
        Schema::create('product_attributes', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing ID column
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Reference to the products table
            $table->foreignId('attribute_id')->constrained()->onDelete('cascade'); // Reference to the attributes table
            $table->foreignId('attribute_value_id')->constrained()->onDelete('cascade'); // Reference to the attribute_values table
            $table->timestamps(); // Created at and updated at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_attributes');
    }
}
