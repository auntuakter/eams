@extends('main')
@section('content')
<!-- 
Successfull meassage -->
@if(session()->has('success'))
        <p class="alert alert-success">
            {{session()->get('success')}}
        </p>
    @endif

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
  
         <a class="btn btn-danger" href="{{route('designation.delete',$designation->id)}}">Delete</a> 
        <a class="btn btn-warning" href="{{route('designation.edit',$designation->id)}}">Edit</a>
      </td>
      
</tr>

    @endforeach
    </tbody>
</table>
@endsection