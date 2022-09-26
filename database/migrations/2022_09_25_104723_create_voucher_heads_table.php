<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucher_heads', function (Blueprint $table) {
            $table->id();
			$table->string('sl');
			$table->string('sales_officer');
			$table->string('msg_date')->nullable();
			$table->string('od_date')->nullable();
			$table->string('mobile_number');
			$table->string('territory');
			$table->string('store_id');
			$table->string('amount');
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
        Schema::dropIfExists('voucher_heads');
    }
};
