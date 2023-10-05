<?php 
    include 'koneksi.php';

    $judul  = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $isi    = $_POST['isi'];
    $tanggal = $_POST['tanggal'];

    $simpan = mysqli_query($koneksi, "INSERT INTO artikel VALUES('', '$judul', '$penulis', '$isi', '$tanggal')");

    if($simpan) {
        echo "<script>alert('Artikel Berhasil Disimpan');</script>";
        echo "<script>window.location = 'blog.php';</script>";
    } else {
        echo "<script>alert('Artikel Gagal Disimpan');</script>";
        echo "<script>window.location = 'blog.php';</script>";
    }
?>