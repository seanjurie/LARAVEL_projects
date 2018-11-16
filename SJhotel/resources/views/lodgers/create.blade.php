@extends('layouts.app')

@section('content')
    <center><h1>Your Payment for this month report</h1></center><br>

    
    
            <center>{!! Form::open(['action' => 'PaymentsController@store', 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('name', 'Name')}}
                        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'name'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('water', 'Water')}}
                        {{Form::text('water', '', ['class' => 'form-control', 'placeholder' => 'Water'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('electricity', 'Electricity')}}
                        {{Form::text('electricity', '', ['class' => 'form-control', 'placeholder' => 'Electricity'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('rent', 'Rent')}}
                        {{Form::text('rent', '', ['class' => 'form-control', 'placeholder' => 'Rent'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('status', 'Status')}}
                        {{Form::text('status', '', ['class' => 'form-control', 'placeholder' => 'Status'])}}
                    </div>
                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                    <a href="/SJhotel/public/lodgers/show" class="btn btn-success">Cancel</a>
            {!! Form::close() !!}

@endsection

 

