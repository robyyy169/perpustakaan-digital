<?php 
        $i = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM koleksi_pribadi LEFT JOIN user on user.id_user = koleksi_pribadi.userID LEFT JOIN buku on buku.id_buku = koleksi_pribadi.BukuID LEFT JOIN kategori on kategori.id_kategori = buku.id_kategori");

        $row = [];
        while($result = mysqli_fetch_array($query)){
          $row[] = $result;
        }
      
?>

<h1 class="mt-4">Koleksi Pribadi</h1>
<div class="card">
  <div class="card-body">
    
<div class="row">
    <div class="col-md-12">
      <a href="?page=koleksi_tambah" class="btn btn-primary">+ Tambah Data</a>
      <table class="table table-bordered">
        <tr>
            <th>no</th>
            <th>Nama Kategori</th>
            <th>Judul</th>
            <th>Aksi</th>

        </tr>
        <?php foreach($row as $item) : ?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
            <tr> 
                <td><?php echo $i++; ?></td>
                <td><?php echo $item['kategori']; ?></td>
                <td><?php echo $item['judul']; ?></td>
                <td>

                    <a href="?page=buku_ubah&&id=<?php echo $item['id_buku']; ?>" class="btn btn-info">ubah</a>
                    <a onclick="return confirm('Apakah Anda Yakin Menghapus Buku Ini?');" href="?page=koleksi_hapus&&id=<?php echo $item['koleksiID']; ?>" class="btn btn-danger">hapus</a>
                </td> 
            </tr>  
          <?php endforeach;?>
            
      </table>
    </div>
    
</div>
  </div>
</div>