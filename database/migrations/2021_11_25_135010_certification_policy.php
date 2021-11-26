<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CertificationPolicy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certification_policy', function (Blueprint $table) {
            $table->increments('id');

            $table->longText('en_ims');
            $table->longText('jp_ims');

            $table->longText('en_iso');
            $table->longText('jp_iso');


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
