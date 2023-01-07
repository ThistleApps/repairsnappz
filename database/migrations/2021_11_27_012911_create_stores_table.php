<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id('store_id');
            $table->string('name');
            $table->char('alt_store_id')->nullable();
            $table->char('pos_store')->nullable();
            $table->string('addr_line1')->nullable();
            $table->string('addr_line2')->nullable();
            $table->string('addr_line3')->nullable();
            $table->string('phone')->nullable();
            $table->string('zone' , 1)->nullable();
            $table->string('area_code' , 3)->nullable();
            $table->string('number' , 7)->nullable();

            $table->boolean('sunday_closed')->nullable();
            $table->time('sunday_open_time')->nullable();
            $table->time('sunday_closed_time')->nullable();
            $table->boolean('monday_closed')->nullable();
            $table->time('monday_open_time')->nullable();
            $table->time('monday_closed_time')->nullable();
            $table->boolean('tuesday_closed')->nullable();
            $table->time('tuesday_open_time')->nullable();
            $table->time('tuesday_closed_time')->nullable();
            $table->boolean('wednesday_closed')->nullable();
            $table->time('wednesday_open_time')->nullable();
            $table->time('wednesday_closed_time')->nullable();
            $table->boolean('thursday_closed')->nullable();
            $table->time('thursday_open_time')->nullable();
            $table->time('thursday_closed_time')->nullable();
            $table->boolean('friday_closed')->nullable();
            $table->time('friday_open_time')->nullable();
            $table->time('friday_closed_time')->nullable();
            $table->boolean('saturday_closed')->nullable();
            $table->time('saturday_open_time')->nullable();
            $table->time('saturday_closed_time')->nullable();
            $table->char('time_zone');
            $table->integer('tax_code_id')->nullable();

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
        Schema::dropIfExists('stores');
    }
}
