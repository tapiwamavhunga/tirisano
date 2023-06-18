@extends('orders.layout')

@section('orders.content')
    <div class="container">

            <div class="card mt-5 border-5 pt-2 active pb-0 px-3">
            <div class="card-body ">
                <div class="row">
                    <div class="col-12 ">
                        <h4 class="card-title ">Travel Profile</h4>

                    </div>
                    <div class="col">
                        <h6 class="card-subtitle mb-2 text-muted">
                            <p class="card-text text-muted small ">
                               Created by <span class=""> {{Auth::user()->name}}</span> on {{Auth::user()->created_at}}</p>
                        </h6>
                    </div>
                </div>

            </div>

            <div class="card-footer bg-white px-0 ">
                <div class="row">

                    <div class=" col-md-auto ">
                        <a href="/profile" class="btn btn-outlined btn-black text-muted bg-transparent"
                            data-wow-delay="0.7s"><img src="https://img.icons8.com/ios/50/000000/settings.png"
                                width="19" height="19"> <small>MANAGE PROFILE</small></a>

                        <i class="mdi mdi-settings-outline"></i>




                    

                        <a href="/orders" class="btn btn-outlined btn-black text-muted "><img
                                src="https://img.icons8.com/metro/26/000000/more.png" width="20" height="20"
                                class="mr-2 more"><small>MANAGE TRAVEL RECQUESTS</small></a>
                    </div>

                    
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['','orders']) }}"> Orders</a></li>
                    <li class="breadcrumb-item">@lang('Edit Order') #{{$order->id}}</li>
                </ol>
            </div>
            <div class="card-body">
                <form action="{{ route('orders.update', compact('order')) }}" method="POST" class="m-0 p-0">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{@old('name', $order->name)}}" />
        @if($errors->has('name'))
			<div class='error small text-danger'>{{$errors->first('name')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label">Lastname:</label>
        <input type="text" name="lastname" id="lastname" class="form-control" value="{{@old('lastname', $order->lastname)}}" />
        @if($errors->has('lastname'))
			<div class='error small text-danger'>{{$errors->first('lastname')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="company" class="form-label">Company:</label>
        <input type="text" name="company" id="company" class="form-control" value="{{@old('company', $order->company)}}" />
        @if($errors->has('company'))
			<div class='error small text-danger'>{{$errors->first('company')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="position" class="form-label">Position:</label>
        <input type="text" name="position" id="position" class="form-control" value="{{@old('position', $order->position)}}" />
        @if($errors->has('position'))
			<div class='error small text-danger'>{{$errors->first('position')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="country" class="form-label">Country:</label>
        <input type="text" name="country" id="country" class="form-control" value="{{@old('country', $order->country)}}" />
        @if($errors->has('country'))
			<div class='error small text-danger'>{{$errors->first('country')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="dateoftravel" class="form-label">Dateoftravel:</label>
        <input type="date" name="dateoftravel" id="dateoftravel" class="form-control" value="{{@old('dateoftravel', $order->dateoftravel)}}" />
        @if($errors->has('dateoftravel'))
			<div class='error small text-danger'>{{$errors->first('dateoftravel')}}</div>
		@endif
    </div>

                    </div>
                    <div class="card-footer">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <a href="{{ route('orders.index', []) }}" class="btn btn-light">Cancel</a>
                            <button type="submit" class="btn btn-primary">@lang('Update Order')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
