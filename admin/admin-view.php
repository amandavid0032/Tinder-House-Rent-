<?php
include '../include/main.php';
include 'header.php';
loginSession();
?>
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
                        if ($data['type'] == 0) {
            ?>
                            <tr>
                                <td><?= $count++ ?></td>
                                <td><?= $data['name'] ?></td>
                                <td><?= $data['email'] ?></td>
                                <td><?= $data['createddate'] ?></td>
                                <td>
                                    <a href="view-data.php?id=<?= $data['id'] ?>" onclick="return confirm('Are you sure you want to view the profile?')" class="btn btn-warning btn-xs" title="View Profile">View</a>
                                </td>
                            </tr>
                            <tr>
                <?php
                        }
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
</body>

</html>