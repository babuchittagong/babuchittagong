<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
  $name = test_input($_POST["name"]);
  $password = test_input($_POST["password"]);


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>CHANGE PASSWORD</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  current password: <input type="text" name=" current password">
  <br><br>
  new password: <input type="text" name=" new password">
  <br><br>
  retype password: <input type="text" name=" retype password">
  <br><br>
 
 
<input type="submit" name="submit" value="Submit">  
</form>
<?php

echo $name;
echo "<br>";
echo $password;
echo "<br>";
?>

</body>
</html>