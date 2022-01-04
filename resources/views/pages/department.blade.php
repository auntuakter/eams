@extends('main')
@section('content')

<a href="{{route('department_add')}}" class="btn btn-secondary" type="button">Add New Department</a>
<hr>
<h1> Department List</h1>




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
         <!-- <a class="btn btn-success" href="">View</a>
         <a class="btn btn-danger" href="">Delete</a>  -->
        <a class="btn btn-warning" href="">Edit</a>
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>





@endsection