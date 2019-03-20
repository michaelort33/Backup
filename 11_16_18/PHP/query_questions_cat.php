<?php
//query for questions_cat.php
// Create connection

include("query_connection.php");

if(!empty($_GET['category3'])||!empty($_GET['category'])||!empty($_GET['question'])){
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
}


if (!empty($_GET['question'])) {
	$question = $_GET['question'];
	$sql = 'SELECT Path,QuestionText,Answ1,Answ2,Answ3,Answ4,Answ5,Correct FROM gre_questions WHERE QuestionNumber='.$question. 'AND QuestionText <> \'\' ';
} elseif(!empty($_GET['category'])) {
	$category = $_GET['category'];
	if (!empty($_GET['category3'])) {
		$category3 = $_GET['category3'];
		$sql = 'SELECT Path,QuestionText,Answ1,Answ2,Answ3,Answ4,Answ5,Correct FROM gre_questions WHERE Category0='.$category.'AND SubCat3='.$category3.'AND QuestionText <> \'\' ';
	} else{
	$sql = 'SELECT Path,QuestionText,Answ1,Answ2,Answ3,Answ4,Answ5,Correct FROM gre_questions WHERE Category0='.$category.'AND QuestionText <> \'\' > 0';
	} 
}


$result = mysqli_query($conn,$sql);	

//also pass a row count to java script
$rowcount=mysqli_num_rows($result);

$row=mysqli_fetch_all($result);

$conn->close();

}
?>