<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>o

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
  <!-- <body class="text-center" style="background-image: url('img/32822.jpg'); background-size: cover;"> -->
    <form class="form-signin" method="POST" action="/postlogin" style="background: white; border-style: groove; border-color: #0099ff;">
	{{ csrf_field() }}
      <!-- <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
	  <h1 class="h3 mb-3 font-weight-normal">Login</h1>
	  <br>
      <label for="email" class="sr-only">Email Address</label>
	  <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required>
	  <br>
      <label for="password" class="sr-only">Password</label>
	  <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
	  <br>
	  <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
	  <p>Don't Have Acount ? <a href="/register"> Click Here</a></p>
    </form>
  </body>
</html>
