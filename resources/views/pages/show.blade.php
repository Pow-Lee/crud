@extends('layouts.default')

@section('content')

    <h1>Car {{ $repair->id }}</h1>
    <ul>
        <li>Repair Tech: {{ $repair->repair_tech }}</li>
        <li>First Name: {{ $repair->first_name }}</li>
        <li>Last Name: {{ $repair->last_name }}</li>
        <li>Contact Number: {{ $repair->contact_number }}</li>
        <li>Customer Phone: {{ $repair->customer_phone }}</li>
        <li>Part Repair: {{ $repair->part_repair }}</li>
        <li>IMEI: {{ $repair->imei }}</li>
        <li>Repair Price:  {{ $repair->repair_price }}</li>
        <li>Notes: {{ $repair->notes }}</li>


    </ul>

    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('repairs.index') }}" class="btn btn-info">Back to all tasks</a>
            <a href="{{ route('repairs.edit', $repair->id) }}" class="btn btn-primary">Edit Task</a>
        </div>
        <div class="col-md-6 text-right">
            {!! Form::open([
                'method' => 'DELETE',
                'route' => ['repairs.destroy', $repair->id]
            ]) !!}
            {!! Form::submit('Delete this task?', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop