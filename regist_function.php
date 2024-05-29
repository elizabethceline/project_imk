<?php require "conn.php";

$message = "";
$success = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header('Content-Type: application/json');
    if (isset($_POST['nama']) && isset($_POST['nik']) && isset($_POST['email']) && isset($_POST['no_telp']) && isset($_POST['password'])) {

        $nama = htmlspecialchars($_POST["nama"]);
        $nik = htmlspecialchars($_POST["nik"]);
        $email = htmlspecialchars($_POST["email"]);
        $no_telp = htmlspecialchars($_POST["no_telp"]);
        $password = htmlspecialchars($_POST["password"]);

        $cek_email = $conn->prepare("SELECT email FROM user WHERE email= :email");
        $cek_email->bindParam(':email', $email);
        $cek_email->execute();

        $cek_telp = $conn->prepare("SELECT no_telp FROM user WHERE no_telp= :no_telp");
        $cek_telp->bindParam(':no_telp', $no_telp);
        $cek_telp->execute();

        $cek_nik = $conn->prepare("SELECT nik FROM user WHERE nik= :nik");
        $cek_nik->bindParam(':nik', $nik);
        $cek_nik->execute();

        if (mb_strlen($email) > 64) {
            $message = 'E-mail is too long';
        } else if ($cek_email->rowCount() > 0) {
            $message = 'E-mail is already registered';
        } else if ($cek_telp->rowCount() > 0) {
            $message = 'Phone number is already registered';
        } else if ($cek_nik->rowCount() > 0) {
            $message = 'NIK is already registered';
        } else if (mb_strlen($nama) < 3 || mb_strlen($nama) > 64) {
            $message = 'Name must be between 3 and 64 characters';
        } else if (mb_strlen($nik) != 16) {
            $message = 'NIK must be 16 characters';
        } else if (mb_strlen($no_telp) < 3 || mb_strlen($no_telp) > 64) {
            $message = 'Name must be between 10 and 16 characters';
        } else if (mb_strlen($password) < 8 || mb_strlen($password) > 32) {
            $message = 'Password must be between 8 and 32 characters';
        } else {
            $sql = "INSERT INTO user SET id = UUID(), nama = ?, nik = ?, email = ?, no_telp=?, password=?";
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare($sql);
            $stmt->execute([$nama, $nik, $email, $no_telp, $hash]);

            if ($stmt) {
                $message = "Registration Successful";
                $success = true;
            }
        }
    } else {
        $message = "Some fields are still empty";
    }



    echo json_encode([
        'message' => $message,
        'success' => $success
    ]);
}
