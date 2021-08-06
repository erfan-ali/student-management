 @extends('layouts.master')
@section('title','MonthlyPay_create')
@section('main_content')

<h2 align="center">Monthly Pay Create</h2>

 <div class="container-fluid px-4">
                        <div style="padding: 30px 60px;" class="card mb-4">
                            <div class="card-body">
                                Create Monthly Pay
                            </div>
                        </div>
                        <div style="padding: 30px 60px;" class="card mb-4">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body">
<form action="{{route('monthlyPay_store')}}" method="post" class="needs-validation" novalidate>


@csrf

  <div class="form-group">
    <label for="uname">Reg ID:</label>
    <input type="text" class="form-control" id="id" placeholder="Enter registration ID" name="reg_id">
  </div>

<div class="form-group">
    <label for="date">Date:</label>
    <input type="text" class="form-control" id="date" placeholder="Enter current date" name="date">
  </div>


<div class="form-group">
    <label for="section">Section:</label>
    <input type="text" class="form-control" id="section" placeholder="Enter Section" name="section">
  </div>


 <div class="form-group">
    <label for="uname">Roll:</label>
    <input type="text" class="form-control" id="roll" placeholder="Enter Roll" name="roll">
  </div>


<div class="form-group">
    <label for="receiptNo">Receipt No:</label>
    <input type="text" class="form-control" id="receiptNo" placeholder="Enter receipt No." name="receiptNo">
  </div>




<div class="form-group">
    <label for="monthsName">Months Name:</label>
    <input type="text" class="form-control" id="monthsName" placeholder="Enter Months Name" name="monthsName">
  </div>


<div class="form-group">
    <label for="admission">Admission Fee:</label>
    <input type="text" class="form-control" id="admission" placeholder="Enter Admission Fee" name="admission">
  </div>


<div class="form-group">
    <label for="reAdmission">Re-Admission Fee:</label>
    <input type="text" class="form-control" id="reAdmission" placeholder="Enter Re-Admission Fee" name="reAdmission">
  </div>




  <div class="form-group">
    <label for="school">School Yearly Fee:</label>
    <input type="text" class="form-control" id="school" placeholder="Enter School Yearly Fee" name="school">
  </div>


<div class="form-group">
    <label for="cityCorp">City Corp. Yearly Fee:</label>
    <input type="text" class="form-control" id="cityCorp" placeholder="Enter City Corp Yearly Fee" name="cityCorp">
  </div>
 

<div class="form-group">
    <label for="guide">Guide Yearly Fee:</label>
    <input type="text" class="form-control" id="guide" placeholder="Enter Guide Yearly Fee" name="guide">
  </div>

  <div class="form-group">
    <label for="redCrecent">Red Crecent Yearly Fee:</label>
    <input type="text" class="form-control" id="password" placeholder="Enter Red Crecent Yearly Fee" name="redCrecent">
  </div>

<div class="form-group">
    <label for="current">Current Month Fee:</label>
    <input type="text" class="form-control" id="current" placeholder="Enter Current Month Fee" name="current">
  </div>


<div class="form-group">
    <label for="due">Dues Fee:</label>
    <input type="text" class="form-control" id="due" placeholder="Enter Dues Fee" name="due">
  </div>



<div class="form-group">
    <label for="advance">Advance Fee:</label>
    <input type="text" class="form-control" id="advance" placeholder="Enter Advance Fee" name="advance">
  </div>




<div class="form-group">
    <label for="examFee">Exam Fee:</label>
    <input type="text" class="form-control" id="examFee" placeholder="Enter Exam Fee" name="examFee">
  </div>



<div class="form-group">
    <label for="admitCard">Admit Card Fee:</label>
    <input type="text" class="form-control" id="admitCard" placeholder="Enter Admitcard Fee" name="admitCard">
  </div>

<div class="form-group">
    <label for="syllebus">Syllebus Fee:</label>
    <input type="text" class="form-control" id="syllebus" placeholder="Enter Syllebus Fee" name="syllebus">
  </div>


<div class="form-group">
    <label for="others">Others Fee:</label>
    <input type="text" class="form-control" id="others" placeholder="Enter Others Fee" name="others">
  </div>


<div class="form-group">
    <label for="total">Total Fee:</label>
    <input type="text" class="form-control" id="total" placeholder="Enter Total Fee" name="total">

    <div class="form-group">
    <label for="pic">Picture:</label>
    <input type="text" class="form-control" id="pic" placeholder="Picture" name="pic">
  </div>
  </div>



  <button type="submit" class="btn btn-primary">Submit Payment</button>
</form>
    </div>
   </div>
  </div>
  
@endsection