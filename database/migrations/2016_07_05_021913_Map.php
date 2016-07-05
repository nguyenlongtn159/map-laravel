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
            $this->timestamp('created_at')->useCurrent();
            $this->timestamp('updated_at')->nullable();
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
