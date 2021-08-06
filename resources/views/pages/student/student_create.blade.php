 @extends('layouts.master')
@section('title','student_create')
@section('main_content')

<h2 align="center">Create New Student</h2>

 <div class="container-fluid px-4">
                        <div style="padding: 30px 60px;" class="card mb-4">
                            <div class="card-body">
                                Create student
                            </div>
                        </div>
                        <div style="padding: 30px 60px;" class="card mb-4">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body">
<form action="{{route('student_store')}}" method="post" class="needs-validation" novalidate>


@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif
@csrf

  <div class="form-group">
    <label for="uname">Reg ID:</label>
    <input type="text" class="form-control" id="id" placeholder="Enter registration ID" name="reg_id"required>
  </div>



 <div class="form-group">
    <label for="uname">Roll:</label>
    <input type="text" class="form-control" id="roll" placeholder="Enter Roll" name="roll"required>
  </div>

<div class="form-group">
    <label for="uname">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name"required>
  </div>


<div class="form-group">
    <label for="funame">Father's Name:</label>
    <input type="text" class="form-control" id="fname" placeholder="Enter Father's Name" name="fname"required>
  </div>


  <div class="form-group">
    <label for="uname">Mother's Name:</label>
    <input type="text" class="form-control" id="mname" placeholder="Enter Mother's Name" name="mname"required>
  </div>

<div class="form-group">
    <label for="uname">Department:</label>
    <input type="text" class="form-control" id="department" placeholder="Enter Department" name="department"required>
  </div>

  <div class="form-group">
    <label for="uname">Information:</label>
    <textarea rows="10"class="form-control" id="info" placeholder="Enter Information" name="info"></textarea>
  </div>

<div class="form-group">
    <label for="uname">Academy:</label>
    <input type="text" class="form-control" id="academy" placeholder="Enter Academy name" name="academy"required>
  </div>

  <div class="form-group">
    <label for="password">Password:</label>
    <input type="text" class="form-control" id="password" placeholder="Enter password" name="password"required>
  </div>

<div class="form-group">
    <label for="mobile">Mobile:</label>
    <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile No" name="mobile"required>
  </div>

  <button type="submit" class="btn btn-primary">Register Student</button>
</form>
    </div>
   </div>
  </div>
@endsection