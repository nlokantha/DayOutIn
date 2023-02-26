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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('email');
            $table->string('nic');
            $table->string('address');
            $table->integer('contact');
            $table->date('booking_date');
            $table->integer('advance');
            $table->integer('no_of_persons');
            $table->integer('status')->default(1);
            $table->foreignId('user_id')->constrained();
            $table->foreignId('package_id')->constrained();
            $table->foreignId('customer_id')->constrained();
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
        Schema::dropIfExists('orders');
    }
};