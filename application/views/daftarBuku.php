<!--FLASH DATA-->
<?= $this->session->flashdata('pesan'); ?>
<div class="card mt-2">
  <div class="card-header text-center">
    <h1>Selamat datang di halaman Daftar Buku</h1>
  </div>
  <div class="card-body">
    <button type="button" class="btn btn-primary col-12 mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah Buku</button>
    <table class="table table-striped" id="myTable">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Kode Buku</th>
          <th scope="col">Nama Buku</th>
          <th scope="col">Tahun Terbit</th>
          <th scope="col">Penerbit</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($data_buku as $row) { ?>
          <tr>
            <th scope="row"><?= $no++; ?></th>
            <td><?= $row['kode_buku']; ?></td>
            <td><?= $row['judul_buku']; ?></td>
            <td><?= $row['tahun_terbit']; ?></td>
            <td><?= $row['nama_penerbit']; ?></td>
            <td>
              <a href="<?= base_url('Pages/hapusBuku/') . $row['kode_buku'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">
                <i class="fa fa-trash" aria-hidden="true"></i>
                Hapus
              </a>
              <!-- <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit"> -->
              <a type="button" href="<?= base_url('Pages/tampilEdit/').$row['kode_buku']; ?>" class="btn btn-warning btn-sm">
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