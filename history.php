<?php require "conn.php";

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM user WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$_SESSION['user']]);
$user = $stmt->fetch();

function generateRandomString()
{
    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $digits = '0123456789';

    $randomLetter = $letters[rand(0, strlen($letters) - 1)];

    $randomDigits = '';
    for ($i = 0; $i < 5; $i++) {
        $randomDigits .= $digits[rand(0, strlen($digits) - 1)];
    }

    return $randomLetter . $randomDigits;
}

function formatName($name)
{
    $parts = explode(' ', $name);
    if (count($parts) === 1) {
        return $name;
    }

    $lastName = array_pop($parts);
    $initials = '';
    foreach ($parts as $part) {
        $initials .= strtoupper($part[0]) . '. ';
    }

    return $lastName . ' / ' . rtrim($initials);
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
    <link rel="stylesheet" href="css/history.css">
    <link rel="stylesheet" href="css/footer.css">

</head>

<body>
    <?php include "navbar.php" ?>
    <section class="history d-flex justify-content-center flex-column align-items-center">
        <h1 class="font1 text-heading2 text-center m-0 mt-1">HISTORY</h1>

        <?php
        $stmt = $conn->prepare("SELECT * from transaksi t JOIN konser k ON (t.id_konser = k.id) JOIN user u ON (t.id_user = u.id) WHERE id_user = ? ORDER BY timestamp DESC");
        $stmt->execute([$_SESSION['user']]);
        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $name = formatName($row['nama']);
                $tanggal = date('d M Y', strtotime($row['tanggal']));
                $timestamp = date('d M Y', strtotime($row['timestamp']));
                $jam = date('H:i', strtotime($row['jam']));
        ?>
                <div class="upcoming-flight" style="color: var(--black)">
                    <div class="ticket">
                        <div id="banner">
                            <div id="topbanner"></div>
                            <span id="mainbanner">
                                <i class="fa-solid fa-music"></i>
                                <b>CDE GROUP</b>
                            </span>
                            <span id="tearoffbanner">
                                <b>TICKETS</b>
                            </span>
                        </div>
                        <div id="barcode">
                            <img src="img/barcode.jpg" alt="">
                        </div>
                        <div id="data">
                            <div id="maindata">
                                <div class="box">
                                    <h1 class="header mini-size m-0">
                                        <?php echo $row["artis"]; ?>
                                    </h1>
                                    <h1 class="body big-size m-0">
                                        <b><?php echo $row["nama_konser"]; ?></b>
                                    </h1>
                                </div>

                                <div class="box">
                                    <span class="header">
                                        Date
                                    </span>
                                    <span class="body">
                                        <b><?php echo $tanggal; ?></b>
                                    </span>
                                </div>

                                <div class="box">
                                    <span class="header">
                                        Time
                                    </span>
                                    <span class="body">
                                        <b><?php echo $jam; ?></b>
                                    </span>
                                </div>

                                <div class="box">
                                    <span class="header">
                                        Place
                                    </span>
                                    <span class="body">
                                        <b><?php echo $row["tempat"]; ?></b>
                                    </span>
                                </div>

                                <div id="tearoffdata">
                                    <div class="box">
                                        <span class="header">
                                            Full Name
                                        </span>
                                        <span class="body">
                                            <b><?php echo $user['nama']; ?></b>
                                        </span>
                                    </div>
                                    <div class="box">
                                        <span class="header">
                                            Booking Code
                                        </span>
                                        <span class="body">
                                            <?php $code = generateRandomString(); ?>
                                            <b><?php echo $code; ?></b>
                                        </span>
                                    </div>
                                    <div class="box">
                                        <span class="header">
                                            Purchase Date
                                        </span>
                                        <span class="body">
                                            <b><?php echo $timestamp; ?></b>
                                        </span>
                                    </div>
                                    <div class="box seat">
                                        <span class="header">
                                            Quantity
                                        </span>
                                        <span class="body">
                                            <b><?php echo $row['jumlah']; ?></b>
                                        </span>
                                    </div>
                                    <div class="box">
                                        <span class="header">
                                            Category
                                        </span>
                                        <span class="body">
                                            <b><?php echo $row['jenis']; ?></b>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div id="holes">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>

        <?php
            }
        } else {
            echo "<div class='container list-ticket'>
            <div class='notifications-container text2'>
                <div class='alert'>
                    <div class='flex'>
                        <div class='flex-shrink-0'>
                            <i class='fa-solid fa-triangle-exclamation' style='color: #f3d568;'></i>
                        </div>
                        <div class='alert-prompt-wrap'>
                            <p>
                                You don't have any history.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
        };
        ?>
    </section>

    <?php include "footer.php" ?>

    <script>
        $(".historyNavbar").addClass("active disabled");
        $(".historyNavbar1").prepend('<svg width="18" height="18" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="var(--cream)" stroke-width="0.00024000000000000003" transform="matrix(1, 0, 0, 1, 0, 0)rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10.0909 11.9629L19.3636 8.63087V14.1707C18.8126 13.8538 18.1574 13.67 17.4545 13.67C15.4964 13.67 13.9091 15.096 13.9091 16.855C13.9091 18.614 15.4964 20.04 17.4545 20.04C19.4126 20.04 21 18.614 21 16.855C21 16.855 21 16.8551 21 16.855L21 7.49236C21 6.37238 21 5.4331 20.9123 4.68472C20.8999 4.57895 20.8852 4.4738 20.869 4.37569C20.7845 3.86441 20.6352 3.38745 20.347 2.98917C20.2028 2.79002 20.024 2.61055 19.8012 2.45628C19.7594 2.42736 19.716 2.39932 19.6711 2.3722L19.6621 2.36679C18.8906 1.90553 18.0233 1.93852 17.1298 2.14305C16.2657 2.34086 15.1944 2.74368 13.8808 3.23763L11.5963 4.09656C10.9806 4.32806 10.4589 4.52419 10.0494 4.72734C9.61376 4.94348 9.23849 5.1984 8.95707 5.57828C8.67564 5.95817 8.55876 6.36756 8.50501 6.81203C8.4545 7.22978 8.45452 7.7378 8.45455 8.33743V16.1307C7.90347 15.8138 7.24835 15.63 6.54545 15.63C4.58735 15.63 3 17.056 3 18.815C3 20.574 4.58735 22 6.54545 22C8.50355 22 10.0909 20.574 10.0909 18.815C10.0909 18.815 10.0909 18.8151 10.0909 18.815L10.0909 11.9629Z" fill="var(--cream)"></path> </g></svg> ');
    </script>
</body>

</html>