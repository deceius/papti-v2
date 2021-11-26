<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Recruitment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitment', function (Blueprint $table) {
            $table->increments('id');


            $table->string('en_header');
            $table->string('jp_header');

            $table->longText('en_details');
            $table->longText('jp_details');

            $table->longText('en_vision');
            $table->longText('jp_vision');

            $table->longText('en_mission');
            $table->longText('jp_mission');

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
