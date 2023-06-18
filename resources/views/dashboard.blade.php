@extends('layouts.app')

@section('content')

    <div class="container-fluid">
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
        <div class="card mt-5 border-5 pt-2 active pb-0 px-3">
            <div class="card-body ">
                <div class="row">
                    <div class="col-12 ">
                        <h4 class="card-title ">Travel Recquests</h4>

                    </div>
                    
                </div>

            </div>
            <div class="card-footer bg-white px-0 ">

                   <div class="card">
            <div class="card-header d-flex flex-column flex-md-row align-items-md-center justify-content-between">
                

                <form action="{{ route('orders.index', []) }}" method="GET" class="m-0 p-0">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm me-2" name="search" placeholder="Search Recquests..." value="{{ request()->search }}">
                        <span class="input-group-btn">
                            <button class="btn btn-info btn-sm" type="submit"><i class="fa fa-search"></i> @lang('Go!')</button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <table class="table table-striped table-responsive table-hover">
    <thead role="rowgroup">
    <tr role="row">
                    <th role='columnheader'>Name</th>
                    <th role='columnheader'>Lastname</th>
                    <th role='columnheader'>Gender</th>
                    <th role='columnheader'>Company</th>
                    <th role='columnheader'>Position</th>
                    <th role='columnheader'>Destination</th>
                    <th role='columnheader'>Date of travel</th>
                <th scope="col" data-label="Actions">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($orders as $order)
        <tr>
                            <td data-label="Name">{{ $order->name ?: "(blank)" }}</td>
                            <td data-label="Lastname">{{ $order->lastname ?: "(blank)" }}</td>
                            <td data-label="Lastname">{{ $order->gender ?: "(blank)" }}</td>

                            <td data-label="Company">{{ $order->company ?: "(blank)" }}</td>
                            <td data-label="Position">{{ $order->position ?: "(blank)" }}</td>
                            <td data-label="Country">{{ $order->country ?: "(blank)" }}</td>
                            <td data-label="Dateoftravel">{{ $order->dateoftravel ?: "(blank)" }}</td>

            
            <td data-label="Actions:" >
                                   <a href="{{route('orders.show', compact('order'))}}" type="button" class="btn btn-primary btn-sm me-1">@lang('Show')</a>
                                       </td>
                                         <td data-label="Actions:" >
                                   <a class="dropdown-item" href="{{route('orders.edit', compact('order'))}}">@lang('Edit')</a>
                               </td>
                                 <td data-label="Actions:" >
                                      <form action="{{route('orders.destroy', compact('order'))}}" method="POST" style="display: inline;" class="m-0 p-0">
                @csrf
                @method('DELETE')
                <button type="submit" class="dropdown-item">@lang('Delete')</button>
            </form>

        </td>
        </tr>
    @endforeach
    </tbody>
</table>

                {{ $orders->withQueryString()->links() }}
            </div>
            <div class="text-center my-2">
                <a href="{{ route('orders.create', []) }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('Create new Order')</a>
            </div>
        </div>


                
            </div>
        </div>




    </div>



@endsection
