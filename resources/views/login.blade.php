@extends('layouts.master')

@section('content')       
 <section id="form"><!--form-->
  <div class="row">
    <div class="col-sm-4 col-sm-offset-1">
      <div class="login-form"><!--login form-->
        <h2>Login to your account</h2>
        <form method="POST" action="{{url('auth/login')}}">
            {!! csrf_field() !!}
            <div class="form-group">
              <input type="email" name="email" id="email" placeholder="Email Address" 
                    class="form-control"/>
            </div>
            <div class="form-group">
              <input type="password" name="password" id="password" placeholder="Password"                                          class="form-control"/>
            </div>
            <div class="checkbox"><input name="remember" id="remember" type="checkbox" class="checkbox" class="form-control">Keep me signed in</div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div><!--/login form-->
    </div>
    <div class="col-sm-1">
        <h2 class="or">OR</h2>
    </div>
    <div class="col-sm-4">
        <div class="signup-form"><!--sign up form-->
            <h2>New User Signup!</h2>
            <form method="POST" action="{{url('register')}}">
                {!! csrf_field() !!}
                <div class="form-group">
                  <input type="text" name="name" id="name"  placeholder="Name" class="form-control">
                </div>
                <div class="form-group">
                  <input type="email" name="email" placeholder="Email Address" class="form-control"/>  
                </div>
                <div class="form-group">
                  <input type="password" name="password" placeholder="Password" class="form-control">  
                </div>
                <button type="submit" class="btn btn-success">Signup</button>
            </form>
        </div><!--/sign up form-->
    </div>
  </div>
</section><!--/form-->
@endsection