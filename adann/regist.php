<?php
// panggil koneksi database
include("database.php");

// uji jika tombol simpan diklik
if (isset($_POST['btnsimpan'])) {
    // persiapan simpan data
    $simpan = mysqli_query($koneksidb, "INSERT INTO tb_pelanggan( Nama, Alamat, Telp, Tanggal, Tujuan) VALUES ('$_POST[Nama]', '$_POST[Alamat]', '$_POST[Telp]', '$_POST[Tanggal]', '$_POST[Tujuan]')");

    // jika simpan sukses
    if ($simpan) {
        echo "<script>alert('Berhasil Simpan Registrasi');</script>";
        echo "<script>window.location.href='regist.php';</script>";
    } else {
        echo "<script>alert('Gagal Simpan Registrasi');</script>";
        echo "<script>window.location.href='regist.php';</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>latihan PHP</title>
</head>

<body>
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="web.php">Host</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="homeweb.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#regist">Regist</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="datamember.php">Data Member</a>
  </li>
</ul>
            </div>
        </div>
    </nav>
    <hr>
    <div class="container">
        <h2 class="text-center">Registrasi Destinasi</h2>
        <form method="post" name="form1">
            <div class="col-md-6 mx-auto">
                <div class="mb-2">
                    <label for="Nama">Nama</label>
                    <input type="text" required name="Nama" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="Alamat">Alamat</label>
                    <input type="text" required name="Alamat" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="Telp">Telp</label>
                    <input type="number" required name="Telp" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="Tanggal">Tanggal</label>
                    <input type="date" required name="Tanggal" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="Tujuan">Tujuan</label>
                    <input type="text" required name="Tujuan" class="form-control">
                </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-success" name="btnsimpan" type="submit">Simpan</button>
                <button class="btn btn-warning" type="reset">Reset</button>
            </div>
        </form>
    </div>
</body>

</html>