@extends('main')
@section('content')
<h1>Employee Update</h1>
<img style="border-radius: 4px;" width="500px;" src="{{url('/employees/'.$employee->image)}}" alt="no image">

<form action=" {{route('employee.update',$employee->id )}} " method="POST"  enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <!-- @method("PATCH") -->
<div class="form-group row">
    <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input name="name" type="text" class="form-control" id="inputEmail3" value="{{$employee->name}}">
    </div>
  </div>


  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input name="email" type="email" class="form-control" id="inputEmail3" value="{{$employee->email}}">
    </div>
  </div>
  

  <div class="form-group row">
    <label for="inputAddress3" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input name="address" type="address" class="form-control" id="inputAddress3" value="{{$employee->address}}">
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
 

  <div class="form-group row">
    <label for="inputGender3" class="col-sm-2 col-form-label">Gender</label>
    <div class="col-sm-10">
      <input name="gender" type="gender" class="form-control" id="inputGender3" value="{{$employee->gender}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputJoined_on3" class="col-sm-2 col-form-label">Joined_on</label>
    <div class="col-sm-10">
      <input name="joined_on" type="joined_on" class="form-control" id="inputJoined_on3" value="{{$employee->joined_on}}">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputContact_no3" class="col-sm-2 col-form-label">Contact_no</label>
    <div class="col-sm-10">
      <input name="contact_no" type="contact_no" class="form-control" id="inputContact_no3" value="{{$employee->contact_no}}">
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