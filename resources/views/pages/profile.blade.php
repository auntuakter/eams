@extends('main')
@section('content')



<style>
    body {
        /* background: -webkit-linear-gradient(left, #3931af, #00c6ff); */
        background-color: red;
    }

    .emp-profile {
        width: 100%;
        padding: 5%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background-color: #32325d;
    }

    .profile-img {
        text-align: center;

    }

    .profile-img img {
        display: block;
        margin-left: auto;
        margin-right: auto;

        width: 50%;
        border-radius: 50%;

    }

    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }

    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }

    .profile-head h5 {
        color: #333;
    }

    .profile-head h6 {
        color: #0062cc;
    }

    .profile-edit-btn {
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
        cursor: pointer;
    }

    .proile-rating {
        font-size: 12px;
        color: #818182;
        margin-top: 5%;
    }

    .proile-rating span {
        color: #495057;
        font-size: 15px;
        font-weight: 600;
    }

    .profile-head .nav-tabs {
        margin-bottom: 5%;
    }

    .profile-head .nav-tabs .nav-link {
        font-weight: 600;
        border: none;
    }

    .profile-head .nav-tabs .nav-link.active {
        border: none;
        border-bottom: 2px solid #0062cc;
    }

    .profile-work {
        padding: 14%;
        margin-top: -15%;
    }

    .profile-work p {
        font-size: 12px;
        color: #818182;
        font-weight: 600;
        margin-top: 10%;
    }

    .profile-work a {
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
    }

    .profile-work ul {
        list-style: none;
    }

    .profile-tab label {
        font-weight: 600;
    }

    .profile-tab p {
        font-weight: 600;
        color: #0062cc;
    }

</style>








<!-- 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

<h1>My Profile </h1>

<div class="container emp-profile">
    <form  action="{{route('profile.update',$profile->id)}}" method="post" enctype="multipart/form-data">
      @csrf
         @method("put") 
        <div class="row">
            <div class="col-md-6">
                <div class="profile-img">
                    <img src="{{url('/employees/'.$profile->image)}}"
                        alt="" />
                    <!-- <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div> -->
                    <hr>
                </div>
            </div>
            <hr>
            <hr>
        </div>


        <div class="col-md-8">
            <div class="tab-content profile-tab" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="form-group row">
                        <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input name="name" type="text" class="form-control" id="inputName3"
                                value="{{$profile->name}}" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input readonly name="email" type="email" class="form-control" id="inputEmail3"
                                value="{{$profile->email}}" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputAddress3" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input name="address" type="address" class="form-control" id="inputAddress3"
                                value="{{$profile->address}}" placeholder="Address">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputDepartment3" class="col-sm-2 col-form-label">Department</label>
                        <div class="col-sm-10">
                            <input name="department" type="department" class="form-control" id="inputDepartment3"
                                value="{{$profile->department}}" placeholder="Department">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputDesignation3" class="col-sm-2 col-form-label">Designation</label>
                        <div class="col-sm-10">
                            <input name="designation" type="designation" class="form-control" id="inputDesignation3"
                                value="{{$profile->designation}}" placeholder="Designation">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="inputGender3" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                            <input name="gender" type="gender" class="form-control" id="inputGender3"
                                value="{{$profile->gender}}" placeholder="Gender">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputJoined_on3" class="col-sm-2 col-form-label">Joined_on</label>
                        <div class="col-sm-10">
                            <input name="joined_on" type="joined_on" class="form-control" id="inputJoined_on3"
                                value="{{$profile->joined_on}}" placeholder="Joined_on">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputContact_no3" class="col-sm-2 col-form-label">Contact_no</label>
                        <div class="col-sm-10">
                            <input name="contact_no" type="contact_no" class="form-control" id="inputContact_no3"
                                value="{{$profile->contact_no}}" placeholder="Contact_no">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="inputImage3" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input name="image" type="file" class="form-control" id="inputImage"
                                aria-describedby="emailHelp">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info"> update</button>
  </form>



                    @endsection
