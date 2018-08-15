<!DOCTYPE html>
<html>
<head>
	<title>Phone book</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
	<div id="app">
		<app-header></app-header>
			 <router-view></router-view>
			 	
		<app-footer></app-footer>
	</div>
	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>