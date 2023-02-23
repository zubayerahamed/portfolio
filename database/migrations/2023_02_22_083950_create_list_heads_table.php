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
        Schema::create('list_heads', function (Blueprint $table) {
            $table->string('list_code')->primary();
            $table->text('note')->nullable();
            $table->string('list_prompt_1')->nullable();
            $table->string('list_prompt_2')->nullable();
            $table->string('list_prompt_3')->nullable();
            $table->string('list_prompt_4')->nullable();
            $table->string('list_prompt_5')->nullable();
            $table->string('list_prompt_6')->nullable();
            $table->string('list_prompt_7')->nullable();
            $table->string('list_prompt_8')->nullable();
            $table->string('list_prompt_9')->nullable();
            $table->string('list_prompt_10')->nullable();
            $table->string('list_prompt_11')->nullable();
            $table->string('list_prompt_12')->nullable();
            $table->string('list_prompt_13')->nullable();
            $table->string('list_prompt_14')->nullable();
            $table->string('list_prompt_15')->nullable();
            $table->string('list_prompt_16')->nullable();
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
        Schema::dropIfExists('list_heads');
    }
};
