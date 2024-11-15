<?php
// panggil koneksi database
include "database.php";
// $tampil = mysqli_query($koneksidb, "SELECT * FROM tb_member WHERE id =
// '$_GET[id]'");

// $data = mysqli_fetch_array($tampil);
$tampil = mysqli_query($koneksidb, "SELECT *  FROM tb_pelanggan WHERE KodePelanggan = '$_GET[KodePelanggan]'");

$data = mysqli_fetch_array($tampil)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Ubah Data</title>
</head>

<body>
    <form method="post" name="ubah">
        <div class="col-md-6 mx-auto">
            <h2 class="text-center">Ubah Data Member</h2>
            <div class="col-md-6 mx-auto">
                <div class="mb-2">
                    <label for="KodePelanggan">Pelanggan</label>
                    <input type="text" class="form-control" name="KodePelanggan" value="<?php echo $data['KodePelanggan'];?>">
                </div>
                <div class="mb-2">
                    <label for="Nama">Nama</label>
                    <input type="text" class="form-control" name="Nama" value="<?php echo $data['Nama'];?>">
                </div>
                <div class="mb-2">
                    <label for="Alamat">Alamat</label>
                    <input type="text" class="form-control" name="Alamat" value="<?php echo $data['Alamat'];?>">
                </div>
                <div class="mb-2">
                    <label for="Telp">Telp</label>
                    <input type="number" class="form-control" name="Telp" value="<?php echo $data['Telp'];?>">
                </div>
                <div class="mb-2">
                    <label for="Tanggal">Tanggal</label>
                    <input type="datetime" class="form-control" name="Tanggal" value="<?php echo $data['Tanggal'];?>">
                </div>
                <div class="mb-2">
                    <label for="Tujuan">Tujuan</label>
                    <input type="text" class="form-control" name="Tujuan" value="<?php echo $data['Tujuan'];?>">
                </div>
            </div>
        </div>
          <div class="d-grid gap-2 col-3 mx-auto">
            <button class="btn btn-primary" name="btubah" type="submit">Simpan</button>
        </div>
            <a href="datamember.php">
                <div class="d-grid gap-2 col-3 mx-auto">
                    <button class="btn btn-danger" type="button">Batal</button>
                </div>
            </a>
    </form>
</body>
</html>
<?php
include("database.php");
// uji jika tombol ubah diklik
if (isset($_POST['btubah'])) {
    // persiapan ubah data
    $ubah = mysqli_query($koneksidb,"UPDATE tb_pelanggan SET 
    Nama = '$_POST[Nama]', 
    Alamat = '$_POST[Alamat]', 
    Telp = '$_POST[Telp]', 
    Tanggal = '$_POST[Tanggal]',
    Tujuan = '$_POST[Tujuan]'
    Where KodePelanggan = '$_GET[KodePelanggan]'");
    // jika ubah sukses
    if ($ubah) {
        echo "<script>alert('Ubah Data Berhasil'); document.location='datamember.php';</script>";
    } else {
        echo "<script>alert('Ubah Data Gagal'); document.location='datamember.php';</script>";
    }
}
?>