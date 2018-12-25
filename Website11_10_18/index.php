
<html lang="en">

<head>

<link rel="stylesheet" type="text/css" href="CSS/index.css">

<!-- linking to google material design-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

</head>


<header class="header">

<h1>Kadie!!-Come up with a name please</h1>

</header>

<body>

<div class="navbar">
  <a href="#">Link</a>
  <a href="#">Link</a>
  <a href="#">Link</a>
  <a href="#" class="right">Link</a>
</div>


      <h2>GRE Questions</h2>
      <button id= "rand q" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Next Question</button>

<ul>

        <script type="text/javascript" src="JavaScript/random_question.js"></script>
        <script type="text/javascript"></script>
  <?php
      for ($i = 1; $i <= 55; $i++) {
        	$link="PHP/questions.php?question=".$i;
      		echo "<li><a href=$link> <h5>Question $i</h5></a></li>";
  	  }
  ?>
</ul>


</body>

</footer>
<?php
include_once('PHP/Formats/footer.php');
?>
</footer>


</html>