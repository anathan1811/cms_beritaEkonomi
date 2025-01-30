<?php
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $kategori = $_POST['kategori'];
    $penulis = $_POST['penulis'];


    $gambar = $_FILES['gambar']['name'];
    $gambar_tmp_name = $_FILES['gambar']['tmp_name'];
    $gambar_error = $_FILES['gambar']['error'];

    $upload_dir = 'uploads/';
    $upload_file = $upload_dir . basename($gambar);

    if ($gambar_error === 0) {
        if (move_uploaded_file($gambar_tmp_name, $upload_file)) {
            $update_success = updateBerita($id, $judul, $isi, $kategori, $gambar, $penulis);
        } else {
            $update_success = false;
            $error_message = "Gagal meng-upload gambar baru.";
        }
    } else {
        $update_success = updateBerita($id, $judul, $isi, $kategori, null, $penulis);
    }

    if ($update_success) {
        header("Location: admin_dashboard.php");
        exit();
    } else {
        $error_message = isset($error_message) ? $error_message : "Gagal memperbarui data berita.";
    }
} else {
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];
        $result = getBerita($id);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            die("<div class='alert alert-danger'>Data berita tidak ditemukan untuk ID: $id.</div>");
        }
    } else {
        die("<div class='alert alert-danger'>ID tidak valid atau tidak ada.</div>");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5">
        <h1 class="text-center">Edit Berita</h1>
        <?php if (isset($error_message)): ?>
            <div class="alert alert-danger"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <form action="update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?php echo htmlspecialchars($row['judul']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="isi" class="form-label">Isi Berita</label>
                <textarea class="form-control" id="isi" name="isi" rows="5" required><?php echo htmlspecialchars($row['isi']); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" value="<?php echo htmlspecialchars($row['kategori']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo htmlspecialchars($row['penulis']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
                <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="admin_dashboard.php" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
