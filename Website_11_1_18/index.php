
<html lang="en">

<style>

* {
    box-sizing: border-box;
}


/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
    .row {   
        flex-direction: column;
    }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
    .navbar a {
        float: none;
        width: 100%;
    }
}
</style>

<link rel="stylesheet" type="text/css" href="CSS/index.css">

<header>
<title>GREGenome.com</title>

<?php
include_once('PHP/Formats/header.php');
?>
</header>

<body>

<div class="navbar">
  <a href="#">Link</a>
  <a href="#">Link</a>
  <a href="#">Link</a>
  <a href="#" class="right">Link</a>
</div>



<div class="row">
  <div class="side">
  </div>

 <div class="main">
      <h2>GRE Questions</h2>

<ul>
  <?php
      for ($i = 1; $i <= 55; $i++) {
        	$link="PHP/questions.php?question=".$i;
      		echo "<li><a href=$link> <h5>Question $i</h5></a></li>";
  	  }
  ?>
</ul>
  

  </div>
</div>


</body>

</footer>
<?php
include_once('PHP/Formats/footer.php');
?>
</footer>


</html>