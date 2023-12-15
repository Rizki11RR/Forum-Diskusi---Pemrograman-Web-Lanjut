<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
include('./db_connect.php');
?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Register - Forum Diskusi</title>

    <?php include('./header.php'); ?>
</head>
<style>
.text {
    font-weight: bold;
}

body {
    background-image: url("assets/img/bg-utama.png");
    background-repeat: no-repeat;
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #f1f1f1;
}

.login-container {
    display: flex;
    justify-content: center;
    height: 55%;
    width: 45%;
    align-items: center;
    background-color: #7586df;
    border-radius: 15px;
    box-shadow: 0 2px 5px rgba(75, 72, 72, 0.359);
}

.register-container {
    display: flex;
    justify-content: center;
    height: 70%;
    width: 45%;
    align-items: center;
    background-color: #7586df;
    border-radius: 15px;
    box-shadow: 0 2px 5px rgba(75, 72, 72, 0.359);
}

.login-image {
    flex: 1;
    padding: 20px;
    text-align: center;
}

.login-image img {
    max-width: 100%;
    height: 200px;
}

.login-form {
    background-color: #ffff;
    flex: 1;
    border-radius: 0px 15px 15px 0px;
    padding: 20px;
    height: 100%;
}

.login-form h2 {
    margin-bottom: 20px;
    text-align: center;
}

.login-form input[type="text"],
.login-form input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

.login-form button {
    width: 100%;
    padding: 10px;
    background: white;
    color: black;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}
</style>

<body>
<div class="register-container">
        <div class="login-image">
            <img class="pict-login" src="assets/img/img-login.png" alt="Gambar" />
        </div>

        <div class="login-form">
            <div class="text-center">
                <img src="assets/img/logo.png" style="height: 40px;" alt="logo">
            </div>
            <h5 class="fw-normal mt-3" style="letter-spacing: 1px;">Register New account</h5>
            <form action="prosesdaftar.php" method="post">
                <input type="text" name="name" placeholder="Name" required />
                <input type="text" name="username" placeholder="Username" required />
                <input type="password" name="password" placeholder="Password" required />
                <div class="form-check d-flex mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck"
                        aria-describedby="registerCheckHelpText" required/>
                    <label class="form-check-label" for="registerCheck">
                        I have read and agree to the terms
                    </label>
                </div>
                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" class="btn btn-primary btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Resgister</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>