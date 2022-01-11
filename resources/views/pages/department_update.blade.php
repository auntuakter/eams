@extends('main')
@section('content')
<h1>Department Update</h1>


@if(session()->has('success'))
        <p class="alert alert-success">
            {{session()->get('success')}}
        </p>
    @endif
<form action=" {{route('department.update',$department->id )}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
<div class="form-group row">
    <label for="inputDepartment_code3" class="col-sm-2 col-form-label">Department_code</label>
    <div class="col-sm-10">
      <input name="department_code" type="department_code" class="form-control" id="inputDepartment_code3" value="{{$department->department_code}}">
    </div>
  </div>
  

  <div class="form-group row">
    <label for="inputDepartment_name3" class="col-sm-2 col-form-label">Department_name</label>
    <div class="col-sm-10">
      <input name="department_name" type="department_name" class="form-control" id="inputDepartment_name3" value="{{$department->department_name}}">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>

  
</form> 
@endsection