@extends('main')
@section('content')
@if(session()->has('success'))
        <p class="alert alert-success">
            {{session()->get('success')}}
        </p>
    @endif
<a href="{{route('employee_add')}}" class="btn btn-secondary" type="button">Create New Profile</a>

<hr>
<h1> Employee List</h1>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Address</th>
      <th scope="col">Department</th>
      <th scope="col">Gender</th>
      <th scope="col">Joined_on</th>
      <th scope="col">Contact_no</th>
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
      <td>{{$employee->address}}</td>
      <td>{{$employee->department}}</td>
      <td>{{$employee->gender}}</td>
      <td>{{$employee->joined_on}}</td>
      <td>{{$employee->contact_no}}</td>

      <th>
        <img style="border-radius: 4px;" width="100px;" src=" {{url('/uploads/'.$employee->image)}}" alt="no image">

       </th>
      <td>
          <a class="btn btn-success" href="{{route('employee.view',$employee->id)}}">View</a>
         <a class="btn btn-danger" href="{{route('employee.delete',$employee->id)}}">Delete</a> 
        <a class="btn btn-warning" href="">Edit</a>
      </td>

    </tr>
    @endforeach
  
    
  </tbody>

</table>



@endsection