@extends('layouts.app')
@section('styles')
    <style>

    </style>
@endsection

@section('content')
    <!-- Main Content -->
    <div class="col-md-10 p-4">
        <div class="form-container">
            <h5 class="text-white bg-primary p-2 rounded">Student Edit</h5>
            <form action="{{ route('teacher.update', $teacher->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" value="{{ $teacher->name }}" class="form-control"
                        placeholder="Enter name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="{{ $teacher->email }}" class="form-control"
                        placeholder="Enter email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="number" name="age" value="{{ $teacher->age }}" class="form-control"
                        placeholder="Enter age">
                </div>
                <div class="mb-3">
                    <label class="form-label">Date of Birth</label>
                    <input type="date" name="dob" value="{{ $teacher->dob }}" class="form-control"
                        placeholder="Enter age">
                </div>
                <div class="mb-3">
                    <label class="form-label">Gender</label><br>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="gender" id="male" value="m"
                            {{ $teacher->gender == 'm' ? 'checked' : '' }}>
                        <label for="male" class="form-check-label">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="gender" id="female" value="f"
                            {{ $teacher->gender == 'f' ? 'checked' : '' }}>
                        <label for="female" class="form-check-label">Female</label>
                    </div>
                </div>

        </div>
        <div class="mb-3">
            <label class="form-label">Score</label>
            <input type="number" name="scores" value="{{ $teacher->scores }}" class="form-control"
                placeholder="Enter score" value="0">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
    </div>
@endsection

@section('scripts')
    <script></script>
@endsection
