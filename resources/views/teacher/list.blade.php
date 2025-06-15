@extends('layouts.app')
@section('styles')
    <style>

    </style>
@endsection

@section('content')
    <!-- Main Content -->
    <div class="col-md-10 p-4">
        <h2 class="text-center mb-4">Teachers</h2>
        <form action="{{ route('teacher.index') }}" method="GET">
            <div class="input-group mb-3 justify-content-center">
                <input type="text" class="form-control w-50" placeholder="Search" id="search" name="search"
                    value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary">Search</button>
                <a href="{{ route('teacher.add') }}" class="btn btn-info">Add Student</a>
            </div>
        </form>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Score</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data rows go here -->
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>
                            @if ($teacher->image)
                                <img src="{{ asset('storage/' . $teacher->image) }}" alt="" width="150px" height="150px">
                            @endif
                        </td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>{{ $teacher->age }}</td>
                        <td>{{ $teacher->dob }}</td>
                        <td>{{ $teacher->gender }}</td>
                        <td>{{ $teacher->scores }}</td>
                        <td class="d-flex">
                            <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete?')" style="displa:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="paginationDiv">
        {{ $teachers->appends(request()->query())->links('pagination::bootstrap-5') }}
    </div>
@endsection

@section('scripts')
    <script></script>
@endsection
