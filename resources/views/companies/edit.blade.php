@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Companies list</div>
                    <div class="card-body">
                        <form method="post" action="{{ route("companies.update", $company->id) }}">
                        @csrf
                        <div class="mb-3">
                               <label class="form-label">ID:</label>
                               <input class="form-control @error('id') is-invalid @enderror" name="id" type="text" value="{{ old('id')?:$company->id }}" required>
                               <div class="invalid-feedback">@error('id') {{ $message }} @enderror</div>
                            </div>
                           <div class="mb-3">
                               <label class="form-label">Name:</label>
                               <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" value="{{ old('name')?:$company->name }}" required>
                               <div class="invalid-feedback">@error('name') {{ $message }} @enderror</div>
                            </div>
                           <div class="mb-3">
                               <label class="form-label">Address:</label>
                               <input class="form-control @error('address') is-invalid @enderror" name="address" type="text" value="{{ old('address')?:$company->address }}">
                               <div class="invalid-feedback">@error('address') {{ $message }} @enderror</div>
                            </div>
                           <button class="btn btn-success">Save</button>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
