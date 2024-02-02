@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Account Information</h2>
            <!-- Account information form -->
            <form action="{{ route('account.update') }}" method="POST">
                @csrf
                <!-- Include other form fields here -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
