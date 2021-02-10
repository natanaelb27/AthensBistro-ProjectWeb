<?php include('connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Athens Bistro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			font-family: Century Gothic;
		}
		header.home{
			background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(images/homebackg.jpg);
			height: 100vh;
 			background-size: cover;
  			background-position: center;
		}
		header.menu{
			background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(images/menubackg.jpg);
			height: 100vh;
			background-size: cover;
			background-position: center;
		}
		header.menutiap{
			background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(images/menubackg.jpg);
			height: 20vh;
			background-size: cover;
			background-position: center;
		}
		header.order{
			background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(images/menubackg.jpg);
			height: 10vh;
			background-size: cover;
			background-position: center;
		}

		html, 
		body{
			height: 100%;
			padding: 0px;
			margin: 0px;
			background: #f6f6f6;
		}


		

		.footer{
			background: #303036;
		  	color: #d3d3d3;
		  	height: 270px;
		  	position: relative;
		  	margin-top: 20px;
		  	
		}

		.footer .footer-content{
			height: 220px;
			display: flex;
		}

		.footer .footer-content .footer-section{
			flex: 1;
			padding: 25px;
		}

		.footer .footer-bottom{
			background: #343a40;
  			color: #686868;
  			height: 50px;
  			width: 100%;
  			text-align: center;
  			position: absolute;
  			bottom: 0px;
  			left: 0px;
  			padding-top: 20px;
		}

		.logout{
			float: right;
		  	list-style-type: none;
		  	margin-top: 25px;
		}


		ul{
			float: right;
		  	list-style-type: none;
		  	margin-top: 25px;
		}
		ul li{
  			display: inline-block;
		}
		ul li a{
			text-decoration: none;
			color: #fff;
  			padding: 5px 20px;
  			border: 1px solid transparent;
  			transition: 0.6s ease;
		}
		ul li a:hover{
			text-decoration: none;
		  	background-color: #fff;
			  color: #000;
		}
		ul li.active a{
			background-color: #fff;
			color: #000;
		}
		.main{
			max-width: 1200px;
		  	margin: auto;
		}
		.title{
			position: absolute;
		  	top: 50%;
		  	left: 50%;
		  	transform: translate(-50%,-50%);
		}
		.title h1{
			color: #fff;
		  	font-size: 70px;
		}
		.buttonmenu{
			position: absolute;
		  	top: 60%;
		  	left: 50%;
		  	transform: translate(-50%, -50%);
		}
	
		.buttontiap{
			position: absolute;
		  	top: 12%;
		  	left: 50%;
		  	transform: translate(-50%, -50%);
		}
		.btn{
			border: 1px solid #fff;
		  	padding: 10px 30px;
		  	color: #fff;
		  	text-decoration: none;
		  	transition: 0.6s ease;
		}
		.btn:hover{
			background-color: #fff;
		  	color: #000;
		}

		.buttontiap a.active{
			background-color: #fff;
		  	color: #000;
		}

		body.bodylogin{
			margin: 0;
		  	padding: 0;
		  	height: 100vh;
		  	font-family: sans-serif;
		 	background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(images/homebackg.jpg);
		  	background-size: cover;
		}

		.login-box{
		  	width: 280px;
		  	position: absolute;
		  	top: 50%;
			left: 50%;
		  	transform: translate(-50%, -50%);
		  	color: white;
		}

		.login-box h1{
			float: left;
		  	font-size: 40px;
		  	border-bottom: 6px solid #fff;
		  	margin-bottom: 50px;
		  	padding: 13px 0;
		}

		.textbox{
		  	width: 100%;
			overflow: hidden;
			font-size: 20px;
			padding: 8px 0;
			margin: 8px 0;
			border-bottom: 1px solid #fff;
		}

		.textbox i{
			width: 26px;
			float: left;
			text-align: center;
		}

		.textbox input{
			border: none;
			outline: none;
			background: none;
			color: white;
			font-size: 18px;
			width: 80%;
			float: left;
			margin: 0 10px;
		}

		.btnlogin{
			width: 100%;
			background: none;
			border: 2px solid #fff;
			color: white;
			padding: 5px;
			font-size: 18px;
			cursor: pointer;
			margin: 12px 0;
		}
		.container{
			max-width: 1000px;
		}
		.containercard{
			position: relative;

		}

		.containercard .cards{
			position: relative;
			width: 320px;
			height: 450px;
			
			background: #232323;
			border-radius: 20px;
			overflow: hidden;
			margin-top: 20px;

			
		}

		.containercard .appetizercard:before{
			content: '';
			position: absolute;
			top: 0;
			left: 0;	
			width: 100%;
			height: 100%;
			background: #AC5353;
			clip-path: circle(150px at 80% 20%);
			transition: 0.5s ease-in-out;
		}
		.containercard .maincoursecard:before{
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: #9BDC28;
			clip-path: circle(150px at 80% 20%);
			transition: 0.5s ease-in-out;
		}
		.containercard .dessertcard:before{
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: #6495ED;
			clip-path: circle(150px at 80% 20%);
			transition: 0.5s ease-in-out;
		}
		.containercard .beveragescard:before{
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: #7FFFD4;
			clip-path: circle(150px at 80% 20%);
			transition: 0.5s ease-in-out;
		}

		.containercard .cards:hover:before{
			clip-path: circle(300px at 80% -20%);
		}

		.containercard .cards:after{
			content: 'Athens';
			position: absolute;
			top: 30%;
			left: -20%;
			font-size: 10em;
			font-weight: 800;
			font-style: italic;
			color: rgba(255,255,255,0.04);
		}

		.containercard .cards .imgBx{
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			z-index: 10000;
			width: 100%;
			height: 200px;
			transition: 0.5s;
		}

		.containercard .cards:hover .imgBx{
			top: 10%;
			transform: translateY(0%);
		}

		.containercard .cards .imgBx img{
			position: absolute;
			top: 45%;
			left: 50%;
			transform: translate(-50%, -50%) rotate(-25deg);
			width: 200px;
			height: 180px;
		}

		.containercard .cards .contentBx{
			position: absolute;
			bottom: 0;
			width: 100%;
			height: 100px;
			text-align: center;
			transition: 1s;
			z-index: 10;
		}


		.containercard .cards:hover .contentBx{
			height: 210px;
		}

		.containercard .cards .contentBx h2{
			position: relative;
			font-weight: 600;
			letter-spacing: 1px;
			color: #fff;
		}

		.containercard .cards .contentBx .desc,
		.containercard .cards .contentBx .price{
			display: flex;
			justify-content: center;
			align-items: center;
			padding: 8px 20px;
			transition: 0.5s;
			opacity: 0;
			visibility: hidden;
		}

		.containercard .cards:hover .contentBx .desc{
			opacity: 1;
			visibility: visible;
			transition-delay: 0.5s;
		}

		.containercard .cards:hover .contentBx .price{
			opacity: 1;
			visibility: visible;
			transition-delay: 0.6s;
		}

		.containercard .cards .contentBx .desc h3,
		.containercard .cards .contentBx .price h3{
			color: #fff;
			font-weight: 300;
			font-size: 14px;
			text-transform: uppercase;
			letter-spacing: 2px;
			margin-right: 10px;
		}
	</style>
</head>