@extends('main')
@section('content')

<h1>Leave</h1>
<a href="{{route('apply_leave')}}" class="btn btn-secondary" type="button">Apply For Leave</a>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <!-- <th scope="col">Employee_name</th>
      <th scope="col">Department-name</th> -->
      
      <th scope="col">Name</th>
      <th scope="col">Leave-type</th>
      <th scope="col">Description</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      
      <th scope="col">Action</th>
  
    </tr>
  </thead>
  <tbody>
  @foreach($leaves as $key=>$leave)
  

    <tr>

<th scope ="row">{{$key+1}}</th>
<!-- <td>{{$leave->employee_name}}</td>
<td>{{$leave->department_name}}</td> -->
<td>{{$leave->user->name}}</td>
<td>{{$leave->leave_type}}</td>
<td>{{$leave->description}}</td>
<td>{{$leave->from}}</td>
<td>{{$leave->to}}</td>
<td>
          <a class="btn btn-success" href="">Approve</a>
         <a class="btn btn-danger" href="#">Pending</a> 
       
      </td>

</tr>
@endforeach
 
  </tbody>
</table>



@endsection
