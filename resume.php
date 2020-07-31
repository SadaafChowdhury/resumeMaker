<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="styles.css">
	<title>Resume Maker</title>
</head>

<body>
<div id="themeSelec">
	<p>Choose Theme:</p>
	<button style="background-color: #7BF5FF;" onclick="myFunctionLightBlue()">O</button>
	<button style="background-color: #0083FF;" onclick="myFunctionBlue()">O</button>
	<button style="background-color: #800000;" onclick="myFunctionMaroon()">O</button>
	<button style="background-color: #6800FF;" onclick="myFunctionPurple()">O</button>
	<button style="background-color: #BFFF15;" onclick="myFunctionGreen()">O</button>
	<button style="background-color: #D900C5;" onclick="myFunctionPink()">O</button>
	<button style="background-color: #D9C900;" onclick="myFunctionMustard()">O</button>
	<button style="background-color: #E0B0FF;" onclick="myFunctionMauve()">O</button>
	<button style="background-color: #FCAF00;" onclick="myFunctionOrange()">O</button>
	<br><br>
</div>	
	
	<div class="grid-container1 theme">
    <div class="item1">
	<div class="card">
	  <img src="<?php echo $_POST["image"]; ?>" alt="Avatar" style="width:100%; border-radius: 5%;"> 
	</div>
	</div>
    <div class="item2">
	<hr>
	<h1><?php echo $_POST["fname"]; ?><?php echo $_POST["lname"]; ?></h1>
	<p><?php echo $_POST["position"]; ?></p>
	</div>
	</div>
	
	<div class="grid-container2">
    <div class="item3" style="background-color: #DDDDDD;">
	<div style="padding:5px;">
	<hr style="width:80%; height:5px;" class="theme">
	<h3><i class='fas fa-file-alt' style='font-size:36px; color: #0091B2;'></i>  Profile</h3>
	<p>Interests: <?php echo $_POST["interests"]; ?></p>
	<p>Languages: <?php echo $_POST["language"]; ?></p>
	<p>LinkedIn: <?php echo $_POST["linkedin"]; ?></p>
	<p>Github: <?php echo $_POST["github"]; ?></p>
	
	<hr style="width:80%; height:5px;" class="theme">
	<h3><i class='fas fa-address-book' style='font-size:36px; color: #0091B2;'></i>  Contact Me</h3>
	<p>Contact Number: <?php echo $_POST["cNumber"]; ?></p>
	<p>Email: <?php echo $_POST["email"]; ?></p>
	<p>Address: <?php echo $_POST["address"]; ?></p>
	
	<hr style="width:80%; height:5px;" class="theme">
	<h3><i class='fas fa-clock' style='font-size:36px; color: #0091B2;'></i>  Skills</h3>
	<p><?php echo $_POST["skills"]; ?></p>
	</div>
	</div>
    <div class="item4">
	
	<hr style="width:80%; height:5px;" class="theme">
	<h3><i class='fas fa-briefcase' style='font-size:36px; color: #0091B2;'></i>  Experience</h3>
	<p><?php echo $_POST["wpName"]; ?> <?php echo $_POST["wStart"]; ?>- <?php echo $_POST["wEnd"]; ?></p>
	<p><?php echo $_POST["wpDescription"]; ?></p>
	<p>Employer: <?php echo $_POST["employer"]; ?></p>
	<p>Contact Number: <?php echo $_POST["empContact"]; ?></p>
	<hr style="width:80%; height:5px;" class="theme">
	<h3><i class='fas fa-graduation-cap' style='font-size:36px; color: #0091B2;'></i>  Education</h3>
	<p><?php echo $_POST["college"]; ?></p>
	<p><?php echo $_POST["cStart"]; ?> <?php echo $_POST["cEnd"]; ?></p>
	<p><?php echo $_POST["degree"]; ?></p>
	<p><?php echo $_POST["cgpa"]; ?></p>
	<hr style="width:80%; height:5px;" class="theme">
	<h3><i class='fas fa-code' style='font-size:36px; color: #0091B2;'></i>  Projects</h3>
	<p><?php echo $_POST["pLink"]; ?></p>
	<p><?php echo $_POST["pDescription"]; ?></p>
	<hr style="width:100%; height:40px;" class="theme">
	</div>
	</div>
	<br><br>
	<button onclick="removeFunction(); window.print();">Print Your Resume</button>

	<script>
		function removeFunction() {
		  var myobj = document.getElementById("themeSelec");
		  myobj.remove();
		}
		function myFunctionLightBlue() {
		  var x = document.getElementByclassName("theme");
		  x[0].style.backgroundColor = "lightblue";
		  x[1].style.backgroundColor = "lightblue";
		  x[2].style.backgroundColor = "lightblue";
		  x[3].style.backgroundColor = "lightblue";
		  x[4].style.backgroundColor = "lightblue";
		  x[5].style.backgroundColor = "lightblue";
		  x[6].style.backgroundColor = "lightblue";
		  x[7].style.backgroundColor = "lightblue";
		}
		function myFunctionBlue() {
		  var x1 = document.getElementByclassName("theme");
		  x1[0].style.backgroundColor = "blue";
		  x1[1].style.backgroundColor = "blue";
		  x1[2].style.backgroundColor = "blue";
		  x1[3].style.backgroundColor = "blue";
		  x1[4].style.backgroundColor = "blue";
		  x1[5].style.backgroundColor = "blue";
		  x1[6].style.backgroundColor = "blue";
		  x1[7].style.backgroundColor = "blue";
		}
		function myFunctionLightMaroon() {
		  var x2 = document.getElementByclassName("theme");
		  x2[0].style.backgroundColor = "#800000";
		  x2[1].style.backgroundColor = "#800000";
		  x2[2].style.backgroundColor = "#800000";
		  x2[3].style.backgroundColor = "#800000";
		  x2[4].style.backgroundColor = "#800000";
		  x2[5].style.backgroundColor = "#800000";
		  x2[6].style.backgroundColor = "#800000";
		  x2[7].style.backgroundColor = "#800000";
		}
		function myFunctionPurple() {
		  var x3 = document.getElementByclassName("theme");
		  x3[0].style.backgroundColor = "#6800FF";
		  x3[1].style.backgroundColor = "#6800FF";
		  x3[2].style.backgroundColor = "#6800FF";
		  x3[3].style.backgroundColor = "#6800FF";
		  x3[4].style.backgroundColor = "#6800FF";
		  x3[5].style.backgroundColor = "#6800FF";
		  x3[6].style.backgroundColor = "#6800FF";
		  x3[7].style.backgroundColor = "#6800FF";
		}
		function myFunctionGreen() {
		  var x4 = document.getElementByclassName("theme");
		  x4[0].style.backgroundColor = "#BFFF15";
		  x4[1].style.backgroundColor = "#BFFF15";
		  x4[2].style.backgroundColor = "#BFFF15";
		  x4[3].style.backgroundColor = "#BFFF15";
		  x4[4].style.backgroundColor = "#BFFF15";
		  x4[5].style.backgroundColor = "#BFFF15";
		  x4[6].style.backgroundColor = "#BFFF15";
		  x4[7].style.backgroundColor = "#BFFF15";
		}
		function myFunctionPink() {
		  var x5 = document.getElementByclassName("theme");
		  x5[0].style.backgroundColor = "#D900C5";
		  x5[1].style.backgroundColor = "#D900C5";
		  x5[2].style.backgroundColor = "#D900C5";
		  x5[3].style.backgroundColor = "#D900C5";
		  x5[4].style.backgroundColor = "#D900C5";
		  x5[5].style.backgroundColor = "#D900C5";
		  x5[6].style.backgroundColor = "#D900C5";
		  x5[7].style.backgroundColor = "#D900C5";
		}
		function myFunctionMustard() {
		  var x6 = document.getElementByclassName("theme");
		  x6[0].style.backgroundColor = "#D9C900";
		  x6[1].style.backgroundColor = "#D9C900";
		  x6[2].style.backgroundColor = "#D9C900";
		  x6[3].style.backgroundColor = "#D9C900";
		  x6[4].style.backgroundColor = "#D9C900";
		  x6[5].style.backgroundColor = "#D9C900";
		  x6[6].style.backgroundColor = "#D9C900";
		  x6[7].style.backgroundColor = "#D9C900";
		}
		function myFunctionMauve() {
		  var x7 = document.getElementByclassName("theme");
		  x7[0].style.backgroundColor = "#E0B0FF";
		  x7[1].style.backgroundColor = "#E0B0FF";
		  x7[2].style.backgroundColor = "#E0B0FF";
		  x7[3].style.backgroundColor = "#E0B0FF";
		  x7[4].style.backgroundColor = "#E0B0FF";
		  x7[5].style.backgroundColor = "#E0B0FF";
		  x7[6].style.backgroundColor = "#E0B0FF";
		  x7[7].style.backgroundColor = "#E0B0FF";
		}
		function myFunctionOrange() {
		  var x8 = document.getElementByclassName("theme");
		  x8[0].style.backgroundColor = "#FCAF00";
		  x8[1].style.backgroundColor = "#FCAF00";
		  x8[2].style.backgroundColor = "#FCAF00";
		  x8[3].style.backgroundColor = "#FCAF00";
		  x8[4].style.backgroundColor = "#FCAF00";
		  x8[5].style.backgroundColor = "#FCAF00";
		  x8[6].style.backgroundColor = "#FCAF00";
		  x8[7].style.backgroundColor = "#FCAF00";
		}
	</script>
</body>
</html>