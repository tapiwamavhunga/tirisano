@extends('countries.layout')

@section('countries.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-column flex-md-row align-items-md-center justify-content-between">
                <ol class="breadcrumb m-0 p-0 flex-grow-1 mb-2 mb-md-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['','countries']) }}"> Countries</a></li>
                </ol>

                <form action="{{ route('countries.index', []) }}" method="GET" class="m-0 p-0">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm me-2" name="search" placeholder="Search Countries..." value="{{ request()->search }}">
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
                    <th role='columnheader'>Code</th>
                    <th role='columnheader'>Name</th>
                <th scope="col" data-label="Actions">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($countries as $country)
        <tr>
                            <td data-label="Code">{{ $country->code ?: "(blank)" }}</td>
                            <td data-label="Name">{{ $country->name ?: "(blank)" }}</td>

            <td data-label="Actions:" class="text-nowrap">
                                   <a href="{{route('countries.show', compact('country'))}}" type="button" class="btn btn-primary btn-sm me-1">@lang('Show')</a>
<div class="btn-group btn-group-sm">
    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-cog"></i></button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{route('countries.edit', compact('country'))}}">@lang('Edit')</a></li>
        <li>
            <form action="{{route('countries.destroy', compact('country'))}}" method="POST" style="display: inline;" class="m-0 p-0">
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

                {{ $countries->withQueryString()->links() }}
            </div>
            <div class="text-center my-2">
                <a href="{{ route('countries.create', []) }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('Create new Country')</a>
            </div>
        </div>
    </div>
@endsection
