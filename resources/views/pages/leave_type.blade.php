@extends('main')
@section('content')

<h1>Leave_type</h1>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Leave type</th>
      <th scope="col">Day of amount</th>
      <th scope="col">Status</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
  @foreach($leave_types as $key=>$leave_type)
  <tr>

     <th scope ="row">{{$key+1}}</th>
       <td>{{$leave_type->leave_type}}</td>
        <td>{{$leave_type->day_of_amount}}</td>
         <td>{{$leave_type->status}}</td>
          <td>{{$leave_type->description}}</td>

  <!-- <td>
      <a class="btn btn-success" href="">View</a>
     <a class="btn btn-danger" href="">Delete</a>  -->
    <!-- <a class="btn btn-warning" href="">Edit</a>
  </td> -->
  
</tr>
@endforeach
 
  </tbody>
</table>

<!-- User don't access it. -->

@if(auth()->user()->role=='admin')
<a href="{{route('leave_type_add')}}" class="btn btn-secondary" type="button">Add New Leave Type</a>
@endif

@endsection
