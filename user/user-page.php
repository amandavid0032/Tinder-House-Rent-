<?php
include '../include/main.php';
include 'header.php';
loginSession();
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $type = $_SESSION['type'];
    $id = $_SESSION['uid'];
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
<div class="container">
    <br />
    <h1><?php echo $email = $_SESSION['email']; ?></h1>
    <h1>User List</h1>
    <div>
                <center><?php include '../message.php'; ?></center>
            </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Number</th>
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
                $count = 1;
                if (mysqli_num_rows($result) > 0) {
                    while ($data = mysqli_fetch_assoc($result)) {
                        if ($data['type'] == 0) {
                            if ($email == $data['email']) {
                                continue;
                            }
            ?>
                            <tr>
                                <td><?= $count++ ?></td>
                                <td><?= $data['name'] ?></td>
                                <td><?= $data['email'] ?></td>
                                <td><?= $data['createddate'] ?></td>
                                <td>
                                    <a href="user-view.php?id=<?= $data['uid'] ?>" onclick="return confirm('Are you sure you want to view the profile?')" class="btn btn-warning btn-xs" title="View Profile">View</a>
                                </td>

                                </td>
                            </tr>
                            <tr>
                <?php
                        }
                    }
                } else {
                    echo "<tr><td colspan='4'>No data found.</td></tr>";
                }
            } 
            mysqli_close($conn);
                ?>
        </tbody>
    </table>
    </body>

    </html>