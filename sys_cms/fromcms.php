<?php
session_start();
include_once('connect.php');

if ($_SESSION['id'] == "") {
    header("location: ../sys_login/login.php");
} else {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>จัดการระบบเว็ป</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/customcms.css">
        <link rel="icon" href="../img/01.png" type="image/png">
    </head>

    <body>

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a href="#" class="navbar-brand">G&M ROOM</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <span class="navbar-text">
                            <b>ยินดีต้อนรับ <?php echo $_SESSION['fname']; ?> เข้าสู่ระบบ</b>
                        </span>
                        <li class="nav-item ml-auto">
                            <a href="../sys_login/logout.php" class="btn btn-outline-danger">ออกจากระบบ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>

        <!--body-->

        <!-- Side Menu -->
        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    หน้าแรก
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./dataview.php">
                                    หน้ารวมข้อมูล
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    แก้ไขข้อมูล
                                </a>
                                <!-- Dropdown items -->
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="./editfromone.php">หน้า 1</a>
                                    <a class="dropdown-item" href="./editfromtwo.php">หน้า 2</a>
                                    <a class="dropdown-item" href="./editfromthree.php">หน้า 3</a>
                                    <!-- Add more dropdown items as needed -->
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./indexnumberview.php">
                                    สถิติการเข้าเว็ปไซต์
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <!-- Jumbotron/hero section -->
            <div class="jumbotron">
                <div class="container">
                    <h1 class="display-4">ระบบจัดการข้อมูลเว็ปไซต์</h1>
                    <p></p>

                </div>
            </div>

            <!-- Content Section -->
            <div class="container">
                <p class="lead">ข้อมูลล่าสุด</p>
                <div class="row">
                    <div class="col-md-4">
                        <h2>หน้าที่ 1 </h2>
                        <div class="card" style="width: 18rem;">
                            <?php
                            // Check if there are records
                            if (!empty($cmsRecords)) {
                                echo '<img class="card-img-top" src="' . $cmsRecords[0]['fimg'] . '" width="560" height="200" class="img-thumbnail" alt="Image" alt="Card image cap">';
                                echo '<a href="../from1.php">';
                                echo '<div class="card-body">';
                                echo '<p class="card-text">' . $cmsRecords[0]['fone'] . '</p>';
                                echo '</div>';
                            } else {
                                echo '<p>No records found.</p>';
                            }
                            ?>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-4">
                        <h2>หน้าที่ 2</h2>
                        <div class="card" style="width: 18rem;">
                            <?php
                            // Check if there are records
                            if (!empty($cmstwRecords)) {
                                echo '<img class="card-img-top" src="' . $cmstwRecords[0]['ftwimg'] . '" width="560" height="200" class="img-thumbnail" alt="Image" alt="Card image cap">';
                                echo '<a href="../from2.php">';
                                echo '<div class="card-body">';
                                echo '<p class="card-text">' . $cmstwRecords[0]['ftwone'] . '</p>';
                                echo '</div>';
                            } else {
                                echo '<p>No records found.</p>';
                            }
                            ?>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-4">
                        <h2>หน้าที่ 3</h2>
                        <div class="card" style="width: 18rem;">
                            <?php
                            // Check if there are records
                            if (!empty($cmsthrRecords)) {
                                echo '<img class="card-img-top" src="' . $cmsthrRecords[0]['fthrimg'] . '"  width="560" height="200" class="img-thumbnail" alt="Image" alt="Card image cap">';
                                echo '<a href="../from4.php">';
                                echo '<div class="card-body">';
                                echo  '<p class="card-text">' . $cmsthrRecords[0]['fthrone'] . '</p>';
                            } else {
                                echo '<p>No records found.</p>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
        </main>
        </div>
        </div>
        <br><br><br><br><br><br><br><br><br>

        <!-- Footer -->
        <footer class="bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="text-muted">&copy; จัดทำโดย วิทยาลัยเทคนิคนครศรีธรรมราช.</p>
                    </div>
                </div>
            </div>
        </footer>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>

    </html>

<?php

}
?>