<?php
include 'lib/koneksi.php';

// Query untuk mendapatkan data yang belum dihapus (is_deleted = 0) dengan urutan terbaru
$sql = "SELECT * FROM pemesanan WHERE is_deleted = 0 ORDER BY created_at DESC";
$query = mysqli_query($db, $sql);

// Cek apakah ada data
if (mysqli_num_rows($query) == 0) {
    echo 'Tidak ada data pemesanan.';
    exit;
} else {
?>

    <main class="vh-100">
        <h1 class="py-5">Daftar Pemesanan</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Pemesan</th>
                    <th scope="col">Nomor HP</th>
                    <th scope="col">Tanggal Berangkat</th>
                    <th scope="col">Total Tagihan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $co = 1;
                // Loop untuk menampilkan data
                while ($detail = mysqli_fetch_assoc($query)) {
                ?>
                    <tr>
                        <th scope="row"><?= $co ?></th>
                        <td><?= htmlspecialchars($detail['nama_pemesanan']) ?></td>
                        <td><?= htmlspecialchars($detail['hp_pemesan']) ?></td>
                        <td><?= htmlspecialchars($detail['waktu_wisata']) ?></td>
                        <td><?= number_format($detail['total_tagihan'], 0, ',', '.') ?></td>
                        <td>
                            <a class="text-decoration-none fs-5"href="index.php?aksi=detail&id_pemesanan=<?= $detail['id_pemesanan'] ?>">Detail</a> |
                            <a class="text-decoration-none fs-5" href="index.php?aksi=hapus&id_pemesanan=<?= $detail['id_pemesanan'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                    $co++;
                }
                ?>
            </tbody>
        </table>
    </main>
<?php
}
?>