@extends('layouts.default')

@section('content')

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    @foreach($repairs as $repair)
        <h3>Repair Tech: {{ $repair->repair_tech }}</h3>
        <p>First Name: {{ $repair->first_name}}</p>
        <p>Last Name: {{ $repair->last_name}}</p>
        <p>Customer Phone : {{ $repair->customer_phone }}</p>
        <p>created at:  {{ $repair->created_at }}</p>
        <p>updated at :{{ $repair->updated_at }}</p>
        <p>
            <a href="{{ route('repairs.show', $repair->id) }}" class="btn btn-info">View Task</a>
            <a href="{{ route('repairs.edit', $repair->id) }}" class="btn btn-primary">Edit Task</a>
        </p>
        <hr>
    @endforeach

@stop
