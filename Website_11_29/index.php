
<html lang="en">

<head>

    <link rel="icon" href="QuestionPics/favicon.png">

    <title>GRE Genome</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129016827-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-129016827-1');
    </script>

<link rel="stylesheet" type="text/css" href="CSS/index.css">

<!-- linking to google material design-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-blue.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<!-- link ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Add mathjx to page -->
<script type="text/javascript" async
  src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/latest.js?config=TeX-MML-AM_CHTML">
</script>

</head>




<header class="header">

<h1></h1>

</header>

<body class="body">

<div class="navbar">
  <a href="#">Link</a>
</div>


      <h2>GRE Questions</h2>
      <button id= "rand q" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Random Question</button>
      <button id= "all q" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">List All Questions</button>
      <button id= "category quizes" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">List All Quizes by Category</button>

<ul>

        <script type="text/javascript" src="JavaScript/random_question.js"></script>
  <?php
  include('PHP/query_index.php');
  ?>

      <script type="text/javascript">var questions =<?php echo json_encode($row_questions); ?>;</script>
      <script type="text/javascript" src="JavaScript/random_question.js"></script>

      <script type="text/javascript">var rowcount_questions =<?php echo json_encode($rowcount_questions); ?>;</script>
      <script type="text/javascript" src="JavaScript/random_question.js"></script>

      <script type="text/javascript">var quizes =<?php echo json_encode($row_quizes); ?>;</script>
      <script type="text/javascript" src="JavaScript/random_question.js"></script>

      <script type="text/javascript">var rowcount_quizes =<?php echo json_encode($rowcount_quizes); ?>;</script>
      <script type="text/javascript" src="JavaScript/random_question.js"></script>

      <p id="questions"> </p>
      <p id="Quizes by Category"> </p>


</ul>

</body>

<?php
include('PHP/Formats/footer.php');
?>

</html>