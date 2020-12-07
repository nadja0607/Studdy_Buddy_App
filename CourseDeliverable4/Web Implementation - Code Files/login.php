<?php

DEFINE ('DB_USER', 'studentdb');
DEFINE ('DB_PASSWORD', 'timephp');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'students');

$link = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('Could not connect to MySQL: '.
mysqli_connect_error());


$dbhst = "localhost";
$dbnme = "students"; 
$bdusr = "studentdb";
$dbpws = "timephp";


$conn = new PDO('mysql:host='.$dbhst.';dbname='.$dbnme, $bdusr, $dbpws);


 
echo "Connected successfully";

// if (isset($link, $_REQUEST['j_username']))
$loginnetID = mysqli_real_escape_string($link, $_REQUEST['j_username']);


$statusnetID = mysqli_real_escape_string($link, $_REQUEST['j_username']);
$loginpassword = mysqli_real_escape_string($link, $_REQUEST['j_password']);


if (empty($loginnetID)) {echo "$loginnetID";}
if (!isset($loginpassword)) {echo "$loginpassword";}


$sql = " SELECT netID, Password,status FROM students WHERE netID='$loginnetID'";

$result = $conn->query($sql);

if ($result) {


  echo "Checking password";
  echo "$statusnetID";

  // output data of each row
  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    
    if (strcmp($loginpassword, $row["Password"]) == 0) {
    echo "<br> id: ". $row["netID"]. " - Password: ". $row["Password"]. "";
    $conn = new PDO('mysql:host='.$dbhst.';dbname='.$dbnme, $bdusr, $dbpws);
    $sql = "UPDATE students SET status='Active' WHERE netID='$statusnetID'";
    $result = $conn->query($sql);
    
    echo "done";

    header("Location: http://localhost:8080/mfa-two.html");
    exit();
		}
	else {echo "Password incorrect. Please try again."; 
    header("Location: http://localhost:8080/mfa-ver.html");
    exit();
  }


    
  }
} 


header("Location: http://localhost:8080/mfa-ver.html");
exit();



?>