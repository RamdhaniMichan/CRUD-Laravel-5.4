<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-Edge">
	<meta name="viewport" content="width-device-width,initial-scale=1">
	<title>Aplikasi Laravel</title>
	<link rel="stylesheet" href="{{ asset('bootstrap_3_3_7/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
	<div class="container">
	{{-- include untuk memasukkan doc lain ke dlm template --}}
		@include('navbar')
		@yield('main')
	</div>
	@yield('footer')
	<script type="{{asset('js/jquery_3_2_1.min.js')}}"></script>
	<script type="{{asset('bootstrap_3_3_7/js/bootstrap.min.js') }}"></script>
</body>
</html>