<?php


DEFINE ('DB_USER', 'studentdb');
DEFINE ('DB_PASSWORD', 'timephp');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'students');

$link = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('Could not connect to MySQL: '.
mysqli_connect_error());
 
echo "Connected successfully";
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);


 
// Attempt insert query execution
$sql = "UPDATE students SET p_major='$first_name' WHERE netID='ah4601'";


// $sql = "INSERT INTO students (netID, first_name, p_major, p_gender, p_level) VALUES ('ah4601','Aisha','$first_name', '$last_name', '$email')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

	$dbhst = "localhost";
	$dbnme = "students"; 
    $bdusr = "studentdb";
    $dbpws = "timephp";


$conn = new PDO('mysql:host='.$dbhst.';dbname='.$dbnme, $bdusr, $dbpws);

// Getting variables




$pref_major = trim(mysqli_real_escape_string($link, $_REQUEST['first_name']));
$pref_year = trim(mysqli_real_escape_string($link, $_REQUEST['last_name']));
$pref_gender = mysqli_real_escape_string($link, $_REQUEST['email']);


echo "100% match!";
// Comparing answers
$sql = " SELECT netID, first_name, last_name, major FROM students WHERE major='$pref_major' and level='$pref_year' and gender='$pref_gender' ";
$result = $conn->query($sql);

if ($result) {
  // output data of each row
  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<br> id: ". $row["netID"]. " - Name: ". $row["first_name"]. " " . $row["last_name"] . "<br>";
  }
} else {
  echo "0 results";
}


echo "Not 100%, but still a nice match!";

$sql = " SELECT netID, first_name, last_name, major FROM students WHERE major='$pref_major' or level='$pref_year' or gender='$pref_gender' ";
$result = $conn->query($sql);

if ($result) {
  // output data of each row
  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<br> id: ". $row["netID"]. " - Name: ". $row["first_name"]. " " . $row["last_name"] . "<br>";
  }
} else {
  echo "0 results";
}






// Close connection
mysqli_close($link);






?>