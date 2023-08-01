<!--FLASH DATA-->
<?= $this->session->flashdata('pesan'); ?>
<div class="card mt-2">
  <div class="card-header text-center">
    <h1>Selamat datang di halaman Daftar Penerbit</h1>
  </div>

  <div class="card-body">
    <button type="button" class="btn btn-primary col-12 mb-3" data-bs-toggle="modal" data-bs-target="#modalPenerbit">Tambah Penerbit</button>
    <table class="table table-striped" id="myTable">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Kode Penerbit</th>
          <th scope="col">Nama Penerbit</th>
          <th scope="col">Alamat Penerbit</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($data_penerbit as $row) { ?>
          <tr>
            <th scope="row"><?= $no++; ?></th>
            <td><?= $row['kode_penerbit']; ?></td>
            <td><?= $row['nama_penerbit']; ?></td>
            <td><?= $row['alamat_penerbit']; ?></td>
            <td>
              <a href="<?= base_url('Pages/hapusPenerbit/') . $row['kode_penerbit'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">
                <i class="fa fa-trash" aria-hidden="true"></i>
                Hapus
              </a>
              <a type="button" href="<?= base_url('Pages/tampilEditPenerbit/') . $row['kode_penerbit']; ?>" class="btn btn-warning btn-sm">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                Edit
              </a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>