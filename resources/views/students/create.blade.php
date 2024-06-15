@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
</br>
        <label>Enrollment</label></br>
        <input type="text" name="enrollment" id="enrollment" class="form-control"></br>
</br>
        <label>Dance</label></br>
        <input type="text" name="dance" id="dance" class="form-control"></br>
</br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
</br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
</br>
        <input type="submit"      value="Save"            class="btn btn-success"></br>
    </form>
   
  </div>
</div>
@stop
 
