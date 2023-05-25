@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Customers list</div>
                    <div class="card-body">
                        <form method="post" action="{{ route("customers.update", $customer->id) }}">
                        @csrf
                        <div class="mb-3">
                               <label class="form-label">ID:</label>
                               <input class="form-control @error('id') is-invalid @enderror" name="id" type="text" value="{{ old('id')?:$customer->id }}" required>
                               <div class="invalid-feedback">@error('id') {{ $message }} @enderror</div>
                            </div>
                           <div class="mb-3">
                               <label class="form-label">Name:</label>
                               <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" value="{{ old('name')?:$customer->name }}" required>
                               <div class="invalid-feedback">@error('name') {{ $message }} @enderror</div>
                            </div>
                           <div class="mb-3">
                               <label class="form-label">Surname:</label>
                               <input class="form-control @error('surname') is-invalid @enderror" name="surname" type="text" value="{{ old('surname')?:$customer->surname }}">
                               <div class="invalid-feedback">@error('surname') {{ $message }} @enderror</div>
                            </div>
                            <div class="mb-3">
                               <label class="form-label">Phone:</label>
                               <input class="form-control @error('phone') is-invalid @enderror" name="phone" type="text" value="{{ old('phone')?:$customer->phone }}">
                               <div class="invalid-feedback">@error('phone') {{ $message }} @enderror</div>
                            </div>
                            <div class="mb-3">
                               <label class="form-label">Email:</label>
                               <input class="form-control @error('email') is-invalid @enderror" name="email" type="text" value="{{ old('email')?:$customer->email }}">
                               <div class="invalid-feedback">@error('email') {{ $message }} @enderror</div>
                            </div>
                            <div class="mb-3">
                               <label class="form-label">Comment:</label>
                               <input class="form-control @error('comment') is-invalid @enderror" name="comment" type="text" value="{{ old('comment')?:$customer->comment }}">
                               <div class="invalid-feedback">@error('comment') {{ $message }} @enderror</div>
                            </div>
                            <div class="mb-3">
                               <label class="form-label">Company ID:</label>
                               <input class="form-control @error('company_id') is-invalid @enderror" name="company_id" type="text" value="{{ old('company_id')?:$customer->company_id }}">
                               <div class="invalid-feedback">@error('company_id') {{ $message }} @enderror</div>
                            </div>
                           <button class="btn btn-success">Save</button>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
