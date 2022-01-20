@extends('main')
@section('content')

<!-- Success Message show -->
@if(session()->has('success'))
        <p class="alert alert-success">
            {{session()->get('success')}}
        </p>
    @endif


<!-- search -->
<form action="{{route('employee')}}" method="GET">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <input value="{{$key}}" type="text" placeholder="Search" name="search" class="form-control">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-success">Search</button>
        </div>
    </div>
    </form>
    @if($key)
    <h4>
        Your are searching for: {{$key}}. found: {{$employees->count()}}
    </h4>
@endif

<hr>
<h1> Employee List</h1>
<a href="{{route('employee_add')}}" class="btn btn-secondary" type="button">Create New Profile</a>
   


<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <!-- <th scope="col">Address</th> -->
      <th scope="col">Department</th>
      <!-- <th scope="col">Gender</th>
      <th scope="col">Joined_on</th>
      <th scope="col">Contact_no</th> -->
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($employees as $key=>$employee)
    <tr>

      <th scope ="row">{{$key+1}}</th>
      <td>{{$employee->name}} "---" {{$employee->id}}</td>
      <td>{{$employee->email}}</td>
      <td>{{$employee->password}}</td>
      <!-- <td>{{$employee->address}}</td> -->
      <td>{{$employee->department->department_name}}</td>
      
      
      <!-- <td>{{$employee->gender}}</td>
      <td>{{$employee->joined_on}}</td>
      <td>{{$employee->contact_no}}</td> -->

      <td>
        <img style="border-radius: 4px;" width="100px;" src="{{url('/employees/'.$employee->image)}}" alt="no image">

       </td>
      <td>
          <a class="btn btn-success" href="{{route('employee.view',$employee->id)}}">View</a>
         <a class="btn btn-danger" href="{{route('employee.delete',$employee->id)}}">Delete</a> 
        <a class="btn btn-warning" href="{{route('employee.edit',$employee->id)}}">Edit</a>
      </td>

    </tr>
    @endforeach
  
    
  </tbody>

</table>



@endsection