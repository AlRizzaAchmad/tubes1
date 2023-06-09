<?php require('partials/header.php'); ?>

<?php require('partials/nav.php'); ?>
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-md-10 col-sm-12 card-container">
      <div class="card text-center">
        <div class="card-header">
          <h4>ADMIN</h4>
          <a href="tambah.php" class="btn btn-primary">Tambah Data Mahasiswa</a>


        </div>
        <div class="card-body">
        <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Gambar</th>
        <th scope="col">Nama</th>
        <th scope="col">Spesialis</th>
        <th scope="col">Nomor Telepon</th>
        <th scope="col">Email</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php $i = 1; ?>
      <?php foreach ($layanan as $lyn) : ?>
        <tr>
          <th scope="row"><?= $i++; ?></th>
          <td>
            <img src="images/<?= $lyn['Gambar']; ?>" >
          </td>
          <td><?= $lyn['NAMA']; ?></td>
          <td><?= $lyn['Spesialis']; ?></td>
          <td><?= $lyn['Nomor_Telpon']; ?></td>
          <td><?= $lyn['Email']; ?></td>
          <td>
            <a href="ubah.php">Edit</a> |
            <a href="" class="badge text-bg-danger">hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

        </div>
      </div>
    </div>
  </div>
</div>
  </body>
<?php require('partials/footer.php'); ?>

 


