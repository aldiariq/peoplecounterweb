<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Halaman Utama</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	
	<!-- Font -->
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CPoppins:400,500" rel="stylesheet">
	
    <link href="{{ asset('/css/halamancounter/css/ionicons.css') }}" rel="stylesheet">
	
	<link rel="stylesheet" href="{{ asset('/css/halamancounter/css/jquery.classycountdown.css') }}" />
		
	<link href="{{ asset('/css/halamancounter/css/styles.css') }}" rel="stylesheet">
	
	<link href="{{ asset('/css/halamancounter/css/responsive.css') }}" rel="stylesheet">
	
</head>
<body>
	
	<div class="main-area center-text" style="background-image:url(/css/halamancounter/image/bgcounterpage.jpg);">
		
		<div class="display-table">
			<div class="display-table-cell">
				
				<h1 class="title font-white"><b>Jumlah Pengunjung di dalam Masjid</b></h1>
				<div class="desc font-white">
				<a class="notify-btn" href="#"><h1 class="title font-white"><b>{{$jumlahpengunjung}} Orang</b></h1></a>
                </div>
			</div><!-- display-table -->
		</div><!-- display-table-cell -->
	</div><!-- main-area -->

	<script>
		setTimeout(function(){
			location.reload();
		},3000);
	 </script>
	
</body>
</html>