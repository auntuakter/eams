
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <h1 style="color:#172b4d;">EAMS </h1>
       <!-- <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>   -->
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            @if(auth()->user()->role=='admin')
            <li class="nav-item">
              <a class="nav-link active" href="{{route('dashboard')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <i class="material-icons">dashboard</i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('department')}}">
                <i class="ni ni-planet text-orange"></i>
                <i class="material-icons">account_balance</i>
                <span class="nav-link-text">Department</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('designation')}}">
                <i class="ni ni-planet text-orange"></i>
                <i class="material-icons">account_circle</i>
                <span class="nav-link-text">Designation</span>
              </a>
            </li>




            <li class="nav-item">
              <a class="nav-link" href="{{route('employee')}}">
                <i class="ni ni-planet text-orange"></i>
                <i class="material-icons">group_add</i>
                <span class="nav-link-text">Employee</span>
              </a>
            </li>

            @endif

            @if(auth()->user()->role=='user')

            <li class="nav-item">
              <a class="nav-link" href="{{route('profile')}}">
                <i class="ni ni-pin-3 text-primary"></i>
                <i class="material-icons">person_pin</i>

                <span class="nav-link-text">MY Profile</span>
                
              </a>
            </li>
            @endif
            <li class="nav-item">
              <a class="nav-link" href="{{route('attendance')}}">
                <i class="ni ni-pin-3 text-primary"></i>
                <i class="material-icons">alarm</i>
                <span class="nav-link-text">Attendance</span>
              </a>
            </li>


            @if(auth()->user()->role=='admin')
            <li class="nav-item">
              <a class="nav-link" href="{{route('attendance_report')}}">
                <i class="ni ni-pin-3 text-primary"></i>
                <i class="material-icons">event_note</i>
                <span class="nav-link-text">Attendance Report</span>
              </a>
            </li>

            @endif
            
            <li class="nav-item">
              <a class="nav-link" href="{{route('leave_type')}}">
                <i class="ni ni-pin-3 text-primary"></i>
                <i class="material-icons">border_all</i>
                <span class="nav-link-text">Leave Type</span>
              </a>
            </li>



            <li class="nav-item">
              <a class="nav-link" href="{{route('leave')}}">
                <i class="ni ni-pin-3 text-primary"></i>
                <i class="material-icons">weekend</i>
                <span class="nav-link-text">Leave</span>
              </a>
            </li>

            @if(auth()->user()->role=='admin')


            <!-- <li class="nav-item">
              <a class="nav-link" href="{{route('movement')}}">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Movement</span>
              </a>
            </li> -->
            @endif

            <li class="nav-item">
              <a class="nav-link" href="{{route('notice')}}">
                <i class="ni ni-pin-3 text-primary"></i>
                <i class="material-icons">event_note</i>
                <span class="nav-link-text">Notice</span>
              </a>
            </li>
          
<!--           
            @if(auth()->user()->role=='admin')

 
            <li class="nav-item">
              <a class="nav-link" href="{{route('report')}}">
                <i class="ni ni-circle-08 text-pink"></i>
                <i class="material-icons">event_note</i>
                <span class="nav-link-text">Report</span>
              </a>
            </li>

            
             <li class="nav-item">
              <a class="nav-link" href="{{route('sallary')}}">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Sallary</span>
              </a>
            </li>
            @endif -->

            
            
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          
          <!-- Navigation -->
          
        </div>
      </div>
    </div>
  </nav>