<?php include '_header.php'; ?>
<!-- content -->
<div class="container mt-5">
  <div class="card im-box">
    <h5 class="card-header">Data Mahasiswa</h5>
    <div class="card-body">
      <h5 class="card-title">Lihat Data Mahasiswa</h5>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">
        Tambah Data Mahasiswa
      </button>
      <table class="table table-bordered mt-3">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NPM</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">No. HP</th>
            <th scope="col">Email</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          $data = mysqli_query($con, "SELECT * FROM mahasiswa");
          foreach ($data as $row) : ?>
            <tr>
              <th scope="row"><?= $i++ ?></th>
              <td><?= $row['npm'] ?></td>
              <td><?= $row['nama'] ?></td>
              <td><?= $row['alamat'] ?></td>
              <td><?= $row['nohp'] ?></td>
              <td><?= $row['email'] ?></td>
              <td>
                <a class="badge badge-success" href="page_edit.php?id=<?= $row['id'] ?>">Edit</a>
                <a class="badge badge-danger" href="proses_delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- ./content -->

<!-- Modal Add -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="proses_add.php" method="POST">
          <div class="form-group">
            <label for="">NPM</label>
            <input type="text" name="npm" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <textarea name="alamat" rows="2" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="">No. HP</label>
            <input type="text" name="nohp" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control">
          </div>
          <div class="form-group">
            <button type="reset" class="btn btn-danger " data-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ./Modal add -->


<?php include '_footer.php'; ?>