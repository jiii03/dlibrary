<link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
<link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<h2 style="text-align: center;">Laporan Peminjaman Buku</h2>
<table border="1" width="100%">
    <tr class="text-center">
        <th>No</th>
        <th>User</th>
        <th>Book</th>
        <th>Borrowing Date</th>
        <th>Return Date</th>
        <th>Status</th>
    </tr>
    <?php
    include('koneksi.php');
    $i = 1;
    $query = mysqli_query($koneksi, "SELECT * FROM peminjaman LEFT JOIN user on user.id_user = peminjaman.id_user LEFT JOIN buku on buku.id_buku = peminjaman.id_buku");
    while ($data = mysqli_fetch_array($query)) {
    ?>
        <tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['judul']; ?></td>
            <td><?php echo $data['tanggal_peminjaman']; ?></td>
            <td><?php echo $data['tanggal_pengembalian']; ?></td>
            <td><?php echo $data['status_peminjaman']; ?></td>
        </tr>
    <?php
    }
    ?>
</table>
<script>
    window.print();
    setTimeout(function() {
        window.close();
    });
</script>