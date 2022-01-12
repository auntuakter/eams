@extends('main')
@section('content')
<h1> Notice !!Notice !! Notice !!</h1>
<hr>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Holiday</th>
      @if(auth()->user()->role=='admin')
      <th scope="col">Action</th>
      @endif
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">21-02-2022</th>
      <td>International Mother Language Day</td>
      @if(auth()->user()->role=='admin')
    <td>
         <a class="btn btn-danger" href="">Delete</a> 
        <a class="btn btn-warning" href="">Edit</a>
      </td>
      @endif

</tr>


  </tbody>
</table>

<p> This is notify to everyone that tomorrow(22-01-22),our Company will closed due to some reason.This is notify to everyone that tomorrow(22-01-22),our Company will closed due to some reason.This is notify to everyone that tomorrow(22-01-22),our Company will closed due to some reason.This is notify to everyone that tomorrow(22-01-22),our Company will closed due to some reason.</p>

@endsection
