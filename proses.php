<?php
// membuat koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "pwc";
$koneksi = mysqli_connect($host, $username, $password, $database);

if (isset($_POST['submit'])) {

}
if (isset($_GET['submit'])) {
    $nama = $_GET['fnama'];
    $alamat = $_GET['lalamat'];
    $no_hp = $_GET['no_hp'];
    $tgl_lahir = $_GET['tgl_lahir'];
    echo "<span class='success'>Dengan <b>METODE GET</b></span><br/>";
    echo "Nama : " . $nama . "<br/>Alamat : " . $alamat . "<br/>";
    echo "Nomor Handphone : " . $no_hp . "<br/>Tgl Lahir : " . $tgl_lahir;
}

// menangani input data
if (isset($_POST['submit'])) {
    $nama = $_POST['fnama'];
    $alamat = $_POST['lalamat'];
    $no_hp = $_POST['no_hp'];
    $tgl_lahir = $_POST['tgl_lahir'];
    // echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
    // echo "Nama : " . $nama . "<br/>Alamat : " . $alamat . "<br/>";
    // echo "Nomor Handphone : " . $no_hp . "<br/>Tgl Lahir : " . $tgl_lahir;

    // menyiapkan perintah SQL untuk memasukkan data ke dalam tabel
    $sql = "INSERT INTO data_mhs (nama, alamat, no_hp, tgl_lahir) VALUES ('$nama', '$alamat', '$no_hp', '$tgl_lahir' )";

    // mengeksekusi perintah SQL dan memeriksa apakah data telah dimasukkan dengan sukses
    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil dimasukkan";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}
mysqli_close($koneksi); // menutup koneksi ke database
?>