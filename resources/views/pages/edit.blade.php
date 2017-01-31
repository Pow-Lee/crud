@extends('layouts.default')

@section('content')

    {!! Form::model($repair, [
'method' => 'PATCH',
'route' => ['repairs.update', $repair->id]
]) !!}

    <ul>

        <li>
            {{ Form::label('repair_tech', 'Repair Tech:') }}
            {{ Form::text('Repair Tech', $repair->repair_tech) }}
        </li>

        <li>
            {{ Form::label('first_name', 'First Name:') }}
            {{ Form::text('First Name', $repair->first_name) }}
        </li>

        <li>
            {{ Form::label('last_name', 'Last Name:') }}
            {{ Form::text('Last Name', $repair->last_name) }}
        </li>

        <li>
            {{ Form::label('contact_number', 'Contact Number:') }}
            {{ Form::text('Contact Number', $repair->contact_number) }}
        </li>

        <li>
            {{ Form::label('customer_phone', 'Customer Phone:') }}
            {{ Form::text('customer_phone', $repair->customer_phone) }}
        </li>

        <li>
            {{ Form::label('part_repair', 'Part Repair:') }}
            {{ Form::text('Part Repair', $repair->part_repair) }}
        </li>

        <li>
            {{ Form::label('imei', 'imei:') }}
            {{ Form::text('imei', $repair->imei) }}
        </li>

        <li>
            {{ Form::label('repair_price', 'Repair Price:') }}
            {{ Form::text('Repair Price', $repair->repair_price) }}
        </li>

        <li>
            {{ Form::label('notes', 'notes:') }}
            {{ Form::text('notes', $repair->notes) }}
        </li>


        <li>
            {{ Form::submit('Submit', array('class' => 'btn')) }}
        </li>
    </ul>

    {!! Form::close() !!}

@stop