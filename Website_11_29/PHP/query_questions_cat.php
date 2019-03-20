<?php
//query for questions_cat.php
// Create connection

include("query_connection.php");


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
}

//set conditions for categories

$cat_names = array_keys($_GET);
$conditions='';
$i=0;
foreach($_GET as $cat) {
	if ($i === 0) {
		$conditions=$conditions.' '.$cat_names[$i]." = ".$cat;
		$i++;
	}else{
		$conditions=$conditions.' AND '.$cat_names[$i]." = ".$cat;
	}
}


$sql = 'SELECT Path,QuestionText,Answ1,Answ2,Answ3,Answ4,Answ5,Correct, Answer_explanation 
FROM gre_questions WHERE'.' '.$conditions.' '.'AND QuestionText <> \'\' > 0';

$result = mysqli_query($conn,$sql);	

//also pass a row count to java script
$rowcount=mysqli_num_rows($result);

$row=mysqli_fetch_all($result);

$conn->close();

?>