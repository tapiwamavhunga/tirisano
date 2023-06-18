@extends('users.layout')

@section('users.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['','users']) }}"> Users</a></li>
                    <li class="breadcrumb-item">@lang('Edit User') #{{$user->id}}</li>
                </ol>
            </div>
            <div class="card-body">
                <form action="{{ route('users.update', compact('user')) }}" method="POST" class="m-0 p-0">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{@old('name', $user->name)}}" required/>
        @if($errors->has('name'))
			<div class='error small text-danger'>{{$errors->first('name')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" name="email" id="email" class="form-control" value="{{@old('email', $user->email)}}" required/>
        @if($errors->has('email'))
			<div class='error small text-danger'>{{$errors->first('email')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="identifier_id" class="form-label">Identifier:</label>
        <input type="text" name="identifier_id" id="identifier_id" class="form-control" value="{{@old('identifier_id', $user->identifier_id)}}" required/>
        @if($errors->has('identifier_id'))
			<div class='error small text-danger'>{{$errors->first('identifier_id')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="email_verified_at" class="form-label">Email Verified At:</label>
        <input type="email" name="email_verified_at" id="email_verified_at" class="form-control" value="{{@old('email_verified_at', $user->email_verified_at)}}" />
        @if($errors->has('email_verified_at'))
			<div class='error small text-danger'>{{$errors->first('email_verified_at')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" name="password" id="password" class="form-control" value="{{@old('password', $user->password)}}" required/>
        @if($errors->has('password'))
			<div class='error small text-danger'>{{$errors->first('password')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="two_factor_secret" class="form-label">Two Factor Secret:</label>
        <textarea name="two_factor_secret" id="two_factor_secret" class="form-control" >{{@old('two_factor_secret', $user->two_factor_secret)}}</textarea>
        @if($errors->has('two_factor_secret'))
			<div class='error small text-danger'>{{$errors->first('two_factor_secret')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="two_factor_recovery_codes" class="form-label">Two Factor Recovery Codes:</label>
        <textarea name="two_factor_recovery_codes" id="two_factor_recovery_codes" class="form-control" >{{@old('two_factor_recovery_codes', $user->two_factor_recovery_codes)}}</textarea>
        @if($errors->has('two_factor_recovery_codes'))
			<div class='error small text-danger'>{{$errors->first('two_factor_recovery_codes')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="remember_token" class="form-label">Remember Token:</label>
        <input type="text" name="remember_token" id="remember_token" class="form-control" value="{{@old('remember_token', $user->remember_token)}}" />
        @if($errors->has('remember_token'))
			<div class='error small text-danger'>{{$errors->first('remember_token')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="current_team_id" class="form-label">Current Team:</label>
        <input type="number" name="current_team_id" id="current_team_id" class="form-control" value="{{@old('current_team_id', $user->current_team_id)}}" />
        @if($errors->has('current_team_id'))
			<div class='error small text-danger'>{{$errors->first('current_team_id')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="profile_photo_path" class="form-label">Profile Photo Path:</label>
        <textarea name="profile_photo_path" id="profile_photo_path" class="form-control" >{{@old('profile_photo_path', $user->profile_photo_path)}}</textarea>
        @if($errors->has('profile_photo_path'))
			<div class='error small text-danger'>{{$errors->first('profile_photo_path')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="company" class="form-label">Company:</label>
        <input type="text" name="company" id="company" class="form-control" value="{{@old('company', $user->company)}}" />
        @if($errors->has('company'))
			<div class='error small text-danger'>{{$errors->first('company')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="dob" class="form-label">Dob:</label>
        <input type="date" name="dob" id="dob" class="form-control" value="{{@old('dob', $user->dob)}}" />
        @if($errors->has('dob'))
			<div class='error small text-danger'>{{$errors->first('dob')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="gender" class="form-label">Gender:</label>
        <select name="gender" id="gender" class="form-control form-select" required>
    <option value="">Select Gender</option>
    @foreach(["male" => "Male", "female" => "Female", "unspecified" => "Unspecified"] as $value => $label )
        <option value="{{ $value }}" {{ @old('gender', $user->gender) == $value ? "selected" : "" }}>{{ $label }}</option>
    @endforeach
</select>
        @if($errors->has('gender'))
			<div class='error small text-danger'>{{$errors->first('gender')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="home_address" class="form-label">Home Address:</label>
        <input type="text" name="home_address" id="home_address" class="form-control" value="{{@old('home_address', $user->home_address)}}" />
        @if($errors->has('home_address'))
			<div class='error small text-danger'>{{$errors->first('home_address')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="street" class="form-label">Street:</label>
        <input type="text" name="street" id="street" class="form-control" value="{{@old('street', $user->street)}}" />
        @if($errors->has('street'))
			<div class='error small text-danger'>{{$errors->first('street')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="city" class="form-label">City:</label>
        <input type="text" name="city" id="city" class="form-control" value="{{@old('city', $user->city)}}" />
        @if($errors->has('city'))
			<div class='error small text-danger'>{{$errors->first('city')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="state" class="form-label">State:</label>
        <input type="text" name="state" id="state" class="form-control" value="{{@old('state', $user->state)}}" />
        @if($errors->has('state'))
			<div class='error small text-danger'>{{$errors->first('state')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="postal_code" class="form-label">Postal Code:</label>
        <input type="text" name="postal_code" id="postal_code" class="form-control" value="{{@old('postal_code', $user->postal_code)}}" />
        @if($errors->has('postal_code'))
			<div class='error small text-danger'>{{$errors->first('postal_code')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="country" class="form-label">Country:</label>
        <input type="text" name="country" id="country" class="form-control" value="{{@old('country', $user->country)}}" />
        @if($errors->has('country'))
			<div class='error small text-danger'>{{$errors->first('country')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="work_phone" class="form-label">Work Phone:</label>
        <input type="text" name="work_phone" id="work_phone" class="form-control" value="{{@old('work_phone', $user->work_phone)}}" />
        @if($errors->has('work_phone'))
			<div class='error small text-danger'>{{$errors->first('work_phone')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="home_phone" class="form-label">Home Phone:</label>
        <input type="text" name="home_phone" id="home_phone" class="form-control" value="{{@old('home_phone', $user->home_phone)}}" />
        @if($errors->has('home_phone'))
			<div class='error small text-danger'>{{$errors->first('home_phone')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="work_email" class="form-label">Work Email:</label>
        <input type="email" name="work_email" id="work_email" class="form-control" value="{{@old('work_email', $user->work_email)}}" />
        @if($errors->has('work_email'))
			<div class='error small text-danger'>{{$errors->first('work_email')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="cellphone" class="form-label">Cellphone:</label>
        <input type="text" name="cellphone" id="cellphone" class="form-control" value="{{@old('cellphone', $user->cellphone)}}" />
        @if($errors->has('cellphone'))
			<div class='error small text-danger'>{{$errors->first('cellphone')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="e_name" class="form-label">E Name:</label>
        <input type="text" name="e_name" id="e_name" class="form-control" value="{{@old('e_name', $user->e_name)}}" />
        @if($errors->has('e_name'))
			<div class='error small text-danger'>{{$errors->first('e_name')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="relationship" class="form-label">Relationship:</label>
        <select name="relationship" id="relationship" class="form-control form-select" required>
    <option value="">Select Relationship</option>
    @foreach(["brother" => "Brother", "sister" => "Sister", "cousin" => "Cousin", "freind" => "Freind", "unspecified" => "Unspecified"] as $value => $label )
        <option value="{{ $value }}" {{ @old('relationship', $user->relationship) == $value ? "selected" : "" }}>{{ $label }}</option>
    @endforeach
</select>
        @if($errors->has('relationship'))
			<div class='error small text-danger'>{{$errors->first('relationship')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="e_street" class="form-label">E Street:</label>
        <input type="text" name="e_street" id="e_street" class="form-control" value="{{@old('e_street', $user->e_street)}}" />
        @if($errors->has('e_street'))
			<div class='error small text-danger'>{{$errors->first('e_street')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="e_city" class="form-label">E City:</label>
        <input type="text" name="e_city" id="e_city" class="form-control" value="{{@old('e_city', $user->e_city)}}" />
        @if($errors->has('e_city'))
			<div class='error small text-danger'>{{$errors->first('e_city')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="e_state" class="form-label">E State:</label>
        <input type="text" name="e_state" id="e_state" class="form-control" value="{{@old('e_state', $user->e_state)}}" />
        @if($errors->has('e_state'))
			<div class='error small text-danger'>{{$errors->first('e_state')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="e_work_phone" class="form-label">E Work Phone:</label>
        <input type="text" name="e_work_phone" id="e_work_phone" class="form-control" value="{{@old('e_work_phone', $user->e_work_phone)}}" />
        @if($errors->has('e_work_phone'))
			<div class='error small text-danger'>{{$errors->first('e_work_phone')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="e_home_phone" class="form-label">E Home Phone:</label>
        <input type="text" name="e_home_phone" id="e_home_phone" class="form-control" value="{{@old('e_home_phone', $user->e_home_phone)}}" />
        @if($errors->has('e_home_phone'))
			<div class='error small text-danger'>{{$errors->first('e_home_phone')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="e_email" class="form-label">E Email:</label>
        <input type="email" name="e_email" id="e_email" class="form-control" value="{{@old('e_email', $user->e_email)}}" />
        @if($errors->has('e_email'))
			<div class='error small text-danger'>{{$errors->first('e_email')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="e_cellphone" class="form-label">E Cellphone:</label>
        <input type="text" name="e_cellphone" id="e_cellphone" class="form-control" value="{{@old('e_cellphone', $user->e_cellphone)}}" />
        @if($errors->has('e_cellphone'))
			<div class='error small text-danger'>{{$errors->first('e_cellphone')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="discounts" class="form-label">Discounts:</label>
        <select name="discounts" id="discounts" class="form-control form-select" required>
    <option value="">Select Discounts</option>
    @foreach(["AAA/CAA" => "Aaa/Caa", "government" => "Government", "military" => "Military", "senior" => "Senior", "unspecified" => "Unspecified"] as $value => $label )
        <option value="{{ $value }}" {{ @old('discounts', $user->discounts) == $value ? "selected" : "" }}>{{ $label }}</option>
    @endforeach
</select>
        @if($errors->has('discounts'))
			<div class='error small text-danger'>{{$errors->first('discounts')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="seat" class="form-label">Seat:</label>
        <select name="seat" id="seat" class="form-control form-select" required>
    <option value="">Select Seat</option>
    @foreach(["Window" => "Window", "Aisle" => "Aisle", "unspecified" => "Unspecified"] as $value => $label )
        <option value="{{ $value }}" {{ @old('seat', $user->seat) == $value ? "selected" : "" }}>{{ $label }}</option>
    @endforeach
</select>
        @if($errors->has('seat'))
			<div class='error small text-danger'>{{$errors->first('seat')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="seating_section" class="form-label">Seating Section:</label>
        <select name="seating_section" id="seating_section" class="form-control form-select" required>
    <option value="">Select Seating Section</option>
    @foreach(["Forward" => "Forward", "Bulkhead" => "Bulkhead", "Exit Row" => "Exit Row", "Rear" => "Rear", "unspecified" => "Unspecified"] as $value => $label )
        <option value="{{ $value }}" {{ @old('seating_section', $user->seating_section) == $value ? "selected" : "" }}>{{ $label }}</option>
    @endforeach
</select>
        @if($errors->has('seating_section'))
			<div class='error small text-danger'>{{$errors->first('seating_section')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="special_meals" class="form-label">Special Meals:</label>
        <select name="special_meals" id="special_meals" class="form-control form-select" required>
    <option value="">Select Special Meals</option>
    @foreach(["Regular" => "Regular", "Child Meal" => "Child Meal", "Bland" => "Bland", "Low Residue" => "Low Residue", "Diabetic" => "Diabetic", "unspecified" => "Unspecified"] as $value => $label )
        <option value="{{ $value }}" {{ @old('special_meals', $user->special_meals) == $value ? "selected" : "" }}>{{ $label }}</option>
    @endforeach
</select>
        @if($errors->has('special_meals'))
			<div class='error small text-danger'>{{$errors->first('special_meals')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="preffered_departure_airport" class="form-label">Preffered Departure Airport:</label>
        <input type="text" name="preffered_departure_airport" id="preffered_departure_airport" class="form-control" value="{{@old('preffered_departure_airport', $user->preffered_departure_airport)}}" />
        @if($errors->has('preffered_departure_airport'))
			<div class='error small text-danger'>{{$errors->first('preffered_departure_airport')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="other_travel_preferences" class="form-label">Other Travel Preferences:</label>
        <input type="text" name="other_travel_preferences" id="other_travel_preferences" class="form-control" value="{{@old('other_travel_preferences', $user->other_travel_preferences)}}" />
        @if($errors->has('other_travel_preferences'))
			<div class='error small text-danger'>{{$errors->first('other_travel_preferences')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="medical_alerts" class="form-label">Medical Alerts:</label>
        <input type="text" name="medical_alerts" id="medical_alerts" class="form-control" value="{{@old('medical_alerts', $user->medical_alerts)}}" />
        @if($errors->has('medical_alerts'))
			<div class='error small text-danger'>{{$errors->first('medical_alerts')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="room_type" class="form-label">Room Type:</label>
        <select name="room_type" id="room_type" class="form-control form-select" required>
    <option value="">Select Room Type</option>
    @foreach(["King" => "King", "Queen" => "Queen", "Double" => "Double", "Twin" => "Twin", "Single" => "Single", "Disability" => "Disability", "unspecified" => "Unspecified"] as $value => $label )
        <option value="{{ $value }}" {{ @old('room_type', $user->room_type) == $value ? "selected" : "" }}>{{ $label }}</option>
    @endforeach
</select>
        @if($errors->has('room_type'))
			<div class='error small text-danger'>{{$errors->first('room_type')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="smoking" class="form-label">Smoking:</label>
        <select name="smoking" id="smoking" class="form-control form-select" required>
    <option value="">Select Smoking</option>
    @foreach(["Yes" => "Yes", "No" => "No", "unspecified" => "Unspecified"] as $value => $label )
        <option value="{{ $value }}" {{ @old('smoking', $user->smoking) == $value ? "selected" : "" }}>{{ $label }}</option>
    @endforeach
</select>
        @if($errors->has('smoking'))
			<div class='error small text-danger'>{{$errors->first('smoking')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="foam_pillow" class="form-label">Foam Pillow:</label>
        <select name="foam_pillow" id="foam_pillow" class="form-control form-select" required>
    <option value="">Select Foam Pillow</option>
    @foreach(["Yes" => "Yes", "No" => "No", "unspecified" => "Unspecified"] as $value => $label )
        <option value="{{ $value }}" {{ @old('foam_pillow', $user->foam_pillow) == $value ? "selected" : "" }}>{{ $label }}</option>
    @endforeach
</select>
        @if($errors->has('foam_pillow'))
			<div class='error small text-danger'>{{$errors->first('foam_pillow')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="message_to_car_hotel_vendor" class="form-label">Message To Car Hotel Vendor:</label>
        <textarea name="message_to_car_hotel_vendor" id="message_to_car_hotel_vendor" class="form-control" >{{@old('message_to_car_hotel_vendor', $user->message_to_car_hotel_vendor)}}</textarea>
        @if($errors->has('message_to_car_hotel_vendor'))
			<div class='error small text-danger'>{{$errors->first('message_to_car_hotel_vendor')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="accesibilty_need" class="form-label">Accesibilty Need:</label>
        <select name="accesibilty_need" id="accesibilty_need" class="form-control form-select" required>
    <option value="">Select Accesibilty Need</option>
    @foreach(["Wheelchair" => "Wheelchair", "Blind Accesible" => "Blind Accesible", "unspecified" => "Unspecified"] as $value => $label )
        <option value="{{ $value }}" {{ @old('accesibilty_need', $user->accesibilty_need) == $value ? "selected" : "" }}>{{ $label }}</option>
    @endforeach
</select>
        @if($errors->has('accesibilty_need'))
			<div class='error small text-danger'>{{$errors->first('accesibilty_need')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="car_smoking" class="form-label">Car Smoking:</label>
        <select name="car_smoking" id="car_smoking" class="form-control form-select" required>
    <option value="">Select Car Smoking</option>
    @foreach(["Yes" => "Yes", "No" => "No", "unspecified" => "Unspecified"] as $value => $label )
        <option value="{{ $value }}" {{ @old('car_smoking', $user->car_smoking) == $value ? "selected" : "" }}>{{ $label }}</option>
    @endforeach
</select>
        @if($errors->has('car_smoking'))
			<div class='error small text-danger'>{{$errors->first('car_smoking')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="car_transmission" class="form-label">Car Transmission:</label>
        <select name="car_transmission" id="car_transmission" class="form-control form-select" required>
    <option value="">Select Car Transmission</option>
    @foreach(["Manual" => "Manual", "Automatic" => "Automatic", "unspecified" => "Unspecified"] as $value => $label )
        <option value="{{ $value }}" {{ @old('car_transmission', $user->car_transmission) == $value ? "selected" : "" }}>{{ $label }}</option>
    @endforeach
</select>
        @if($errors->has('car_transmission'))
			<div class='error small text-danger'>{{$errors->first('car_transmission')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="car_gps" class="form-label">Car Gps:</label>
        <select name="car_gps" id="car_gps" class="form-control form-select" required>
    <option value="">Select Car Gps</option>
    @foreach(["Yes" => "Yes", "No" => "No", "unspecified" => "Unspecified"] as $value => $label )
        <option value="{{ $value }}" {{ @old('car_gps', $user->car_gps) == $value ? "selected" : "" }}>{{ $label }}</option>
    @endforeach
</select>
        @if($errors->has('car_gps'))
			<div class='error small text-danger'>{{$errors->first('car_gps')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="message_to_car_rental_vendor" class="form-label">Message To Car Rental Vendor:</label>
        <input type="text" name="message_to_car_rental_vendor" id="message_to_car_rental_vendor" class="form-control" value="{{@old('message_to_car_rental_vendor', $user->message_to_car_rental_vendor)}}" />
        @if($errors->has('message_to_car_rental_vendor'))
			<div class='error small text-danger'>{{$errors->first('message_to_car_rental_vendor')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="frequent_traveller_number" class="form-label">Frequent Traveller Number:</label>
        <input type="text" name="frequent_traveller_number" id="frequent_traveller_number" class="form-control" value="{{@old('frequent_traveller_number', $user->frequent_traveller_number)}}" />
        @if($errors->has('frequent_traveller_number'))
			<div class='error small text-danger'>{{$errors->first('frequent_traveller_number')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="frequent_traveller_number_hotel_chain" class="form-label">Frequent Traveller Number Hotel Chain:</label>
        <input type="text" name="frequent_traveller_number_hotel_chain" id="frequent_traveller_number_hotel_chain" class="form-control" value="{{@old('frequent_traveller_number_hotel_chain', $user->frequent_traveller_number_hotel_chain)}}" />
        @if($errors->has('frequent_traveller_number_hotel_chain'))
			<div class='error small text-danger'>{{$errors->first('frequent_traveller_number_hotel_chain')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="frequent_traveller_gender" class="form-label">Frequent Traveller Gender:</label>
        <select name="frequent_traveller_gender" id="frequent_traveller_gender" class="form-control form-select" required>
    <option value="">Select Frequent Traveller Gender</option>
    @foreach(["Male" => "Male", "Female" => "Female", "unspecified" => "Unspecified"] as $value => $label )
        <option value="{{ $value }}" {{ @old('frequent_traveller_gender', $user->frequent_traveller_gender) == $value ? "selected" : "" }}>{{ $label }}</option>
    @endforeach
</select>
        @if($errors->has('frequent_traveller_gender'))
			<div class='error small text-danger'>{{$errors->first('frequent_traveller_gender')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="dhs_redress_number" class="form-label">Dhs Redress Number:</label>
        <input type="text" name="dhs_redress_number" id="dhs_redress_number" class="form-control" value="{{@old('dhs_redress_number', $user->dhs_redress_number)}}" />
        @if($errors->has('dhs_redress_number'))
			<div class='error small text-danger'>{{$errors->first('dhs_redress_number')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="tsa_precheck_number" class="form-label">Tsa Precheck Number:</label>
        <input type="text" name="tsa_precheck_number" id="tsa_precheck_number" class="form-control" value="{{@old('tsa_precheck_number', $user->tsa_precheck_number)}}" />
        @if($errors->has('tsa_precheck_number'))
			<div class='error small text-danger'>{{$errors->first('tsa_precheck_number')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="do_you_have_a_passport" class="form-label">Do You Have A Passport:</label>
        <select name="do_you_have_a_passport" id="do_you_have_a_passport" class="form-control form-select" required>
    <option value="">Select Do You Have A Passport</option>
    @foreach(["Yes" => "Yes", "No" => "No", "unspecified" => "Unspecified"] as $value => $label )
        <option value="{{ $value }}" {{ @old('do_you_have_a_passport', $user->do_you_have_a_passport) == $value ? "selected" : "" }}>{{ $label }}</option>
    @endforeach
</select>
        @if($errors->has('do_you_have_a_passport'))
			<div class='error small text-danger'>{{$errors->first('do_you_have_a_passport')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="passport_nationality" class="form-label">Passport Nationality:</label>
        <input type="text" name="passport_nationality" id="passport_nationality" class="form-control" value="{{@old('passport_nationality', $user->passport_nationality)}}" />
        @if($errors->has('passport_nationality'))
			<div class='error small text-danger'>{{$errors->first('passport_nationality')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="passport_number" class="form-label">Passport Number:</label>
        <input type="text" name="passport_number" id="passport_number" class="form-control" value="{{@old('passport_number', $user->passport_number)}}" />
        @if($errors->has('passport_number'))
			<div class='error small text-danger'>{{$errors->first('passport_number')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="passport_date_issued" class="form-label">Passport Date Issued:</label>
        <input type="date" name="passport_date_issued" id="passport_date_issued" class="form-control" value="{{@old('passport_date_issued', $user->passport_date_issued)}}" />
        @if($errors->has('passport_date_issued'))
			<div class='error small text-danger'>{{$errors->first('passport_date_issued')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="passport_date_expiry" class="form-label">Passport Date Expiry:</label>
        <input type="date" name="passport_date_expiry" id="passport_date_expiry" class="form-control" value="{{@old('passport_date_expiry', $user->passport_date_expiry)}}" />
        @if($errors->has('passport_date_expiry'))
			<div class='error small text-danger'>{{$errors->first('passport_date_expiry')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="passport_issued_place" class="form-label">Passport Issued Place:</label>
        <input type="text" name="passport_issued_place" id="passport_issued_place" class="form-control" value="{{@old('passport_issued_place', $user->passport_issued_place)}}" />
        @if($errors->has('passport_issued_place'))
			<div class='error small text-danger'>{{$errors->first('passport_issued_place')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="passport_issued_country" class="form-label">Passport Issued Country:</label>
        <input type="text" name="passport_issued_country" id="passport_issued_country" class="form-control" value="{{@old('passport_issued_country', $user->passport_issued_country)}}" />
        @if($errors->has('passport_issued_country'))
			<div class='error small text-danger'>{{$errors->first('passport_issued_country')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="visa_nationality" class="form-label">Visa Nationality:</label>
        <input type="text" name="visa_nationality" id="visa_nationality" class="form-control" value="{{@old('visa_nationality', $user->visa_nationality)}}" />
        @if($errors->has('visa_nationality'))
			<div class='error small text-danger'>{{$errors->first('visa_nationality')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="visa_type" class="form-label">Visa Type:</label>
        <input type="text" name="visa_type" id="visa_type" class="form-control" value="{{@old('visa_type', $user->visa_type)}}" />
        @if($errors->has('visa_type'))
			<div class='error small text-danger'>{{$errors->first('visa_type')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="visa_number" class="form-label">Visa Number:</label>
        <input type="text" name="visa_number" id="visa_number" class="form-control" value="{{@old('visa_number', $user->visa_number)}}" />
        @if($errors->has('visa_number'))
			<div class='error small text-danger'>{{$errors->first('visa_number')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="visa_number_expiration" class="form-label">Visa Number Expiration:</label>
        <input type="date" name="visa_number_expiration" id="visa_number_expiration" class="form-control" value="{{@old('visa_number_expiration', $user->visa_number_expiration)}}" />
        @if($errors->has('visa_number_expiration'))
			<div class='error small text-danger'>{{$errors->first('visa_number_expiration')}}</div>
		@endif
    </div>

                    </div>
                    <div class="card-footer">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <a href="{{ route('users.index', []) }}" class="btn btn-light">Cancel</a>
                            <button type="submit" class="btn btn-primary">@lang('Update User')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
