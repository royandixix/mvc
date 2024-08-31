<div class="container ml-3 mt-3">

    <!-- Menampilkan Pesan Flash -->
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Pengguna Baru
            </button>
            <br><br>

            <h5>Daftar Web Development</h5>

            <ul class="list-group">
                <?php foreach ($data['web'] as $w) : ?>
                    <li class="list-group-item">
                        <?php echo htmlspecialchars($w['nama']); ?>
                        <a href="<?php echo BASEURL; ?>/web/delete/<?php echo $w['id']; ?>" 
                           class="badge text-bg-danger p-2 rounded-3 float-end" 
                           onclick="return confirm('Yakin ingin menghapus pengguna ini?')">Delete</a>
                        <a href="<?php echo BASEURL; ?>/web/detail/<?php echo $w['id']; ?>" 
                           class="badge text-bg-primary p-2 rounded-3 float-end me-2">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>
</div>

<!-- Modal Tambah Pengguna -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Pengguna Baru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo BASEURL; ?>/web/tambah" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" required>
                    </div>
                    <div class="mb-3">
                        <label for="pengalaman" class="form-label">Pengalaman</label>
                        <input type="text" class="form-control" id="pengalaman" name="pengalaman" required>
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="text" class="form-control" id="umur" name="umur" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="kampus" class="form-label">Kampus</label>
                        <input type="text" class="form-control" id="kampus" name="kampus" required>
                    </div>
                    <div class="mb-3">
                        <label for="asal_daerah" class="form-label">Asal Daerah</label>
                        <input type="text" class="form-control" id="asal_daerah" name="asal_daerah" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
