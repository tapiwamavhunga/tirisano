<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','identifier_id',"lastname", "middlename", "email", "nicknane", "gender", "home_address", "street", "city", "state", "postal_code", "country", "work_phone", "home_phone", "work_email", "cellphone", "e_name", "relationship", "e_street", "e_city", "e_state", "e_work_phone", "e_home_phone", "e_email", "e_cellphone", "discounts", "seat", "seating_section", "special_meals", "preffered_departure_airport", "other_travel_preferences", "medical_alerts", "room_type", "smoking", "foam_pillow", "message_to_car_hotel_vendor", "accesibilty_need", "car_smoking", "car_transmission", "car_gps", "message_to_car_rental_vendor", "frequent_traveller_number", "frequent_traveller_number_hotel_chain", "frequent_traveller_gender", "dhs_redress_number", "tsa_precheck_number", "do_you_have_a_passport","passport_nationality", "passport_number", "passport_date_issued", "passport_date_expiry", "passport_issued_place", "passport_issued_country", "visa_nationality", "visa_type", "visa_number", "visa_number_expiration","dob", "company"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
}
