@extends('layouts.app')

@section('content')
<div class="container-fluid rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold">{{$user->name}}</span>
                <span class="text-black-50">{{$user->email}}</span>
                <span> {{$user->identifier_id}}</span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>

            <form action="" method="POST" class="m-0 p-0">
                    @method('PUT')
                    @csrf


                <div class="row mt-2">
                    <div class="col-md-6">
                         <label for="name" class="labels">Name:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{@old('name', $user->name)}}" required/>
        @if($errors->has('name'))
            <div class='error small text-danger'>{{$errors->first('name')}}</div>
        @endif
                    </div>
                    <div class="col-md-6">
                         <label for="lastname" class="labels">Last Name:</label>
        <input type="text" name="lastname" id="name" class="form-control" value="{{@old('lastname', $user->lastname)}}" required/>
        @if($errors->has('lastname'))
            <div class='error small text-danger'>{{$errors->first('lastname')}}</div>
        @endif
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                       <label for="middle_name" class="labels">Middle Name:</label>
        <input type="middle_name" name="middle_name" id="middle_name" class="form-control" value="{{@old('middle_name', $user->middle_name)}}" required/>
        @if($errors->has('middle_name'))
            <div class='error small text-danger'>{{$errors->first('middle_name')}}</div>
        @endif</div>


           


           <div class="col-md-6">
        <label for="gender" class="labels">Gender:</label>
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

 <div class="col-md-6">
        <label for="dob" class="labels">Dob:</label>
        <input type="date" name="dob" id="dob" class="form-control" value="{{@old('dob', $user->dob)}}" />
        @if($errors->has('dob'))
            <div class='error small text-danger'>{{$errors->first('dob')}}</div>
        @endif
    </div>


<div class="col-md-6">
        <label for="company" class="labels">Company:</label>
        <input type="text" name="company" id="company" class="form-control" value="{{@old('company', $user->company)}}" />
        @if($errors->has('company'))
            <div class='error small text-danger'>{{$errors->first('company')}}</div>
        @endif
    </div>


         <div class="col-md-12">
                       <label for="email" class="labels">Email:</label>
        <input type="email" name="email" id="email" class="form-control" value="{{@old('email', $user->email)}}" required/>
        @if($errors->has('email'))
            <div class='error small text-danger'>{{$errors->first('email')}}</div>
        @endif</div>


<div class="d-flex justify-content-between align-items-center mt-4 mb-3">
                    <h4 class="text-right">Address</h4>
                </div>




    <div class="col-md-12">
        <label for="home_address" class="labels">Home Address:</label>
        <input type="text" name="home_address" id="home_address" class="form-control" value="{{@old('home_address', $user->home_address)}}" />
        @if($errors->has('home_address'))
            <div class='error small text-danger'>{{$errors->first('home_address')}}</div>
        @endif
    </div>
    <div class="col-md-12">
        <label for="street" class="labels">Street:</label>
        <input type="text" name="street" id="street" class="form-control" value="{{@old('street', $user->street)}}" />
        @if($errors->has('street'))
            <div class='error small text-danger'>{{$errors->first('street')}}</div>
        @endif
    </div>
    <div class="col-md-6">
        <label for="city" class="labels">City:</label>
        <input type="text" name="city" id="city" class="form-control" value="{{@old('city', $user->city)}}" />
        @if($errors->has('city'))
            <div class='error small text-danger'>{{$errors->first('city')}}</div>
        @endif
    </div>
    <div class="col-md-6">
        <label for="state" class="labels">State:</label>
        <input type="text" name="state" id="state" class="form-control" value="{{@old('state', $user->state)}}" />
        @if($errors->has('state'))
            <div class='error small text-danger'>{{$errors->first('state')}}</div>
        @endif
    </div>
    <div class="col-md-6">
        <label for="postal_code" class="labels">Postal Code:</label>
        <input type="text" name="postal_code" id="postal_code" class="form-control" value="{{@old('postal_code', $user->postal_code)}}" />
        @if($errors->has('postal_code'))
            <div class='error small text-danger'>{{$errors->first('postal_code')}}</div>
        @endif
    </div>
    <div class="col-md-6">
        <label for="country" class="labels">Country:</label>
        <input type="text" name="country" id="country" class="form-control" value="{{@old('country', $user->country)}}" />
        @if($errors->has('country'))
            <div class='error small text-danger'>{{$errors->first('country')}}</div>
        @endif
    </div>
    <div class="col-md-6">
        <label for="work_phone" class="labels">Work Phone:</label>
        <input type="text" name="work_phone" id="work_phone" class="form-control" value="{{@old('work_phone', $user->work_phone)}}" />
        @if($errors->has('work_phone'))
            <div class='error small text-danger'>{{$errors->first('work_phone')}}</div>
        @endif
    </div>
    <div class="col-md-6">
        <label for="home_phone" class="labels">Home Phone:</label>
        <input type="text" name="home_phone" id="home_phone" class="form-control" value="{{@old('home_phone', $user->home_phone)}}" />
        @if($errors->has('home_phone'))
            <div class='error small text-danger'>{{$errors->first('home_phone')}}</div>
        @endif
    </div>
    <div class="col-md-12">
        <label for="work_email" class="labels">Work Email:</label>
        <input type="email" name="work_email" id="work_email" class="form-control" value="{{@old('work_email', $user->work_email)}}" />
        @if($errors->has('work_email'))
            <div class='error small text-danger'>{{$errors->first('work_email')}}</div>
        @endif
    </div>
    <div class="col-md-12">
        <label for="cellphone" class="labels">Cellphone:</label>
        <input type="text" name="cellphone" id="cellphone" class="form-control" value="{{@old('cellphone', $user->cellphone)}}" />
        @if($errors->has('cellphone'))
            <div class='error small text-danger'>{{$errors->first('cellphone')}}</div>
        @endif
    </div>


                </div>
               


            </div>
        </div>

        <div class="col-md-4">
            <div class="p-3 py-5">
               
               <div class="d-flex justify-content-between align-items-center  mb-3">
                    <h4 class="text-right">Emergency Contact</h4>
                </div>


                <div class="row">
                    
                

                  <div class="col-md-6">
        <label for="e_name" class="labels">Emergency Contact Name:</label>
        <input type="text" name="e_name" id="e_name" class="form-control" value="{{@old('e_name', $user->e_name)}}" />
        @if($errors->has('e_name'))
            <div class='error small text-danger'>{{$errors->first('e_name')}}</div>
        @endif
    </div>
    <div class="col-md-6">
        <label for="relationship" class="labels">Relationship:</label>
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
    <div class="col-md-12">
        <label for="e_street" class="labels">Emergency Contact Street:</label>
        <input type="text" name="e_street" id="e_street" class="form-control" value="{{@old('e_street', $user->e_street)}}" />
        @if($errors->has('e_street'))
            <div class='error small text-danger'>{{$errors->first('e_street')}}</div>
        @endif
    </div>
    <div class="col-md-6">
        <label for="e_city" class="labels">Emergency Contact City:</label>
        <input type="text" name="e_city" id="e_city" class="form-control" value="{{@old('e_city', $user->e_city)}}" />
        @if($errors->has('e_city'))
            <div class='error small text-danger'>{{$errors->first('e_city')}}</div>
        @endif
    </div>
    <div class="col-md-6">
        <label for="e_state" class="labels">Emergency Contact State:</label>
        <input type="text" name="e_state" id="e_state" class="form-control" value="{{@old('e_state', $user->e_state)}}" />
        @if($errors->has('e_state'))
            <div class='error small text-danger'>{{$errors->first('e_state')}}</div>
        @endif
    </div>
    <div class="col-md-6">
        <label for="e_work_phone" class="labels">Emergency Contact Work Phone:</label>
        <input type="text" name="e_work_phone" id="e_work_phone" class="form-control" value="{{@old('e_work_phone', $user->e_work_phone)}}" />
        @if($errors->has('e_work_phone'))
            <div class='error small text-danger'>{{$errors->first('e_work_phone')}}</div>
        @endif
    </div>
    <div class="col-md-6">
        <label for="e_home_phone" class="labels">Emergency Contact Home Phone:</label>
        <input type="text" name="e_home_phone" id="e_home_phone" class="form-control" value="{{@old('e_home_phone', $user->e_home_phone)}}" />
        @if($errors->has('e_home_phone'))
            <div class='error small text-danger'>{{$errors->first('e_home_phone')}}</div>
        @endif
    </div>
    
    <div class="col-md-6">
        <label for="e_cellphone" class="labels">Emergency Contact Cellphone:</label>
        <input type="text" name="e_cellphone" id="e_cellphone" class="form-control" value="{{@old('e_cellphone', $user->e_cellphone)}}" />
        @if($errors->has('e_cellphone'))
            <div class='error small text-danger'>{{$errors->first('e_cellphone')}}</div>
        @endif
    </div>

    <div class="col-md-6">
        <label for="e_email" class="labels">Emergency Email:</label>
        <input type="email" name="e_email" id="e_email" class="form-control" value="{{@old('e_email', $user->e_email)}}" />
        @if($errors->has('e_email'))
            <div class='error small text-danger'>{{$errors->first('e_email')}}</div>
        @endif
    </div>

<div class="d-flex justify-content-between align-items-center mt-4 mb-3">
                    <h4 class="text-right">Travel Preferences</h4>
                </div>


    <div class="col-md-6">
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
    <div class="col-md-6">
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
    <div class="col-md-6">
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
    <div class="col-md-6">
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
    <div class="col-md-6">
        <label for="preffered_departure_airport" class="form-label">Preffered Departure Airport:</label>
        <input type="text" name="preffered_departure_airport" id="preffered_departure_airport" class="form-control" value="{{@old('preffered_departure_airport', $user->preffered_departure_airport)}}" />
        @if($errors->has('preffered_departure_airport'))
            <div class='error small text-danger'>{{$errors->first('preffered_departure_airport')}}</div>
        @endif
    </div>
    <div class="col-md-6">
        <label for="other_travel_preferences" class="form-label">Other Travel Preferences:</label>
        <input type="text" name="other_travel_preferences" id="other_travel_preferences" class="form-control" value="{{@old('other_travel_preferences', $user->other_travel_preferences)}}" />
        @if($errors->has('other_travel_preferences'))
            <div class='error small text-danger'>{{$errors->first('other_travel_preferences')}}</div>
        @endif
    </div>
    <div class="col-md-6">
        <label for="medical_alerts" class="form-label">Medical Alerts:</label>
        <input type="text" name="medical_alerts" id="medical_alerts" class="form-control" value="{{@old('medical_alerts', $user->medical_alerts)}}" />
        @if($errors->has('medical_alerts'))
            <div class='error small text-danger'>{{$errors->first('medical_alerts')}}</div>
        @endif
    </div>
    <div class="col-md-6">
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
    <div class="col-md-6">
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
    <div class="col-md-6">
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
    <div class="col-md-12">
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

    <div class="d-flex justify-content-between align-items-center mt-4 mb-3">
                    <h4 class="text-right">Vehicle Preferences</h4>
                </div>
    <div class="col-md-6">
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
    <div class="col-md-6">
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
    <div class="col-md-12">
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

<div class="col-md-12">
        <label for="message_to_car_rental_vendor" class="form-label">Message To Car Rental Vendor:</label>
        <input type="text" name="message_to_car_rental_vendor" id="message_to_car_rental_vendor" class="form-control" value="{{@old('message_to_car_rental_vendor', $user->message_to_car_rental_vendor)}}" />
        @if($errors->has('message_to_car_rental_vendor'))
            <div class='error small text-danger'>{{$errors->first('message_to_car_rental_vendor')}}</div>
        @endif
    </div>




            </div>
        </div>
</div>
                <div class="mt-5 text-center mb-5">

                    <div class="d-flex flex-row align-items-center justify-content-between">
                            <a href="{{ route('users.index', []) }}" class="btn btn-light">Cancel</a>
                            <button type="submit" class="btn btn-primary">@lang('Update User')</button>
                        </div>

                        <!-- <button class="btn btn-primary profile-button" type="button">Save Profile</button> -->
                    </div>


    </form>
    </div>
</div>
</div>
</div>
@endsection
