<!-- Button trigger modal
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="modalPenerbit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Penerbit</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- FORM -->
                <form action="<?= base_url('Pages/simpanPenerbit'); ?>" method="POST">
                    <div class="mb-3">
                        <label for="InputNamaPenerbit" class="form-label">Nama Penerbit</label>
                        <input type="text" class="form-control" id="InputNamaPenerbit" name="InputNamaPenerbit">
                    </div>
                    <div class="mb-3">
                        <label for="InputAlamatPenerbit" class="form-label">Alamat Penerbit</label>
                        <input type="text" class="form-control" id="InputAlamatPenerbit" name="InputAlamatPenerbit">
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