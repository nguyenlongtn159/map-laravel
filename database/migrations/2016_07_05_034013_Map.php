<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Map extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('maps', function (Blueprint $table){
            $table->increments('id');
            $table->string('name',60);
            $table->string('address',80);
            $table->decimal('lat',10,6);
            $table->decimal('lng',10,6);
            $table->string('type',30);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('maps');
    }
}
