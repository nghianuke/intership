<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeoableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seoable', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description',300);
            $table->string('keyword');
            $table->bigInteger('seoble_id');
            $table->string('seoble_type');
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
        Schema::dropIfExists('seoable');
    }
}
