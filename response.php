<?php
$username = $_GET['username'];
$password = $_GET['password'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Result</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container{
            width: 400px;
            margin: 100px auto;
            padding: 20px;
            background: white;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }

        .success{
            color: green;
        }

        .error{
            color: red;
        }

        a{
            text-decoration: none;
            color: white;
            background-color: navy;
            padding: 10px 20px;
            border-radius: 5px;
        }
    </style>

</head>

<body>

<div class="container">

<?php

if($username == "admin" && $password == "1234")
{
    echo "<h2 class='success'>Login Successful</h2>";
    echo "<h3>Welcome, $username</h3>";
}
else
{
    echo "<h2 class='error'>Login Failed</h2>";
    echo "<h3>Invalid Username or Password</h3>";
}

?>

<br><br>

<a href="index.html">Back</a>

</div>

</body>
</html>