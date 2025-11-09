<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
        crossorigin="anonymous">

  <title>Student Manajemen System</title>

  <style>
    /* Sidebar styling */
    .sidebar {
      background-color: #f1f1f1;
      height: 100vh;
      padding-top: 20px;
    }

    .sidebar a {
      display: block;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
    }

    .sidebar a.active {
      background-color: #04AA6D;
      color: white;
    }

    .sidebar a:hover:not(.active) {
      background-color: #555;
      color: white;
    }

    /* Content */
    .content {
      padding: 20px;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#"><h2>Student Manajemen Project</h2></a>
  </nav>

  <!-- Main Layout -->
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-3 col-lg-2 sidebar">
        <a class="active" href="#home">Home</a>
        <a href="{{ url('/students')}}">Student</a>
        <a href="{{'/teachers'}}">Teacher</a>
        <a href="{{'/courses'}}">Course</a>
        <a href="{{'/batches'}}">Batches</a>
        <a href="{{'/enrollments'}}">Enrollment</a>
        <a href="{{'/payments'}}">Payment</a>
      </div>

      <!-- Content -->
      <div class="col-md-9 col-lg-10 content">
        @yield('content')
      </div>
    </div>
  </div>

</body>
</html>
