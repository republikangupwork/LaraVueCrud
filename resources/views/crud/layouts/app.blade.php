<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div id="app">
		<div class="row">
	        {{-- <sidebar></sidebar> --}}
	       	<div class="col-md-2">
		        <div class="container-fluid" style="margin-top: 20px;">
		            <h3>Simple Crud</h3>
		            <hr>
		            <div class="list-group">
		            	<a href="{{ url('crud/dashboard') }}" class="list-group-item list-group-item-action {{ (Request::is('crud/dashboard')) ? 'active' : '' }}">
						    Dashboard
					  	</a>
		               	<a href="{{ url('crud/create') }}" class="list-group-item list-group-item-action {{ (Request::is('crud/create')) ? 'active' : '' }}">
						    Create
					  	</a>
		            </div>
		            
		        </div>
		    </div>
	        @yield('content')
        </div>
  	</div>
	

	<script src="{{ mix('js/app.js') }}"></script>
    @if(config('app.env') == 'local')
	    <script src="http://localhost:35729/livereload.js"></script>
	@endif
</body>
</html>