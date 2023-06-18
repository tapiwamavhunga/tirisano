<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Order;

class UserController extends Controller {

    // public function __construct() {
	// 	$this->authorizeResource(User::class, 'user');
	// }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, ) {

        $users = User::query();

        if(!empty($request->search)) {
			$users->where('name', 'like', '%' . $request->search . '%');
		}

        $users = $users->paginate(10);

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('users.create', []);
    }

   public function dashboard(Request $request, ) {

        $orders = Order::query();
		$orders->where('user_id', auth()->id());

        if(!empty($request->search)) {
			$orders->where('name', 'like', '%' . $request->search . '%');
		}

        $orders = $orders->paginate(10);

        return view('dashboard', compact('orders'));
    }

    

     public function createStepOne(User $user,) {

        return view('profile.step-one', compact('user'));
    }


      public function profile(User $user) {

      	$user = auth()->user();
        return view('profile.show', compact('user'));
    }


     public function updateprofile(User $user, Request $request)
    {   
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            		'email_verified_at' => $request->email_verified_at,
		'lastname' => $request->lastname,
		'middlename' => $request->middlename,
		'dob' => $request->dob,
		'remember_token' => $request->remember_token,
		'current_team_id' => $request->current_team_id,
		'profile_photo_path' => $request->profile_photo_path,
		'company' => $request->company,
		'dob' => $request->dob,
		'gender' => $request->gender,
		'home_address' => $request->home_address,
		'street' => $request->street,
		'city' => $request->city,
		'state' => $request->state,
		'postal_code' => $request->postal_code,
		'country' => $request->country,
		'work_phone' => $request->work_phone,
		'home_phone' => $request->home_phone,
		'work_email' => $request->work_email,
		'cellphone' => $request->cellphone,
		'e_name' => $request->e_name,
		'relationship' => $request->relationship,
		'e_street' => $request->e_street,
		'e_city' => $request->e_city,
		'e_state' => $request->e_state,
		'e_work_phone' => $request->e_work_phone,
		'e_home_phone' => $request->e_home_phone,
		'e_email' => $request->e_email,
		'e_cellphone' => $request->e_cellphone,
		'discounts' => $request->discounts,
		'seat' => $request->seat,
		'seating_section' => $request->seating_section,
		'special_meals' => $request->special_meals,
		'preffered_departure_airport' => $request->preffered_departure_airport,
		'other_travel_preferences' => $request->other_travel_preferences,
		'medical_alerts' => $request->medical_alerts,
		'room_type' => $request->room_type,
		'smoking' => $request->smoking,
		'foam_pillow' => $request->foam_pillow,
		'message_to_car_hotel_vendor' => $request->message_to_car_hotel_vendor,
		'accesibilty_need' => $request->accesibilty_need,
		'car_smoking' => $request->car_smoking,
		'car_transmission' => $request->car_transmission,
		'car_gps' => $request->car_gps,
		'message_to_car_rental_vendor' => $request->message_to_car_rental_vendor,
		'frequent_traveller_number' => $request->frequent_traveller_number,
		'frequent_traveller_number_hotel_chain' => $request->frequent_traveller_number_hotel_chain,
		'frequent_traveller_gender' => $request->frequent_traveller_gender,
		'dhs_redress_number' => $request->dhs_redress_number,
		'tsa_precheck_number' => $request->tsa_precheck_number,
		'do_you_have_a_passport' => $request->do_you_have_a_passport,
		'passport_nationality' => $request->passport_nationality,
		'passport_number' => $request->passport_number,
		'passport_date_issued' => $request->passport_date_issued,
		'passport_date_expiry' => $request->passport_date_expiry,
		'passport_issued_place' => $request->passport_issued_place,
		'passport_issued_country' => $request->passport_issued_country,
		'visa_nationality' => $request->visa_nationality,
		'visa_type' => $request->visa_type,
		'visa_number' => $request->visa_number,
		'visa_number_expiration' => $request->visa_number_expiration,
            'updated_at' => now()
        ]);

        return redirect()->route('profile', [])->with('success', __('User edited successfully.'));
        } 
    
// public function updateprofile(Request $request, User $user,) {


// 	print_r($request);
// 	die();
//         $request->validate(["name" => "required", "email" => "required|unique:users,email,$user->id", "identifier_id" => "required|unique:users,identifier_id,$user->id", "password" => "required", "gender" => "required", "relationship" => "required", "discounts" => "required", "seat" => "required", "seating_section" => "required", "special_meals" => "required", "room_type" => "required", "smoking" => "required", "foam_pillow" => "required", "accesibilty_need" => "required", "car_smoking" => "required", "car_transmission" => "required", "car_gps" => "required", "frequent_traveller_gender" => "required", "do_you_have_a_passport" => "required"]);

//         try {
//             $user->name = $request->name;
// 		$user->email = $request->email;
// 		$user->identifier_id = $request->identifier_id;
// 		$user->email_verified_at = $request->email_verified_at;
// 		$user->password = $request->password;
// 		$user->two_factor_secret = $request->two_factor_secret;
// 		$user->two_factor_recovery_codes = $request->two_factor_recovery_codes;
// 		$user->remember_token = $request->remember_token;
// 		$user->current_team_id = $request->current_team_id;
// 		$user->profile_photo_path = $request->profile_photo_path;
// 		$user->company = $request->company;
// 		$user->dob = $request->dob;
// 		$user->gender = $request->gender;
// 		$user->home_address = $request->home_address;
// 		$user->street = $request->street;
// 		$user->city = $request->city;
// 		$user->state = $request->state;
// 		$user->postal_code = $request->postal_code;
// 		$user->country = $request->country;
// 		$user->work_phone = $request->work_phone;
// 		$user->home_phone = $request->home_phone;
// 		$user->work_email = $request->work_email;
// 		$user->cellphone = $request->cellphone;
// 		$user->e_name = $request->e_name;
// 		$user->relationship = $request->relationship;
// 		$user->e_street = $request->e_street;
// 		$user->e_city = $request->e_city;
// 		$user->e_state = $request->e_state;
// 		$user->e_work_phone = $request->e_work_phone;
// 		$user->e_home_phone = $request->e_home_phone;
// 		$user->e_email = $request->e_email;
// 		$user->e_cellphone = $request->e_cellphone;
// 		$user->discounts = $request->discounts;
// 		$user->seat = $request->seat;
// 		$user->seating_section = $request->seating_section;
// 		$user->special_meals = $request->special_meals;
// 		$user->preffered_departure_airport = $request->preffered_departure_airport;
// 		$user->other_travel_preferences = $request->other_travel_preferences;
// 		$user->medical_alerts = $request->medical_alerts;
// 		$user->room_type = $request->room_type;
// 		$user->smoking = $request->smoking;
// 		$user->foam_pillow = $request->foam_pillow;
// 		$user->message_to_car_hotel_vendor = $request->message_to_car_hotel_vendor;
// 		$user->accesibilty_need = $request->accesibilty_need;
// 		$user->car_smoking = $request->car_smoking;
// 		$user->car_transmission = $request->car_transmission;
// 		$user->car_gps = $request->car_gps;
// 		$user->message_to_car_rental_vendor = $request->message_to_car_rental_vendor;
// 		$user->frequent_traveller_number = $request->frequent_traveller_number;
// 		$user->frequent_traveller_number_hotel_chain = $request->frequent_traveller_number_hotel_chain;
// 		$user->frequent_traveller_gender = $request->frequent_traveller_gender;
// 		$user->dhs_redress_number = $request->dhs_redress_number;
// 		$user->tsa_precheck_number = $request->tsa_precheck_number;
// 		$user->do_you_have_a_passport = $request->do_you_have_a_passport;
// 		$user->passport_nationality = $request->passport_nationality;
// 		$user->passport_number = $request->passport_number;
// 		$user->passport_date_issued = $request->passport_date_issued;
// 		$user->passport_date_expiry = $request->passport_date_expiry;
// 		$user->passport_issued_place = $request->passport_issued_place;
// 		$user->passport_issued_country = $request->passport_issued_country;
// 		$user->visa_nationality = $request->visa_nationality;
// 		$user->visa_type = $request->visa_type;
// 		$user->visa_number = $request->visa_number;
// 		$user->visa_number_expiration = $request->visa_number_expiration;
//             $user->save();

//             return redirect()->route('users.index', [])->with('success', __('User edited successfully.'));
//         } catch (\Throwable $e) {
//             return redirect()->route('users.edit', compact('user'))->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
//         }
//     }







    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ) {

        $request->validate(["name" => "required", "email" => "required|unique:users,email", "identifier_id" => "required|unique:users,identifier_id", "password" => "required", "gender" => "required", "relationship" => "required", "discounts" => "required", "seat" => "required", "seating_section" => "required", "special_meals" => "required", "room_type" => "required", "smoking" => "required", "foam_pillow" => "required", "accesibilty_need" => "required", "car_smoking" => "required", "car_transmission" => "required", "car_gps" => "required", "frequent_traveller_gender" => "required", "do_you_have_a_passport" => "required"]);

        try {

            $user = new User();
            $user->name = $request->name;
		$user->email = $request->email;
		$user->identifier_id = $request->identifier_id;
		$user->email_verified_at = $request->email_verified_at;
		$user->password = $request->password;
		$user->two_factor_secret = $request->two_factor_secret;
		$user->two_factor_recovery_codes = $request->two_factor_recovery_codes;
		$user->remember_token = $request->remember_token;
		$user->current_team_id = $request->current_team_id;
		$user->profile_photo_path = $request->profile_photo_path;
		$user->company = $request->company;
		$user->dob = $request->dob;
		$user->gender = $request->gender;
		$user->home_address = $request->home_address;
		$user->street = $request->street;
		$user->city = $request->city;
		$user->state = $request->state;
		$user->postal_code = $request->postal_code;
		$user->country = $request->country;
		$user->work_phone = $request->work_phone;
		$user->home_phone = $request->home_phone;
		$user->work_email = $request->work_email;
		$user->cellphone = $request->cellphone;
		$user->e_name = $request->e_name;
		$user->relationship = $request->relationship;
		$user->e_street = $request->e_street;
		$user->e_city = $request->e_city;
		$user->e_state = $request->e_state;
		$user->e_work_phone = $request->e_work_phone;
		$user->e_home_phone = $request->e_home_phone;
		$user->e_email = $request->e_email;
		$user->e_cellphone = $request->e_cellphone;
		$user->discounts = $request->discounts;
		$user->seat = $request->seat;
		$user->seating_section = $request->seating_section;
		$user->special_meals = $request->special_meals;
		$user->preffered_departure_airport = $request->preffered_departure_airport;
		$user->other_travel_preferences = $request->other_travel_preferences;
		$user->medical_alerts = $request->medical_alerts;
		$user->room_type = $request->room_type;
		$user->smoking = $request->smoking;
		$user->foam_pillow = $request->foam_pillow;
		$user->message_to_car_hotel_vendor = $request->message_to_car_hotel_vendor;
		$user->accesibilty_need = $request->accesibilty_need;
		$user->car_smoking = $request->car_smoking;
		$user->car_transmission = $request->car_transmission;
		$user->car_gps = $request->car_gps;
		$user->message_to_car_rental_vendor = $request->message_to_car_rental_vendor;
		$user->frequent_traveller_number = $request->frequent_traveller_number;
		$user->frequent_traveller_number_hotel_chain = $request->frequent_traveller_number_hotel_chain;
		$user->frequent_traveller_gender = $request->frequent_traveller_gender;
		$user->dhs_redress_number = $request->dhs_redress_number;
		$user->tsa_precheck_number = $request->tsa_precheck_number;
		$user->do_you_have_a_passport = $request->do_you_have_a_passport;
		$user->passport_nationality = $request->passport_nationality;
		$user->passport_number = $request->passport_number;
		$user->passport_date_issued = $request->passport_date_issued;
		$user->passport_date_expiry = $request->passport_date_expiry;
		$user->passport_issued_place = $request->passport_issued_place;
		$user->passport_issued_country = $request->passport_issued_country;
		$user->visa_nationality = $request->visa_nationality;
		$user->visa_type = $request->visa_type;
		$user->visa_number = $request->visa_number;
		$user->visa_number_expiration = $request->visa_number_expiration;
            $user->save();

            return redirect()->route('users.index', [])->with('success', __('User created successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('users.create', [])->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $user,) {

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user,) {

        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user,) {

        $request->validate(["name" => "required", "email" => "required|unique:users,email,$user->id", "identifier_id" => "required|unique:users,identifier_id,$user->id", "password" => "required", "gender" => "required", "relationship" => "required", "discounts" => "required", "seat" => "required", "seating_section" => "required", "special_meals" => "required", "room_type" => "required", "smoking" => "required", "foam_pillow" => "required", "accesibilty_need" => "required", "car_smoking" => "required", "car_transmission" => "required", "car_gps" => "required", "frequent_traveller_gender" => "required", "do_you_have_a_passport" => "required"]);

        try {
            $user->name = $request->name;
		$user->email = $request->email;
		$user->identifier_id = $request->identifier_id;
		$user->email_verified_at = $request->email_verified_at;
		$user->password = $request->password;
		$user->two_factor_secret = $request->two_factor_secret;
		$user->two_factor_recovery_codes = $request->two_factor_recovery_codes;
		$user->remember_token = $request->remember_token;
		$user->current_team_id = $request->current_team_id;
		$user->profile_photo_path = $request->profile_photo_path;
		$user->company = $request->company;
		$user->dob = $request->dob;
		$user->gender = $request->gender;
		$user->home_address = $request->home_address;
		$user->street = $request->street;
		$user->city = $request->city;
		$user->state = $request->state;
		$user->postal_code = $request->postal_code;
		$user->country = $request->country;
		$user->work_phone = $request->work_phone;
		$user->home_phone = $request->home_phone;
		$user->work_email = $request->work_email;
		$user->cellphone = $request->cellphone;
		$user->e_name = $request->e_name;
		$user->relationship = $request->relationship;
		$user->e_street = $request->e_street;
		$user->e_city = $request->e_city;
		$user->e_state = $request->e_state;
		$user->e_work_phone = $request->e_work_phone;
		$user->e_home_phone = $request->e_home_phone;
		$user->e_email = $request->e_email;
		$user->e_cellphone = $request->e_cellphone;
		$user->discounts = $request->discounts;
		$user->seat = $request->seat;
		$user->seating_section = $request->seating_section;
		$user->special_meals = $request->special_meals;
		$user->preffered_departure_airport = $request->preffered_departure_airport;
		$user->other_travel_preferences = $request->other_travel_preferences;
		$user->medical_alerts = $request->medical_alerts;
		$user->room_type = $request->room_type;
		$user->smoking = $request->smoking;
		$user->foam_pillow = $request->foam_pillow;
		$user->message_to_car_hotel_vendor = $request->message_to_car_hotel_vendor;
		$user->accesibilty_need = $request->accesibilty_need;
		$user->car_smoking = $request->car_smoking;
		$user->car_transmission = $request->car_transmission;
		$user->car_gps = $request->car_gps;
		$user->message_to_car_rental_vendor = $request->message_to_car_rental_vendor;
		$user->frequent_traveller_number = $request->frequent_traveller_number;
		$user->frequent_traveller_number_hotel_chain = $request->frequent_traveller_number_hotel_chain;
		$user->frequent_traveller_gender = $request->frequent_traveller_gender;
		$user->dhs_redress_number = $request->dhs_redress_number;
		$user->tsa_precheck_number = $request->tsa_precheck_number;
		$user->do_you_have_a_passport = $request->do_you_have_a_passport;
		$user->passport_nationality = $request->passport_nationality;
		$user->passport_number = $request->passport_number;
		$user->passport_date_issued = $request->passport_date_issued;
		$user->passport_date_expiry = $request->passport_date_expiry;
		$user->passport_issued_place = $request->passport_issued_place;
		$user->passport_issued_country = $request->passport_issued_country;
		$user->visa_nationality = $request->visa_nationality;
		$user->visa_type = $request->visa_type;
		$user->visa_number = $request->visa_number;
		$user->visa_number_expiration = $request->visa_number_expiration;
            $user->save();

            return redirect()->route('users.index', [])->with('success', __('User edited successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('users.edit', compact('user'))->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user,) {

        try {
            $user->delete();

            return redirect()->route('users.index', [])->with('success', __('User deleted successfully'));
        } catch (\Throwable $e) {
            return redirect()->route('users.index', [])->with('error', 'Cannot delete User: ' . $e->getMessage());
        }
    }

    
}
