<!-- Button trigger modal
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Buku</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- FORM -->
                <form action="<?= base_url('Pages/simpanBuku'); ?>" method="POST">
                    <div class="mb-3">
                        <label for="InputJudulBuku" class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" id="InputJudulBuku" name="InputJudulBuku">
                    </div>
                    <div class="mb-3">
                        <label for="InputTahunTerbit" class="form-label">Tahun Terbit</label>
                        <select class="form-control" id="InputTahunTerbit" name="InputTahunTerbit">
                            <?php for ($a = 2020; $a <= 2023; $a++) { ?>
                                <option value="<?= $a; ?>"><?= $a; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="InputKodePenerbit" class="form-label">Penerbit</label>
                        <select class="form-control" id="InputKodePenerbit" name="InputKodePenerbit">
                            <?php foreach ($data_penerbit as $row) { ?>
                                <!-- VALUE ISI NANTI DI LEMPAR -->
                                <option value="<?= $row['kode_penerbit']; ?>">
                                    <!-- VIEW OPTION -->
                                    <?= $row['nama_penerbit']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
            </form>
        </div>
    </div>
</div>