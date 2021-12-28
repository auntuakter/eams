@extends('main')
@section('content')
<a href="{{route('designation_add')}}" class="btn btn-secondary" type="button">Add New Designation</a>
<hr>

<h1>Designation Table</h1>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Designation</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($designations as $key=>$designation)

  <tr>

    <th scope ="row">{{$key+1}}</th>
      <td>{{$designation->designation}}</td>

      <td>
         <a class="btn btn-success" href="">View</a>
         <a class="btn btn-danger" href="">Delete</a> 
        <a class="btn btn-warning" href="">Edit</a>
      </td>
      
</tr>

    @endforeach
    </tbody>
</table>
@endsection