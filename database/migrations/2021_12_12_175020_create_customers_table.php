<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->string('customer_name');
            $table->string('father_husband_name');
            $table->string('profession')->nullable();
            $table->string('cell_number');
            $table->string('land_phone_res')->nullable();
            $table->string('office_number')->nullable();
            $table->string('email_address')->unique();
            $table->string('house_road_no');
            $table->string('village_area');
            $table->string('post_office');
            $table->string('police_station');
            $table->string('district');
            $table->string('country'); 
            $table->string('present_house_road_no'); 
            $table->string('present_village_area'); 
            $table->string('present_post_office'); 
            $table->string('present_police_station'); 
            $table->string('present_district'); 
            $table->string('present_country'); 
            $table->longText('customer_image');
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
        Schema::dropIfExists('customers');
    }
}
