
<style>
  .collapse{
    background-color:##DE3163;
  }
</style>
<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <h1>EAMS</h1>
      <!-- <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div> -->
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="dashboard.html">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('department')}}">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Department</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('designation')}}">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Designation</span>
              </a>
            </li>




            <li class="nav-item">
              <a class="nav-link" href="{{route('employee')}}">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Employee</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('attendance')}}">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Attendance</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('notification')}}">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Notification</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('leave_type')}}">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Leave_type</span>
              </a>
            </li>



            <li class="nav-item">
              <a class="nav-link" href="{{route('leave')}}">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Leave</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('movement')}}">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Movement</span>
              </a>
            </li>
          
            



            <li class="nav-item">
              <a class="nav-link" href="{{route('report')}}">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Report</span>
              </a>
            </li>
            
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          
          <!-- Navigation -->
          
        </div>
      </div>
    </div>
  </nav>