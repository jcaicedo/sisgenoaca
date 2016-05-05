@extends('layouts.head_dev')
@section('title','Login')
@section('content')
	@include('alerts.errors')

<div class="login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href=""><b>SISGENOACA</b></a>
		</div>
		<!--./login-logo-->
		<div class="login-box-body">
			<p class="login-box-msg">Incie Sesión</p>
			{!!Form::open(['route'=>'log.store','method'=>'POST'])!!}

	
						<div class="form-group has-feedback">
							<input type="email" class="form-control" name="email" placeholder="Email">
							  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
							<input type="password" class="form-control" name="password" placeholder="Password">
							 <span class="glyphicon glyphicon-lock form-control-feedback"></span>

						</div>

					  <div class="row">
					        <div class="col-xs-8">
					          <div class="checkbox icheck">
					            <label>
					              <input type="checkbox"> Remember Me
					            </label>
					          </div>
					        </div>
					        <!-- /.col -->
					        <div class="col-xs-4">
					          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
					        </div>
					        <!-- /.col -->
					      </div>
			
			{!!Form::close()!!}
					<div class="social-auth-links text-center">
				      <p>- OR -</p>
				      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
				        Facebook</a>
				      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
				        Google+</a>
		    </div>
		    <!-- /.social-auth-links -->
		     <a href="#">I forgot my password</a><br>
    		<a href="register.html" class="text-center">Register a new membership</a>
		
		</div>
  <!-- /.login-box-body -->
  <div><br>
  <br>
  <br>
  <br></div>
	</div>
	<!-- /.login-box -->
</div>
<!-- jQuery 2.1.4 -->
<script src="/vendor/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
@endsection