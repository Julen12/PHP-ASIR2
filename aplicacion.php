<?php

require 'vendor/autoload.php';

use DmitryIvanov\DarkSkyApi\DarkSkyApi;
$forecast = (new DarkSkyApi('9051c42ec479eebc435aa4c91a5eb33c'))
    ->location(46.482, 30.723)
    ->units('si')
    ->language('es')
    ->forecast();
echo $forecast->currently()->summary();
?>
<head>
  <meta charset="utf=8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Weather APP">
  <meta name="keywords" content="Front-end developer, web design, graphic design, Cape Town, Portfolio, Machiel Van Der Toorn, JavaScript, HTML, CSS, Bootstrap, jQuary, JSON, Weather APP, get weather">
  <meta mane="author" content="Machiel Van Der Toorn">
  <title>Machiel Van Der Toorn - Weather APP</title>
 <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  
  
  <!-- font type -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> <!--icons-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>


<body>
  
    <time style="float: right" class="bar time">time</time>
  <date style="float: right" class="bar date">date</date>

   <div class = "block text-center ">
  
   
     
 
     <br>
     

     
     
       <h1 class = "block center-text content-title" id = "temperature">...</h1>   
     

		<div class="row">
			<div class="col-xs-12 text-center">
				<canvas id="icon1" width="70px" height="70px"></canvas>
			</div>
		</div> 
     
     

         
        

   <div class = "block text-center"> 
  <h2 id="city-state">Getting location...</h2></div>
        
         		    
       
 <div id="container"><!--spacing-->
<!
  <form method="get" action="http://google.com/search">
    
    <input type="text" name="q" required autofocus>
    <input type="submit" value="Google search">
  
  </form>  -->
     </div>

    
 <div id="container"><!--spacing-->

 </div> 
     
  <div id="container"><!--spacing-->
    

 </div> 
     < google search box>
 < <form method="get" action="http://www.google.com/search"> <input type="text" name="q" size="31" maxlength="255" value="" /> <i class="fa fa-search" aria-hidden="true" id="searchBTN"></i> </form> -->

     <google search box end>
 
 <style>
 .navbar-brand {
  font-size:1.5em;
  font-weight:500;
  
  font-family: 'Lobster';
  color:#d6e9ff;
}


.navbar-custom{  
  
  color:#34febb;  
}


.navbar-right{  
  font-size:1.5em;
  font-weight:500;
  
  color:#34febb;
}





.block{
  
  padding-bottom:10px;
  height:100%;
  width:75%;
  margin-bottom:auto;
  margin-right:auto;
  margin-left:auto;
  border-radius:10px;
  font-size:auto;
  

}



body {  
  background: url("http://www.kapstadt.de/webcam.jpg")no-repeat center center fixed;
  background-size: contain;
  background-size: 1920px;
  width:auto;
  height:100%;
  font-family: 'Roboto', sans-serif;
  color:#d6e9ff;
  
}



h1{
  padding-top:40px;
  padding-bottom:40px;
  font-size:0.7em;
  margin: 0 auto;
  text-align: center;
  color: white;
  text-shadow: 0 0 10px white, 0 0 15px white, 0 0 30px orange, 0 0 30px orange, 0 0 30px orange, 0 0 40px orange, 0 0 50px orange;
  font-family: 'Roboto', sans-serif;
  
}

.bar{
  
    padding:0 0.5rem;
  margin:0;
  cursor: default;
  white-space:nowrap;  
    padding-top:40px;
  padding-bottom:40px;
  font-size:1em;
  margin: 0 auto;
  text-align: center;
  color: white;
  text-shadow: 0 0 10px white, 0 0 15px white, 0 0 30px orange, 0 0 30px orange, 0 0 30px orange,;
  font-family: 'Roboto', sans-serif;
  
  
}


h2{
  padding-top:30px;
  padding-bottom:20px;
  margin: 0 auto;
  text-align: center;
  color: white;

  opacity: 0.8; 
  font-size: 20px;
  font-family: 'Roboto', sans-serif;
  
}

h3{
  padding-top:20px;
  badding-bottom:20px;
  margin: 0 auto;
  text-align: center;
  color: white;
  opacity: 0.8; 
  font-size: 40px;
  font-family: 'Roboto', sans-serif;
}


i{
  color:red;
  
 
}





#container {
  background: $container-background;
  display: block;
  text-align: center;
  font-size:20px;
  width: 40%;
  margin: 48px auto;
  min-height: 30px;
  padding: 24px;
  border-radius: 4px;
}
  .center-text {
    text-align: center;
  }

.container-fluid{
  height:100%;
  width:auto;
}

section .row img {
  margin: 0 0 30px;
  width: 150px;
  height: 150px;
  border-radius:30px;
  padding-top:2%;
  padding-bottom:2%;
  padding-left:2%;
  padding-right:2%;
}



#city-state {  
  font-size:1.5em;
  padding-top:20px;
  badding-bottom:20px;
  margin: 0 auto;
  font-family: 'Roboto', sans-serif;
  text-align: center;
  color: white;

  opacity: 0.8; 
  
}



#icon1 {
	max-width: 50%; 
  
}

#temperature {
	font-size: 8em;
	font-family: 'Roboto', sans-serif;
}

#condition {
	opacity: 0.8; 
}

#searchBTN{
color:black;
  background-color:lightgrey;
  height:20px;
  width:20px;
  
}



.dock {
	position: relative;
	bottom: 0;
	z-index: 9999;
	width: 100%;
	text-align: center;
}
.dock ul {
	position: relative;
	display: inline-block;
	padding: 0 5px;
	margin: 0;
	background:url(../img/dock-bg.png) repeat-x bottom;
}
.dock ul:before, .dock ul:after {
	content: "";
	position: absolute;
	top: 0;
	bottom: 0;
	width: 38px;
}
.dock ul:before {
	left: -38px;
	background: url(../img/dock-bg-left.png) no-repeat left bottom;
}
.dock ul:after {
	right: -38px;
	background: url(../img/dock-bg-right.png) no-repeat right bottom;
}
.dock li {
	display: inline-block;
	position: relative;
	margin: 0 0 15px 0;
	-webkit-box-reflect: below -16px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(91%, rgba(255, 255, 255, .1)), color-stop(91.01%, transparent), to(transparent));
}
.dock a {
	display: block;
	cursor: default;
	outline: none;
  
}
.dock em {
	position: absolute;
	top: -34px;
	left: 50%;
	display: none;
	width: 150px;
	margin-left: -75px;
	text-align: center;
}
.dock em:after {
	content: " ";
	position: absolute;
	bottom: -6px;
	left: 50%;
	margin-left: -6px;
	width: 0;
	height: 0;
	border-left: 6px solid transparent;
	border-right: 6px solid transparent;
	border-top: 6px solid rgba(0, 0, 0, 0.6);
	border-bottom: none;
}
.dock em span {
	display: inline-block;
	padding: 5px 12px;
	background: rgba(0, 0, 0, 0.6);
	font-style:normal;
	font-size:12px;
	color:#fff;
	text-shadow:0 1px 1px #000;
	border-radius: 10px;
}
.dock li:hover em {
	display: block;
}
.dock img {
	width: 48px;
	height: auto;
	border: none;
	-webkit-transition:all 0.1s linear;
	-moz-transition:all 0.1s linear;
}
.dock li.ok:hover img {
	width: 128px;
	-webkit-transition:all 0.15s linear;
	-moz-transition:all 0.15s linear;
}
.dock li.prev img, .dock li.next img {
	width:96px;
	-webkit-transition:all 0.15s linear;
	-moz-transition:all 0.15s linear;
}
.dock li.prev-ancor img, .dock li.next-ancor img {
	width:72px;
	-webkit-transition:all 0.15s linear;
	-moz-transition:all 0.15s linear;
}
.dock li a .fresh {
	content: " ";
	position: absolute;
	bottom: -8px;
	left: 50%;
	width: 8px;
	height: 6px;
	opacity:1;
	background-color: rgba(255, 255, 255, .8);
	margin-left: -2px;
	border-radius:100%;
	box-shadow: inset 0 1px 3px rgba(75, 255, 255, .4), 0 0 4px rgba(75, 255, 255, .5), 0 -1px 7px rgb(75, 255, 255);
	-webkit-box-reflect: below 5px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(91%, rgba(255, 255, 255, 0.5)), color-stop(91.01%, transparent), to(transparent));
}
.dock ul li{
  transition: all .3s ease-in-out; }
.dock ul li:hover{
  transform: scale(2);
  z-index:999;
}
.bounce {
	-webkit-animation: bounce 0.4s 4 alternate ease-out;
	-moz-animation: bounce 0.4s 4 alternate ease-out;
}
@-webkit-keyframes bounce {
	  0% { -webkit-transform: translateY(0); }
	100% { -webkit-transform: translateY(-20px); }
}
@-moz-keyframes bounce {
	  0% { -moz-transform: translateY(0); }
	100% { -moz-transform: translateY(-20px); }
}

</style>

<script>

var API_KEY = "9051c42ec479eebc435aa4c91a5eb33c";

$(document).ready(function() {
	$("body").delay(1000).animate({ opacity: 1 }, 700); // Make the app fade-in
	
  // Get geo-coordinates
  $.ajax({
    type: "GET",
    url: "https://ipinfo.io/json/",
    success: coordinates
  });

  // coordinates callback function
  function coordinates(data) {
    var coords = data.loc;
    var city = data.city;
    var region = data.region;
    var country = data.country;

   

    // Pass city, region, and country to displayLocation
    displayLocation(city, region, country);

    // Pass API url to getWeather
    getWeather(darkSkyAPI);
    
  } // end of coordinates callback

  // displayLocation (pass city, region, and country arguments)
  function displayLocation(city, region, country) {

    // Turn country code into full country name
    $.ajax({
      type: "GET",
      url: "https://restcountries.eu/rest/v1/alpha?codes=" + country,
      success: function(data) {

        // Print to html
        $("#city-state").text((city + ", " + region).toUpperCase());
        $("#country").text((data[0].name).toUpperCase());
      }
    });
  } // end of displayLocation

  // getWeather (pass API URL argument)
  function getWeather(darkSkyAPI) {
    $.ajax({
      type: "GET",
      url: darkSkyAPI,
      dataType: "jsonp",
      success: weather
    });

    // weather function to get darksky JSON data
    function weather(data) {
      var temp = Math.round(data.currently.temperature);
      var icon = data.currently.icon;
      var summary = data.currently.summary;
      //console.log(temp, icon, summary);

      displayWeather(icon, temp, summary);
    } // end of weather

    // displayWeather (pass icon, temp, summary as arguments)
    function displayWeather(icon, temp, summary) {
      //console.log(temp, icon, summary);

      // Using the colored Skycons - https://github.com/maxdow/skycons
      var skycons = new Skycons({"monochrome": false,
                "colors": {
                      "main": "white",
                      "moon": "white",
                      "fog": "white",
                      "fogbank": "white",
                      "cloud": "white",
                      "snow": "white",
                      "leaf":"#7B9EA8",
                      "rain": "white",
                      "sun": "white"
                    } });

      var tempC = Math.round((temp - 32) * 5/9);
    	$("#temperature").text(tempC + "°");

      // Engage 'Bootstrap Toggle'
    	$(function() {
        $('#unit-convert').change(function() {
          if ($(this).prop('checked')){
    				$('#temperature').html(temp + "° ");
    			} else {
    				$('#temperature').html(tempC + "° ");
    			}

        })
      }) // End of 'Bootstrap Toggle'

      $("#condition").text(summary.toUpperCase());

      // Add Skycon based on weather condition
			skycons.add('icon1', icon);
			skycons.play();
    } // end of displayWeather

  } // end getWeather
});

//Get the time and date
function setTime(ts) {
  var date = new Date(ts);
  $('.time').text(date.toLocaleString(navigator.language, {
    hour: '2-digit',
    minute: '2-digit'
  })).attr('datetime', date.getHours() + ':' + date.getMinutes());
  $('.date').text(date.toLocaleString(navigator.language, {
    year: 'numeric',
    month: 'long',
    day: 'numeric'
  })).attr('datetime', date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate());
  setTimeout(function() {
    setTime(Date.now());
  }, 1000);
}
setTime(Date.now());



</script>

   





