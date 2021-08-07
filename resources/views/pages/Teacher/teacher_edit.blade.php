 @extends('layouts.master')
@section('title','teacher_edit')
@section('main_content')

<h2>Update Student</h2>

 <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                Update teacher
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body">
                              
<form action="{{route('teacher_update',$teacher->id)}}" method="post" class="needs-validation" novalidate>
    @csrf

  <div class="form-group">
    <label for="teacherId">Teacher ID:</label>
    <input type="text" class="form-control" value="{{$teacher->teacher_id}}"id="reg_id" placeholder="Enter Teacher ID" name="teacher_id">
  </div>



 <div class="form-group">
    <label for="indexId">Index ID:</label>
    <input type="text" class="form-control"  value="{{$teacher->index_id}}" id="index_id" placeholder="Enter Teacher Index No" name="index_id">
  </div>

<div class="form-group">
    <label for="uname">Name:</label>
    <input type="text" class="form-control" value="{{$teacher->name}}"  id="name" placeholder="Enter Name" name="name">
  </div>


<div class="form-group">
    <label for="designation">Designation:</label>
    <input type="text" class="form-control"  value="{{$teacher->designation}}" id="designation" placeholder="Enter Designation" name="designation">
  </div>


  <div class="form-group">
    <label for="uname">Email:</label>
    <input type="text" class="form-control" id="email" value="{{$teacher->mname}}"  placeholder="Enter Mother's Name" name="mname">
  </div>

<div class="form-group">
    <label for="uname">Qualification:</label>
    <input type="text" class="form-control" value="{{$teacher->degree}}"  id="degree" placeholder="Enter Department" name="degree">
  </div>



<div class="form-group">
    <label for="uname">Address:</label>
    <input type="text" class="form-control" id="address" value="{{$teacher->address}}"  placeholder="Enter Address" name="address">
  </div>

  <div class="form-group">
    <label for="password">Password:</label>
    <input type="text" class="form-control"  value="{{$teacher->password}}" id="password" placeholder="Enter password" name="password">
  </div>

<div class="form-group">
    <label for="mobile">Mobile:</label>
    <input type="text" class="form-control" value="{{$teacher->mobile}}"  id="mobile" placeholder="Enter Mobile No" name="mobile">
  </div>

  <button type="submit" class="btn btn-primary">Update Student</button>
</form>
    </div>
   </div>
  </div>

@endsection