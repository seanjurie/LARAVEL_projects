@extends('layouts.app')

@section('content')
    <center><h1>Your Payment for this month report</h1></center>

     <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">

                        <div class="panel-heading"><center>Your Expenses</center></div>
                        @if(Auth::user()->id == 1)
                        <div style="text-align: right;" >
                             <button class="btn btn-default" style="margin: 5px 5px 0 0;"><a href="/SJhotel/public/lodgers/create">Add Lodger</a></button>
                        </div>
                        @endif
                            <table class="table table-striped">
                                <tr>
                                    <th>Name</th>
                                    <th>Electricity</th>
                                    <th>Water</th>
                                    <th>Rent</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    
                                    @if($payments != null)
                             @foreach($payments as $p)
                                        <tr>
                                            <td>{{$p->name}}</td>
                                            <td>{{$p->electricity}}</td>
                                            <td>{{$p->water}}</td>
                                            <td>{{$p->rent}}</td>         
                                            <td>{{$p->rent + $p->water + $p->electricity}}</td>
                                            <td>{{$p->status}}</td>
                                            @if(Auth::user()->id == 1)   
                                            <td><a href="/SJhotel/public/lodgers/{{$p->id}}/edit" class="btn btn-default">Edit</a></td>

                                            <td>{!!Form::open(['action' =>['PaymentsController@destroy', $p->id], 'method' => 'POST'])!!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                                {!!Form::close()!!}
                                            </td>
                                            
                                    @endif
                                        </tr>                          
                                </tr>
                             @endforeach
                        @endif
                                                            
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection