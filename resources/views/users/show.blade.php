@extends('users.layout')

@section('users.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['','users']) }}"> Users</a></li>
                    <li class="breadcrumb-item">@lang('User') #{{$user->id}}</li>
                </ol>

                <a href="{{ route('users.index', []) }}" class="btn btn-light"><i class="fa fa-caret-left"></i> Back</a>
            </div>

            <div class="card-body">
                <table class="table table-striped">
    <tbody>
    <tr>
        <th scope="row">ID:</th>
        <td>{{$user->id}}</td>
    </tr>
            <tr>
            <th scope="row">Name:</th>
            <td>{{ $user->name ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Email:</th>
            <td>{{ $user->email ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Identifier:</th>
            <td>{{ $user->identifier_id ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Email Verified At:</th>
            <td>{{ $user->email_verified_at ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Password:</th>
            <td>{{ $user->password ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Two Factor Secret:</th>
            <td>{{ Str::limit($user->two_factor_secret, 50) ?: "(blank)"}}</td>
        </tr>
            <tr>
            <th scope="row">Two Factor Recovery Codes:</th>
            <td>{{ Str::limit($user->two_factor_recovery_codes, 50) ?: "(blank)"}}</td>
        </tr>
            <tr>
            <th scope="row">Remember Token:</th>
            <td>{{ $user->remember_token ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Current Team:</th>
            <td>{{ $user->current_team_id ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Profile Photo Path:</th>
            <td>{{ Str::limit($user->profile_photo_path, 50) ?: "(blank)"}}</td>
        </tr>
            <tr>
            <th scope="row">Company:</th>
            <td>{{ $user->company ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Dob:</th>
            <td>{{ $user->dob ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Gender:</th>
            <td>{{ $user->gender ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Home Address:</th>
            <td>{{ $user->home_address ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Street:</th>
            <td>{{ $user->street ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">City:</th>
            <td>{{ $user->city ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">State:</th>
            <td>{{ $user->state ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Postal Code:</th>
            <td>{{ $user->postal_code ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Country:</th>
            <td>{{ $user->country ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Work Phone:</th>
            <td>{{ $user->work_phone ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Home Phone:</th>
            <td>{{ $user->home_phone ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Work Email:</th>
            <td>{{ $user->work_email ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Cellphone:</th>
            <td>{{ $user->cellphone ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">E Name:</th>
            <td>{{ $user->e_name ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Relationship:</th>
            <td>{{ $user->relationship ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">E Street:</th>
            <td>{{ $user->e_street ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">E City:</th>
            <td>{{ $user->e_city ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">E State:</th>
            <td>{{ $user->e_state ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">E Work Phone:</th>
            <td>{{ $user->e_work_phone ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">E Home Phone:</th>
            <td>{{ $user->e_home_phone ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">E Email:</th>
            <td>{{ $user->e_email ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">E Cellphone:</th>
            <td>{{ $user->e_cellphone ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Discounts:</th>
            <td>{{ $user->discounts ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Seat:</th>
            <td>{{ $user->seat ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Seating Section:</th>
            <td>{{ $user->seating_section ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Special Meals:</th>
            <td>{{ $user->special_meals ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Preffered Departure Airport:</th>
            <td>{{ $user->preffered_departure_airport ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Other Travel Preferences:</th>
            <td>{{ $user->other_travel_preferences ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Medical Alerts:</th>
            <td>{{ $user->medical_alerts ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Room Type:</th>
            <td>{{ $user->room_type ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Smoking:</th>
            <td>{{ $user->smoking ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Foam Pillow:</th>
            <td>{{ $user->foam_pillow ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Message To Car Hotel Vendor:</th>
            <td>{{ Str::limit($user->message_to_car_hotel_vendor, 50) ?: "(blank)"}}</td>
        </tr>
            <tr>
            <th scope="row">Accesibilty Need:</th>
            <td>{{ $user->accesibilty_need ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Car Smoking:</th>
            <td>{{ $user->car_smoking ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Car Transmission:</th>
            <td>{{ $user->car_transmission ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Car Gps:</th>
            <td>{{ $user->car_gps ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Message To Car Rental Vendor:</th>
            <td>{{ $user->message_to_car_rental_vendor ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Frequent Traveller Number:</th>
            <td>{{ $user->frequent_traveller_number ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Frequent Traveller Number Hotel Chain:</th>
            <td>{{ $user->frequent_traveller_number_hotel_chain ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Frequent Traveller Gender:</th>
            <td>{{ $user->frequent_traveller_gender ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Dhs Redress Number:</th>
            <td>{{ $user->dhs_redress_number ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Tsa Precheck Number:</th>
            <td>{{ $user->tsa_precheck_number ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Do You Have A Passport:</th>
            <td>{{ $user->do_you_have_a_passport ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Passport Nationality:</th>
            <td>{{ $user->passport_nationality ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Passport Number:</th>
            <td>{{ $user->passport_number ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Passport Date Issued:</th>
            <td>{{ $user->passport_date_issued ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Passport Date Expiry:</th>
            <td>{{ $user->passport_date_expiry ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Passport Issued Place:</th>
            <td>{{ $user->passport_issued_place ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Passport Issued Country:</th>
            <td>{{ $user->passport_issued_country ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Visa Nationality:</th>
            <td>{{ $user->visa_nationality ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Visa Type:</th>
            <td>{{ $user->visa_type ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Visa Number:</th>
            <td>{{ $user->visa_number ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Visa Number Expiration:</th>
            <td>{{ $user->visa_number_expiration ?: "(blank)" }}</td>
        </tr>
                <tr>
            <th scope="row">Created at</th>
            <td>{{Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i:s')}}</td>
        </tr>
        <tr>
            <th scope="row">Updated at</th>
            <td>{{Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i:s')}}</td>
        </tr>
        </tbody>
</table>

            </div>

            <div class="card-footer d-flex flex-column flex-md-row align-items-center justify-content-end">
                <a href="{{ route('users.edit', compact('user')) }}" class="btn btn-info text-nowrap me-1"><i class="fa fa-edit"></i> @lang('Edit')</a>
                <form action="{{ route('users.destroy', compact('user')) }}" method="POST" class="m-0 p-0">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger text-nowrap"><i class="fa fa-trash"></i> @lang('Delete')</button>
                </form>
            </div>
        </div>
    </div>
@endsection
