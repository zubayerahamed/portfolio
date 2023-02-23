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
        Schema::create('employements', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('institute');
            $table->string('designation');
            $table->string('address');
            $table->string('from_year');
            $table->string('to_year')->nullable();
            $table->integer('duration');
            $table->integer('seqn')->default(0);
            $table->boolean('currently_working')->default(false);
            $table->boolean('active')->default(true);
            $table->string('description')->nullable();
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
        Schema::dropIfExists('employements');
    }
};
