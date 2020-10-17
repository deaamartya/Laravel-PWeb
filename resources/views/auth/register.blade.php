<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
	<form class="form-signin" method="POST" action="/postregister" style="background: white; border-style: groove; border-color: #0099ff;">
	{{ csrf_field() }}
      <!-- <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
	  <h1 class="h3 mb-3 font-weight-normal">Register</h1>
	  
	  <br>
      <label for="first_name" class="sr-only">First Name</label>
	  <input type="text" name="first_name" id="first_name" class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" value="{{ old('first_name') }}" placeholder="First Name" required autofocus>
	  @if ($errors->has('first_name'))
		<div class="invalid-feedback">
			{{ $errors->first('first_name') }}
		</div>
	  @endif
	  
	  <br>
      <label for="last_name" class="sr-only">Last Name</label>
	  <input type="text" name="last_name" id="last_name" class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" value="{{ old('last_name') }}" placeholder="Last Name" required>
	  @if ($errors->has('last_name'))
		<div class="invalid-feedback">
			{{ $errors->first('last_name') }}
		</div>
	  @endif
	  
	  <br>
      <label for="phone" class="sr-only">Phone</label>
	  <input type="number" name="phone" id="phone" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" value="{{ old('phone') }}" placeholder="Phone" required >
	  @if ($errors->has('phone'))
		<div class="invalid-feedback">
			{{ $errors->first('phone') }}
		</div>
	  @endif

	  <br>
      <label for="email" class="sr-only">Email Address</label>
	  <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}" placeholder="Email address" required>
	  @if ($errors->has('email'))
		<div class="invalid-feedback">
			{{ $errors->first('email') }}
		</div>
	  @endif

	  <br>
      <label for="password" class="sr-only">Password</label>
	  <input type="password" name="password" id="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password" required>
	  @if ($errors->has('password'))
		<div class="invalid-feedback">
			{{ $errors->first('password') }}
		</div>
	  @endif
	  
	  <br>
      <label for="password_confirmation" class="sr-only">Password Confirmation</label>
      <input type="password" name="password_confirmation" id="password_confirmation" class="form-control {{ $errors->has('password_confirmaton') ? 'is-invalid' : '' }}" placeholder="Password Confirmation" required>
	  @if ($errors->has('password_confirmation'))
		<div class="invalid-feedback">
			{{ $errors->first('password_confirmation') }}
		</div>
	  @endif 
	 
	  <br>
	  <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
	  <p>Already Have Acount ? <a href="/login"> Click Here</a></p>
      <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p> -->
    </form>
  </body>
</html>
