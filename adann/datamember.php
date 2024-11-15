<?php
// panggil koneksi database
include("database.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Data Member</title>
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
    <a class="nav-link" href="regist.php">Regist</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="datamember.php">Data Member</a>
  </li>
</ul>
<hr>
<h2 class="text-center"><u>Data Member</u></h2>
<hr>
<div class="container">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th class="text-center">Pelanggan</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">Telp</th>
                <th class="text-center">Tanggal</th>
                <th class="text-center">Tujuan</th>
                <th class="text-center">Ubah/Hapus</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $tampil = mysqli_query($koneksidb, "SELECT * FROM tb_pelanggan");
            while ($data = mysqli_fetch_array($tampil)) :
            ?>
            <tr>
                <td class="text-center"><?= $no++ ?></td>
                <td class="text-center"><?= $data['Nama'] ?></td>
                <td class="text-center"><?= $data['Alamat'] ?></td>
                <td class="text-center"><?= $data['Telp'] ?></td>
                <td class="text-center"><?= $data['Tanggal'] ?></td>
                <td class="text-center"><?= $data['Tujuan'] ?></td>
                <td class="text-center">
                    <!-- Edit Button -->
                    <a href="ubah.php?KodePelanggan=<?= $data['KodePelanggan'] ?>">
                        <button class="btn btn-info" name="btubah">Ubah</button>
                    </a>
                    <!-- Delete Button (Trigger Modal) -->
                    <a href="#" data-bs-toggle="modal" data-bs-target="#hapus<?= $no ?>">
                        <button class="btn btn-danger">Hapus</button>
                    </a>
                </td>
            </tr>
            <!-- Modal Hapus -->
            <div class="modal fade" id="hapus<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi</h5>
                        </div>
                        <form method="post" action="hapusweb.php">
                            <input type="hidden" name="KodePelanggan" value="<?= $data['KodePelanggan'] ?>"> <!-- Hidden field for KodePelanggan -->
                            <div class="modal-body">
                                <h5 class="text-center">Apakah Anda Yakin akan hapus data ini? <br> <span class="text-danger"><?= $data['Nama'] ?> - <?= $data['Telp'] ?></span></h5>
                            </div>
                            <div class="modal-footer">
                                <a href="hapusweb.php?KodePelanggan=<?= $data['KodePelanggan'] ?>">
                                    <button type="submit" class="btn btn-warning" name="bhapus">Hapus</button>
                                    
                                </a>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Hapus -->
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
