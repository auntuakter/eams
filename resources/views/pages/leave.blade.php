@extends('main')
@section('content')

<h1>Leave</h1>

<hr>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th> 
      <th scope="col">Leave-type</th>
      <th scope="col">Description</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Status</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($leaves as $key=>$leave)
  

    <tr>
 <th scope ="row">{{$key+1}}</th>
<td>{{$leave->user->name}}</td>
<td>{{$leave->leave_type}}</td>
<td>{{$leave->description}}</td>
<td>{{$leave->from}}</td>
<td>{{$leave->to}}</td>

<td>
@if ($leave->status==0)
            <a class="btn btn-warning" href="#">Pending</a>
            
@elseif($leave->status==1)
          <a class="btn btn-success" href="#">Approved</a>

          <!-- Deny Request -->
          @else($leave->status ==2)
          <a class="btn btn-success" href="">Deny</a>

          @endif


          


</td>
@if($leave->status!=1)
<td><form action="{{route('update.status',$leave->id)}}" method="POST">
          @csrf
          @if(auth()->user()->role=='admin')
          <div class="form-group">
            <td>
            <button type="submit" class="btn btn-primary" name="status" value="1">Approve</button>
            @if($leave->status!=2)
            <a href="{{route('admin.leave.cancel',$leave->id)}}" class="btn btn-primary">Cancel</a>   
            @endif
        </form>
        </td>
        @endif
@endif
</tr>
@endforeach
 
  </tbody>
</table>
<a href="{{route('apply_leave')}}" class="btn btn-secondary" type="button">Apply For Leave</a>


@endsection
