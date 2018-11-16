@extends('layouts.app')

@section('content')
    <center><h1>Your Payment for this month report</h1></center>

     <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">

                        <div class="panel-heading"><center>Your Expenses</center></div>

                        <div class="panel-body">
                            
                            <table class="table table-striped">
                                <tr>
                                    <th>Electricity</th>
                                    <th>Water</th>
                                    <th>Rent</th>
                                    <th>Status</th>
                                </tr>                              
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection