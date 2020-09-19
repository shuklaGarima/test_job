<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name", 255)->nullable();
            $table->text("description")->nullable();
            $table->string("photo", 500)->nullable();
            $table->decimal("price", 6, 2);
            $table->enum('in_stock', array('0','1'))->default('1')->comment('0 => No, 1=> Yes');
            $table->integer("quantity")->length(11);
            $table->string("color", 255);
            $table->string('size', 255);
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
        Schema::dropIfExists('products');
    }
}
