
<html>

<HEAD>

<link rel="stylesheet" style="text/css" href="../CSS/quiz_cat.css">
<link rel="stylesheet" style="text/css" href="../CSS/index.css">

<!-- linking material design -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-blue.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<!-- Add mathjx to page -->
<script type="text/javascript" async
  src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/latest.js?config=TeX-MML-AM_CHTML">
</script>

<?php
include('query_index.php');
include('query_questions_cat.php');
?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129016827-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129016827-1');
</script>

</HEAD>

<header>

<script type="text/javascript">var row =<?php echo json_encode($row); ?>;</script>
<script type="text/javascript" src="../JavaScript/quiz_cat.js"></script>

<script type="text/javascript">var rowcount =<?php echo json_encode($rowcount); ?>;</script>
<script type="text/javascript" src="../JavaScript/quiz_cat.js"></script>


<title>GREGenome.com</title>

</header>

<body id = "share">

<div class="navbar">
	
  <a href="#" class="right">
  	 	 <button id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Submit</button>
  </a>
  
  <a href="#" class="right">
  	 	<button id="next" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Next</button>
  </a>
	
  <a href="#" class="right">
  		<button id="previous" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Previous Question</button>
  </a>

</div>
		<div class="new">
		  <div id="quiz" class = "quiz-container"></div>
		</div>
		
		<div id="results"></div>

		<script type="text/javascript" src="../JavaScript/quiz_cat.js"></script>

		<script>
		function();
		</script>
</body>

</html>