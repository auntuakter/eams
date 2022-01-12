@extends('main')
@section('content')
<h1> Sallary Scale</h1>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Grade</th>
      <th scope="col">Basic</th>
      <th scope="col">Allowance</th>
      <th scope="col">Total</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">A</th>
      <td>12000</td>
      <td>7000</td>
      <td>19000</td>
      <td>
          <!-- <a class="btn btn-success" href="">View</a> -->
         <a class="btn btn-danger" href="">Delete</a>
        <a class="btn btn-warning" href="">Edit</a>

      </td>
    </tr>
    
    
  </tbody>
</table>
<a href="{{route('sallary_add')}}" class="btn btn-secondary" type="button">Sallary_add</a>
@endsection