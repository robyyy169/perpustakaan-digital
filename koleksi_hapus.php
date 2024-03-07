<?php
$id = $_GET['id'];
$query
= mysqli_query($koneksi, "DELETE FROM koleksi_pribadi WHERE koleksiID=$id");
?>

<script>
    alert('Hapus Buku Berhasil');
    location.href = "index.php?page=koleksi_pribadi ";
</script>
