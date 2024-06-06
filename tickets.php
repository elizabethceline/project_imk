<?php require "conn.php";
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
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
    <link rel="stylesheet" href="css/ticket.css">
    <link rel="stylesheet" href="css/footer.css">

</head>

<body>
    <?php include "navbar.php" ?>

    <section class="tickets d-flex justify-content-center flex-column align-items-center">
        <div class="d-flex w-100 heading-container px-2">
            <h1 class="font1 text-heading2 text-center m-0 mt-1">AVAILABLE TICKETS</h1>

            <div class="d-flex align-items-center gap-2">
                <p class="text-para2 m-0">Search: </p>
                <input type="text" id="search-box" placeholder="Concert Name" class="text-para2 my-3 my-lg-0">
            </div>

        </div>
        <div class="px-2 w-100 d-flex justify-content-center flex-column align-items-center">
            <div class="text-para2 filter-bar p-3 p-lg-4 row mt-3">
                <label class="col col-6 col-lg-3 py-2">
                    Price: <br>
                    <select id="price-filter">
                        <option value="all">All</option>
                        <option value="price1">Under Rp250.000</option>
                        <option value="price2">Rp250.000 - Rp499.999</option>
                        <option value="price3">Rp500.000 - Rp749.999</option>
                        <option value="price4">Rp750.000 - Rp999.999</option>
                        <option value="price5">Rp1.000.000 - Rp2.499.999</option>
                        <option value="price6">Rp2.500.000 and Above</option>
                    </select>
                </label>
                <label class="col col-6 col-lg-3 py-2">
                    Status: <br>
                    <select id="available-filter">
                        <option value="all">All</option>
                        <option value="available">Available</option>
                        <option value="outofstock">Out of Stock</option>
                    </select>
                </label>
                <label class="col col-6 col-lg-3 py-2">
                    Date: <br>
                    <input type="date" id="date-filter">
                </label>
                <label class="col col-6 col-lg-3 py-2">
                    Sort by: <br>
                    <select id="sort-filter">
                        <option value="none">None</option>
                        <option value="asc">Low to High</option>
                        <option value="desc">High to Low</option>
                    </select>
                </label>
            </div>
        </div>

        <div class="text-para2 ticket-list row mt-4">
            <?php
            $sql = "SELECT * FROM konser ORDER BY status DESC";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $id = $row["id"];
                    $nama = $row["nama_konser"];
                    $tempat = $row["tempat"];
                    $tanggal = $row["tanggal"];
                    $jam = $row["jam"];
                    $foto = $row["foto"];
                    $status = $row["status"];
                    $harga = $row["lowest_price"];
                    $kategori = $row["kategori"];

                    $tanggal = date("j M Y", strtotime($tanggal));
                    $jam = date("H:i", strtotime($jam));

                    echo '<div class="col col-12 col-lg-3 card-col" id="ticket1" data-id="' . $id . '" data-stock="' . ($status == "1" ? "available" : "outofstock") . '" data-price="' . $harga . '" data-date="' . $row["tanggal"] . '" data-place="' . $tempat . '" data-name="' . $nama . '" data-kategori="' . $kategori . '">
                            <div class="card my-2';

                    if ($status == 0) {
                        echo '" style="filter:grayscale(1);"';
                    }

                    if ($status == 1) {
                        echo ' active-card"';
                    }

                    echo '>
                                <div class="card-image">
                                    <img src="img/' . $foto . '" alt="" class="card-image2">
                                </div>
                                <div class="card-content py-2">
                                    <div class="tempat-tgl d-flex justify-content-between">
                                        <p class="m-0">' . $tempat . '</p>
                                        <p class="m-0">' . $tanggal . ' / ' . $jam . '</p>
                                    </div>
                                    <h1 class="text-para heading mt-2 mb-4">' . $nama . '</h1>
                                    <div class="d-flex flex-row flex-lg-column justify-content-between align-items-end align-items-lg-start">
                                        <p class="m-0 text-success tempat-tgl text-tgl">' . ($status == "1" ? "Available" : "Out of Stock") . '</p>
                                        <p class="text-para text-danger m-0 heading">Rp' . number_format($harga, 0, ',', '.') . '++</p>
                                    </div>
                                </div>
                            </div>
                        </div>';
                }
            }
            ?>
            <!-- <div class="col col-12 col-lg-3 card-col" id="ticket1" data-stock="outofstock" data-price="1000000" data-date="2024-06-01" data-place="tempat" data-name="CAPEK AKU">
                <div class="card my-2">
                    <div class="card-image">
                        <img src="img/taylor.jpeg" alt="" class="card-image2">
                    </div>
                    <div class="card-content py-2">
                        <div class="tempat-tgl d-flex justify-content-between">
                            <p class="m-0">Tempat 1</p>
                            <p class="m-0">1 JUN 2024 / 08:00</p>
                        </div>
                        <h1 class="text-para heading mt-2 mb-4">CAPEK AKU</h1>
                        <div class="d-flex flex-row flex-lg-column justify-content-between align-items-end align-items-lg-start">
                            <p class="m-0 text-success tempat-tgl text-tgl">Out of Stock!</p>
                            <p class="text-para text-danger m-0 heading">Rp1.000.000++</p>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
    </section>

    <div class="modal fade text-black" id="priceModal" tabindex="-1" aria-labelledby="priceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-para" id="priceModalLabel">Ticket Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-para2 d-flex justify-content-between">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Category</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="kategori-output">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade text-black" id="ticketModal" tabindex="-1" aria-labelledby="ticketModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-para" id="ticketModalLabel">Ticket Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form" id="ticket_form" method="POST">
                    <div class="modal-body text-para2 d-flex justify-content-between">
                        <div class="d-flex flex-column w-25">
                            <p>Concert Name</p>
                            <p>Price</p>
                            <p>Date</p>
                            <p>Place</p>
                            <p>Category</p>
                            <p>Quantity</p>
                        </div>
                        <div class="d-flex flex-column" style="width: 5%;">
                            <p>:</p>
                            <p>:</p>
                            <p>:</p>
                            <p>:</p>
                            <p>:</p>
                            <p>:</p>
                        </div>
                        <div class="d-flex flex-column" style="width: 70%;">
                            <p id="modal-concert-id" style="display: none;"></p>
                            <p id="modal-concert-name"></p>
                            <p id="modal-concert-price"></p>
                            <p id="modal-concert-date"></p>
                            <p id="modal-concert-place"></p>
                            <p id="modal-concert-category"></p>
                            <input type="number" name="" id="jumlah-tiket" placeholder="" class="input w-25" min="1">
                        </div>
                    </div>
                    <div class="modal-footer pt-0">
                        <button type="button" class="btn btn-success text-para2 w-100" type="submit" id="buy-ticket">Buy Now</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>

    <script>
        $(document).ready(function() {
            const rupiah = (number) => {
                return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');;
            }

            $('#price-filter, #available-filter, #date-filter, #sort-filter, #search-box').on('input change', function() {
                var selectedPrice = $('#price-filter').val();
                var selectedAvailability = $('#available-filter').val();
                var selectedDate = $('#date-filter').val();
                var sortBy = $('#sort-filter').val();
                var searchQuery = $('#search-box').val().toLowerCase();

                var $tickets = $('.ticket-list .col');

                $tickets.each(function() {
                    var ticketPrice = parseInt($(this).attr('data-price'));
                    var ticketAvailability = $(this).attr('data-stock');
                    var ticketDate = $(this).attr('data-date');
                    var ticketName = $(this).attr('data-name').toLowerCase();

                    var showTicket =
                        (selectedPrice === 'all' || checkPrice(selectedPrice, ticketPrice)) &&
                        (selectedAvailability === 'all' || selectedAvailability === ticketAvailability) &&
                        (selectedDate === '' || selectedDate === ticketDate) &&
                        (searchQuery === '' || ticketName.includes(searchQuery));

                    $(this).toggle(showTicket);
                });

                if (sortBy === 'asc') {
                    $tickets.sort(function(a, b) {
                        return parseInt($(a).attr('data-price')) - parseInt($(b).attr('data-price'));
                    });
                } else if (sortBy === 'desc') {
                    $tickets.sort(function(a, b) {
                        return parseInt($(b).attr('data-price')) - parseInt($(a).attr('data-price'));
                    });
                }

                $('.ticket-list').html($tickets);
            });

            function checkPrice(selectedPrice, ticketPrice) {
                switch (selectedPrice) {
                    case 'price1':
                        return ticketPrice < 250000;
                    case 'price2':
                        return ticketPrice >= 250000 && ticketPrice < 500000;
                    case 'price3':
                        return ticketPrice >= 500000 && ticketPrice < 750000;
                    case 'price4':
                        return ticketPrice >= 750000 && ticketPrice < 1000000;
                    case 'price5':
                        return ticketPrice >= 1000000 && ticketPrice < 2500000;
                    case 'price6':
                        return ticketPrice >= 2500000;
                    default:
                        return false;
                }
            }

            $('.ticket-list').on('click', '.card-col', function() {
                var ticketID = $(this).attr('data-id');
                var ticketName = $(this).attr('data-name');
                var ticketPrice = $(this).attr('data-price');
                var ticketDate = $(this).attr('data-date');
                var ticketPlace = $(this).attr('data-place');
                var ticketCategory = $(this).attr('data-kategori');
                var ticketStock = $(this).attr('data-stock');

                if (ticketStock === "available") {
                    $('#modal-concert-id').text(ticketID);
                    $('#modal-concert-name').text(ticketName);
                    $('#modal-concert-date').text(ticketDate);
                    $('#modal-concert-place').text(ticketPlace);

                    var highest_price = parseInt(ticketPrice) + ((ticketCategory - 1) * 500000);

                    $('#kategori-output').html(`
                <tr>
                                <td>VIP</td>
                                <td>Rp` + rupiah(highest_price) + `</td>
                                <td><button class="btn btn-success btn-cat py-2 px-3 text-para2" data-bs-toggle="modal" data-bs-target="#ticketModal" data-price2="` + rupiah(highest_price) + `" data-category="VIP">BUY</button></td>
                            </tr>
                            <tr>
                                <td>CAT 1</td>
                                <td>Rp` + rupiah(highest_price - 500000) + `</td>
                                <td><button class="btn btn-success btn-cat py-2 px-3 text-para2" data-bs-toggle="modal" data-bs-target="#ticketModal" data-price2="` + rupiah(highest_price - 500000) + `" data-category="CAT 1">BUY</button></td>
                            </tr>
                            <tr>
                                <td>CAT 2</td>
                                <td>Rp` + rupiah(highest_price - 1000000) + `</td>
                                <td><button class="btn btn-success btn-cat py-2 px-3 text-para2" data-bs-toggle="modal" data-bs-target="#ticketModal" data-price2="` + rupiah(highest_price - 1000000) + `" data-category="CAT 2">BUY</button></td>
                            </tr>
                    `);

                    if (ticketCategory > 3) {
                        $('#kategori-output').append(`
                    <tr>
                                <td>CAT 3</td>
                                <td>Rp` + rupiah(highest_price - 1500000) + `</td>
                                <td><button class="btn btn-success btn-cat py-2 px-3 text-para2" data-bs-toggle="modal" data-bs-target="#ticketModal" data-price2="` + rupiah(highest_price - 1500000) + `" data-category="CAT 3">BUY</button></td>
                            </tr>`);
                    }

                    if (ticketCategory > 4) {
                        $('#kategori-output').append(`
                    <tr>
                                <td>CAT 4</td>
                                <td>Rp` + rupiah(highest_price - 2000000) + `</td>
                                <td><button class="btn btn-success btn-cat py-2 px-3 text-para2" data-bs-toggle="modal" data-bs-target="#ticketModal" data-price2="` + rupiah(highest_price - 2000000) + `" data-category="CAT 4">BUY</button></td>
                            </tr>
                    `);
                    }

                    if (ticketCategory > 5) {
                        $('#kategori-output').append(`
                    <tr>
                                <td>CAT 5</td>
                                <td>Rp` + rupiah(highest_price - 2500000) + `</td>
                                <td><button class="btn btn-success btn-cat py-2 px-3 text-para2" data-bs-toggle="modal" data-bs-target="#ticketModal" data-price2="` + rupiah(highest_price - 2500000) + `" data-category="CAT 5">BUY</button></td>
                            </tr>`);
                    }

                    $('#priceModal').modal('show');
                }
            });

            $('.modal-body').on('click', '.btn-cat', function() {
                var ticketPrice = $(this).attr('data-price2');
                var ticketCategory = $(this).attr('data-category');
                $('#modal-concert-price').text("Rp" + ticketPrice);
                $('#modal-concert-category').text(ticketCategory);
                $('#ticketModal').modal('show');
            });


            $('.modal-content').on('click', '#buy-ticket', function(e) {
                e.preventDefault();

                var kategori = $('#modal-concert-category').text();
                var jumlah = $("#jumlah-tiket").val();
                var id_tiket = $("#modal-concert-id").text();
                var harga = $("#modal-concert-price").text();

                if ($("#jumlah-tiket").val() == '') {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Quantity cannot be empty!',
                        icon: 'error',
                    })
                } else if ($("#jumlah-tiket").val() < 1) {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Invalid quantity!',
                        icon: 'error',
                    })
                } else if ($("#jumlah-tiket").val() > 10) {
                    Swal.fire({
                        title: 'Error!',
                        text: 'You can only purchase a maximum of 10 tickets!',
                        icon: 'error',
                    })
                } else {
                    $.ajax({
                        method: "POST",
                        url: "save_session.php",
                        data: {
                            kategori: kategori,
                            jumlah: jumlah,
                            id_tiket: id_tiket,
                            harga: harga,
                        },
                        success: (e) => {
                            if (!e.success && e.message != null) {
                                Swal.fire({
                                    title: 'Error!',
                                    text: e.message,
                                    icon: 'error',
                                })
                            } else if (e.success && e.message != null) {
                                window.location.href = 'confirm.php';
                                document.getElementById("ticket_form").reset();

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
            })


            $(".ticketsNavbar").addClass("active disabled");
            $(".ticketsNavbar1").prepend('<svg width="18" height="18" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="var(--cream)" stroke-width="0.00024000000000000003" transform="matrix(1, 0, 0, 1, 0, 0)rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10.0909 11.9629L19.3636 8.63087V14.1707C18.8126 13.8538 18.1574 13.67 17.4545 13.67C15.4964 13.67 13.9091 15.096 13.9091 16.855C13.9091 18.614 15.4964 20.04 17.4545 20.04C19.4126 20.04 21 18.614 21 16.855C21 16.855 21 16.8551 21 16.855L21 7.49236C21 6.37238 21 5.4331 20.9123 4.68472C20.8999 4.57895 20.8852 4.4738 20.869 4.37569C20.7845 3.86441 20.6352 3.38745 20.347 2.98917C20.2028 2.79002 20.024 2.61055 19.8012 2.45628C19.7594 2.42736 19.716 2.39932 19.6711 2.3722L19.6621 2.36679C18.8906 1.90553 18.0233 1.93852 17.1298 2.14305C16.2657 2.34086 15.1944 2.74368 13.8808 3.23763L11.5963 4.09656C10.9806 4.32806 10.4589 4.52419 10.0494 4.72734C9.61376 4.94348 9.23849 5.1984 8.95707 5.57828C8.67564 5.95817 8.55876 6.36756 8.50501 6.81203C8.4545 7.22978 8.45452 7.7378 8.45455 8.33743V16.1307C7.90347 15.8138 7.24835 15.63 6.54545 15.63C4.58735 15.63 3 17.056 3 18.815C3 20.574 4.58735 22 6.54545 22C8.50355 22 10.0909 20.574 10.0909 18.815C10.0909 18.815 10.0909 18.8151 10.0909 18.815L10.0909 11.9629Z" fill="var(--cream)"></path> </g></svg> ');

        });
    </script>

</body>

</html>