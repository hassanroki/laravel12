<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    @yield('styles')
</head>

<body>
    <!-- Top Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand text-white" href="#">My Website</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

<!-- Main Layout -->
  <div class="container-fluid main">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-2 sidebar">
        <h4 class="text-primary">Sidebar</h4>
        <ul class="nav flex-column">
          <li class="nav-item"><a class="nav-link text-primary" href="#">Link 1</a></li>
          <li class="nav-item"><a class="nav-link text-primary" href="#">Link 2</a></li>
          <li class="nav-item"><a class="nav-link text-primary" href="#">Link 3</a></li>
        </ul>
      </div>
    @yield('content')
    </div>
  </div>
  
    <!-- Footer -->
  <div class="footer">
    © 2025 My Website. All rights reserved.
  </div>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
    @yield('scripts')
</body>

</html>
