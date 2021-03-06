<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="styles.css">
	<title>Resume Maker</title>
	<script>
		
	</script>
</head>
<body style="background-image: linear-gradient(45deg, #08DBCB, yellow);">

<h1 style="text-align:center;">Resume Maker</h1>

<div class="grid-container">

<div>
<form action="resume.php" method="post">
  <h1>Personal Information</h1>
  <label for="fname">First name:</label>
  <input class="inputFields" type="text" id="fname" name="fname" value="John">
  <label for="lname">Last name:</label>
  <input class="inputFields" type="text" id="lname" name="lname" value="Doe"><br><br>
  <label for="position">Position</label>
  <input class="inputFields" type="text" id="position" name="position" value="Front End Developer">
  <label for="cNumber">Contact Number:</label>
  <input class="inputFields" type="number" id="cNumber" name="cNumber"><br><br>
  <label for="email">Email:</label>
  <input class="inputFields" type="email" id="email" name="email">
  <label for="address">Address:</label>
  <input class="inputFields" type="text" id="address" name="address"><br><br>
  <label for="image">Image:</label><br>
  <input class="inputFields" type="file" id="image" name="image"><br><br><br>

</div>
<div>

  <h1>Education</h1>
  <label for="college">College Name:</label>
  <input class="inputFields" type="text" id="college" name="college">
  <label for="cStart">Start:</label>
  <input class="inputFields" type="date" id="cStart" name="cStart">
  <label for="cEnd">End:</label>
  <input class="inputFields" type="date" id="cEnd" name="cEnd"><br><br>
  ​<label for="degree">Degree:</label>
  <input class="inputFields" type="text" id="degree" name="degree">
  <label for="cgpa">CGPA:</label>
  <input class="inputFields" type="number" id="cgpa" name="cgpa"><br><br>
  <h1>Interests</h1>
  <label for="interests">Interests:</label>
  <input class="inputFields" type="text" id="interests" name="interests"><br>
  <h1>Languages</h1>
  <label for="language">Language/s:</label>
  <input class="inputFields" type="text" id="language" name="language"><br>
  <h1>Skills</h1>
  <label for="skills">Skills:</label>
  <input class="inputFields" type="text" id="skills" name="skills"><br>
  <h1>Projects</h1>
  <label for="link">Link:</label>
  <input class="inputFields" type="url" id="pLink" name="pLink">
  <label for="description">Description:</label>
  <input class="inputFields" type="text" id="pDescription" name="pDescription"><br><br><br>

</div>
<div>

  <h1>Links</h1>
  <label for="linkedin">LinkedIn Link:</label>
  <input class="inputFields" type="url" id="linkedin" name="linkedin">
  <label for="github">Github Link:</label>
  <input class="inputFields" type="url" id="github" name="github"><br>
  <h1>Experience</h1>
  <label for="wpName">Workplace Name:</label><br>
  <input class="inputFields" type="text" id="wpName" name="wpName"><br>
  <label for="wStart">Start:</label><br>
  <input class="inputFields" type="date" id="wStart" name="wStart"><br>
  <label for="wEnd">End:</label><br>
  <input class="inputFields" type="date" id="wEnd" name="wEnd"><br>
  <label for="wpDescription">What did you do:</label><br>
  <input class="inputFields" type="text" id="wpDescription" name="wpDescription"><br>
  <label for="employer">Employer:</label><br>
  <input class="inputFields" type="text" id="employer" name="employer"><br>
  <label for="empContact">Contact:</label><br>
  <input class="inputFields" type="number" id="empContact" name="empContact"><br><br><br>
  <div style="text-align:center;"><button class="submitButton">Submit</button></div>
</form>
</div>

</div>

</body>
</html>