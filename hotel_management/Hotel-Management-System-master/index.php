<!DOCTYPE html>
<html>
<head>
	<title>HOTEL DEVINE</title>
	<style>

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Orbitron";
    }
    body{
        background-color: #00050f;
        background-attachment: fixed;
        background-size: cover ; 
    }
	.container-fluid{
	    z-index: 1;
        height: 5rem;
        width:100%;
        margin:0%;
        background-color: rgba(0, 0, 0, 0.7);
        background-blend-mode: multiply;
        display: flex;
        flex-wrap: inherit;
        align-items: center;
        justify-content: space-between;
        position: sticky;
        top:0;
        border-radius: 0px 0px 10px 10px ;
    }
    .navbar-brand{
        font-size: 3.4375rem;
        margin-left: 1rem;
        font-family: "Playfair Display SC",serif;
        letter-spacing: 0.4375rem;
        color: aliceblue;
        -webkit-transition: color 2s linear;
        -moz-transition: color 2s linear;
        -o-transition: color 2s linear;
        -ms-transition: color 2s linear;
        transition: color 2s linear;
        text-decoration: none; 
    }
    .access{
    text-decoration: none; 
    height: 2.8125rem;
    width: 10.625rem;
	margin-top: 1.8rem;
    margin-right:1.875rem;
    margin-bottom: 0.0625rem;
    margin-left: 2rem;
    font-family:"Lora",serif;
    font-weight:lighter;
    font-size: 1.2rem;
    text-align: right;
    color: rgb(82, 82, 82);
	-webkit-transition: background-color 2s linear, color 2s linear;
    -moz-transition:  background-color 2s linear, color 2s linear;
    -o-transition: background-color 2s linear, color 2s linear;
    -ms-transition:  background-color 2s linear, color 2s linear;
    transition:  background-color 2s linear, color 2s linear;
    }
    .access:hover{
        color: aliceblue;
    }
    .slideshow-container {
		max-width: 10000px;
		position: relative;
		margin: auto;
		padding: 0px;

	}
    .text {
		color: #b69b00;
		font-size: 30px;
		padding: 8px 12px;
		position: absolute;
		bottom: 8px;
		width: 100%;
		text-align: center;
	}
    .fade {
		-webkit-animation-name: fade;
		-webkit-animation-duration: 1.5s;
		animation-name: fade;
		animation-duration: 1.5s;
	}

    .dot {
		height: 15px;
		width: 15px;
		margin: 0 2px;
		background-color: white;
		border-radius: 50%;
		display: inline-block;
		transition: background-color 0.6s ease;
        
	}
    .active {
		background-color: #717171;
	}
    .reserve_room{
      text-decoration:none;
        font: 1.2rem "Fira Sans", sans-serif;
		    color:rgb(82, 82, 82);
        border-style: solid;
        border-width: 2px;
        border-color:  rgb(82, 82, 82);
		padding: 5px;
		font-size: 35px;
		text-align: center;
		background-color:rgba(0, 0, 0, 0.7);
		width: 500px;
		margin: auto;
		border-radius: 50px;
        display: block;
        margin:auto;
        -webkit-transition: color 2s linear, border-color 2s linear;
        -moz-transition: color 2s linear, border-color 2s linear;
        -o-transition: color 2s linear, border-color 2s linear;
        -ms-transition: color 2s linear, border-color 2s linear;
        transition: color 2s linear, border-color 2s linear;
	}
    .reserve_room:hover{
        color: #b69b00;
        border-color:   #b69b00;

    }
    .basic_box {
			border: 1px solid #ccc;
			border-radius: 5px;
			margin: 10px 220px;
			padding: 50px;
			box-shadow: 0 10px 20px rgba(0,0,0,0.19);
            background-color:  rgba(0, 0, 0, 0.7);
		}
        .r_room
		{
			color: #FFF;
			border: 10px;
			padding: 10px;
			font-size: 35px;
			text-align: center;
			text-shadow: 2px 2px black;
			background-color: rgba(09,41,98,0.99);
			width: 500px;
			margin: auto;
			border-radius: 40px;
		}
		.row {
  			display: flex;
            align-items: center;
		}

		.column {
  			flex: 33.33%;
  			padding: 5px;
            color:#717171;
            text-align: center;
		}
        .footer {
			background-color:  rgba(0, 0, 0, 0.7);
			bottom: 0px;
			margin: 0px;
			margin-bottom: 0px;
			padding: 10px,0;
		}
        .foot-text {
			color: #717171;
			text-align: center;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
		}
    


    @-webkit-keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
    }
    @keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
    }

    
	</style>
</head>
<body>
	<div class="container-fluid">
        <a class="navbar-brand" href="index.php">DEVINE</a>
        <a class="access" href="user_login.php">User Login</a>
        <a class="access" href="#rooms_and_rates">Our Rooms</a>
        <a class="access" href="admin_login.php">Admin</a>
        <a class="access" href="#cont">Contact Us</a>
        </a>
    </div>
    <div class="slideshow-container">

		<div class="mySlides fade">
		  <img id="1" src="Images/2.jpg" style="width:100%">
		  <div class="text">ENJOY THE DREAM EXPERIENCE</div>
		</div>

		<div class="mySlides fade">
		  <img id="2" src="Images/login.jpg" style="width:100%">
		  <div class="text">REDEFINE LUXURY</div>
		</div>

		<div class="mySlides fade">
		  <img id="3" src="Images/A3.jpg" style="width:100%">
		  <div class="text">SAVOUR EVERY SERVE, EVERY SERVICE</div>
		</div>

	</div>
	<br>

	<div style="text-align:center">
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	</div>

	<script>
	    var slideIndex = 0;
		showSlides();

		function showSlides() {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  for (i = 0; i < slides.length; i++) {
		    slides[i].style.display = "none";  
		  }
		  slideIndex++;
		  if (slideIndex > slides.length) {slideIndex = 1}    
		  for (i = 0; i < dots.length; i++) {
		    dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " active";
		  setTimeout(showSlides, 4500); // Change image every 4.5 seconds
		}
	</script>
    <br>
    <br>

    <a class="reserve_room" href="user_login.php">RESERVE A ROOM</a><br>

    <div id="rooms_and_rates" class="basic_box">
        <div class="row">
              <div class="column">
                <img src="images/7a.jpg" alt="rooms" style="width:100%;height: auto;">
              </div>
              <div class="column">
                <img src="images/3b.jpg" alt="rooms" style="width:100%;height: auto;">
              </div>
              <div class="column">
                <img src="images/6a.jpg" alt="rooms" style="width:100%;height: auto;">
              </div>
        </div>
        <div class="row">
              <div class="column">
                <h3>SINGLE ROOM</h3>
              </div>
              <div class="column">
                <h3>FOUR ROOM</h3>
              </div>
              <div class="column">
                <h3>DOUBLE ROOM</h3>
              </div>
        </div>
    </div><br>
    <div id="contact" class="footer">
        <hr>
        <h2 class="foot-text">Contact Us</h2>
        <h3 class="foot-text">Email: devine@hotels.com <br>Phone: 7812XXXXXX</h3><br>
    </div>
</body>
</html>