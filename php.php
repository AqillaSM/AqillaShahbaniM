<?php
$servername = "localhost"; // Ganti dengan nama server Anda
$username = "root"; // Ganti dengan nama pengguna database Anda
$password = "root"; // Ganti dengan kata sandi database Anda
$dbname = "websitezoya"; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Mengecek apakah koneksi berhasil terhubung
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Menyimpan nilai input dari formulir HTML ke dalam variabel
$nama = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$project = mysqli_real_escape_string($conn, $_POST['project']);
$pesan = mysqli_real_escape_string($conn, $_POST['message']);

// Menyimpan data ke dalam tabel database
$sql = "INSERT INTO ContactMe (Nama, Email, Project, Pesan)
VALUES ('$nama', '$email', '$project', '$pesan')";

if (mysqli_query($conn, $sql)) {
  echo "Data berhasil disimpan";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

$pesan = "Data berhasil disimpan"; // pesan yang akan ditampilkan di halaman HTML
header("Location: contactme.html?pesan=" . urlencode($pesan));
exit();
?>
