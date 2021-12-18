<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPulsaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_pulsa', function (Blueprint $table) {
            $table->id();
            $table->string('oid')->nullable();
            $table->string('provider_oid')->nullable();
            $table->integer('id_user')->nullable();
            $table->string('service')->nullable();
            $table->double('price')->nullable();
            $table->string('target')->nullable();
            $table->text('desc')->nullable();
            $table->text('sn')->nullable();
            $table->enum('status',['Pending','Processing','Error','Success'])->nullable();
            $table->integer('refund')->nullable();
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
        Schema::dropIfExists('order_pulsa');
    }
}
