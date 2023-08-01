<div class="card mt-2">
    <div class="card-header text-center">
        <h1> Edit Penerbit</h1>
    </div>
    <div class="card-body">
        <form action="<?= base_url('Pages/editPenerbit/') . $data_penerbit['kode_penerbit']; ?>" method="POST">

            <div class="mb-3">
                <label for="EditNamaPenerbit" class="form-label">Nama Penerbit</label>
                <input type="text" class="form-control" id="EditNamaPenerbit" name="EditNamaPenerbit" value="<?= $data_penerbit['nama_penerbit'] ?>">
            </div>
            <div class="mb-3">
                <label for="EditAlamatPenerbit" class="form-label">Alamat Penerbit</label>
                <input type="text" class="form-control" id="EditAlamatPenerbit" name="EditAlamatPenerbit" value="<?= $data_penerbit['alamat_penerbit'] ?>">
            </div>

    </div>
    <div class="card-footer text-end">
        <a href="<?= base_url('Pages/daftarPenerbit/') ?>" type="button" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
    </form>
</div>