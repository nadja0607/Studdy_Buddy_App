<?php

DEFINE ('DB_USER', 'studentdb');
DEFINE ('DB_PASSWORD', 'timephp');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'students');

$link = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('Could not connect to MySQL: '.
mysqli_connect_error());
 
/* echo "Connected successfully"; */
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);

// Attempt insert query execution
/* $sql = "UPDATE students SET p_major='$first_name' WHERE netID='ah4601'"; */
// $sql = "INSERT INTO students (netID, first_name, p_major, p_gender, p_level) VALUES ('ah4601','Aisha','$first_name', '$last_name', '$email')";
/* if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 */

$dbhst = "localhost";
    $dbnme = "students"; 
    $bdusr = "studentdb";
    $dbpws = "timephp";

$conn = new PDO('mysql:host='.$dbhst.';dbname='.$dbnme, $bdusr, $dbpws);

// Getting variables

$pref_major = trim(mysqli_real_escape_string($link, $_REQUEST['first_name']));
$pref_year = trim(mysqli_real_escape_string($link, $_REQUEST['last_name']));
$pref_gender = mysqli_real_escape_string($link, $_REQUEST['email']);

// Close connection
mysqli_close($link);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="MY-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body style="background: url('bgg1.png') no-repeat center center fixed;">
    <!-- Checking if php is displaying in our html


    <header style="border-bottom: 2px solid #ccc;">

        <!-- setting up the header box and text -->

        <div class="logo">
            <a href="index.html"><img src=nyuad-logo.png width="170px" ; height="50px" margin-top=40px;> </a>
        </div>


        <p id="Title" style=" position: absolute; text-align: center; left: 43%; display: inline-block;  font-size: 50px; margin-top: 10px;">Study Buddy</p>

    </header>


    <div class="mymain">
        <div class="side1">

            <div class="preferences">
                <p id="pref-intro">Enter the preferences for your study buddy here. You can always change them. Note:
                    less preferences lead to more study buddy suggestions! </p>

                <div id="pref-title">
                    <p>My preferences:</p>
                </div>
                <form id="testForm" action="insert2.php" method="post">

                    <dt>Major</dt>
                    <div>
                        <!-- <select name="Major"> -->
                        <select name="first_name">

                            <optgroup label="Arts and Humanities">
                                <option value="Art and Art History">Art and Art History</option>
                                <option value="Film and New Media">Film and New Media</option>
                                <option value="History">History</option>
                                <option value="Interactive Media">Interactive Media</option>
                                <option value="Literature and Creative Writing	">Literature and Creative Writing
                                </option>
                                <option value="Music">Music </option>
                                <option value="Philosophy">Philosophy</option>
                                <option value="Theater">Theater </option>
                            </optgroup>

                            <optgroup label="Engineering">
                                <option value="Bioengineering	">Bioengineering </option>
                                <option value="Civil Engineering	">Civil Engineering </option>
                                <option value="Computer Engineering	">Computer Engineering </option>
                                <option value="Electrical Engineering	">Electrical Engineering </option>
                                <option value="General Engineering	">General Engineering </option>
                                <option value="Mechanical Engineering	">Mechanical Engineering </option>
                            </optgroup>

                            <optgroup label="Science">
                                <option value="Biology		">Biology </option>
                                <option value="Chemistry		">Chemistry </option>
                                <option value="Computer Science	">Computer Science</option>
                                <option value="Mathematics		">Mathematics </option>
                                <option value="Physics">Physics</option>
                                <option value="Psychology	">Psychology</option>
                            </optgroup>

                            <optgroup label="Social Science">
                                <option value="Arab Crossroads Studies			">Arab Crossroads Studies </option>
                                <option value="Economics			">Economics </option>
                                <option value="Legal Studies	">Legal Studies </option>
                                <option value="Political Science			">Political Science </option>
                                <option value="Social Research and Public Policy	">SRPP</option>

                            </optgroup>
                            <optgroup label="No Preference">
                                <option value="No Preference">No Preference </option>
                            </optgroup>

                        </select>
                    </div>

                    <dt>Year</dt>
                    <div>
                        <!-- <select name="year"> -->
                        <select name="last_name">
                            <!-- <input type="text" name="last_name" id="lastName"> -->
                            <option value="Freshmen">Freshman</option>
                            <option value="Sophomore">Sophomore</option>
                            <option value="Junior">Junior</option>
                            <option value="Senior">Senior</option>
                            <option value="No-pref">No preference</option>

                        </select>
                    </div>

                    <dt>Gender</dt>
                    <div>
                        <!-- <select name="gender"> -->
                        <select name="email">

                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                            <option value="Other">Other</option>
                            <option value="No-pref">No preference</option>


                        </select>
                    </div>

                    <input type="submit" value="Submit">
                </form>

                <div class="status">
                    <button class="btn" id="activeBtn">Active</button>
                </div>

            </div>

        </div>

        <div class="side2" style="margin-top:200px">
            <div class="slideshow-container">


                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                <?php echo "CHECK WHAT ARE YOUR PREFERENCES: " ;
echo "<br><br> Major: ";
echo  $pref_major;
echo "<br> Year: ";
echo  $pref_year;
echo "<br> Gender: ";
echo  $pref_gender;
?>
                </div>

                <div class="mySlides fade">
 
                <?php echo "100% match!";
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
?>
                </div>

                <div class="mySlides fade">
                <?php echo "Not 100%, but still a nice match!";

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
?>

                </div>


                <div class="text">Suggested study buddy</div>
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>

            </div>

        </div>

    </div>

    <script src="main-script.js" type="text/javascript"></script>

</body>

</html>
