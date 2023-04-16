<?php
session_start();
include('config.php');

$result = mysqli_query($con, "SELECT * FROM prod ORDER BY id ASC");


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='CartStyle.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css\CartStyle.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css\all.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css\bootstrap.min.css'>

</head>

<body>
    <section class="bg-light my-5">
        <div class="container">
            <div class="row">
                <!-- cart -->
                <div class="col-lg-9">
                    <div class="card border shadow-0">
                        <div class="m-4">
                            <h4 class="card-title mb-4">Your shopping cart</h4>
                            <div class="row gy-3 mb-4">
                                <div class="col-lg-5">
                                    <div class="me-lg-5">
                                        <div class="d-flex">
                                            <img src="images\laptop.jpg" class="border rounded me-3" style="width: 96px; height: 96px;" />
                                            <div class="">
                                                <a href="#" class="nav-link">Laptop</a>
                                                <p class="text-muted">dell</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap">
                                    <div class='rate' style='color: #ffb900; font-size: 12px;'>
                                        <i class='filled fas fa-star'></i>
                                        <i class='filled fas fa-star'></i>
                                        <i class='filled fas fa-star'></i>
                                        <i class='filled fas fa-star'></i>
                                        <i class='filled fas fa-star'></i>
                                    </div>
                                    <div class="">
                                        <text class="h6">$1156.00</text> <br />
                                    </div>
                                </div>
                                <div class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                                    <div class="float-md-end">
                                        <a href="#" class="btn btn-light border text-danger icon-hover-danger"> Remove</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- cart -->
                <!-- summary -->
                <div class="col-lg-3">
                    <div class="card mb-3 border shadow-0">
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label class="form-label">Have coupon?</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control border" name="" placeholder="Coupon code" />
                                        <button class="btn btn-light border">Apply</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card shadow-0 border">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Total price:</p>
                                <p class="mb-2">$329.00</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Discount:</p>
                                <p class="mb-2 text-success">-$60.00</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">TAX:</p>
                                <p class="mb-2">$14.00</p>
                            </div>
                            <hr />
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Total price:</p>
                                <p class="mb-2 fw-bold">$283.00</p>
                            </div>

                            <div class="mt-3">
                                <a href="#" class="btn btn-success w-100 shadow-0 mb-2"> Make Purchase </a>
                                <a href="#" class="btn btn-light w-100 border mt-2"> Back to shop </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- summary -->
            </div>
        </div>
    </section>
</body>

</html>