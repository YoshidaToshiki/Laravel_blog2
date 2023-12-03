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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cafe_id')->constrained();
            $table->string('name');
            $table->text('body');
            $table->text('image');
            $table->tinyInteger('recommends');
            $table->boolean('limited_flg');
            $table->timestamp('limited_time')->nullable();
            $table->boolean('take_out_flg');
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
        Schema::dropIfExists('menus');
    }
};
