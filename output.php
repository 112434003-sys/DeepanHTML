<!DOCTYPE html>
<html>
<head>
    <title>Registration Details</title>
</head>
<body>

<h2>Registration Details</h2>

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$course = $_POST['course'];
$dob = $_POST['dob'];
$address = $_POST['address'];

$hobbies = "";
if(isset($_POST['hobbies'])) {
    $hobbies = implode(", ", $_POST['hobbies']);
} else {
    $hobbies = "None";
}

echo "<b>Name:</b> $name <br><br>";
echo "<b>Email:</b> $email <br><br>";
echo "<b>Password:</b> $password <br><br>";
echo "<b>Gender:</b> $gender <br><br>";
echo "<b>Hobbies:</b> $hobbies <br><br>";
echo "<b>Course:</b> $course <br><br>";
echo "<b>Date of Birth:</b> $dob <br><br>";
echo "<b>Address:</b> $address <br><br>";
?>

</body>
</html>