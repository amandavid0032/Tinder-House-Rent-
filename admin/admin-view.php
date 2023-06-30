<?php
include '../include/main.php';
loginSession();
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
            <a class="navbar-brand" href="#">Admin </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="admin-view.php">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <a href="../logout.php"><button type="button" type="logout" class="rounded-md bg-transparent px-3 py-2 text-sm font-semibold text-black hover:bg-black/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
                    Logout
                </button></a>
    </div>
    </nav>

    <div class="container">
        <br />
        <h1>User Record</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">User Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created-date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM user";
                $result = mysqli_query($conn, $query);

                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        $count = 1;
                        foreach ($result as $data) {
                ?>
            <tbody>
                <tr>
                    <td><?= $count++ ?></td>
                    <td><?= $data['name'] ?></td>
                    <td><?= $data['email'] ?></td>
                    <td><?= $data['created.date'] ?></td>
                    <td>
    <a href="view-data.php?id=<?= $data['id'] ?>" onclick="return confirm('Are you sure you want to view the profile?')" class="btn btn-warning btn-xs" title="View Profile">View</a>
</td>

                </td>
                </tr>
                <tr>
        <?php
                        }
                    } else {
                        echo "<tr><td colspan='4'>No data found.</td></tr>";
                    }
                } else {
                    echo "Error in query execution: " . mysqli_error($conn);
                }
                mysqli_close($conn);
        ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>