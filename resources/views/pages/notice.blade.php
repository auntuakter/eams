@extends('main')
@section('content')
<h1> Notice !!Notice !! Notice !!</h1>
<hr>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Holiday</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">21-02-2022</th>
      <td>International Mother Language Day</td>
    
    <td>
         <a class="btn btn-danger" href="">Delete</a> 
        <a class="btn btn-warning" href="">Edit</a>
      </td>

</tr>
  </tbody>
</table>

@endsection
