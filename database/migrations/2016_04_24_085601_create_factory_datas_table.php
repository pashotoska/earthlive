<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactoryDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factory_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('factory_id')->unsigned();
            $table->foreign('factory_id','fk_factory_data')->references('id')->on('factories');
            $table->integer('year');
            $table->double('value');
            $table->string('unit',100);
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
        Schema::drop('factory_datas');
    }
}
