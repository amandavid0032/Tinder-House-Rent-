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
    $currentDate = date('Y-m-d H:i:s');
    $insert = "INSERT INTO contact VALUES (null, '$name', '$email', '$message','$currentDate')";

    if (mysqli_query($conn, $insert)) {
        $message =  'Your Query is successfully Added ';
        $color = 'success';
        header("location:index.php?message=" . urlencode($message) . "&color=$color");
    } else {
        echo "Something is wrong in Database: " . $insert . "<br>" . $conn->error;
    }
}
// singup code

// question
if (isset($_POST['question'])) {
    $id=$_POST['id'];
    // houseimage 
    $image_name = $_FILES['imagename']['name'];
    $tmp_name = $_FILES['imagename']['tmp_name'];
    move_uploaded_file($tmp_name, './../image/' . $image_name);
    // room image
    $roomimage = $_FILES['image']['name'];
    $tmp_name2 = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name2, './../image/' . $roomimage);
    $property = $_POST['property-type'];
    $bedrooms = $_POST['bedrooms'];
    $bathrooms = $_POST['bathrooms'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    $laundry = $_POST['value'];
    $parking = $_POST['parking-type'];
    $ac = $_POST['ac-type'];
    $heating = $_POST['heating-available'];
    $amenities = $_POST['amenities'];
    $update="UPDATE user SET isfiled= 1 WHERE id=$id";
    if (mysqli_query($conn, $update)) {
        // Insert query
        $insert = "INSERT INTO question VALUES (null, '$id', '$image_name', '$roomimage', '$property', $bedrooms, $bathrooms, '$address', '$description', '$laundry', '$parking', '$ac', '$heating', '$amenities')";
        if (mysqli_query($conn, $insert)) {
           header("Location:user-page.php");
        } else {
            echo "Error inserting question: " . mysqli_error($conn);
        }
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
            session_start();
            $_SESSION['email'] = $user['email'];
            $_SESSION['type'] = $user['type'];
            header("Location:user/user-page.php");
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
        } elseif ($_SESSION['type'] == 0) {
            header("location: ./user/user-page.php");         
        }
    }
}



// Accpect code
if (isset($_POST['accpect'])) {
    $id = $_POST['id'];
    $insert = "INSERT INTO accpect VALUES (null ,'$id',1)";
    if (mysqli_query($conn, $insert)) {
        $message =  ' Accpect  successfully';
        $color = 'success';
        header("location:user-page.php?message=" . urlencode($message) . "&color=$color");
    } else {
        echo "Something is wrong: " . $insert . "<br>" . $conn->error;
    }
}


if (isset($_POST['reject'])) {
    $id = $_POST['id'];
    $insert = "INSERT INTO accpect-reject VALUES (null ,'$id',1)";
    if (mysqli_query($conn, $insert)) {
        $message =  ' Reject  successfully Added';
        $color = 'success';
        header("location:user-page.php?message=" . urlencode($message) . "&color=$color");
    } else {
        echo "Something is wrong: " . $insert . "<br>" . $conn->error;
    }
}
