 @extends('layouts.master')
@section('title','student_create')
@section('main_content')

<h2>Update Student</h2>

 <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                Update student
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body">
                              
<form action="{{route('student_update',$student->id)}}" method="post" class="needs-validation" novalidate>
    @csrf

  <div class="form-group">
    <label for="uname">Reg ID:</label>
    <input type="text" class="form-control" value="{{$student->reg_id}}"id="reg_id" placeholder="Enter registration ID" name="reg_id">
  </div>



 <div class="form-group">
    <label for="uname">Roll:</label>
    <input type="text" class="form-control"  value="{{$student->roll}}" id="roll" placeholder="Enter Roll" name="roll">
  </div>

<div class="form-group">
    <label for="uname">Name:</label>
    <input type="text" class="form-control" value="{{$student->name}}"  id="name" placeholder="Enter Name" name="name">
  </div>


<div class="form-group">
    <label for="funame">Father's Name:</label>
    <input type="text" class="form-control"  value="{{$student->fname}}" id="fname" placeholder="Enter Father's Name" name="fname">
  </div>


  <div class="form-group">
    <label for="uname">Mother's Name:</label>
    <input type="text" class="form-control" id="mname" value="{{$student->mname}}"  placeholder="Enter Mother's Name" name="mname">
  </div>

<div class="form-group">
    <label for="uname">Department:</label>
    <input type="text" class="form-control" value="{{$student->department}}"  id="department" placeholder="Enter Department" name="department">
  </div>

  <div class="form-group">
    <label for="uname">Information:</label>
    <textarea rows="10"{!!$student->info!!}class="form-control" id="info"   placeholder="Enter Information" name="info"></textarea>
  </div>

<div class="form-group">
    <label for="uname">Academy:</label>
    <input type="text" class="form-control" id="academy" value="{{$student->academy}}"  placeholder="Enter Academy name" name="academy">
  </div>

  <div class="form-group">
    <label for="password">Password:</label>
    <input type="text" class="form-control"  value="{{$student->password}}" id="password" placeholder="Enter password" name="password">
  </div>

<div class="form-group">
    <label for="mobile">Mobile:</label>
    <input type="text" class="form-control" value="{{$student->mobile}}"  id="mobile" placeholder="Enter Mobile No" name="mobile">
  </div>

  <button type="submit" class="btn btn-primary">Update Student</button>
</form>
    </div>
   </div>
  </div>

@endsection