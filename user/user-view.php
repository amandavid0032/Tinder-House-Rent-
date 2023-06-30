<?php
include '../include/main.php';
loginSession();
$id = $_GET['id'];
$query = "SELECT q.id, q.uid, q.image, q.roomimage, q.propertytype, q.bedrooms, q.bathrooms, q.address, q.description, q.laundry, q.parking, q.ac, q.heating, q.amenities
FROM question AS q
INNER JOIN user AS u ON u.id = q.uid
WHERE q.uid =$id";
$result = mysqli_query($conn, $query);
foreach ($result as $data) {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>User</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    </head>

    <body>
        <div class="relative w-full bg-white">
            <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
                <a class="navbar-brand" href="#">User </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="user-page.php">User</a>
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="contact.php">Contact</a> -->
                        </li>
                    </ul>
                </div>
                <a href="../logout.php"><button type="button" type="logout" class="rounded-md bg-transparent px-3 py-2 text-sm font-semibold text-black hover:bg-black/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
                        Logout
                    </button></a>
            </nav>
            <!DOCTYPE html>
            <html>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            </head>

            <body class="bg-light">
                <form method="post" class="contact-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 order-md-2 mb-4">
                                <h4 class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="text-muted">Your cart</span>
                                    <span class="badge badge-secondary badge-pill"></span>
                                </h4>
                                <ul class="list-group mb-3">
                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                        <div>
                                            <h6 class="my-0">House Image</h6>
                                            <h1> <?php echo $data['image'] ?> </h1>
                                            <input type="hidden" name="id" value="<?php echo $data['uid'] ?>">

                                        </div>
                                        <span class="text-muted"></span>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                        <div>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <h6 class="my-0">Room Image</h6>
                                        <h1><?php echo $data['roomimage'] ?></h1>
                                    </li>
                                </ul>


                            </div>
                            <div class="col-md-8 order-md-1">
                                <h4 class="mb-3">Infromation</h4>
                                <form novalidate="">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="firstName">Propert Type</label>
                                            <input readonly class="form-control" id="firstName" placeholder="" value="<?php echo $data['propertytype'] ?>">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="lastName">BeedRooms</label>
                                            <input readonly class="form-control" value="<?php echo $data['bedrooms'] ?>">

                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="lastName">Bathroom</label>
                                            <input readonly class="form-control" id="lastName" placeholder="" value="<?php echo $data['bathrooms'] ?>" required="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="username">Address</label>
                                            <input readonly class="form-control" id="zip" value="<?php echo $data['address'] ?>">

                                        </div>

                                        <div class="mb-3">
                                            <label for="email">Description</label>
                                            <input readonly class="form-control" value="<?php echo $data['description'] ?> ">
                                        </div>


                                        <div class="row">
                                            <div class="col-md-5 mb-3">
                                                <label for="country">Landury</label>
                                                <input readonly class="form-control" value=" <?php echo $data['laundry'] ?>">
                                            </div>
                                            <div class="col-md-5 mb-3">
                                                <label for="country">Parking</label>
                                                <input readonly class="form-control" value="<?php echo $data['parking'] ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5 mb-3">
                                                <label for="country">Ac</label>
                                                <input readonly class="form-control" value="<?php echo $data['ac'] ?>">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="state">Heating</label>
                                                <input readonly class="form-control" value="<?php echo $data['heating'] ?>">
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="zip">Amenities</label>
                                                <input readonly class="form-control" value="<?php echo $data['amenities'] ?>">
                                            </div>
                                        </div>
                                    <?php } ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 mb-3">
                                        <button type="submit" value="<?php $data['id'] ?>" name="accpect"  class="btn btn-success" title="View Profile">Accpect</button>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <button type="submit" value="<?php $data['id'] ?>" name="reject"  class="btn btn-success" title="View Profile">Reject</button>
                                        </div>
                                    </div>
                            </div>
            </body>
        </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    </body>