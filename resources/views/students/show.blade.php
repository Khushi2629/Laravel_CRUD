@extends('students.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Enrollment : {{ $students->enrollment }}</p>
        <p class="card-text">Dance : {{ $students->dance }}</p>
        <p class="card-text">Mobile : {{ $students->mobile }}</p>
        <p class="card-text">Address : {{ $students->address }}</p>

  </div>
       
    </hr>
  
  </div>
</div>