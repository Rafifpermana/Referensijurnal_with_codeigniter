<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col">
        <h2 class="mb-3">Daftar Referensi Jurnal</h2>
        <a href="/jurnal/create" class="btn btn-primary mb-3">Tambah Referensi Baru</a>

        <table class="table table-striped table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul Jurnal</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($jurnal as $j) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td>
                            <?= $j['judul_jurnal']; ?><br>
                            <a href="<?= $j['link_referensi']; ?>" target="_blank" class="text-decoration-none" style="font-size: 0.85em;">🔗 Link PDF</a>
                        </td>
                        <td><?= $j['penulis']; ?></td>
                        <td><?= $j['tahun_terbit']; ?></td>
                        <td>
                            <?php
                            $badgeClass = 'bg-secondary';
                            if ($j['status_baca'] == 'Sedang Direview') $badgeClass = 'bg-warning text-dark';
                            if ($j['status_baca'] == 'Selesai') $badgeClass = 'bg-success';
                            ?>
                            <span class="badge <?= $badgeClass; ?>"><?= $j['status_baca']; ?></span>
                        </td>
                        <td>
                            <a href="/jurnal/edit/<?= $j['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/jurnal/delete/<?= $j['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus referensi ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>