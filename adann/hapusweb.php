<?php
// Include database connection
include("database.php");

if (isset($_POST['bhapus']) && isset($_POST['KodePelanggan'])) {
    $kodePelanggan = $_POST['KodePelanggan'];

    // Delete the record from the database
    $hapus = mysqli_query($koneksidb, "DELETE FROM tb_pelanggan WHERE KodePelanggan = '$kodePelanggan'");

    if ($hapus) {
        // Redirect to datamember.php after successful deletion
        echo "<script>
                alert('Data berhasil dihapus');
                window.location.href = 'datamember.php';
              </script>";
    } else {
        // Error handling if the deletion failed
        echo "<script>
                alert('Gagal menghapus data');
                window.location.href = 'datamember.php';
              </script>";
    }
}
?>
