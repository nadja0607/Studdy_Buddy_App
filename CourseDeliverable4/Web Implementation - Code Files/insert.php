<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php


DEFINE ('DB_USER', 'studentdb');
DEFINE ('DB_PASSWORD', 'timephp');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'students');

$link = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('Could not connect to MySQL: '.
mysqli_connect_error());
 
// echo "Connected successfully";
 


// Escape user inputs for security
$mypref_major = mysqli_real_escape_string($link, $_REQUEST['mypref_major']);
$mypref_level = mysqli_real_escape_string($link, $_REQUEST['mypref_level']);
$mypref_gender = mysqli_real_escape_string($link, $_REQUEST['mypref_gender']);
$formNetID = mysqli_real_escape_string($link, $_REQUEST['formNetID']);


 
// Attempt insert query execution
$sql = "UPDATE students SET p_major='$mypref_major', p_level='$mypref_level', p_gender='$mypref_gender' WHERE netID='$formNetID'";




// $sql = "INSERT INTO students (netID, first_name, p_major, p_gender, p_level) VALUES ('ah4601','Aisha','$first_name', '$last_name', '$email')";

// if(mysqli_query($link, $sql)){
//     echo "Records added successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }
 
// MATCHING HERE


	$dbhst = "localhost";
	$dbnme = "students"; 
    $bdusr = "studentdb";
    $dbpws = "timephp";


$conn = new PDO('mysql:host='.$dbhst.';dbname='.$dbnme, $bdusr, $dbpws);


$pref_major = trim(mysqli_real_escape_string($link, $_REQUEST['mypref_major']));
$pref_level = trim(mysqli_real_escape_string($link, $_REQUEST['mypref_level']));
$pref_gender = mysqli_real_escape_string($link, $_REQUEST['mypref_gender']);
$itsmyNetID = mysqli_real_escape_string($link, $_REQUEST['formNetID']);



// Comparing answers
// $sql = " SELECT netID, first_name, last_name, major FROM students WHERE major='$pref_major' and level='$pref_level' and gender='$pref_gender' ";
// $result = $conn->query($sql);

// if ($result) {

//   // output data of each row
//   while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    
//     echo '100% match!'; 

//     if (strcmp($itsmyNetID, $row["netID"]) != 0) {
//     echo "<br> id: ". $row["netID"]. " - Name: ". $row["first_name"]. " " . $row["last_name"] . "<br>";
// }
    
//   }
// } else {
//   echo "0 100% match results";
// }




// $sql = " SELECT netID, first_name, last_name, major FROM students WHERE major!='$pref_major' or level!='$pref_level' or gender!='$pref_gender' ";
// $result = $conn->query($sql);

// if ($result) {


//   echo "Not 100%, but still a nice match!";
//   // output data of each row
//   while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    
//     if (strcmp($itsmyNetID, $row["netID"]) != 0) {
//     echo "<br> id: ". $row["netID"]. " - Name: ". $row["first_name"]. " " . $row["last_name"] . "<br>";
// }
    
//   }
// } else {
//   echo "No other results";
// }






// Close connection
mysqli_close($link);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
  <link rel="stylesheet" type="text/css" href="main-style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Paprika&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua&display=swap" rel="stylesheet">

</head>

<body >
  
  <header> <!-- setting up the header box and text -->

    

    <div class="logo">
    <a href="index.html"></a><img src=nyuad-logo.png width="170px" height="50px"
                style="margin-left:83%; margin-top:10px;"> </a>
    </div>


    <p id="Title">Study Buddy</p>
    <button class="btn" id="loginBtn" onclick="window.location.href='logout.html'"
            style="margin-right: 20px; margin-left:80%;">Logout <i class="fa fa-sign-out"
                aria-hidden="true"></i></button>
  </header>
  <div class="mymain">
    <div class="side1">

      <div class="preferences" style="margin-top:50px;">
        <p id="pref-intro" style="font-family: 'Gochi Hand', cursive; margin-left:8%;">You can change your study buddy preferences here, anytime.  </p>
        
      

        <form id="testForm" action="insert.php" method="post"
                    style="font-family: 'Gochi Hand', cursive; margin-left:8%; color:#3f0169">

    <label for="formNetID">my NetID</label>
      <input type="text" id="formNetID" name="formNetID"><br><br>
    
    <div id="pref-title">
      <p>My preferences:</p>
    </div>
  
    <dt>Preferred Major</dt>
    <div>
      <!-- <select name="Major"> -->
      <select name="mypref_major">
        
        <optgroup label="Arts and Humanities">
          <option value="Art and Art History">Art and Art History</option>
          <option value="Film and New Media">Film and New Media</option>
          <option value="History">History</option>
          <option value="Interactive Media">Interactive Media</option>
          <option value="Literature and Creative Writing  ">Literature and Creative Writing </option>
          <option value="Music">Music </option>
          <option value="Philosophy">Philosophy</option>
          <option value="Theater">Theater </option>
        </optgroup>

        <optgroup label="Engineering">
          <option value="Bioengineering ">Bioengineering  </option>
          <option value="Civil Engineering  ">Civil Engineering </option>
          <option value="Computer Engineering ">Computer Engineering  </option>
          <option value="Electrical Engineering ">Electrical Engineering  </option>
          <option value="General Engineering  ">General Engineering </option>
          <option value="Mechanical Engineering ">Mechanical Engineering  </option>
        </optgroup>

        <optgroup label="Science">
          <option value="Biology    ">Biology </option>
          <option value="Chemistry    ">Chemistry   </option>
          <option value="Computer Science ">Computer Science</option>
          <option value="Mathematics    ">Mathematics </option>
          <option value="Physics">Physics</option>
          <option value="Psychology ">Psychology</option>
        </optgroup>

        <optgroup label="Social Science">
          <option value="Arab Crossroads Studies      ">Arab Crossroads Studies   </option>
          <option value="Economics      ">Economics     </option>
          <option value="Legal Studies  ">Legal Studies </option>
          <option value="Political Science      ">Political Science   </option>
          <option value="Social Research and Public Policy  ">SRPP</option>
          
        </optgroup>
        <optgroup label="No Preference">
          <option value="No Preference">No Preference   </option>
          </optgroup>

      </select>
    </div>

    <dt>Preferred Year</dt>
    <div>
      <!-- <select name="year"> -->
      <select name="mypref_level">
        <!-- <input type="text" name="last_name" id="lastName"> -->
          <option value="Freshmen">Freshman</option>
          <option value="Sophomore">Sophomore</option>
          <option value="Junior">Junior</option>
          <option value="Senior">Senior</option>
          <option value="No-pref">No preference</option>
        
      </select>
     </div>

  
    <dt>Preferred Gender</dt>
    <div>
      <!-- <select name="gender"> -->
      <select name="mypref_gender">
      
          <option value="Female">Female</option>
          <option value="Male">Male</option>
          <option value="Other">Other</option>
          <option value="No-pref">No preference</option>
          
        
      </select>
    </div> 

    <div class="status">
    <input type="submit" value="Search" class="btn" id="activeBtn">
    </div>
    </form>


    </div>

    </div>

    <div class="side2" style="width:55%;
  max-width:1000px;
/*  left:0;*/
  top:10%;
  
  height: 100%;
  float:left;
  
  position:relative;
  margin-top:0px;
  text-align: center;">



      <?php echo "<p style='font-size:28px;margin-top:0; margin-left:100px;margin-bottom:0;'>" . "SHOWING MATCHES FOR FOLLOWING PREFERENCES: "  . "</p>"; 
 echo "<p style='font-size:20px;margin-top:0; margin-left:0;margin-bottom:0;'>"  ;  
echo "<br><br> Major: ";
echo  $mypref_major;
echo "<br> Year: ";
echo  $mypref_level;
echo "<br> Gender: ";
echo  $mypref_gender;
echo "</p>";
?>
      <div class="slideshow-container" >
      

      <!-- full macth -->
        <!-- <div class="mySlides fade"> -->
 
        <?php           
                
// Comparing answers
$sql = " SELECT netID, first_name, last_name, major,email FROM students WHERE major='$pref_major' and level='$pref_level' and gender='$pref_gender' ";
$result = $conn->query($sql);

if ($result) {
  // output data of each row
  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    
    echo '<div class="mySlides fade">';

    if (strcmp($itsmyNetID, $row["netID"]) != 0) {
      echo "<p style='font-size:20px;margin-top:0; margin-left:0;margin-bottom:15px;'>"  ;
    echo "<br> Email: ". $row["email"]. " - Name: ". $row["first_name"]. " " . $row["last_name"] . "<br>";
    echo "</p>";
    }
    echo '</div>';
    
  }
} else {
  echo "0 100% match results";
}
  

?>
      <div class="text" style="top:50px;padding-bottom:10px;">100% study buddy match!</div>  
        <!-- Next and previous buttons -->

        <div class="toggle" style="top:50px; margin-top: 50px;">
        <a class="prev" style="top:50px; margin-top: 6%;" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next"style="top:50px; margin-top: 6%;" onclick="plusSlides(1)">&#10095;</a>

       

        <!-- The dots/circles -->
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
          <span class="dot" onclick="currentSlide(5)"></span>
          <span class="dot" onclick="currentSlide(6)"></span>
        </div>
        </div>
      </div>


        <div class="slideshow-container" >

               <!--  <div class="mySlides fade"> -->
               <?php 

$sql = " SELECT netID, first_name, last_name, major,email, status FROM students WHERE (major='$pref_major' or level='$pref_level' or gender='$pref_gender') and (status='Active') "; 
$result = $conn->query($sql);


if ($result) {
  

  // output data of each row
  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    
    echo '<div class="mySlides fade"> ';
    if (strcmp($itsmyNetID, $row["netID"]) != 0 and $row["status"]=="Active") {
      echo "<p style='font-size:20px;margin-top:0; margin-left:0;margin-bottom:0;'>"  ;  
    echo "<br> Email: ". $row["Email"]. " - Name: ". $row["first_name"]. " " . $row["last_name"] . "<br>";
    echo "</p>";
  } 
    echo '</div>';
    
  }
} else {
  echo "No other results";
}
?>


        <div class="text">Not 100%, but still a nice match!</div>  
        <!-- Next and previous buttons -->
       

        <!-- The dots/circles -->
        

    </div>
  </div>

      
    </div>
    <img id="falcon" src="falcon.png" >
  </div>
<script src="main-script.js" type="text/javascript"></script>
</body>

</html>

