<!DOCTYPE html>
<html>
    <head>
	<title>@yield('title','weibo')</title>
	<link rel="stylesheet" href="{{mix('css/app.css')}}">
    </head>
    <body>
	@include('layout._header')
	<div class="container">
	    <div class="offset-md-1 col-md-10">
        @include('shared._messages')
		@yield('content')
		@include('layout._footer')
	    </div>
	</div>
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
