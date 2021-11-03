<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayananPulsaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanan_pulsa', function (Blueprint $table) {
            $table->id();
            $table->string('service_id')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('operator')->nullable();
            $table->text('layanan')->nullable();
            $table->text('deskripsi')->nullable();
            $table->double('harga')->nullable();
            $table->double('harga_api')->nullable();
            $table->enum('status',['Normal','Gangguan'])->nullable();
            $table->string('type')->nullable();
            $table->string('server')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('layanan_pulsa');
    }
}
