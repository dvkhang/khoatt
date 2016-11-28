<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewspagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newspagers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('magazine_name');
            $table->string('magazine_issue');
            $table->string('magazine_page');
            $table->string('address');
            $table->string('year');
            $table->string('magazine_page');
            $table->string('magazine_page');
            $table->string('magazine_page');
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
        Schema::dropIfExists('newspagers');
    }
}
