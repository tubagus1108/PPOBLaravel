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
        Schema::create('services_pulsa', function (Blueprint $table) {
            $table->id();
            $table->string('sid')->nullable();
            $table->string('service')->nullable();
            $table->integer('id_category')->nullable();
            $table->string('code')->nullable();
            $table->double('price')->nullable();
            $table->enum('status',['Normal','Gangguan'])->nullable();
            $table->string('provider')->nullable();
            $table->text('desc')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('services_pulsa');
    }
}
