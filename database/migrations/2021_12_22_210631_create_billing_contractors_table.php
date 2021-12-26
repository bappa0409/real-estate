<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingContractorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_contractors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('contractor_id');
            $table->string('contractor_contact_number');
            $table->double('bill_amount')->nullable();
            $table->double('fixed_bill_amount')->nullable();
            $table->date('bill_date');
            $table->date('file_opening_date');
            $table->string('contractor_address');
            $table->date('payment_receiving_date');
            $table->string('challan_no');
            $table->double('payment_receiving_amount');
            $table->double('balance_amount');
            $table->softDeletes();
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
        Schema::dropIfExists('billing_contractors');
    }
}
