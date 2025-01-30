<?php
include 'functions.php';

$id = $_GET['id'];
$resultMessage = "";
$resultAlert = "";

if (deleteBerita($id)) {
    $resultMessage = "Berita berhasil dihapus!";
    $resultAlert = "alert-success";
} else {
    $resultMessage = "Terjadi kesalahan saat menghapus berita!";
    $resultAlert = "alert-danger";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Berita</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="alert <?php echo $resultAlert; ?> text-center shadow">
                    <h5><?php echo $resultMessage; ?></h5>
                </div>
                <div class="text-center mt-4">
                    <a href="admin_dashboard.php" class="btn btn-primary">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
