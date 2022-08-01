<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration //anonymous class
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //run my migrations = ย้ายที่อยู่ใหม่
        //สร้าง schema
        //ใช้ _ ตัวเลขคั่นเพื่อระบุชื่อ
    {
        Schema::create('users', function (Blueprint $table) {
            //สร้าง field ใช้ function ที่ laravel กำหนด
            $table->id();  //primary key integer 'id' เป็นแบบ ไม่ conposit
            // auto increment เมื่อมีข้อมูลเข้ามา
            $table->string('name'); //สร้าง field varchar 255 ตัว
            $table->string('email')->unique(); // varchar เป็น chaining method ให้ field เป็น unique
            $table->timestamp('email_verified_at')->nullable(); //timestamp, datetime nullable เก็บเป็นค่าว่างได้
            $table->string('password'); // varchar(60) เก็บ password
            $table->rememberToken(); //'remember_token'
            $table->timestamps(); //มี s มีความพิเศษ สร้าง timestamp 2 fields คือ 'created_at' และ 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //quit migration =
    {
        Schema::dropIfExists('users');
    }
};
