<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-blog')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	
	@include('inc.header')

	@if(Request::is('/'))
		@include('inc.herro')
	@endif

	<div class="container mt-5">
		@include('inc.messages')
		<div class="row">

			<div class="col-8">
				@yield('content')
			</div>
			
			@if(Request::is('/'))
				<div class="col-4">
					@include('inc.aside')
				</div>
			@endif
			
		</div>
	</div>

	@include('inc.footer')
</body>
</html>
