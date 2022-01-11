@extends('main')
@section('content')

<a href="{{route('department_add')}}" class="btn btn-secondary" type="button">Add New Department</a>
<hr>
<h1> Department List</h1>

<!-- successfull message showing -->
@if(session()->has('success'))
        <p class="alert alert-success">
            {{session()->get('success')}}
        </p>
    @endif

<!-- list -->

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Department_code</th>
      <th scope="col">Department_name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($departments as $key=>$department)
    <tr>

    <th scope ="row">{{$key+1}}</th>
      <td>{{$department->department_code}}</td>
      <td>{{$department->department_name}}</td>

      <td>
          <!-- <a class="btn btn-success" href="">View</a> -->
         <a class="btn btn-danger" href="{{route('department.delete',$department->id)}}">Delete</a>
        <a class="btn btn-warning" href="{{route('department.edit',$department->id)}}">Edit</a>

      </td>

    </tr>
    @endforeach
  </tbody>
</table>





@endsection