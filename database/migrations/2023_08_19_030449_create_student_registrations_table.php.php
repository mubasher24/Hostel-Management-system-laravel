<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentRegistrationsTable extends Migration
{
    public function up()

    {


        Schema::create('student_registrations', function (Blueprint $table) {
            $table->bigIncrements('id');
    $table->string('room');
    $table->string('seater');
    $table->string('fpm');
    $table->string('course');
    $table->string('fname');
    $table->string('mname')->nullable();
    $table->string('lname');
    $table->string('gender');
    $table->string('contact');
    $table->string('cnic')->unique();
    $table->string('email')->unique();
    $table->string('econtact');
    $table->string('gname');
    $table->string('grelation');
    $table->string('gcontact');
    $table->text('address');
    $table->string('city');
    $table->string('state')->nullable();
    $table->string('pincode');
    $table->timestamps();
        });

        // Schema::create('student_registrations', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('room_id');
        //     $table->integer('seater');
        //     $table->decimal('fees_per_month', 10, 2);
        //     $table->boolean('food_status');
        //     $table->date('stay_from');
        //     $table->integer('duration');
        //     $table->string('course');
        //     $table->string('reg_no')->unique();
        //     $table->timestamps();
        // });

        // Schema::table('student_registrations', function (Blueprint $table) {
        //     // Personal Information
        //     $table->string('first_name');
        //     $table->string('middle_name')->nullable();
        //     $table->string('last_name');
        //     $table->string('gender');
        //     $table->string('contact');
        //     $table->string('email');
        //     $table->string('emergency_contact');
        //     $table->string('guardian_name');
        //     $table->string('guardian_relation');
        //     $table->string('guardian_contact');

        //     // Correspondence Address
        //     $table->string('correspondence_address');
        //     $table->string('correspondence_city');
        //     $table->string('correspondence_state');
        //     $table->string('correspondence_pincode');

        //     // Permanent Address
        //     $table->boolean('permanent_same_as_correspondence')->default(false);
        //     $table->string('permanent_address')->nullable();
        //     $table->string('permanent_city')->nullable();
        //     $table->string('permanent_state')->nullable();
        //     $table->string('permanent_pincode')->nullable();
        // });
    }


    public function down()
    {
        Schema::dropIfExists('student_registrations');
    }
}
