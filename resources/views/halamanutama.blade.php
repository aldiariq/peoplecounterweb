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
				<a class="notify-btn" href="#"><b><h1 class="title font-white" id="jumlahpengunjunglantai1"></h1> <h3 class="title font-white">/</h3> <h1 class="title font-white" id="jumlahmakslantai1"></h1>  Orang</b></a>
				<h1 class="title font-white" id="keteranganlantai1"></h1>
                </div>
			</div><!-- display-table -->
			<div class="display-table-cell">
				<h1 class="title font-white"><b>Lantai 2</b></h1>
				<h3 class="title font-white"><b>Jumlah Jamaah</b></h3>
				<div class="desc font-white">
				<a class="notify-btn" href="#"><b><h1 class="title font-white" id="jumlahpengunjunglantai2"></h1> <h3 class="title font-white">/</h3> <h1 class="title font-white" id="jumlahmakslantai2"></h1> Orang</b></a>
				<h1 class="title font-white" id="keteranganlantai2"></h1>
                </div>
			</div><!-- display-table -->
		</div><!-- display-table-cell -->
	</div><!-- main-area -->

	<script src="{{ asset('stisla/js/modules/jquery.min.js') }}"></script>

	<script type=text/javascript>
		var timeout = setInterval(loaddata, 2000);

		function loaddata() {
			$.ajax({  //create an ajax request to display.php
			type: "GET",
			url: "{{ url('/getdatapengunjung') }}",       
			success: function (data) {
			  $("#jumlahpengunjunglantai1").html(data.jumlahpengunjunglantai1);
			  $("#jumlahmakslantai1").html(data.jumlahmakslantai1);
			  $("#jumlahpengunjunglantai2").html(data.jumlahpengunjunglantai2);
			  $("#jumlahmakslantai2").html(data.jumlahmakslantai2);
			  if (data.jumlahpengunjunglantai1 == data.jumlahmakslantai1) {
				$("#keteranganlantai1").html("Jamaah Sudah Mencapai Batas Maksimal yang Ditetapkan");
			  }else {
				$("#keteranganlantai1").html("");
			  }
			  if (data.jumlahpengunjunglantai2 == data.jumlahmakslantai2) {
				$("#keteranganlantai2").html("Jamaah Sudah Mencapai Batas Maksimal yang Ditetapkan");
			  }else {
				$("#keteranganlantai2").html("");
			  }
			}
		  });
		}
	</script>
	
</body>
</html>