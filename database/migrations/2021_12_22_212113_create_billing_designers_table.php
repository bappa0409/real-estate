<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingDesignersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_designers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('designer_id');
            $table->string('designer_contact_number');
            $table->double('bill_amount')->nullable();
            $table->double('fixed_bill_amount')->nullable();
            $table->date('bill_date');
            $table->date('file_opening_date');
            $table->string('designer_address');
            $table->date('payment_receiving_date');
            $table->string('challan_no');
            $table->double('payment_receiving_amount');
            $table->double('balance_amount');
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
        Schema::dropIfExists('billing_designers');
    }
}
