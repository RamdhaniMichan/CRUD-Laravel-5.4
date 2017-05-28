<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Project1</title>
	<link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::to('css/Project1.css') }}">
</head>
<body>
  
  <div class="wrapper">
    <form class="form-signin" action="{{ URL::to('/Project1/auth')}}" method="post">
    {!! csrf_field() !!}       
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>
  </div>

<script src="{{ URL::to('js/bootstrap.min.js') }}" charset="utf-8"></script>
<script src="{{ URL::to('js/jquery_3_2_1.min.js') }}" charset="utf-8"></script>
</body>
</html>