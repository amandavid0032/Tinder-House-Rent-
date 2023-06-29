<?php
$hostname = 'localhost';
$user = "root";
$pass = "";
$dbname = "tinder-project";

$conn = mysqli_connect($hostname, $user, $pass, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Contact us
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $insert = "INSERT INTO contact VALUES (null, '$name', '$email', '$message')";

    if (mysqli_query($conn, $insert)) {
        $message =  'Your Query is successfully Added ';
        $color = 'success';
        header("location:index.php?message=" . urlencode($message) . "&color=$color");
    } else {
        echo "Something is wrong in Database: " . $insert . "<br>" . $conn->error;
    }
}
// singup code
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $currentDate = date('Y-m-d H:i:s');
    $insert = "INSERT INTO user VALUES (null ,'$name','$email', '$pass','$currentDate')";
    if (mysqli_query($conn, $insert)) {
        echo "Account is Created successfully";
    } else {
        echo "Something is wrong: " . $insert . "<br>" . $conn->error;
    }
}

// login checking code
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $user['email'];
        if ($user['type'] == 1) {
            session_start();
            $_SESSION = [
                'email' => $user['email'],
                'type' => $user['type']
            ];
            header("Location:admin/admin-view.php");
        } elseif ($user['type'] == 0) {
            echo "hi";
        }
    } else {
        echo "Invalid email or password.";
    }
}


function loginSession()
{
    session_start();
    if (!isset($_SESSION['email'])) {
        header("location: ./../index.php");
        exit;
    }
}

function noLoginSession()
{
    session_start();
    if (isset($_SESSION['email'])) {
        if ($_SESSION['type'] == 1) {
            header("location: ./admin/admin-view.php");
        } else {
            header();
        }
    }
}
