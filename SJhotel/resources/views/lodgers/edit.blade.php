@extends('layouts.app')

@section('content')
    <center><h1>Your Payment for this month report</h1></center>
    
            <center>{!! Form::open(['action' => ['PaymentsController@update', $payment->id], 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('name', 'Name')}}
                        {{Form::text('name', $payment->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('water', 'Water')}}
                        {{Form::text('water', $payment->water, ['class' => 'form-control', 'placeholder' => 'Water'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('electricity', 'Electricity')}}
                        {{Form::text('electricity', $payment->electricity, ['class' => 'form-control', 'placeholder' => 'Electricity'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('rent', 'Rent')}}
                        {{Form::text('rent', $payment->rent, ['class' => 'form-control', 'placeholder' => 'Rent'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('status', 'Status')}}
                        {{Form::text('status', $payment->status, ['class' => 'form-control', 'placeholder' => 'Status'])}}
                    </div>
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                    <a href="/SJhotel/public/lodgers/show" class="btn btn-success">Cancel</a>
            {!! Form::close() !!}
@endsection

 

