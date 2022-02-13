

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  
  <meta name="author" content="Created By Auntu">
  <title>Employee Attendance Management System</title>

  <!-- Argon CSS -->
  <link rel="stylesheet" href="/css/argon.min.css?v=1.2.0" type="text/css">
  <!-- <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css"> -->
</head>

<body>

  <!--sidebar-->
  @include('admin.fixed.sidebar')


<!--header-->

@include('admin.fixed.header')



    <!-- Header -->
    <div class="header bg-primary pb-1">
      <div class="container-fluid">
        <div class="header-body">


    <!-- Page content -->
    <!-- <div class="container  pt-5">
     -->
      </div>
          @yield('content')
      </div>






      <!-- Footer -->



      @include('admin.fixed.footer')

</body>

</html>
