<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-8">
        <h2 class="my-3">Form Tambah Referensi Jurnal</h2>

        <form action="/jurnal/save" method="post">
            <div class="mb-3">
                <label for="judul_jurnal" class="form-label">Judul Jurnal</label>
                <input type="text" class="form-control" id="judul_jurnal" name="judul_jurnal" required autofocus>
            </div>
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="penulis" name="penulis" required>
            </div>
            <div class="mb-3">
                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" required>
            </div>
            <div class="mb-3">
                <label for="link_referensi" class="form-label">Link Referensi (URL / GDrive)</label>
                <input type="url" class="form-control" id="link_referensi" name="link_referensi">
            </div>
            <div class="mb-3">
                <label for="status_baca" class="form-label">Status Baca</label>
                <select class="form-select" id="status_baca" name="status_baca">
                    <option value="Belum Dibaca">Belum Dibaca</option>
                    <option value="Sedang Direview">Sedang Direview</option>
                    <option value="Selesai">Selesai</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Referensi</button>
            <a href="/jurnal" class="btn btn-secondary">Batal</a>
        </form>

    </div>
</div>
<?= $this->endSection(); ?>