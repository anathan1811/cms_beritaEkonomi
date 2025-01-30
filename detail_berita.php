<?php
include 'functions.php';

session_start();
$id = $_GET['id'];
$result = getBerita($id);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    die("<div class='container mt-5'><div class='alert alert-danger'>Berita tidak ditemukan.</div></div>");
}

$role = isset($_SESSION['role']) ? $_SESSION['role'] : 'reader';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="admin_dashboard.php">Berita Ekonomi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="admin_dashboard.php" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link text-danger">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center">
                <h1 class="card-title"><?= htmlspecialchars($row['judul']) ?></h1>
            </div>
            <div class="card-body">
                <p class="text-muted text-center">
                    <em>Kategori: <?= htmlspecialchars($row['kategori']) ?> | Penulis: <?= htmlspecialchars($row['penulis']) ?> | Tanggal: <?= date('d M Y', strtotime($row['tanggal_publikasi'])) ?></em>
                </p>
                <div class="text-center my-4">
                    <img src="uploads/<?= htmlspecialchars($row['gambar']) ?>" class="img-fluid rounded shadow-sm" alt="Gambar Berita" style="max-height: 400px; object-fit: cover;">
                </div>
                <div class="mt-4">
                    <p class="lead" style="text-align: justify;">
                        <?= nl2br(htmlspecialchars($row['isi'])) ?>
                    </p>
                </div>
            </div>
            <div class="card-footer text-center bg-light">
                <a href="<?= $role === 'admin' ? 'admin_dashboard.php' : 'index.php' ?>" class="btn btn-primary">Kembali ke <?= $role === 'admin' ? 'Dashboard Admin' : 'Homepage' ?></a>
            </div>
        </div>
    </div>

    <footer class="bg-primary text-white text-center py-3 mt-5">
        <p class="mb-0">© <?= date('Y') ?> Berita Ekonomi. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
