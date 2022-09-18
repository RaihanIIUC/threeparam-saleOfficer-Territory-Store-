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
        Schema::create('sales_officers', function (Blueprint $table) {
            $table->id();
            $table->string('terittory')->nullable();
			$table->string('mobile')->nullable();
			$table->string('short_name')->nullable();
			$table->string('full_name')->nullable();
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
        Schema::dropIfExists('sales_officers');
    }
};
