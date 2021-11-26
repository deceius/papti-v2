<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');


            $table->string('en_name');
            $table->longText('en_description');

            $table->string('jp_name');
            $table->longText('jp_description');

            $table->unsignedInteger('product_application_id')->unsigned();
            $table->foreign('product_application_id')->references('id')->on('product_applications');

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
    }
}
