@extends('layouts.app')
@section('styles')
<style>
    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    .main {
      flex: 1;
    }
    .sidebar {
      background-color: #f8f9fa;
      padding: 20px;
      min-height: 100%;
    }
    .table th, .table td {
      vertical-align: middle;
      text-align: left;
    }
    .footer {
      background-color: #004080;
      color: white;
      text-align: center;
      padding: 10px 0;
    }
    .navbar {
      background-color: #004080;
    }
    .navbar a {
      color: white !important;
    }
    h2 {
      color: #004080;
    }
    </style>
@endsection



@section('content')
    

      <!-- Main Content -->
      <div class="col-md-10 p-4">
        <h2 class="text-center mb-4">Students</h2>
        <form action="{{ route('teacher.index') }}" method="GET">
          <div class="input-group mb-3 justify-content-center">
          <input type="text" class="form-control w-50" placeholder="Search" id="search" name="search">
          <button type="submit" class="btn btn-primary">Search</button>
        </div>
        </form>
        <table class="table table-bordered table-striped">
          <thead class="table-primary">
            <tr>
              <th>ID</th>
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
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->email }}</td>
                    <td>{{ $teacher->age }}</td>
                    <td>{{ $teacher->dob }}</td>
                    <td>{{ $teacher->gender }}</td>
                    <td>{{ $teacher->scores }}</td>
                    <td class="d-flex">
                        <a href="#" class="btn btn-info btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    
@endsection

@section('scripts')
    <script>

    </script>
@endsection