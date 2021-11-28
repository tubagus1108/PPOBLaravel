<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->double('balance')->nullable();
            $table->double('balance_usage')->nullable();
            $table->enum('level',['Member','Agen','Reseller','Admin','Developers']);
            $table->enum('status',['Active','Suspended','Unverif']);
            $table->enum('status_akun',['Sudah Verifikasi','Belum Verifikasi']);
            $table->integer('pin');
            $table->string('api_key');
            $table->string('uplink')->nullable();
            $table->string('uplink_refferal')->nullable();
            $table->double('coin')->nullable();
            $table->integer('no_hp')->nullable();
            $table->integer('code_verifikasi')->nullable();
            $table->string('kode_referral')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
