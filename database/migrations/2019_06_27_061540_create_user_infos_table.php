<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstName');
            $table->string('secondName');
            $table->string('thirdName');
            $table->string('fourthName');
            $table->string('email')->unique();
            $table->integer('idNum')->unsigned();
            $table->integer('functionalNum')->unsigned();
             $table->string('specialization');
            $table->string('socialStatus');
            $table->string('gender');
            $table->string('mobile');
            $table->integer('phone')->unsigned();
            $table->date('dateOfHiring');
            $table->date('dateBirth');
            $table->string('address');
            $table->string('image')->default('deafault.png');
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_infos');
    }
}
