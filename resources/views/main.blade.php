

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Created By Auntu">
  <title>Employee Attendance Management System</title>
 
  <!-- Argon CSS -->
  <link rel="stylesheet" href="/css/argon.min.css?v=1.2.0" type="text/css">
 
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
    <!-- <div class="container  pt-5"> -->
    
      </div>
          @yield('content')
      </div>
    



   

      <!-- Footer -->



      @include('admin.fixed.footer')
     
</body>

</html>