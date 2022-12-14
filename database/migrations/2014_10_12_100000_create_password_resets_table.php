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
        //record ที่ถูกลบไปเลยไม่มี id
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token'); //เอา token ของ email
            $table->timestamp('created_at')->nullable(); //เก็บเวลา token
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
};
