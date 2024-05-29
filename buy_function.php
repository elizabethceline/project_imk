<?php require "conn.php";

$message = "";
$success = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header('Content-Type: application/json');
    if (isset($_POST['kategori']) && isset($_POST['jumlah']) && isset($_POST['id_tiket']) && isset($_POST['id_user'])) {

        $kategori = htmlspecialchars($_POST["kategori"]);
        $jumlah = htmlspecialchars($_POST["jumlah"]);
        $id_tiket = htmlspecialchars($_POST["id_tiket"]);
        $id_user = htmlspecialchars($_POST["id_user"]);


        $sql = "INSERT INTO transaksi SET id = UUID(), id_user = ?, id_konser = ?, jenis = ?, jumlah=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id_user, $id_tiket, $kategori, $jumlah]);

        if ($stmt) {
            $message = "Purchase Successful";
            $success = true;
            unset($_SESSION['kategori']);
            unset($_SESSION['jumlah']);
            unset($_SESSION['id_konser']);
            unset($_SESSION['harga']);
        }
    } else {
        $message = "Some fields are still empty";
    }

    echo json_encode([
        'message' => $message,
        'success' => $success
    ]);
}
