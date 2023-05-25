@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Companies list</div>
                    <div class="card-body">
                    
                        <div class="clearfix">
                            <a href=" {{ route('companies.create') }}" class="btn btn-success float-end">Add</a>
                           </div> 
                        
                        <hr>
                        
                        <table class="table">
                        <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($companies as $company)
                            <tr>
                            <td>{{ $company->id }}</td>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->address }}</td>
                            <td>
                                    <a class="btn btn-info" href="{{ route('companies.edit', $company->id) }}">Edit</a>
                                    <a class="btn btn-danger" href="{{route('companies.delete',$company->id)}}">Delete</a>
                            </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
