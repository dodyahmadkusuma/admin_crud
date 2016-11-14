
<head>
	<title>Chart</title>
	<script src="<?= base_url('asset/js/') ?>jquery-3.1.1.min.js"></script>
	<style type="text/css">
		#modal-kotak{
	margin :5% 30% 30% 30%;
	width: 500px;	
	height: 300px;
	position: absolute;
	position:fixed;
	z-index:1002;
	display: none;
	background: white;	
}
#atas{
	font-size: 15pt;
	padding: 20px;	
	height: 80%;
}
#bawah{
	background: #fff;
}

#tombol-tutup{	
	background: #e74c3c;
}
#tombol-tutup,#tombol{
	height: 30px;
	width: 100px;
	color: #fff;
	border: 0px;
}
#bg{
	opacity:.80;
	position: absolute;
	display: none;
	position: fixed;
	top: 0%;
	left: 0%;
	width: 100%;
	height: 100%;
	background-color: #000;
	z-index:1001;
	opacity: 0.8;
}
#tombol{
	background: #e74c3c;        
}
	</style>
</head>
<body>
	<div id="bg">
	</div>
	<div id="modal-kotak">
		<div id="atas">
<div class="col-sm-8">
<canvas id="myChart" width="500" height="300"></canvas>
</div>
			
		</div>
		<div id="bawah">
			<button id="tombol-tutup">CLOSE</button>
		</div>
	</div>	
<div class="content-wrapper">
<div class="col-sm-8">
	
	<button id="tombol">KLIK SAYA !!</button> 
	KLIK TOMBOL UNTUK MENAMPILKAN MODAL DIALOG



</div>
</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#tombol').click(function(){
				$('#modal-kotak , #bg').fadeIn("slow");
			});
			$('#tombol-tutup').click(function(){
				$('#modal-kotak , #bg').fadeOut("slow");
			});
		});
	</script>

