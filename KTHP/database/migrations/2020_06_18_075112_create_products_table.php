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
            $table->string('name');
            $table->longText('description');
            $table->string('thumbnail');
            $table->string('product_code');
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->double('price');
            $table->integer('discount');
            $table->integer('quantity');
            $table->string('author');
            $table->string('size');
            $table->string('translator');
            $table->string('cover_type');
            $table->integer('pages');
            $table->string('sku');
            $table->string('publishing');
            $table->string('issuing');
            $table->boolean('isdeleted')->default(0);
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
