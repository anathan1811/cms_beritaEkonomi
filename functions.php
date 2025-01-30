<?php
include 'config/database.php';

function getBerita($id = null) {
    global $conn;
    $sql = $id ? "SELECT * FROM berita WHERE id = $id" : "SELECT * FROM berita ORDER BY tanggal_publikasi DESC";
    return $conn->query($sql);
}

function createBerita($judul, $isi, $kategori, $gambar, $penulis) {
    global $conn;
    $sql = "INSERT INTO berita (judul, isi, kategori, gambar, penulis) 
            VALUES ('$judul', '$isi', '$kategori', '$gambar', '$penulis')";
    return $conn->query($sql);
}

function updateBerita($id, $judul, $isi, $kategori, $gambar, $penulis) {
    global $conn; 
    $query = "UPDATE berita SET judul = ?, isi = ?, kategori = ?, gambar = ?, penulis = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssi", $judul, $isi, $kategori, $gambar, $penulis, $id);
    return $stmt->execute();
}


function deleteBerita($id) {
    global $conn;
    $sql = "DELETE FROM berita WHERE id = $id";
    return $conn->query($sql);
}
?>

