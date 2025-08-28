<?php
$name = $_POST["name"];
$subject = $_POST["sub"];
$mobile = $_POST["mo"];
$email = $_POST["em"];
$message = $_POST["mssg"];

// echo($name);
// echo("<br>");
// echo($username);
// echo("<br>");
// echo($password);
// echo("<br>");
// echo($email);
// echo("<br>");
// echo($mobile);

// connect
                    // host | dbusername |password |dbname |port   

$connector = new mysqli("localhost", "root", "Sanithu2008#","Sanithu_Contact","3306" );

$query = "INSERT INTO `Contact` (`Name`,`Email`,`Subject`,`Mobile`,`Message`) 
VALUES('$name','$email','$subject','$mobile','$message')";

$connector->query($query);

echo("Data Inserted Sucessfully");

?>