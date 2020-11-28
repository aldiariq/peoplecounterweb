<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Halaman Utama</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	<!-- Font -->
	
	<link href="{{ URL::asset('/css/halamancounter/css/open-sans.css') }}" rel="stylesheet">
	
    <link href="{{ URL::asset('/css/halamancounter/css/ionicons.css') }}" rel="stylesheet">
	
	<link rel="stylesheet" href="{{ URL::asset('/css/halamancounter/css/jquery.classycountdown.css') }}" />
		
	<link href="{{ URL::asset('/css/halamancounter/css/styles.css') }}" rel="stylesheet">
	
	<link href="{{ URL::asset('/css/halamancounter/css/responsive.css') }}" rel="stylesheet">
	
</head>
<body>
	
<div class="main-area center-text" style="background-image:url({{ asset('/css/halamancounter/image/bgcounterpage.jpg') }});">
		<div class="display-table">
			<div class="display-table-cell">
				<h1 class="title font-white"><b>Lantai 1</b></h1>
				<h3 class="title font-white"><b>Jumlah Jamaah</b></h3>
				<div class="desc font-white">
				<a class="notify-btn" href="#"><h1 class="title font-white"><b>{{$jumlahpengunjunglantai1}} / {{$jumlahmakslantai1}}  Orang</b></h1></a>
                </div>
			</div><!-- display-table -->
			<div class="display-table-cell">
				<h1 class="title font-white"><b>Lantai 2</b></h1>
				<h3 class="title font-white"><b>Jumlah Jamaah</b></h3>
				<div class="desc font-white">
				<a class="notify-btn" href="#"><h1 class="title font-white"><b>{{$jumlahpengunjunglantai2}} / {{$jumlahmakslantai2}} Orang</b></h1></a>
                </div>
			</div><!-- display-table -->
		</div><!-- display-table-cell -->
	</div><!-- main-area -->

	<script>
		setTimeout(function(){
			location.reload();
		},5000);
	 </script>
	
</body>
</html>