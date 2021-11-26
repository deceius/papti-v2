<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CompanyProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_profile', function (Blueprint $table) {
            $table->increments('id');

            $table->string('company_name');
            $table->string('date_established');
            $table->string('capital');
            $table->string('company_address');
            $table->string('factory_address');
            $table->string('sales_address');

            $table->string('email_company');
            $table->string('email_hr');
            $table->string('email_sales');

            $table->string('en_production_line');
            $table->string('jp_production_line');



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
