<?php require "conn.php"; ?>

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
    <?php include "navbar.php" ?>
    <div class="login">
        <div class="d-flex justify-content-center align-items-center h-100">
            <form class="form" id="regist_form" method="POST">
                <p class="title text-heading3 font2">Register </p>
                <p class="message text-para2 font3">Sign up and get full access to our page.</p>
                <div class="flex">
                    <label class="w-50">
                        <input class="input text-para2" type="text" id="nama" placeholder="" required="">
                        <span class="text-para2">Full Name</span>
                    </label>

                    <label class="w-50">
                        <input class="input text-para2" type="text" id="nik" placeholder="" required="">
                        <span class="text-para2">NIK</span>
                    </label>
                </div>

                <div class="flex">
                    <label class="w-50">
                        <input class="input text-para2" type="email" id="email" placeholder="" required="">
                        <span class="text-para2">E-mail</span>
                    </label>

                    <label class="w-50">
                        <input class="input text-para2" type="text" id="no_telp" placeholder="" required="">
                        <span class="text-para2">Phone Number</span>
                    </label>
                </div>

                <div class="flex">
                    <label class="w-50">
                        <input class="input text-para2" type="password" id="password" placeholder="" required onkeyup="cekPanjang()">
                        <span class="text-para2">Password</span>
                    </label>
                    <label class="w-50">
                        <input class="input text-para2" type="password" id="password2" placeholder="" required onkeyup="cekMatch()">
                        <span class="text-para2">Confirm password</span>
                    </label>
                </div>
                <div class="flex">
                    <div class="w-50" style="height: 20px;">
                        <p id="emailHelp" class="m-0 form-text text-danger minlength" style="display: none;">*Password minimal length: 8</p>
                        <p id="emailHelp" class="m-0 form-text text-danger notmatch" style="display: none;">*Password not match</p>
                    </div>
                </div>

                <button class="submit text-para2" id="submit-regist" type="submit"><b>Submit</b></button>
                <p class="signin text-para2 m-0">Already have an acount ? <a href="login.php">Sign In</a> </p>
            </form>
        </div>

    </div>

    <?php include "footer.php"; ?>

    <script>
        $(document).ready(function() {
            $("#regist_form").on("submit", function(e) {
                e.preventDefault();
                var nama = $("#nama").val();
                var nik = $("#nik").val();
                var email = $("#email").val();
                var no_telp = $("#no_telp").val();
                var password = $("#password").val();

                $.ajax({
                    method: "POST",
                    url: "regist_function.php",
                    data: {
                        nama: nama,
                        nik: nik,
                        email: email,
                        no_telp: no_telp,
                        password: password
                    },
                    success: (e) => {
                        if (!e.success && e.message != null) {
                            Swal.fire({
                                title: 'Error!',
                                text: e.message,
                                icon: 'error',
                            })
                        } else if (e.success && e.message != null) {
                            Swal.fire({
                                title: 'Success!',
                                text: e.message,
                                icon: 'success',
                                showConfirmButton: false,
                                timerProgressBar: true,
                                timer: 3000,
                                willClose: () => {
                                    window.location.href = 'login.php';
                                }
                            });
                            document.getElementById("regist_form").reset();

                        } else {
                            Swal.fire({
                                title: 'Error!',
                                text: 'Silahkan coba lagi',
                                icon: 'error',
                            })
                        }
                    },
                    error: function(error) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Silahkan coba lagi',
                            icon: 'error',
                        })
                    }
                })
            })
        })

        var pass8 = false;

        function cekPanjang() {
            var newPass = $("#password").val();
            if (newPass.length >= 8) {
                $('.minlength').css('display', 'none');
                pass8 = true;
            } else {
                $('.minlength').css('display', 'block');
                pass8 = false;
            }
            cekMatch();
        }

        function cekMatch() {
            var newPass = $("#password").val();
            var retypePass = $("#password2").val();

            if (pass8 && retypePass !== '') {
                if (newPass === retypePass) {
                    $('.submit').prop('disabled', false);
                    $('.notmatch').css('display', 'none');
                } else {
                    $('.notmatch').css('display', 'block');
                    $('.submit').prop('disabled', true);
                }
            } else {
                $('.notmatch').css('display', 'none');
            }
        }
    </script>

</body>

</html>