<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
                        $table->string('lastname')->nullable();
            $table->string('middlename')->nullable();

            $table->string('email')->unique();
            $table->string('identifier_id')->unique();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->string('company')->nullable();
            $table->date('dob')->nullable();


           $table->enum('gender', ['male', 'female', 'unspecified'])->default('unspecified');

            //Home Address
            $table->string('home_address')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('country')->nullable();

            //Contact Info

            $table->string('work_phone')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('work_email')->nullable();
            $table->string('cellphone')->nullable();

            // Emegency Contact
            $table->string('e_name')->nullable();
            $table->enum('relationship', ['brother', 'sister','cousin','freind', 'unspecified'])->default('unspecified');

            $table->string('e_street')->nullable();
            $table->string('e_city')->nullable();
            $table->string('e_state')->nullable();
            $table->string('e_work_phone')->nullable();
            $table->string('e_home_phone')->nullable();
            $table->string('e_email')->nullable();
            $table->string('e_cellphone')->nullable();

            //Preference

            $table->enum('discounts', ['AAA/CAA', 'government','military','senior', 'unspecified'])->default('unspecified');

             $table->enum('seat', ['Window', 'Aisle', 'unspecified'])->default('unspecified');

             $table->enum('seating_section', ['Forward', 'Bulkhead','Exit Row', 'Rear', 'unspecified'])->default('unspecified');

              $table->enum('special_meals', ['Regular', 'Child Meal','Bland', 'Low Residue', 'Diabetic','unspecified'])->default('unspecified');
             

             $table->string('preffered_departure_airport')->nullable();
             $table->string('other_travel_preferences')->nullable();
             $table->string('medical_alerts')->nullable();

             // Hotel Preferences 

            $table->enum('room_type', ['King', 'Queen','Double', 'Twin', 'Single','Disability','unspecified'])->default('unspecified');

            $table->enum('smoking', ['Yes', 'No','unspecified'])->default('unspecified');

            $table->enum('foam_pillow', ['Yes', 'No','unspecified'])->default('unspecified');

            $table->text('message_to_car_hotel_vendor')->nullable();


           
            $table->enum('accesibilty_need', ['Wheelchair', 'Blind Accesible','unspecified'])->default('unspecified');


             // Car Preferences 

             $table->enum('car_smoking', ['Yes', 'No','unspecified'])->default('unspecified');
             $table->enum('car_transmission', ['Manual', 'Automatic','unspecified'])->default('unspecified');

             $table->enum('car_gps', ['Yes', 'No','unspecified'])->default('unspecified');

             $table->string('message_to_car_rental_vendor')->nullable();
             
             // Freequnt Traveller Program


            $table->string('frequent_traveller_number')->nullable();
            $table->string('frequent_traveller_number_hotel_chain')->nullable();
            $table->enum('frequent_traveller_gender', ['Male', 'Female', 'unspecified'])->default('unspecified');
            $table->string('dhs_redress_number')->nullable();
            $table->string('tsa_precheck_number')->nullable();

            // Passports

          $table->enum('do_you_have_a_passport', ['Yes', 'No','unspecified'])->default('unspecified');

            $table->string('passport_nationality')->nullable();
            $table->string('passport_number')->nullable();
            $table->date('passport_date_issued')->nullable();
            $table->date('passport_date_expiry')->nullable();
            $table->string('passport_issued_place')->nullable();
            $table->string('passport_issued_country')->nullable();

            // Visas 
             $table->string('visa_nationality')->nullable();
            $table->string('visa_type')->nullable();
            $table->string('visa_number')->nullable();
            $table->date('visa_number_expiration')->nullable();


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
        Schema::dropIfExists('users');
    }
}
