<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionalsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutionals', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('user_id')->constrained();
            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->string('npwp');
            $table->string('file');
            $table->date('active');
            $table->integer('status');
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
        Schema::drop('institutionals');
    }
}
