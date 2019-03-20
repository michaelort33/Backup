
<html>
<link rel="stylesheet" style="text/css" href="../CSS/quiz.css">
<link rel="stylesheet" style="text/css" href="../CSS/index.css">

<!-- linking material design -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-blue.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>


<?php

$question  = $_GET['question'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gre_genome";

/* this is just for the website

$servername = 'db758411969.db.1and1.com';
$username = 'dbo758411969';
$password = 'Mooose33!!';
$dbname = 'db758411969';

*/

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
}

$sql = 'SELECT Path,QuestionText,Answ1,Answ2,Answ3,Answ4,Answ5,Correct FROM gre_questions WHERE QuestionNumber='.$question;

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$my_path= $row["Path"];

$conn->close();
?>

<header>

<script type="text/javascript">var row =<?php echo json_encode($row); ?>;</script>
<script type="text/javascript" src="../JavaScript/quiz.js"></script>

<title>GREGenome.com</title>


</header>

<body id = "share">

<div class="navbar">
	
  <a href="#" class="right">
  		<button id="previous">Previous Question</button>
        <button id="next">Next</button>
  		<button id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Submit</button>
  </a>
  <a href="#" class="right">
          <button id= "next q" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Next Question</button>
  </a>

	<script type="text/javascript" src="../JavaScript/next_question.js"></script>
	<script type="text/javascript"></script>

</div>


		<div class="new">
		  <div id="quiz" class = "quiz-container"></div>
		</div>
		
		<div id="results"></div>


		<script type="text/javascript" src="../JavaScript/quiz.js"></script>

		<script>
		function();
		</script>


</body>


</html>