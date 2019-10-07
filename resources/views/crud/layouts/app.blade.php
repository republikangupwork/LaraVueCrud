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
	        <button id="cmd" class="btn btn-default">Generate PDF</button>
        </div>
  	</div>
	

	<script src="{{ mix('js/app.js') }}"></script>
	<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
    @if(config('app.env') == 'local')
	    <script src="http://localhost:35729/livereload.js"></script>
	@endif
</body>
</html>

<script>
		    var doc = new jsPDF();

    $('#cmd').click(function () {   
        doc.fromHTML($('#app').html(), 15, 15, {
            'width': 170,
                'elementHandlers': specialElementHandlers
        });
        doc.save('sample-file.pdf');
    });
	</script>