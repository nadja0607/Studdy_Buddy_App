


<?php




DEFINE ('DB_USER', 'studentdb');
DEFINE ('DB_PASSWORD', 'timephp');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'students');

$link = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('Could not connect to MySQL: '.
mysqli_connect_error());
 


$mynetID = mysqli_real_escape_string($link, $_REQUEST['netID']);
$myemail = mysqli_real_escape_string($link, $_REQUEST['email']);
$myfirst_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$mylast_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$mymajor = mysqli_real_escape_string($link, $_REQUEST['major']);
$mygender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$mylevel = mysqli_real_escape_string($link, $_REQUEST['level']);
$mypassword = mysqli_real_escape_string($link, $_REQUEST['password']);

$FIRSTpassword = mysqli_real_escape_string($link, $_REQUEST['password']);
$confirm_password = mysqli_real_escape_string($link, $_REQUEST['confirm_password']);


if (strcmp($FIRSTpassword, $confirm_password) == 0) {
$sql = "INSERT INTO students(netID, Password, email, first_name, last_name,major, gender,level,total_hours,p_major,p_level,p_gender,status) VALUES ('$mynetID','$mypassword' ,'$myemail','$myfirst_name', '$mylast_name', '$mymajor','$mygender','$mylevel','0','none','none','none','Active' )";
}
else {
	header("Location: http://localhost:8080/register-ver.html");
exit();

}

// $sql = "INSERT INTO students SET netID='$mynetID', email='$myemail', first_name='$myfirst_name', last_name='$mylast_name', major='$mymajor', gender='$mygender', level='$mylevel'";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
header("Location: http://localhost:8080/main.html");
exit();



    
  

?>






