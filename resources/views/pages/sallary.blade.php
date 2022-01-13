@extends('main')
@section('content')
<h1> Sallary Scale</h1>

<table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Grade</th>
      <th scope="col">Basic</th>
      <th scope="col">Allowance</th>
      <th scope="col">Total</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

  @foreach($sallarys as $key=>$sallary)

  
  <tr>

<th scope ="row">{{$key+1}}</th>
  <td>{{$sallary->grade}}</td>
  <td>{{$sallary->basic}}</td>
  <td>{{$sallary->allowance}}</td>
  <td>{{$sallary->total}}</td>

  
<td>
  
  <a class="btn btn-danger" href="">Delete</a> 
 <a class="btn btn-warning" href="">Edit</a>
</td>
</tr>
    



      @endforeach
  </tbody>
</table>

<a href="{{route('sallary_add')}}" class="btn btn-secondary" type="button">Sallary_add</a>
@endsection