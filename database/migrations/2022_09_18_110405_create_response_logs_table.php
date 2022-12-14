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
        Schema::create('response_logs', function (Blueprint $table) {
            $table->id();
            $table->string('timeStamp');
            $table->string('address');
            $table->string('messageId');
            $table->text('statusDetail');
            $table->string('statusCode');
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
        Schema::dropIfExists('response_logs');
    }
};
