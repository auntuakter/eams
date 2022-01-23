@extends('main')
@section('content')
<form action="{{route('employee.store')}}" method='POST' enctype="multipart/form-data">
  @csrf

  <!-- For Success message -->


@if(session()->has('success'))
<p class="alert alert-success">
    {{session()->get('success')}}
</p>
@endif

<!-- For validation -->

{{-- @if(session()->has('error'))
<p class="alert alert-danger">
    {{session()->get('error')}}
</p>
@endif --}}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif




<h1>Create New profile</h1>
  
  <div class="form-group row">
    <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input name="name" type="text" class="form-control" id="inputEmail3" placeholder="Name">
    </div>
  </div>


  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputAddress3" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input name="address" type="address" class="form-control" id="inputAddress3" placeholder="Address">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputLeave_type3" class="col-sm-2 col-form-label">Department</label>
    <div class="col-sm-10">
<!-- dropdown -->
<select name="department_id" type="leave_type" class="form-control" id="inputLeave_type3" placeholder="Leave_type">
@foreach($departments as $department)
    <option value={{$department->id}}>{{$department->department_name}}</option>   
    @endforeach 
</select>

    </div>
  </div>


  <div class="form-group row">
    <label for="inputLeave_type3" class="col-sm-2 col-form-label">Designation</label>
    <div class="col-sm-10">
<!-- dropdown -->
<select name="designation_id" type="leave_type" class="form-control" id="inputLeave_type3" placeholder="Designation">
@foreach($designations as $designation)
    <option value={{$designation->id}}>{{$designation->designation}}</option>   
    @endforeach 
</select>

    </div>
  </div>




  <!-- <div class="form-group row">
    <label for="inputGender3" class="col-sm-2 col-form-label">Designation</label>
    <div class="col-sm-10">
      
      <input name="designation" type="designation" class="form-control" id="inputDesignation3" placeholder="Designation">
    </div>
  </div> -->



  <div class="form-group row">
    <label for="inputGender3" class="col-sm-2 col-form-label">Gender</label>
    <div class="col-sm-10">
      <input name="gender" type="gender" class="form-control" id="inputGender3" placeholder="Gender">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputJoined_on3" class="col-sm-2 col-form-label">Joined_on</label>
    <div class="col-sm-10">
      <input name="joined_on" type="joined_on" class="form-control" id="inputJoined_on3" placeholder="Joined_on">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputContact_no3" class="col-sm-2 col-form-label">Contact_no</label>
    <div class="col-sm-10">
      <input name="contact_no" type="contact_no" class="form-control" id="inputContact_no3" placeholder="Contact_no">
    </div>
  </div>


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
</form> 
@endsection