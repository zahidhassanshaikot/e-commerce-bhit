<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubSubMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_sub_menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sub_sub_menu_name');
            $table->integer('sub_menu_id')->unsigned();
            $table->boolean('status')->default('1');
            $table->foreign('sub_menu_id')->references('id')->on('sub_menus')
            ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('sub_sub_menus');
    }
}
