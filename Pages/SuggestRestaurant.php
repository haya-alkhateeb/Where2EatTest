<head>

<title>
Where to Eat? | وين ناكل؟
</title>
<!-- The Title Icon -->
<link rel="shortcut icon" href="../Images/locationIconTitle.png" />

<!-- External js -->
<script type="text/javascript" src="../Scripts/JS.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- External stylesheet -->
<link rel = "stylesheet"  type = "text/css" href = "../Styles/CSS.css" />

</head>

<body onload="suggest_Restaurant_pressed()">
<!-- blurry background-->
	<div class="bg-image" ></div>
	
<!-- header-->	
	<div class="header">
		<div class="row">
		<div class="col-md-3 col-sm-1 "></div>
		<div class="header-container col-md-6 col-sm-10 ">
			<a href="">تسجيل دخول &nbsp </a>
			<span>|</span>
			<a href="" > &nbsp إنشاء حساب</a>
		</div>
		<div class="col-md-3 col-sm-1 "></div>
		</div>
	</div>
	
<!-- Main container for the whole page -->
	<div class="fluid-container ">

		<!--1st row (Restaurant  name and info)-->
		<div class="row topPadding">
			<div class="col-md-2 col-sm-3 col-xs-1"></div>
			<div class="col-md-8 col-sm-6 col-xs-10 ">
				<div class="center-block"id="restuarantInfoContainer">
					<h1 id= "restaurantName"class="text-center"></h1>
					<p class="text-center"id="restaurantRate">/10 - <span id="restaurantCategory"></span></p>
				</div>
			</div> 
			<div class="col-md-2 col-sm-3 col-xs-1"></div>		
		</div> <!-- End of the 1st row (Name and info)-->
		
		<br>
		
		<!--2nd row (Map and Images)-->
		<div class="row" >
			<div class="col-md-2 col-sm-3 col-xs-1"></div>
			
			<!--Images carousel -->
			<div class="col-md-4 col-sm-3 col-xs-5" >
				<div id="restaurantCarousel" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<!-- filled by suggestRestaurant.js -->
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" style="border-radius:10%;">
					<!-- filled by suggestRestaurant.js -->
				  </div>
				
				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#restaurantCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#restaurantCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
			</div> <!-- End of Images carousel-->
			
			<!-- Map Button -->
			<div class="col-md-4 col-sm-3 col-xs-5" >	
				<!-- hidden from UI, used for google map button -->
				<div id="lat"></div>
				<div id="lon"></div>		
				<img  class="center-block" id="LogoImage" src="../Images/locationIconTitle.png">
				<br>
				<a id="googleMapButtonStyle" class="text-center"  href="javascript:openGoogleMap($('#lat').text(),$('#lon').text());" >فتح في Google Map</a>
			</div>
			<div class="col-md-2 col-sm-3 col-xs-1"></div>			
		</div> <!-- End of 2nd row (Map and Images)-->
		
		<br>
		
		<!-- Another suggestion Button -->
		<div class="row" >
			<div class="col-md-2 col-sm-3 col-xs-1"></div>
			<div class="col-md-8 col-sm-6 col-xs-10" >
				<a id="suggestRestuarantButton" class="text-center center-block" href="SuggestRestaurant.php" >اقتراح آخر</a>
			</div>
			<div class="col-md-2 col-sm-3 col-xs-1"></div>
			
		</div>

	</div> <!-- End of main container for the whole page -->
</body>