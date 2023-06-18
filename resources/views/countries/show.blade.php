@extends('countries.layout')

@section('countries.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['','countries']) }}"> Countries</a></li>
                    <li class="breadcrumb-item">@lang('Country') #{{$country->id}}</li>
                </ol>

                <a href="{{ route('countries.index', []) }}" class="btn btn-light"><i class="fa fa-caret-left"></i> Back</a>
            </div>

            <div class="card-body">
                <table class="table table-striped">
    <tbody>
    <tr>
        <th scope="row">ID:</th>
        <td>{{$country->id}}</td>
    </tr>
            <tr>
            <th scope="row">Code:</th>
            <td>{{ $country->code ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Name:</th>
            <td>{{ $country->name ?: "(blank)" }}</td>
        </tr>
            </tbody>
</table>

            </div>

            <div class="card-footer d-flex flex-column flex-md-row align-items-center justify-content-end">
                <a href="{{ route('countries.edit', compact('country')) }}" class="btn btn-info text-nowrap me-1"><i class="fa fa-edit"></i> @lang('Edit')</a>
                <form action="{{ route('countries.destroy', compact('country')) }}" method="POST" class="m-0 p-0">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger text-nowrap"><i class="fa fa-trash"></i> @lang('Delete')</button>
                </form>
            </div>
        </div>
    </div>
@endsection
