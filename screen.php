<!--?php
	include_once 'includes/dbconnection2.php';
?-->

<!DOCTYPE html>
<html ng-app lang="en">
<head>
<title>INTERFACE SCREEN CAPTURES</title>
<!--This will adjust view width to device size-->
<meta name="viewport" content="width=device-width">

<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>

<!--script type="text/javascript" src="scripts/bootstrap.min.js"></script-->
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script-->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script type="text/javascript" src="scripts/myscripts.js"></script>


<!--script type="text/javascript" src="scripts/bootstrap.min.js"></script-->
<script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="//cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
<script type="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<!-- Custom Styles CSS --CHANGED BOOTSTRAP MIN TO USE \CSS\bootstrap-->	
<!--link href="styles4\css\bootstrap.min.css" rel="stylesheet"-->
<link href="styles4\cards.css" rel="stylesheet">
<link href="styles4\flip.css" rel="stylesheet">
<link href="styles4\icons.css" rel="stylesheet">
<link href="styles4\team-icons.css" rel="stylesheet">
<link href="styles4\navbar.css" rel="stylesheet">
<link href="styles4\carousel.css" rel="stylesheet">
<link href="styles4\styles.css" rel="stylesheet">
<link href="styles4\cardspin-test.css" rel="stylesheet">
<link href="styles4\jquery.dataTables.min.css" rel="stylesheet">

<!--link href="styles4\dataTables.bootstrap.min.css" rel="stylesheet"-->
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.js">
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
 
<!-- Bootstrap core CSS-->
<link href="scripts4\bootstrap.min.css" rel="stylesheet">
<!--link href="scripts4\bootstrap-theme.min.css" rel="stylesheet"-->

<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"
	href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
	integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
	crossorigin="anonymous">

<!-- W3 CSS -->
<link href="scripts4\w3.css" rel="stylesheet">
<link href="scripts4\w3-theme-teal.css" rel="stylesheet">

<!--script src="scripts4\Script1.js"></script-->

<script>
$(document).ready( function () {
    $('#example').DataTable();
} );
</script>

<script>
$(document).ready( function () {
    $('#actmap').DataTable();
} );
</script>

<script>
$(document).ready( function () {
    $('#status').DataTable();
} );
</script>

<script>
	$(document).ready(function() {
		$('[data-toggle="tooltip"]').tooltip({placement: "top"});
	});
</script>

<script type ="text/javascript">

		function existsFunction() {
		var x = document.getElementById('snackbar');
		x.className = "show";
		setTimeout(function(){ x.className = x.className.replace("show", ""); }, 6000);
	}
	</script>

	<script type ="text/javascript">
			function addedFunction() {
			alert('Customer added');
		}
	</script>

	<script type ="text/javascript">
			function existsFunction() {
			alert('Customer already exists, please try again.');
		}
	</script>

	<script type ="text/javascript">
			function emptyFunction() {
			alert('Customer name cannot be blank.');
		}
	</script>

	<!-- javaScript for pop up window URL -->
	<script type="text/javascript">
	function newPopup(url){
		popupWindon = window.open( url, 'popUpWindow', 'height=500,width=600,left=10,top=10, resizable=yes,scrollbar=yes')
	}
	</script>
<style>

body {
	margin: 0;
	padding: 0;
	width: 100%;
	height: 100%;
	color: #fff;
	font-family: 'Nunito Semibold';
	text-align: center;
	background-color: black;
}

.content {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
	/*grid-template-rows: repeat(auto-fit, minmax(300px, auto-fit));*/
	grid-auto-rows: 270px;
	margin: 0 auto;
	grid-gap: 20px;
	
}

.content-test {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
	grid-auto-rows: minmax(300px, auto-fit);
	margin: 0 auto;
	grid-gap: 20px;
	
}


.content .layer {
	position: absolute;
	left: 0;
	width: 100%;
	height: 100%;
	background: linear-gradient(#0079B1, #00C9FF);
	z-index: 1;
	opacity: 0.0;
	transition: 0.5s;

}

.content .layer2 {
	position: absolute;
	top: calc(100% -2px);
	left: 0;
	width: 100%;
	height: 100%;
	background: linear-gradient(#0057B8, #AF29BB);
	z-index: 1;
	opacity: 0.0;
	transition: 0.5s;
}

.content .layer3 {
	position: absolute;
	top: calc(100% -2px);
	left: 0;
	width: 100%;
	height: 100%;
	background: linear-gradient(#FF585D, #FFB000);
	z-index: 1;
	opacity: 0.0;
	transition: 0.5s;
}

.content .layer4 {
	position: absolute;
	top: calc(100% -2px);
	left: 0;
	width: 100%;
	height: 100%;
	background: linear-gradient(#91DC00, #49EEDC);
	z-index: 1;
	opacity: 0.0;
	transition: 0.5s;
}

.content .layer5 {
	position: absolute;
	top: calc(100% -2px);
	left: 0;
	width: 100%;
	height: 100%;
	background: linear-gradient(#ffffff, #FFB000);
	z-index: 1;
	opacity: 0.;
	transition: 0.5s;
}

.content .layer6 {
	position: absolute;
	top: calc(100% -2px);
	left: 0;
	width: 100%;
	height: 100%;
	background: linear-gradient(#ffffff, #91DC00);
	z-index: 1;
	opacity: 0.0;
	transition: 0.5s;
}

.content .layer7 {
	position: absolute;
	top: calc(100% -2px);
	left: 0;
	width: 100%;
	height: 100%;
	background: linear-gradient(#ffffff, #49EEDC);
	z-index: 1;
	opacity: 0.0;
	transition: 0.5s;
}

.content .layer8 {
	position: absolute;
	top: calc(100% -2px);
	left: 0;
	width: 100%;
	height: 100%;
	background: linear-gradient(#ffffff, #FFB000);
	z-index: 1;
	opacity: 0.0;
	transition: 0.5s;
}

.content .layer9 {
	position: absolute;
	top: calc(100% -2px);
	left: 0;
	width: 100%;
	height: 100%;
	background: linear-gradient(#ffffff, #FFB000);
	z-index: 1;
	opacity: 0.0;
	transition: 0.5s;
}

.content .layer10 {
	position: absolute;
	top: calc(100% -2px);
	left: 0;
	width: 100%;
	height: 100%;
	background: linear-gradient(#ffffff, #FFB000);
	z-index: 1;
	opacity: 0.0;
	transition: 0.5s;
}

/*duplicated with line 141 .content .layer {
	position: absolute;
	top: calc(100% -2px);
	left: 0;
	width: 100%;
	height: 100%;
	z-index: 1;
}*/

/*.content .card {
	position: relative;
	width: 200px;
	margin: 0 auto;
	background: #333;
	padding-left: 20px;
	padding-right: 20px;
	padding-bottom: 20px;
	padding-top: 0px;
	box-sizing: border-box;
	text-align: center;
	border: 1px;
	border-radius: 10px;
	background: #fff;
	-webkit-box-shadow: 3px 3px 7px rgba(0, 0, 0, 0.3);
	box-shadow: 3px 3px 7px rgba(0, 0, 0, 0.3);
	overflow: hidden;
}*/

.carousel-content .carousel-card {
	position: relative;
	width: 40%;
	margin: 0 auto;
	background: #333;
	padding-left: 20px;
	padding-right: 20px;
	padding-bottom: 20px;
	padding-top: 0px;
	box-sizing: border-box;
	text-align: center;
	border: 1px;
	border-radius: 10px;
	/*background: #fff;*/
	-webkit-box-shadow: 3px 3px 7px rgba(0, 0, 0, 0.3);
	box-shadow: 3px 3px 7px rgba(0, 0, 0, 0.3);
	overflow: hidden;
}

/*.content .card2 {
	position: relative;
	width: 200px;
	margin: 0 auto;
	background: #009FDB;
	padding-left: 20px;
	padding-right: 20px;
	padding-bottom: 20px;
	padding-top: 0px;
	box-sizing: border-box;
	text-align: center;
	border: 1px;
	border-radius: 10px;
	background: #fff;
	-webkit-box-shadow: 3px 3px 7px rgba(0, 0, 0, 0.3);
	box-shadow: 3px 3px 7px rgba(0, 0, 0, 0.3);
	overflow: hidden;
}*/

.projectcontent {
	display: ms-grid;
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
	/*grid-template-rows: repeat(1, minmax(200px, auto));*/
	margin: 0 auto;
	grid-gap: 10px;
}

.projectcontent .projectcard {
	position: relative;
	width: 100%;
	margin: 0 auto;
	background: #333;
	padding: 0px;
	box-sizing: border-box;
	text-align: center;
	border: 1px;
	border-radius: 20px;
	background: teal;
	-webkit-box-shadow: 3px 3px 7px rgba(0, 0, 0, 0.3);
	box-shadow: 3px 3px 7px rgba(0, 0, 0, 0.3);
	overflow: hidden;
}

.details {
	position: absolute;
	bottom: 0;
	left: 0;
	background: #CCCCCC;
	z-index: 4;
	width: 100%;
	height: 95px;
	box-sizing: border-box;
	padding: 6px;
	z-index: 1;
}

.details h2 {
	margin: 10px 0 0;
	padding: 0;
	font-size: 14px;
	text-align: center;
	color: #000000;
}

.details h2 span {
	color: #585858;
	font-size: 12px;
	opacity: .8;
	text-align: center;
}

.card-details {
	position: absolute;
	bottom: 0;
	left: 0;
	background: #fff;
	z-index: 4;
	width: 100%;
	height: 70px;
	box-sizing: border-box;
	padding: 6px;
	z-index: 1;
}

.card-details h2 {
	margin: 10px 0 0;
	padding: 0;
	font-size: 18px;
	text-align: center;
	color: #0057B8;
}

.card-details h2 span {
	color: #FFB000;
	font-size: 16px;
	opacity: .8;
	text-align: center;
}

.card p {
	text-align: center;
	border: 1px;
	font: 20px/220px Georgia, Times New Roman, serif;
	position: relative;
	float: left;
	margin-right: 0px;
	width: 100%;
	height: 260px;
	border-radius: 10px;
	background: #fff;
	align-content: center;
}


.standard-font {
	color: #80cbc4;
	font-size: 16px;
	text-align: center;
	font-family: Montserrat, sans-serif;
}

.table-font {
	color: #80cbc4;
	font-size: 12px;
	text-align: center;
	font-family: Montserrat, sans-serif;
}

.button-style {
     background:lightbrown;
     border-radius: 30px;
     width: 15em;
     height: 6em;
     position:relative;
     display:table-cell;
     vertical-align:middle;
     font-weight: 900; 
     position: relative; 
     z-index: 100; 
     height: 30px; 
     width: 100px; 
     top: -92px;
     padding-top: 0px;
 }

 .button-style h3 {
 	 vertical-align: center;
     text-align: center;
     margin: 0px;
     padding: 0px;
     padding-top: 0px;
}
.myTable {
	width: 80%;
	table-layout: fixed;
	height: 40px;
	text-align: left;
	padding: 10px;
}

.table-font {
	color: #009FDB;
	font-size: 12px;
	text-align: center;
	font-family: Montserrat, sans-serif;
}

#status_length {
 margin-left: 35px;
 margin-right: 0px;
}

.bs-example {
    	margin: 20px;
        position: relative;
		background: grey;
		font-size: 12px;
    }

#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

#snackbar2 {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar2.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

/* Container holding the image and the floating text */
.floating-box-test {
  position: relative;
  text-align: center;
  color: white;
}

/* Container holding the image and the floating text */
.floating-box-test2 {
  position: relative;
  text-align: center;
  color: white;
}
/* Centered text inside container
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  padding: 10px;
  font-size: 70px;
  font-style="bold";
  font-family: Montserrat, sans-serif;
  transform: translate(-50%, -50%);
  background-color: rgba(0, 0, 0, 0.33);
}*/

.results-table {
  width: 100%;
  text-align: left;
  color: #009FDB;
  font-family: Montserrat, sans-serif;
  border: 2px solid black;
}

.results-table, th {
  text-align: left;
  color: #009FDB;
  font-size: 12px;
  font-family: Montserrat, sans-serif; 
}

.results-table, td {
  /*text-align: left;*/
  color: #009FDB;
  font-size: 14px;
  font-family: Montserrat, sans-serif;
  /*padding-bottom: 10px;*/ 
}
.cap {
  text-align: middle;
  color: #009FDB;
  font-size: 12px;
  font-family: Montserrat, sans-serif;
  padding: 10px;
  
}

.button{
	background-color: #FFB000;
	color: #fff;
    border-color: #AF29BB;
	justify-content: left;
}

.button-success:hover,
.button-success:focus,
.button-success:active,
.button-success.active,
.open .dropdown-toggle.button-success {
 color:#000;
 background-color:#fff;
 border-color:#398439
}

.new-model-header{
	background-color: white;
	width: 100%;
	padding: 0px;
	margin: 0px;
}

.tag{
	text-align: right;
	padding-bottom: 10px;
}


@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

/* Hide first row (ID) in table*/
.hide-id tr th:nth-child(-n+1), .hide-id tr td:nth-child(-n+1){
	display:none;} 

</style>

</head>

<<body id="landingPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<?php include 'includes2/navbar.php';?>
<br>
	
<!------------------------------------------- CONTAINER (TEAM PORTALS) -------------------------------------------------------------->
<div id="dashboard" class="content2 grid-containerink">

<div class="ianda1">
	<div class="w3-padding floating-box-test" id="myHeader">
		<br>
	<br><br><br><br>
	<div class="centered myfontL">INTERFACE SCREEN CAPTURES<br>
  <p class="myfontS">Designs</p></div><br><br><br><br>
	</div><br><br>
</div></div></div>
	
	<!------------------------------------------- CONTAINER (TEAM PORTALS) -------------------------------------------------------------->
	
	<div>
	<br>
	<br><br>

	<div class="content">

	<!-- Dashboard -->
		<div class="card">
			<div class="layer"></div>
			<!-- div class="cardimg"-->
			<p class="w3-center" style="padding-bottom: 0px; height: 90%; display: flex; align-items: center; justify-content: center;">
				<img src="images/images/Dashboard-mr-sm.png" class="w3-circle"
					style="width:200px; margin-bottom: 10px; display: flex; align-items: center; justify-content: center;"
					alt="Avatar">
			</p>
			<div class="details">
				<h2>
				<a href="dashboard1.html" target="_blank">GRAFANA DASHBOARD</a><br>
					<span>Crafted using business text visualisation (HTML and CSS)</span>
				</h2>
			</div>
		</div>
		<!-- Call Center -->
		<div class="card">
			<div class="layer"></div>
			<p class="w3-center" style="padding-bottom: 0px; height: 90%; display: flex; align-items: center; justify-content: center;">
				<img src="images/images/Screenshot-orange-font-sm.png" class="w3-circle"
					style="width:200px;; margin-bottom: 10px; display: flex; align-items: center; justify-content: center;"
					alt="Avatar">
			</p>
			<div class="details">
				<h2>
				<a href="call.html" target="_blank">CALL CENTER DEMO</a><br>
					<span>HTML and CSS design for business demo </span>
				</h2>
			</div>
		</div>
		<!-- Antidote -->
		<div class="card">
			<div class="layer"></div>
			<p class="w3-center" style="padding-bottom: 0px; height: 90%; display: flex; align-items: center; justify-content: center;">
				<img src="images/images/antidote-screen-shot-sm.png" class="w3-circle"
					style="width:200px; margin-bottom: 10px; display: flex; align-items: center; justify-content: center;"
					alt="Avatar">
			</p>
			<div class="details">
				<h2>
				<a href="antidote.html" target="_blank">ANTIDOTE</a><br>
					<span>Designed for HR feedback</span>
				</h2>
			</div>
		</div>
		<!-- Grafana -->
		<div class="card">
			<div class="layer"></div>
			<p class="w3-center" style="padding-bottom: 0px; height: 90%; display: flex; align-items: center; justify-content: center;">
				<img src="images/images/Dashboard-example-drill-down-sm.png" class="w3-circle"
					style="width:200px;; margin-bottom: 10px; display: flex; align-items: center; justify-content: center;"
					alt="Avatar">
			</p>
			<div class="details">
				<h2>
				<a href="grafana.html" target="_blank">GRAFANA</a><br>
					<span>Table visualisation, extracting data from API and DB</span>
				</h2>
			</div>
		</div>
	<!-- Spare -->
	<div class="card">
			<div class="layer"></div>
			<!-- div class="cardimg"-->
			<p class="w3-center" style="padding-bottom: 0px; height: 90%; display: flex; align-items: center; justify-content: center;">
				<img src="images/images/apmLblue.png" class="w3-circle"
					style="height:200px;; margin-bottom: 10px; display: flex; align-items: center; justify-content: center;"
					alt="Avatar">
			</p>
			<div class="details">
				<h2>
				<a href="victory.html" target="_blank">Alternative Permanent Makeup</a><br>
					<span>Business logo</span>
				</h2>
			</div>
		</div>
	</div>
	<br>
	<br><br>

	<!-------------------------------------------- Container (Section) ------------------------------------------------>
		<br>
 <div class="container-carousel">
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators" style="padding-top: 200px">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="mycarousel-inner">
	  <div class="item active" style="background-color:black;">
	  <div class="carousel-content" style="background-color:black">

	<!-- Testimonial 1 -->
		<div class="carousel-card">
			<div class="layer"></div>
			<!-- div class="cardimg"-->
			<p class="w3-center quote-font" style="padding-bottom: 50px; font-size: 40px">
			<i>"Photoshop & Inkscape"</i>
					</p>
			<div class="details">
				<h2>NOTES<br>
					<span>Created with a mix of graphics packages</span>
				</h2>
			</div>
			</div>
		</div>
	</div>
	<div class="item">
	  <div class="carousel-content">

	<!-- Testimonial 2 -->
		<div class="carousel-card">
			<div class="layer"></div>
			<!-- div class="cardimg"-->
			<p class="w3-center quote-font" style="padding-bottom: 50px; font-size: 40px">
			<i>"Simple & colourful"</i>
					</p>
			<div class="details">
				<h2>NOTES<br>
					<span>Blue on Orange is brave, but the drop shadow makes it work</span>
				</h2>
			</div>
			</div>
		</div>
	</div>

	<div class="item">
	  <div class="carousel-content">

	<!-- Testimonial 3 -->
		<div class="carousel-card">
			<div class="layer"></div>
			<!-- div class="cardimg"-->
			<p class="w3-center quote-font" style="padding-bottom: 50px; font-size: 40px">
			<i>"Mixing type fonts"</i>
					</p>
			<div class="details">
				<h2>NOTES<br>
					<span>I like to mix font types and using multiple colours</span>
				</h2>
			</div>
			</div>
		</div>
	</div>
      
    <!-- Left and right controls -->
    <a class="left mycarousel-control" href="#myCarousel" data-slide="prev">
      <img src="images/myglyph-left.png" style="width:30%; padding-top:80px">
      <span class="sr-only">Previous</span>
    </a>
    <a class="right mycarousel-control" href="#myCarousel" data-slide="next">
      <img src="images/myglyph-right.png" style="width:30%; padding-top:80px; padding-left:0px">
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
		<br>
		<br>

		<br>
		<br>
		<br>
		
		<p style="font-size: 14px;"><strong>ANT POWERED</strong></style></p><p style="font-size: 12px; color: orange;">Designed by James Bampton</style></p>
		<br> <br>
		
	</footer>
</body>
</html>