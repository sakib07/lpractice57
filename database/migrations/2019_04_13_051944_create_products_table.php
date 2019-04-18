<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->Increments('id');
             $table->string('productName',100);
             $table->tinyInteger('categoryId');
             $table->float('price', 10,2);
             $table->integer('qty');
             $table->text('shortDescription');        
             $table->string('pic',200);
             $table->tinyInteger('publicationStatus');
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
