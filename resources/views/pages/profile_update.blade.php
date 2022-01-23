@extends('main')
@section('content')
<h1>Profile Update</h1>


@if(session()->has('success'))
        <p class="alert alert-success">
            {{session()->get('success')}}
        </p>
    @endif
<form action=" {{route('profile.update',$profile->id )}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
                                                           
  <div class="form-group row">
    <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input name="name" type="text" class="form-control" id="inputName3" value="{{$profile->name}}" placeholder="Name">
    </div>
  </div>


  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input name="email" type="email" class="form-control" id="inputEmail3" value="{{$profile->email}}" placeholder="Email">
    </div>
  </div>
  

  <div class="form-group row">
    <label for="inputAddress3" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input name="address" type="address" class="form-control" id="inputAddress3" value="{{$profile->address}}" placeholder="Address">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputDepartment3" class="col-sm-2 col-form-label">Department</label>
    <div class="col-sm-10">
      <input name="department" type="department" class="form-control" id="inputDepartment3" value="{{$profile->department}}" placeholder="Department">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputDesignation" class="col-sm-2 col-form-label">Designation/label>
    <div class="col-sm-10">
      <input name="designation" type="designation" class="form-control" id="inputDesignation3" value="{{$profile->designation}}" placeholder="Designation">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputGender3" class="col-sm-2 col-form-label">Gender</label>
    <div class="col-sm-10">
      <input name="gender" type="gender" class="form-control" id="inputGender3" value="{{$profile->gender}}" placeholder="Gender">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputJoined_on3" class="col-sm-2 col-form-label">Joined_on</label>
    <div class="col-sm-10">
      <input name="joined_on" type="joined_on" class="form-control" id="inputJoined_on3" value="{{$profile->joined_on}}" placeholder="Joined_on">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputContact_no3" class="col-sm-2 col-form-label">Contact_no</label>
    <div class="col-sm-10">
      <input name="contact_no" type="contact_no" class="form-control" id="inputContact_no3" value="{{$profile->contact_no}}" placeholder="Contact_no">
    </div>
  </div>
</form>


  <div class="form-group row">
        <label for="inputImage3" class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-10">
        <input name="image" type="file" class="form-control" id="inputImage" aria-describedby="emailHelp">
</div>
    </div>

    <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>

    

@endsection