@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Customers list</div>
                    <div class="card-body">
                    <a href="{{ route('customers.create') }}" class="btn btn-success float-end">Add</a>
                   
                        <hr>
                    <table class="table">
                        <thead>
                                <tr>
                                    <th>Companies</th> 
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Comment</th>
                                    <th>Company_ID</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $customer)
                            <tr>
                            <td>
                            @foreach($customer->companies as $company)
                            {{$company->id}} {{$company->name}} {{$company->surname}}<br>
                            @endforeach
                            </td>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->surname }}</td>
                            <td>{{ $customer->phone}}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->comment }}</td>
                            <td>{{ $customer->company_id }}</td> 
                            <td>
                                    <a class="btn btn-info" href="{{ route('customers.edit', $customer->id) }}">Edit</a>
                                </td>
                                <td>            
                                    <form method="post" action="{{ route('customers.destroy', $customer->id) }}">
                                        @csrf
                                        @method("delete")
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                    
                                </td>      
                               @endforeach                           
                           </tr>                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
