<?php require "conn.php";

if (!isset($_SESSION['id_konser']) || !isset($_SESSION['jumlah']) || !isset($_SESSION['kategori']) || !isset($_SESSION['harga'])) {
    header("Location: tickets.php");
    exit();
}

$sql = "SELECT * FROM user WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$_SESSION['user']]);
$user = $stmt->fetch();

$sql = "SELECT * FROM konser WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$_SESSION['id_konser']]);
$konser = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDE GROUP</title>

    <?php include "link.html" ?>

    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/confirm.css">
    <link rel="stylesheet" href="css/footer.css">

</head>

<body>
    <?php include "navbar.php" ?>

    <div class="confirm">
        <div class="d-flex justify-content-center align-items-center h-100">
            <form class="form" id="buy-form" method="POST">
                <p class="title text-heading3 font2">CONFIRM PAYMENT </p>
                <p class="message text-para2 font3">Check the details before confirming!</p>


                <div class="flex">
                    <label class="w-50">
                        <input class="input text-para2" type="text" placeholder="" required="" readonly value="<?php echo $user['nama'] ?>">
                        <span class="text-para2">Full Name</span>
                    </label>

                    <label class="w-50">
                        <input class="input text-para2" type="text" placeholder="" required="" readonly value="<?php echo $user['nik'] ?>">
                        <span class="text-para2">NIK</span>
                    </label>
                </div>

                <div class="flex">
                    <label class="w-50">
                        <input class="input text-para2" type="email" placeholder="" required="" readonly value="<?php echo $user['email'] ?>">
                        <span class="text-para2">E-mail</span>
                    </label>

                    <label class="w-50">
                        <input class="input text-para2" type="text" placeholder="" required="" readonly value="<?php echo $user['no_telp'] ?>">
                        <span class="text-para2">Phone Number</span>
                    </label>
                </div>

                <div class="flex">
                    <label class="w-50">
                        <input class="input text-para2" type="text" placeholder="" required="" readonly value="<?php echo $konser['nama_konser'] ?>">
                        <span class="text-para2">Concert Name</span>
                    </label>

                    <label class="w-50">
                        <input class="input text-para2" type="text" placeholder="" required="" readonly value="<?php echo  date('d M Y', strtotime($konser['tanggal'])); ?>">
                        <span class="text-para2">Date</span>
                    </label>
                </div>

                <div class="flex">

                    <label class="w-50">
                        <input class="input text-para2" type="text" placeholder="" required="" readonly value="<?php echo $konser['tempat'] ?>">
                        <span class="text-para2">Place</span>
                    </label>

                    <label class="w-50">
                        <input class="input text-para2" type="text" placeholder="" required="" readonly value="<?php echo $_SESSION["kategori"]; ?>">
                        <span class="text-para2">Category</span>
                    </label>
                </div>

                <div class="flex">
                    <label class="w-50 w-sm-25">
                        <input class="input text-para2" type="text" placeholder="" required="" readonly value="<?php echo $_SESSION["harga"]; ?>">
                        <span class="text-para2">Price</span>
                    </label>

                    <label class="w-50 w-sm-25">
                        <input class="input text-para2" type="text" placeholder="" required="" readonly value="<?php echo $_SESSION["jumlah"]; ?>">
                        <span class="text-para2">Quantity</span>
                    </label>

                    <label class="w-50">
                        <?php
                        $total = str_replace("Rp", "", $_SESSION["harga"]);
                        $total = str_replace(".", "", $total);
                        $total *= $_SESSION["jumlah"];

                        ?>
                        <input class="input text-para2" type="text" placeholder="" required="" readonly value="Rp<?php echo number_format($total, 0, '.', '.') ?>">
                        <span class="text-para2">Total</span>
                    </label>
                </div>

                <div class="flex">
                    <button class="btn btn-secondary btn-confirm cancel text-para2 mt-4 w-50" type="button"><b>Cancel</b></button>
                    <button class="btn-confirm submit text-para2 mt-lg-4 w-50" type="submit"><b>Confirm</b></button>
                </div>
            </form>
        </div>

    </div>

    <?php include "footer.php" ?>

    <script>
        $(document).ready(function() {
            $("#buy-form").on("submit", function(e) {
                e.preventDefault();
                var kategori = "<?php echo $_SESSION["kategori"]; ?>";
                var jumlah = "<?php echo $_SESSION["jumlah"]; ?>";
                var id_tiket = "<?php echo $_SESSION["id_konser"]; ?>";
                var id_user = "<?php echo $_SESSION["user"]; ?>";

                Swal.fire({
                    icon: 'warning',
                    title: 'Are you sure?',
                    text: 'Do you want to proceed with the purchase?',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sure',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            method: "POST",
                            url: "buy_function.php",
                            data: {
                                kategori: kategori,
                                jumlah: jumlah,
                                id_tiket: id_tiket,
                                id_user: id_user,
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
                                            window.location.href = 'history.php';
                                        }
                                    });
                                    document.getElementById("buy-form").reset();
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
                    }
                });
            })

            $('.cancel').on('click', function() {
                window.location.href = "tickets.php";
            });
        });
    </script>
</body>

</html>