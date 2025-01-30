<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Berita</title>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(120deg, #f0f9ff, #cbebff);
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar-brand {
            font-weight: bold;
            color: white !important;
        }
        .nav-link {
            color: white !important;
        }
        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
        }
        .card:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    ?>

    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Berita Ekonomi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php if (isset($_SESSION['username'])): ?>
                        <li class="nav-item">
                            <span class="nav-link">Halo, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link btn btn-danger text-white px-3">Logout</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="login.php" class="nav-link btn btn-light text-primary px-3">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="register.php" class="nav-link btn btn-light text-primary px-3">Register</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <h1 class="text-center mb-5 text-primary">Berita Harian</h1>
        

        <?php
        include 'functions.php';
        $result = getBerita();

        if ($result->num_rows > 0) {
            echo '<div class="row g-4">';
            while ($row = $result->fetch_assoc()) {
                echo '
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="uploads/' . $row['gambar'] . '" class="card-img-top" alt="' . htmlspecialchars($row['judul']) . '" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title text-primary">' . htmlspecialchars($row['judul']) . '</h5>
                            <p class="card-text text-muted"><small>Kategori: ' . htmlspecialchars($row['kategori']) . ' | Penulis: ' . htmlspecialchars($row['penulis']) . '</small></p>
                            <p class="card-text">' . htmlspecialchars(substr($row['isi'], 0, 100)) . '...</p>
                            <a href="detail_berita.php?id=' . $row['id'] . '" class="btn btn-info text-white">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>';
            }
            echo '</div>';
        } else {
            echo '<p class="text-center text-muted">Belum ada berita.</p>';
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
