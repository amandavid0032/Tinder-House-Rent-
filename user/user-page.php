<?php
include '../include/main.php';
loginSession();
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $query = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
       if ($user['isfiled'] == 0) {
            header("location:question.php");
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="relative w-full bg-white">
        <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
            <a class="navbar-brand" href="user-page.php">User</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="admin-view.php">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"></a>
                    </li>
                </ul>
            </div>
            <a href="../logout.php"><button type="button" type="logout" class="rounded-md bg-transparent px-3 py-2 text-sm font-semibold text-black hover:bg-black/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
                    Logout
                </button></a>
    </div>
    </nav>
<h1>
    <?php
    echo"Hi user";
    ?>
</h1>