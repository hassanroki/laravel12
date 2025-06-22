@extends('layouts.appOld')
@section('styles')
    <style>

    </style>
@endsection

@section('content')
    <!-- Main Content -->
    <div class="col-md-10 p-4">
        <div class="form-container">
            <h5 class="text-white bg-primary p-2 rounded">Teacher Registration</h5>
            <x-ErrorsComponent className="alert alert-danger" />
            <form action="{{ route('teacher.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter name"
                        value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email"
                        value="{{ old('email') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="number" name="age" class="form-control" placeholder="Enter age"
                        value="{{ old('age') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Date of Birth</label>
                    <input type="date" name="dob" class="form-control" placeholder="Enter age"
                        value="{{ old('dob') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Gender</label><br>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="gender" id="male" value="m"
                            {{ old('gender') == 'm' ? 'checked' : '' }}>
                        <label for="male" class="form-check-label">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="gender" id="female" value="f"
                            {{ old('gender') == 'f' ? 'checked' : '' }}>
                        <label for="female" class="form-check-label">Female</label>
                    </div>
                </div>

        </div>
        <div class="mb-3">
            <label class="form-label">Score</label>
            <input type="number" name="scores" class="form-control" placeholder="Enter score" value="{{ old('scores') }}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="image">Image</label>
            <input type="file" id="image" name="image" class="form-control" value="{{ old('image') }}"
                accept="image/*">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password">
            <div class="form-text">Password must include both letters and numbers, at least 6 characters.</div>
        </div>
        <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    </div>
@endsection

@section('scripts')
    <script></script>
@endsection
