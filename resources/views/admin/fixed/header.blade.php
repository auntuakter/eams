


<div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <!-- <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button> -->

            @if(auth()->user()->role=='user')

            <div>

            <a class="btn btn-info" href="{{route('notification_seen')}}">Notifications <span class="badge badge-danger">{{Auth::user()->unreadnotifications()->count()}} </span> Your request has been approved
                </a>
            @endif
            
            <a href="{{route('admin.logout')}}"button type="button" class="btn btn-info" style="margin-left:950px;color:fff;position:relative;margin-lef">Logout</a>
            </div>


            
          <!-- </form> -->

          </div>
    </nav>





     