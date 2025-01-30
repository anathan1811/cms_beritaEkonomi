<?php
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $kategori = $_POST['kategori'];
    $penulis = $_POST['penulis'];

    $gambar = $_FILES['gambar']['name'];
    $gambar_tmp_name = $_FILES['gambar']['tmp_name'];
    $upload_dir = "uploads/";
    $upload_file = $upload_dir . basename($gambar);

    if (move_uploaded_file($gambar_tmp_name, $upload_file)) {
        if (createBerita($judul, $isi, $kategori, $gambar, $penulis)) {
            echo "<div class='alert alert-success'>Berita berhasil ditambahkan!</div>";
        } else {
            echo "<div class='alert alert-danger'>Gagal menambahkan berita!</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Gagal meng-upload gambar!</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Tambah Berita</h2>
        <form method="POST" enctype="multipart/form-data" class="bg-white p-4 rounded shadow-sm">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" id="judul" name="judul" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="isi" class="form-label">Isi</label>
                <textarea id="isi" name="isi" class="form-control" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" id="kategori" name="kategori" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" id="penulis" name="penulis" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" id="gambar" name="gambar" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Tambah Berita</button>
        </form>
        <div class="text-center mt-3">
            <a href="admin_dashboard.php" class="btn btn-secondary">Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>
