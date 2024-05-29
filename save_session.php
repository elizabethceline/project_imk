<?php require "conn.php";

$message = "";
$success = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header('Content-Type: application/json');
    if (isset($_POST['kategori']) && isset($_POST['jumlah']) && isset($_POST['id_tiket']) && isset($_POST['harga'])) {

        $kategori = $_POST["kategori"];
        $jumlah = $_POST["jumlah"];
        $id_tiket = $_POST["id_tiket"];
        $harga = $_POST["harga"];

        $_SESSION['kategori'] = $kategori;
        $_SESSION['jumlah'] = $jumlah;
        $_SESSION['id_konser'] = $id_tiket;
        $_SESSION['harga'] = $harga;

        $message = "Success";
        $success = true;
    } else {
        $message = "Some fields are still empty";
    }

    echo json_encode([
        'message' => $message,
        'success' => $success
    ]);
}
?>