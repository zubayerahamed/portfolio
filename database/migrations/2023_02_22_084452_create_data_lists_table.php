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
        Schema::create('data_lists', function (Blueprint $table) {
            $table->id();
            $table->string('list_code');
            $table->foreign('list_code')->references('list_code')->on('list_heads')->onDelete('cascade');
            $table->string('list_value_1')->nullable();
            $table->string('list_value_2')->nullable();
            $table->string('list_value_3')->nullable();
            $table->string('list_value_4')->nullable();
            $table->string('list_value_5')->nullable();
            $table->string('list_value_6')->nullable();
            $table->string('list_value_7')->nullable();
            $table->string('list_value_8')->nullable();
            $table->string('list_value_9')->nullable();
            $table->string('list_value_10')->nullable();
            $table->string('list_value_11')->nullable();
            $table->string('list_value_12')->nullable();
            $table->string('list_value_13')->nullable();
            $table->string('list_value_14')->nullable();
            $table->string('list_value_15')->nullable();
            $table->string('list_value_16')->nullable();
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
        Schema::dropIfExists('data_lists');
    }
};
