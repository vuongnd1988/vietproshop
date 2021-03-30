<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div style="margin: 0 auto; width: 500px;">
		<form method="POST" action="">
		@csrf
		  <div class="form-group">
		    <label>Email</label>
		    <input name="email" type="text" class="form-control" value="{{old('email')}}">
		    @if($errors->has('email'))
		    	<span class="text-danger"> {{$errors->first('email')}}</span>
		    @endif
		  </div>
		  <div class="form-group">
		    <label>Password</label>
		    <input name="password" type="password" class="form-control">
		    @if($errors->has('password'))
		    	<span class="text-danger"> {{$errors->first('password')}}</span>
		    @endif
		  </div>
		  <button type="submit" class="btn btn-primary">Login</button>
		</form>
	</div>
</body>
</html>