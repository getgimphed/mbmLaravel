<!DOCTYPE html>
<html>
<head>
	<title>M.B.M Jodhpur : Vedant</title>
	<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css">
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<script type="text/javascript" src="#"></script>
	<style type="text/css">
	.btn-1{
        background-color:rgba(132, 80, 154, 0.7);
		color: #FDFDFD;
	}
	.btn-2{
		background-color:rgba(195, 46, 46, 0.67);
		    color: #FDFDFD;
	}
	input { text-indent: 32px;}
	textarea{text-indent: 32px;}
	.fa { 
	  position: relative;
	  top: 30px;
	  left: 10px;
	}
	</style>	
</head>
<body>
	<div class="header row"> 
		@yield('header')
	</div>

	<div class="content row">
		@yield('content')
	</div>

	<div class="footer row">
		@yield('header')
	</div>

</body>
</html>