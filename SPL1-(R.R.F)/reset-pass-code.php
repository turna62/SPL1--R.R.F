<?php

session_start(); 

$sname= "localhost";
$uname= "root";
$password = "";

$db_name = "rrf";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

if (isset($_POST['save']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $code = $_POST['code'];

    $query = "SELECT * from user where email = '$email' && code = '$code'";
    $query2 = "SELECT * from restaurant where email = '$email' && code = '$code'";

    $qres = mysqli_query($conn, $query);
    $qres2 = mysqli_query($conn, $query2);

    if ($qres->num_rows == 1)
    {
        if ($password == $confirm)
        {
            if (strlen($_POST['password']) > 15 || strlen($_POST['password']) < 8  || ctype_upper($_POST['password']) || ctype_lower($_POST['password']) || !preg_match("/[0-9]/", $_POST['password'])) {
                exit('Password must be between 8 and 15 characters long, contain uppercase, lowercase letters and a number!');
            }

            $update = "UPDATE user SET password = '$password' where email = '$email' && code = '$code'";
            

            $result = mysqli_query($conn, $update);
            //$result2 = mysqli_query($conn, $update2);

            if ($result)
            {
                echo "User password updated successfully! Click here to 
                <a href='http://localhost/SPL1--R.R.F-1/SPL1-(R.R.F)/UserSignInPage.html'>login </a>";
            }
        }
        else
        {
            echo "Passwords don't match!";
        }
    }

    else if ($qres2->num_rows == 1)
    {
        if ($password == $confirm)
        {
            if (strlen($_POST['password']) > 15 || strlen($_POST['password']) < 8  || ctype_upper($_POST['password']) || ctype_lower($_POST['password']) || !preg_match("/[0-9]/", $_POST['password'])) {
                exit('Password must be between 8 and 15 characters long, contain uppercase, lowercase letters and a number!');
            }

            $update2 = "UPDATE restaurant SET password = '$password' where email = '$email' && code = '$code'";
            

            $result2 = mysqli_query($conn, $update2);
            //$result2 = mysqli_query($conn, $update2);

            if ($result2)
            {
                echo "Restaurant password updated successfully! Click here to 
                <a href='http://localhost/SPL1--R.R.F-1/SPL1-(R.R.F)/RestaurantSignInPage.html'>login </a>";
            }
        }
        else
        {
            echo "Passwords don't match!";
        }
    }

}

?>


    

