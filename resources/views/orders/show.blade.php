@extends('orders.layout')

@section('orders.content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                Orders
                <a href="{{ route('orders.index', []) }}" class="btn btn-light"><i class="fa fa-caret-left"></i> Back</a>
            </div>

            <div class="card-body">
                <table class="table table-striped">
    <tbody>
    <tr>
        <th scope="row">ID:</th>
        <td>{{$order->id}}</td>
    </tr>
            <tr>
            <th scope="row">Name:</th>
            <td>{{ $order->name ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Lastname:</th>
            <td>{{ $order->lastname ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Company:</th>
            <td>{{ $order->company ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Position:</th>
            <td>{{ $order->position ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Country:</th>
            <td>{{ $order->country ?: "(blank)" }}</td>
        </tr>
            <tr>
            <th scope="row">Dateoftravel:</th>
            <td>{{ $order->dateoftravel ?: "(blank)" }}</td>
        </tr>
                <tr>
            <th scope="row">Created at</th>
            <td>{{Carbon\Carbon::parse($order->created_at)->format('d/m/Y H:i:s')}}</td>
        </tr>
        <tr>
            <th scope="row">Updated at</th>
            <td>{{Carbon\Carbon::parse($order->updated_at)->format('d/m/Y H:i:s')}}</td>
        </tr>
        </tbody>
</table>

            </div>

            <div class="card-footer d-flex flex-column flex-md-row align-items-center justify-content-end">
                <a href="{{ route('orders.edit', compact('order')) }}" class="btn btn-info text-nowrap me-1"><i class="fa fa-edit"></i> @lang('Edit')</a>
                <form action="{{ route('orders.destroy', compact('order')) }}" method="POST" class="m-0 p-0">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger text-nowrap"><i class="fa fa-trash"></i> @lang('Delete')</button>
                </form>
            </div>
        </div>
    </div>
@endsection
