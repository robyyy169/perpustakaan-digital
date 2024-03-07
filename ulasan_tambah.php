<h1 class="mt-4">Ulasan Buku</h1>
<div class="card">
    <div class="card-body">        
<div class="row">
    <div class="col-md-12">
        <form method="post">
            <?php 
               if(isset ($_POST['submit'])) {
                $id_buku = $_POST['id_buku'];
                $id_user = $_SESSION['user']['id_user'];
                $ulasan = $_POST['ulasan'];
                $rating = $_POST['rating'];
                $query = mysqli_query($koneksi, "INSERT INTO ulasan(id_buku,id_user,ulasan,rating) values('$id_buku','$id_user','$ulasan','$rating')");

                if($query) {
                    echo '<script>alert("Tambah Data Berhasi");</script>';
                }else{
                    echo '<script>alert("Tambah Data Gagal");</script>';
                }
               }
            ?>
            <div class="row mb-3">
                <div class="col-md-2">Buku</div>
                <div class="col-md-8">
                    <select name="id_buku" class="from-control">
                        <?php 
                        $buk = mysqli_query($koneksi, "SELECT*FROM buku");
                        while($buku = mysqli_fetch_array($buk)) {
                            ?>
                            <option value="<?php echo $buku['id_buku']; ?>"><?php echo $buku['judul']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Ulasan </div>
                <div class="col-md-8">
                    <textarea name="ulasan" rows="5" class="from-control"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-5">Rating </div>
                <div class="col-md-8">
                    <select name="rating" class="from-control" >
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-mb-4"></div>
                <div class="col-mb-8">
                    <button type="submit" class="btn btn-primary" name="submit" value="submit">simpan</button>
                    <button type="reset" class="btn btn-secondary">reset</button>
                    <a href="?page=ulasan" class="btn btn-danger">kembali</a>
                </div>
            </div>
        </form>
    </div>
    
</div>
    </div>
</div>