@extends('users.layout')

@section('users.content')
    <div class="container-fluid" >
        <div class="card">
            <div class="card-header d-flex flex-column flex-md-row align-items-md-center justify-content-between">
                <h4>Users</h4>

                <form action="{{ route('users.index', []) }}" method="GET" class="m-0 p-0">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm me-2" name="search" placeholder="Search Users..." value="{{ request()->search }}">
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
                    <th role='columnheader'>ID</th>
                    <th role='columnheader'>Identifier</th>
                    <th role='columnheader'>Name</th>
                    <th role='columnheader'>Email</th>
                    <th role='columnheader'>Company</th>
                     <th role='columnheader'>DOB</th>
                      <th role='columnheader'>Gender</th>
                       <th role='columnheader'>Cellphone Number</th>
                <th scope="col" data-label="Actions">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>                
                         <td data-label="Identifier">{{ $user->id ?: "(blank)" }}</td>

             <td data-label="Identifier">{{ $user->identifier_id ?: "(blank)" }}</td>
                            <td data-label="Name">{{ $user->name ?: "(blank)" }}</td>
                            <td data-label="Email">{{ $user->email ?: "(blank)" }}</td>
                           
                            
                            
                            <td data-label="Company">{{ $user->company ?: "(blank)" }}</td>
                            <td data-label="Dob">{{ $user->dob ?: "(blank)" }}</td>
                            <td data-label="Gender">{{ $user->gender ?: "(blank)" }}</td>
                            
                            <td data-label="Cellphone">{{ $user->cellphone ?: "(blank)" }}</td>
                            
            <td data-label="Actions:" class="text-nowrap">
                                   <a href="{{route('users.show', compact('user'))}}" type="button" class="btn btn-primary btn-sm me-1">@lang('Show')</a>
<div class="btn-group btn-group-sm">
    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-cog"></i></button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{route('users.edit', compact('user'))}}">@lang('Edit')</a></li>
        <li>
            <form action="{{route('users.destroy', compact('user'))}}" method="POST" style="display: inline;" class="m-0 p-0">
                @csrf
                @method('DELETE')
                <button type="submit" class="dropdown-item">@lang('Delete')</button>
            </form>
        </li>
    </ul>
</div>

                            </td>
        </tr>
    @endforeach
    </tbody>
</table>

                {{ $users->withQueryString()->links() }}
            </div>
            <div class="text-center my-2">
                <a href="{{ route('users.create', []) }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('Create new User')</a>
            </div>
        </div>
    </div>
@endsection
