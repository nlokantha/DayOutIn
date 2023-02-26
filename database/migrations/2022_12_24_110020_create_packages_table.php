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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->integer('availability');
            $table->string('discription');
            $table->string('title');
            $table->enum('type', ['Villa', 'Hotel']);
            $table->integer('price');
            $table->dateTime('st_date');
            $table->boolean('iscompleted')->default(0);
            $table->foreignId('powner_id')->constrained();
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
        Schema::dropIfExists('packages');
    }
};