<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NewAge System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.html">NewAge System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.html">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">PC repair</a></li>
                            <li><a class="dropdown-item" href="./hardware.html">Hardware</a></li>
                            <li><a class="dropdown-item" href="./software.html">Software</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./contact.php">Write for us</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./contact.php">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" placeholder="Search for products..."
                        aria-label="Search">
                    <button class="btn btn-danger" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container my-4">
        <h2 class="text-center my-3">Contact Us</h2>
        <form action="./thanks.php"  method="POST">
            <div class="row mb-3 justify-content-center align-items-center">
                <label for="inputreason" class="col-sm-2 col-form-label">Reason for contacting us<sup>*</sup></label>
                <div class="col-sm-6">
                    <select class="form-control" id="autoSizingSelect" name='reason'>
                        <option selected>Choose...</option>
                        <option value="I need Computer Repair">I need Computer Repair</option>
                        <option value="I need PC Parts">I need PC Parts</option>
                        <option value="I need a Door Step Service">I need a Door Step Service</option>
                        <option value="I need a Website">I need a Website</option>
                        <option value="Other Reasons, Please Write Below">Other Reasons, Please Write Below</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3 justify-content-center align-items-center">
                <label for="inputreason" class="col-sm-2 col-form-label">Name<sup>*</sup></label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="First name" aria-label="First name" name='firstname' required>
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name='lastname' required>
                </div>
            </div>
            <div class="row mb-3 justify-content-center align-items-center">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email<sup>*</sup></label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="example@gmail.com" name='email' required>
                </div>
            </div>
            <div class="row mb-3 justify-content-center align-items-center">
                <label for="inputnumber" class="col-sm-2 col-form-label">Phone<sup>*</sup></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputnumber" placeholder="+91 12345xxxxx" name='phone' required>
                </div>
            </div>
            <div class="row mb-3 justify-content-center align-items-center">
                <label for="inputsubject" class="col-sm-2 col-form-label">Subject</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputsubject" placeholder="Enter subject" name='subject'>
                </div>
            </div>
            <div class="row mb-3 justify-content-center align-items-center">
                <label for="inputsubject" class="col-sm-2 col-form-label">Message</label>
                <div class="col-sm-6">
                    <textarea class="form-control" name='message' placeholder="Leave a comment here" id="floatingTextarea2"
                        style="height: 100px"></textarea>
                </div>
            </div>
            <div class="row mb-3 justify-content-center align-items-center">
                <button type="submit" name='submit' class="btn btn-primary col-sm-8 ">Submit</button>
            </div>
        </form>
    </div>
    <div class="footer">
        <footer class="py-3 footer-dark bg-dark">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="./index.html" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="./contact.php" class="nav-link px-2 text-muted">Contact Us</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="./index.html" class="nav-link px-2 text-muted">About</a></li>
            </ul>
            <p class="text-center text-muted">© 2022 NewAge System, Inc. All rights reserved.</p>
            <p class="text-center text-muted">Contact No: +91 9823678367</p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>

<?php

    include 'connection.php';

    if(isset($_POST['submit'])){

        $reason = $_POST['reason'];
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $insertquery = " INSERT INTO contactform(reason,firstname,lastname,email,phone,subject,message) VALUES ('$reason','$firstName','$lastName','$email','$phone','$subject','$message') ";

        $res = mysqli_query($con,$insertquery);

        if($res){
            ?>
            <script>
                alert("Data Inserted Properly");
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert("Data Not Inserted");
            </script>
            <?php
        }
        
    }

?>