<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
    Schema::create('contacts', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('category_id');
        $table->string('first_name');
        $table->string('last_name');
        $table->tinyInteger('gender')->comment('性別:1=男性、2=女性、3=その他');
        $table->string('email');
        $table->integer('tel');
        $table->string('address');
        $table->string('building');
        $table->text('detail',120);
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
        Schema::dropIfExists('contacts');
    }
}