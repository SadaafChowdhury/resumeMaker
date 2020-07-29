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
	<p>Choose Theme:</p>
	<button style="background-color: #7BF5FF;" onclick="myFunctionLightBlue()">Try it</button>
	<button style="background-color: #0083FF;" onclick="myFunctionBlue()">Try it</button>
	<button style="background-color: #800000;" onclick="myFunctionMaroon()">Try it</button>
	<button style="background-color: #6800FF;" onclick="myFunctionPurple()">Try it</button>
	<button style="background-color: #BFFF15;" onclick="myFunctionGreen()">Try it</button>
	<button style="background-color: #D900C5;" onclick="myFunctionPink()">Try it</button>
	<button style="background-color: #D9C900;" onclick="myFunctionMustard()">Try it</button>
	<button style="background-color: #E0B0FF;" onclick="myFunctionMauve()">Try it</button>
	<button style="background-color: #FCAF00;" onclick="myFunctionOrange()">Try it</button>
	<br><br>
	
	
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
	
	<script>
		function myFunctionLightBlue() {
		  var x = document.getElementByclassName("theme");
		  x[0].style.backgroundColor = "lightblue";
		}
	</script>
</body>
</html>