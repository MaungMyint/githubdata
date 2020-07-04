<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
	<script type="text/javascript" src="{{asset('jquery/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
	<div class="container">
		<h3 class="text-center my-5">Register</h3>
<form action="{{route('login.store')}}" method="post" class="form-group" enctype="multipart/form-data">
	@csrf
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" placeholder="Name" name="name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>

   <div class="form-group row">
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Remember me
        </label>
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Image</label>
    <div class="col-sm-10">
      <input type="file" name="image" id="inputPassword3" placeholder="image">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0"></legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="role" id="gridRadios1" value="staff" checked>
          <label class="form-check-label" for="gridRadios1">
           Staff
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="role" id="gridRadios2" value="owner">
          <label class="form-check-label" for="gridRadios2">
            Owner
          </label>
        </div>
      </div>
    </div>
  </fieldset>
 
  <div class="form-group row">
    <div class="col-sm-10"><center>
      <button type="submit" class="btn btn-primary text-center">Register</button></center>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10"><center>
      <button type="submit" class="btn btn-primary text-center">Sign in</button></center>
    </div>
  </div>
</form>
</div>
</body>
</html>