<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('customer_id')->unsigned();
            $table->foreign('customer_id')
                ->references('id')
                ->on('users');
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->text('address');
            $table->bigInteger('country_id')->unsigned();
            $table->foreign('country_id')
                ->references('id')
                ->on('countries');
            $table->bigInteger('province_id')->unsigned();
            $table->foreign('province_id')
                ->references('id')
                ->on('provinces');
            $table->bigInteger('city_id')->unsigned();
            $table->foreign('city_id')
                ->references('id')
                ->on('cities');
            $table->bigInteger('district_id')->unsigned();
            $table->foreign('district_id')
                ->references('id')
                ->on('districts');
            $table->bigInteger('village_id')->unsigned();
            $table->foreign('village_id')
                ->references('id')
                ->on('villages');
            $table->string('postal_code');
            $table->enum('main', ['y', 'n']);
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
        Schema::dropIfExists('customer_addresses');
    }
}
