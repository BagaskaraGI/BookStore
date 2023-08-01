<div class="card mt-2">
    <div class="card-header text-center">
        <h1> Edit Buku</h1>
    </div>
    <div class="card-body">
        <form action="<?= base_url('Pages/editBuku/') . $data_buku['kode_buku']; ?>" method="POST">
            <div class="mb-3">
                <label for="EditJudulBuku" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="EditJudulBuku" name="EditJudulBuku" value="<?= $data_buku['judul_buku']?>">
            </div>
            <div class="mb-3">
                <label for="EditTahunTerbit" class="form-label">Tahun Terbit</label>
                <select class="form-select" id="EditTahunTerbit" name="EditTahunTerbit" aria-label="Default select example">
                    <?php if ($data_buku['tahun_terbit'] < 2020 || $data_buku['tahun_terbit'] > 2023) { ?>
                        <option value="<?= $data_buku['tahun_terbit'] ?>" selected><?= $data_buku['tahun_terbit']; ?></option>
                    <?php } ?>
                    <?php for ($a = 2020; $a <= 2023; $a++) {
                        if ($a == $data_buku['tahun_terbit']) { ?>
                            <option value="<?= $a; ?>" selected><?= $a; ?></option>
                        <?php } else { ?>
                            <option value="<?= $a; ?>"><?= $a; ?> </option>
                    <?php }
                    } ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="EditKodePenerbit" class="form-label">Penerbit</label>
                <select class="form-select" id="EditKodePenerbit" name="EditKodePenerbit" aria-label="Default select example">
                    <?php foreach ($data_penerbit as $row) { ?>
                        <?php if ($row['kode_penerbit'] == $data_buku['kode_penerbit']) { ?>
                            <option value="<?= $row['kode_penerbit'] ?>" selected><?= $row['nama_penerbit']; ?></option>
                        <?php } else { ?>
                            <option value="<?= $row['kode_penerbit']; ?>"><?= $row['nama_penerbit']; ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </div>
    </div>
    <div class="card-footer text-end">
        <a href="<?= base_url('Pages/daftarBuku/') ?>" type="button" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
    </form>
</div>