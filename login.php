<?php
require "conn.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare('SELECT * FROM user WHERE email = ?');
    $stmt->execute([$email]);

    if ($stmt->rowCount() == 1) {
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password, $data['password'])) {
            $_SESSION['user'] = $data['id'];
            $_SESSION['login_success'] = true;
            header("Location: login.php");
            exit();
        } else {
            setcookie('gagal_submit', true, time() + 3600, '/');
            header('location: login.php');
            exit();
        }
    } else {
        setcookie('gagal_submit', true, time() + 3600, '/');
        header('location: login.php');
        exit();
    }
}

$gagal = '';
if (isset($_COOKIE['gagal_submit'])) {
    setcookie('gagal_submit', null, time() - 3600, '/');
    $gagal = "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Login Gagal',
                    text: 'Incorrect E-mail or Password!'
                })
            </script>";
}

$sukses = '';
if (isset($_SESSION['login_success'])) {
    unset($_SESSION['login_success']);
    $sukses = "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Login Successful',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            willClose: () => {
                                window.location.href = 'index.php';
                            }
                        });
                    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDE GROUP</title>

    <?php include "link.html" ?>

    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/footer.css">

</head>

<body>
    <?php
    if (!empty($gagal))
        echo $gagal;
    if (!empty($sukses))
        echo $sukses;
    ?>
    <?php include "navbar.php" ?>
    <div class="login">
        <div class="d-flex justify-content-center align-items-center h-100">
            <form class="form" id="login_form" method="POST">
                <p class="title text-heading3 font2">Login </p>
                <div class="flex">
                    <label class="w-50">
                        <input class="input text-para2" type="email" placeholder="" required name="email">
                        <span class="text-para2">E-mail</span>
                    </label>

                    <label class="w-50">
                        <input class="input text-para2" type="password" placeholder="" required name="password">
                        <span class="text-para2">Password</span>
                    </label>
                </div>

                <button class="submit text-para2 mt-4" type="submit" id="login-btn"><b>Sign In</b></button>
                <p class="signin text-para2 m-0">Didn't have an account? <a href="register.php">Register</a> </p>
            </form>
        </div>

    </div>

    <?php include "footer.php"; ?>
</body>

</html>
