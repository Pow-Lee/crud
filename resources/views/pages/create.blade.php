@extends('layouts.default')

@section('content')

    {{ Form::open(array('route' => 'repairs.store')) }}
    <ul>

        <li>
            {{ Form::label('repair_tech', 'Repair Tech:') }}
            {{ Form::text('Repair Tech') }}
        </li>

        <li>
            {{ Form::label('first_name', 'First Name:') }}
            {{ Form::text('First Name') }}
        </li>

        <li>
            {{ Form::label('last_name', 'Last Name:') }}
            {{ Form::text('Last Name') }}
        </li>

        <li>
            {{ Form::label('contact_number', 'Contact Number:') }}
            {{ Form::text('Contact Number') }}
        </li>

        <li>
            {{ Form::label('customer_phone', 'Customer Phone:') }}
            {{ Form::text('Customer Phone') }}
        </li>

        <li>
            {{ Form::label('part_repair', 'Part Repair:') }}
            {{ Form::text('Part Repair') }}
        </li>

        <li>
            {{ Form::label('imei', 'imei:') }}
            {{ Form::text('imei') }}
        </li>

        <li>
            {{ Form::label('repair_price', 'Repair Price:') }}
            {{ Form::text('Repair Price') }}
        </li>

        <li>
            {{ Form::label('notes', 'notes:') }}
            {{ Form::text('notes') }}
        </li>


        <li>
            {{ Form::submit('Submit', array('class' => 'btn')) }}
        </li>
    </ul>
    {{ Form::close() }}

@stop