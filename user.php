<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="SHORTCUT ICON" href="favicon.ico" />
		<title>NSS NITC</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="jquery-3.2.1.js"></script>
		<script src="jquery.touchSwipe.min.js"></script> 
		     
		<style>
		#formButton
		{
			background-color: #333333;
			border: 2px solid white;
			border-radius: 27px;
			color: white;
			cursor: pointer;
			font-size: 20px;
			margin-top: 20px;
			padding: 15px 30px;
			text-transform: uppercase;
			transition: all 200ms;
		}
		#formButton:hover, #formButton:focus
		{
			background-color: white;
			color: #333333;
			outline: 0;
		}
		</style>
			 
		<!--SIDEBAR FUNCTION-->
			 
		<script>
		function w3_open() 
		{
			document.getElementById("mySidebar").style.display = "block";
			document.getElementById("myOverlay").style.display = "block";
		}
		function w3_close() 
		{
			document.getElementById("mySidebar").style.display = "none";
			document.getElementById("myOverlay").style.display = "none";
		}
		</script>
		
		<!--TOUCHSCREEN SIDEBAR FUNCTION-->
		
		<script>
			$(window).load(function()
			{
				$(".swipe-area").swipe(
				{
					swipeStatus:function(event, phase, direction, distance, duration, fingers)
					{
						if (phase=="move" && direction =="right") 
						{
							w3_open();
							return false;
						}
						if (phase=="move" && direction =="left") 
						{
							w3_close();
							return false;
						}
					}
				});
			});
		</script>
		
		<!--IN PAGE CSS-->
		
		<link rel="stylesheet" href="inline.css">
		
		<!--UNSTICKY HEADER FUNCTION-->
		
		<script>
			$(document).ready(function()
			{
				$(function () 
				{
				// Check the initial Position of the Sticky Header
				var stickyHeaderTop = $('#stickyHeaderL').offset().top;

					$(window).scroll(function () 
					{
						if ($(window).scrollTop() > stickyHeaderTop) 
						{
							$('#stickyHeaderL').css({
								position: 'fixed',
								top: '0px'
							});
							$('#otherContent').css('margin-top', $('#stickyHeaderL').outerHeight(true) + parseInt($('#unStickyHeader').css('marginBottom')));
						} else 
						{
							$('#stickyHeaderL').css({
								position: 'static',
								top: '0px'
							});
							$('#otherContent').css('margin-top', '0px');
						}
					});
				});
			}); 

		</script>


	</head>

	
	
	<body id="outerBody">
	
		<!--SWIPE-->
	
		<div class="swipe-area w3-hide-large"></div>
		
		<!--UNSTICKY HEADER-->
		
		<div id="unStickyHeader" class="w3-container">
			<div class="w3-center w3-hide-small w3-hide-medium w3-xxxlarge w3-wide">
			<img src="images/logo.png" alt="NSS" height="50" width="auto">
			NSS NITC
			</div>
		</div>
		
		<!--NAVBAR-->
		
		<div id="stickyHeaderL" class="w3-bar w3-card-2 w3-large w3-hide-small w3-hide-medium" style="position: static; top: 0px;">
		
			<a 	class="w3-bar-item w3-btn w3-ripple" 
				 
				href="about.html" 
				title="About NSS NITC">ABOUT
			</a>
				
			<a 	class="w3-bar-item w3-btn w3-ripple" 
				 
				href="activities.html" 
				title="Activities">ACTIVITIES
			</a>
				
			<a 	class="w3-bar-item w3-btn w3-ripple" 
				 
				href="blood.html" 
				title="Details on Blood Donations">BLOOD FORUM
			</a>
				
			<a 	class="w3-bar-item w3-btn w3-ripple" 
				 
				href="hour.html" 
				title="Check NSS Hours">HOUR LIST
			</a>
				
			<a 	class="w3-bar-item w3-btn w3-ripple" 
				 
				href="contact.html" 
				title="Contact us">CONTACT US
			</a>
			<form action="user.php" method="post" name="roll_form" style="text-align:center">
				<button id="goButton"
					class="w3-bar-item w3-btn w3-ripple w3-right" id="goButton">
					Go
				</button>
				<input 
					type="text"
					class="w3-bar-item w3-input w3-right"
					placeholder="Check Hours gained"
					name="rollno"
					id="rollno" required/>
			</form>
		</div>
		
		
		<!-- HAMBURGER ICON AND NAV BAR -->
		
		
		<div 	class="w3-overlay w3-animate-opacity" 
				onclick="w3_close()" 
				style="cursor:pointer" 
				id="myOverlay">
		</div>
		
		<div 	id="stickyHeaderS" class="w3-bar w3-hide-large" style="position: fixed; top: 0px;margin-bottom: ">
				<a 	href="#" 
					class="w3-bar-item w3-btn w3-ripple" 
					style="width:10%" 
					title="Open Side Navigation" 
					onclick="w3_open()">
						<i class="fa fa-bars"></i>
				</a>
				<a 	class="w3-bar-item" 
					style="width:32.5%">
				</a>
				<a 	class="w3-bar-item" 
					style="width:57.5%">
						<img src="images/logo.png" alt="NSS" height="20" width="auto">
				</a>
		</div>
		
		<!--SIDEBAR-->
		
		<div 	class="w3-sidebar w3-bar-block w3-animate-left" 
				style="display:none;z-index:5" 
				id="mySidebar">
				<button onclick="w3_close()" 
						class="w3-bar-item  w3-button w3-large">
						Close &times;
				</button>
			<a 	class="w3-bar-item w3-btn w3-ripple" 
				 
				href="about.html" 
				title="About NSS NITC">ABOUT
			</a>
				
			<a 	class="w3-bar-item w3-btn w3-ripple" 
				 
				href="activities.html" 
				title="Activities">ACTIVITIES
			</a>
				
			<a 	class="w3-bar-item w3-btn w3-ripple" 
				 
				href="blood.html" 
				title="Details on Blood Donations">BLOOD FORUM
			</a>
				
			<a 	class="w3-bar-item w3-btn w3-ripple" 
				 
				href="hour.html" 
				title="Check NSS Hours">HOUR LIST
			</a>
				
			<a 	class="w3-bar-item w3-btn w3-ripple" 
				 
				href="contact.html" 
				title="Contact us">CONTACT US
			</a>
			<form>
				<a 
					href="file:///D:/Documents/Projects/WebP/Project%202/hours.html#" 
					class="w3-btn w3-cell w3-ripple w3-right" id="goButton" style="font-size:16px;width:30%">
					Go
				</a>
				<input 
					type="text" 
					class="w3-input w3-cell w3-right"
					style="width:70%"
					placeholder="Check Hours">	

			</form>
		</div>
		
		<!--CORRECTION SPACE-->
		
		<div 	id="spacing" 
				class="w3-container w3-hide-large" 
				style="margin-bottom: 40px">
				<!--CORRECTION SPACE-->
		</div>
		
		<!--BODY-->
		
		<div id="otherContent" class="w3-container" style="margin-top: 0px;">
			<div class="info-card w3-card-4" style="padding-bottom:10px">
				<?php
					$servername = "localhost";
					$username = "guest";
					$password = "";
					$dbname = "devanks";
					$rollno = $_POST['rollno'];

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}

					$sql = "SELECT roll_number,name,social,farm,project FROM student_list WHERE roll_number='$rollno'";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
						// output data of row
							$row = mysqli_fetch_assoc($result);
					} else {
						echo "No record exist";
					}

					$conn->close();
				?>
				<header id="headerInfo" class="w3-container w3-center" style="width:100%">
					<h1><?php echo $row["name"] ?></h1>
					<h3><?php echo $row["roll_number"] ?></h3>
				</header>
				<div class="w3-container" style="padding-left:10px;padding-right:10px">
					<div class="w3-container w3-large w3-cell" style="padding-top:10px;padding-bottom:10px">
						<b>Social Work</b>
					</div>
					<div class="w3-light-grey w3-round-xlarge">
						<?php 
							$social = $row["social"]*20;
							echo '<div class="w3-container w3-blue w3-center w3-round-xlarge" style="width:' . $social . '%">' . $row["social"] . '</div>'
						?>
					</div>
					<div class="w3-container w3-large w3-cell" style="padding-top:10px;padding-bottom:10px">
						<b>Farm Work</b>
					</div>
					<div class="w3-light-grey w3-round-xlarge">
						<?php 
							$farm = $row["farm"]*20;
							echo '<div class="w3-container w3-yellow w3-center w3-round-xlarge" style="width:' . $farm . '%">' . $row["farm"] . '</div>'
						?>
					</div>
					<div class="w3-container w3-large w3-cell" style="padding-top:10px;padding-bottom:10px">
						<b>Project Work</b>
					</div>
					<div class="w3-light-grey w3-round-xlarge">
						<?php 
							$project = $row["project"]*20;
							echo '<div class="w3-container w3-red w3-center w3-round-xlarge" style="width:' . $project . '%">' . $row["project"] . '</div>'
						?>
					</div>
					<div class="w3-container w3-large w3-cell" style="padding-top:10px;padding-bottom:10px">
						<h3><u><b>Total Hours</b></u></h4>
					</div>
					<div class="w3-light-grey w3-round-xlarge">
						<?php 
							$total = $row["project"] + $row["farm"] + $row["social"];
							$totalp = $total*100/15;
							echo '<div class="w3-container w3-purple w3-center w3-round-xlarge" style="width:' . $totalp . '%">' . $total . '</div>'
						?>
					</div>
				</div>
				<a href="hour.html"><button style="margin-left:450px;margin-right:auto" id="formButton">Go Back</button></a>
			</div>
		</div>
		
		<!-- FOOTER -->
		
		<div id="footer-bar" class="info-card w3-card-4">
			<div class="w3-container w3-cell">
					<p class=" w3-large w3-serif">
					<i class="fa fa-quote-right w3-xxlarge w3-text-red"></i><br>
					<script src="https://wordsmith.org/words/quote2.js"></script>
			</div>
			<div class="w3-container w3-cell">
				<img src="images/nitc.png" alt="NITC" style="padding-top:20px;width:100px;float:right;clear:right;"></img>
			</div>
		</div>
	</body>
	<?php
	// remove all session variables
	session_unset(); 

	// destroy the session 
	session_destroy(); 
	?>
</html>