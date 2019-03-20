
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



<link rel="stylesheet" type="text/css" href="CSS/index.css">

<!-- linking to google material design-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-blue.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

</head>


<header class="header">

<h1>Kadie!!-Come up with a name please</h1>

</header>

<body class="body">

<div class="navbar">
  <a href="#">Link</a>
</div>


      <h2>GRE Questions</h2>
      <button id= "rand q" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Random Question</button>
      <button id= "all q" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">List All Questions</button>

<ul>

        <script type="text/javascript" src="JavaScript/random_question.js"></script>
        <script type="text/javascript"></script>
  <?php
      for ($i = 1; $i <= 55; $i++) {
        	$link="PHP/questions.php?question=".$i;
      		$my_array[$i]= "<li><a href=$link> <h5>Question $i</h5></a></li>";
  	  }
  ?>

      <script type="text/javascript">var questions =<?php echo json_encode($my_array); ?>;</script>
      <script type="text/javascript" src="JavaScript/random_question.js"></script>

      <p id="questions"> </p>




</ul>


</body>

<?php
include_once('PHP/Formats/footer.php');
?>

</html>