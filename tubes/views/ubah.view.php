<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1>update</h1>

  <div class="row">
    <div class="col-md-8">
      <form action="" method="post">

<input type="hidden" NAMA= "id" value="<?=lyn ["id"];?>">

        <div class="mb-3 w-25">
          <label for="NAMA" class="form-label">NAMA</label>
          <input type="text" class="form-control" name="NAMA" id="NAMA" maxlength="9"   required value="<?= $lyn["NAMA"]?>"/>
        </div>
        <div class="mb-3">
          <label for="Spesialis" class="form-label">Spesialis</label>
          <input type="text" class="form-control" name="Spesialis" id="Spesialis" value="<?= $lyn["NAMA"]?>"/>
        </div>
        <div class="mb-3">
          <label for="Nomor_Telpon" class="form-label">Nomor_Telpon</label>
          <input type="text" class="form-control" name="Nomor_Telpon" id="Nomor_Telpon"value="<?= $lyn["Nomor_Telpon"]?>"/>
        </div>
        <div class="mb-3">
          <label for="Email" class="form-label">Email</label>
          <input type="text" class="form-control" name="Email" id="Email"value="<?= $lyn["Email"]?>"/>
        </div>
        <div class="mb-3">
          <label for="Gambar" class="form-label">Gambar</label>
          <input type="text" class="form-control" name="Gambar" id="Gambar" value="<?= $lyn["Gambar"]?>"/>
        </div>
        <button class="Update btn-primary" type="submit" name="ubah">Update</button>
      </form>
    </div>
  </div>

</div>

<?php require('partials/footer.php'); ?>