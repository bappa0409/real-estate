<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerDeclarationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_declarations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('customer_id');
            $table->string('floor');
            $table->string('unit');
            $table->string('area');
            $table->double('price');
            $table->double('booking_amount');
            $table->string('parking_type')->nullable();
            $table->string('parking_no')->nullable();
            $table->double('car_parking_price')->nullable();
            $table->double('utility_charge')->nullable();
            $table->double('total_amount');
            $table->date('date_of_booking_amount');
            $table->date('date_of_down_payment');
            $table->double('down_payment_amount');
            $table->string('payment_type');
            $table->string('chaque_no');
            $table->string('installment_payment_system');
            $table->longText('note')->nullable();
            $table->longText('customer_signature');
            $table->softDeletes();

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
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
        Schema::dropIfExists('customer_declarations');
    }
}
