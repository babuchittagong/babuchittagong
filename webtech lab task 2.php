<!DOCTYPE html>
<html>
<body>
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Date of birth : <input type="text" name="date of birth"><br>
Degree : <input type="text" name="Degree"><br>
Blood group: <input type="text" name="Blood group"><br>

Gender:
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"

<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other







</body>
</html>

