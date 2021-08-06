  
 @extends('layouts.master')
@section('title','User Login')
@section('main_content')




<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>





                                    <form action="{{route('user_login')}}" method="post"class="needs-validation" novalidate>
  
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
  @csrf


<div class="form-group">
    <label for="Email">Email:</label>
    <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email"required>
  </div>

  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password"required>
  </div>

  <button type="submit" class="btn btn-primary">Login</button>
</form>





                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{asset('public/frontend')}}/forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{asset('public/frontend')}}/register.html">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
  

</body>

</html>
                @endsection