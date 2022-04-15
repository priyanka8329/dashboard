@extends('layout')
@section('content')
<h1 class="py-4 text-primary ">Login Page</h1>
<form action="/loginsubmit" method="POST">
    @csrf
  <div class="mb-2 py-1 ">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    
  </div>
  <div class="mb-2 py-1">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary ">Submit</button>
</form>
@endsection
