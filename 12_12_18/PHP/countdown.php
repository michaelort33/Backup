<html>

<HEAD>

<title> Countdown </title>


<link rel="icon" href="../QuestionPics/favicon.png">

<meta name="viewport" content="width=device-width, initial-scale=1">


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
</header>

<body>
<p></p>
<div class = "text">Countdown until I get to see my babe!</div>

<h1 id = "demo" class = "header"> 
</h1>

<IMG src="../QuestionPics/tenor.gif">

<script>
// Set the date we're counting down to
var countDownDate = new Date("Dec 15, 2018 23:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

</body>
</html>