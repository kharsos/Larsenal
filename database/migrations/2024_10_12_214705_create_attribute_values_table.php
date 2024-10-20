<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeValuesTable extends Migration
{
    public function up()
    {
        Schema::create('attribute_values', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing ID column
            $table->foreignId('attribute_id')->constrained()->onDelete('cascade'); // Reference to the attributes table
            $table->string('value'); // The value of the attribute (e.g., 1/700, French)
            $table->timestamps(); // Created at and updated at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('attribute_values');
    }
}
