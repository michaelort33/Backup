
<html>
<link rel="stylesheet" style="text/css" href="../CSS/QuestionPics/image_forms.css">


<?php

$question  = $_GET['question'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gre_genome";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
}

$sql = 'SELECT Path,QuestionText FROM gre_questions WHERE QuestionNumber='.$question;

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

$my_path= $row["Path"];
$my_text=$row["QuestionText"];


$conn->close();
?>


<body>

<center>
<?php echo $my_text?>
</center>

<br>

<img src=<?php echo $my_path?> alt="test", class="center">

</body>
</html>