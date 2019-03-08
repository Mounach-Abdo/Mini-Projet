<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisatuersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisatuers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name',191);
            $table->string('last_name',191);
            $table->string('user_name',191);
            $table->string('password',191);
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
        Schema::dropIfExists('utilisatuers');
    }
}
