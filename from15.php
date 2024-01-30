<?php
session_start();
include("./sys_cms/connect.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เรื่องอื่นๆที่เกี่ยวข้อง</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="icon" href="./img/01.png" type="image/png">


    <style>
        body {
            font-family: "Itim", cursive;
            background-color: #b39ddb;
        }

        h1 {
            font-family: "Itim", cursive;
        }

        h2 {
            font-family: "Itim", cursive;
        }
    </style>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a href="./home.html" class="navbar-brand">G&M ROOM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="./index.php" class="nav-link active" aria-current="page">หน้าแรก</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            เกี่ยวกับ
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="./from1.php">ข้อมูลคอมพิวเตอร์</a>
                            <a class="dropdown-item" href="./from2.php">ข้อมูลฮาร์ดแวร์</a>
                            <a class="dropdown-item" href="./from3.php">ข้อมูลอื่น ๆ</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            บริการ
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="./sys_searching/from_sear.php">ค้นหาข้อมูล</a>
                            <a class="dropdown-item" href="./map.html">แผนที่</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="./contact.php" class="nav-link">ติดต่อ</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a href="./sys_login/login.php" class="btn btn-outline-success">เข้าสู่ระบบ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header-->
    <header class="text-white text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h3 style="font-size:600%; color:#f57f17;">เรื่องอื่นๆที่เกี่ยวข้อง
                    </h3>
                </div>
            </div>
            </form>
        </div>
    </header>
    <br>

    <!-- Body-->
    <div class="container">
        <div class="card-deck">
            <div class="card">
                <a href="./from16.php" style="color: black;">
                    <img class="card-img-top" src="./img/18.jpg" width="560" height="300" class="img-thumbnail" alt="Image" alt="Card image cap">

                    <div class="card-body">
                        <h5 class="card-title">ลำโพง คืออะไร</h5>

                        <p class="card-text">ลำโพง (อังกฤษ: loudspeaker, speaker) เป็นอุปกรณ์ไฟฟ้าเชิงกลอย่างหนึ่ง ทำหน้าที่แปลงสัญญาณไฟฟ้าให้เป็นเสียง...</p>

                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
            </div>


            <div class="card">
                <a href="./from17.php" style="color: black;">
                    <img class="card-img-top" src="./img/03.png " width="560" height="300" class="img-thumbnail" alt="Image" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">ไวรัสคอมพิวเตอร์มีอะไรบ้าง</h5>
                        <p class="card-text"> ไวรัสคอมพิวเตอร์ (computer virus) เป็นคำเรียกของชุดโปรแกรมคอมพิวเตอร์ หรือชุดคำสั่งบนระบบปฏิบัติการใด ๆ ซึ่งถูกเขียนขึ้นมาเพื่อให้ทำงานในการใดการหนึ่ง อาจมีประโยชน์ หรือโทษก็ได้</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
            </div>
            </a>


            <div class="card">
                <a href="./from18.php" style="color: black;">
                    <img class="card-img-top" src="./img/19.jpg " width="560" height="300" class="img-thumbnail" alt="Image" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">จอภาพ คืออะไร</h5>
                        <p class="card-text"> คือส่วนหนึ่งของเครื่องใช้ไฟฟ้าที่แสดงรูปภาพให้เห็นจากอุปกรณ์ที่สามารถส่งออกวิดีโอ </p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
            </div>
            </a>

        </div>
    </div>
    </div>
    <br>


    <div class="text-center">
        <p><a href="./from11.php" class="btn btn-primary" style="width:1300px;"><- ก่อนหน้า</a> </p>


        <br>
        <br>
        <br>
    </div>

    <!-- Footer -->
    <footer class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="text-muted">&copy; จัดทำโดย นายอดิเทพ ชลสิทธิ์ และ
                        นางสาวอนุตรา ดารามัน. </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>