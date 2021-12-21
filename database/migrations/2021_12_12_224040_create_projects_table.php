<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('customer_id');
            $table->string('project_file_no')->unique(); 
            $table->string('name_of_project')->unique(); 
            $table->string('project_area');
            $table->string('project_zila');
            $table->integer('floor');
            $table->integer('unit');
            $table->integer('area');
            $table->decimal('price');
            $table->string('booked_flat')->nullable();
            $table->longText('project_image')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
