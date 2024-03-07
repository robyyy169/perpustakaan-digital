<?php
  
  include "koneksi.php";

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="21/css/style.css">

    </head>
    <body class="bg-secondary">
    <section class="ftco-section">
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Perpustakaan Digital</h2>
                </div>
            </div>
    
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                  <?php
                                         if(isset($_POST['register'])){
                                            $nama = $_POST['nama'];
                                            $email = $_POST['email'];
                                            $alamat = $_POST['alamat'];
                                            $no_telp = $_POST['no_telp'];
                                            $username = $_POST['username'];
                                            $level = $_POST['level'];
                                            $password = $_POST['password'];

                                            mysqli_query($koneksi,"SELECT*FROM user WHERE Username='$username'");
                                            $insert = mysqli_query($koneksi, "INSERT INTO user(nama,email,alamat,no_telp,username,password,level) VALUES('$nama','$email','$alamat','$no_telp','$username','$password','$level')");

                                            if($insert){
                                                echo '<script>alert("Selamat, Register anda berhasil. Silahkan Login"); location.href="Login.php"</script>';
                                            } else {
                                                echo '<script>alert("Register gagal, Silahkan ulangi kembali.");</script>';
                                            }
                                         }
                                        ?>
                                        <form method="post">
                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputusername" type="username" required name="username" placeholder="enter username" />
                                                <label for="inputusername">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                
                                                <input class="form-control" id="inputPassword" required name="password" type="password"  placeholder="Enter password" />
                                                <label for="inputPassword">Password</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control"  type="text" required name="email" placeholder="Masukan Email" />
                                                <label for="inputusername">Email</label>
                                            </div>
                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" required name="namalengkap" placeholder="Masukan nama Lengkap" />
                                                <label for="inputusername">Nama Lengkap</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                            <textarea name="alamat" rows="5" class="form-control"></textarea>
                                                <label for="inputusername">Alamat</label>
                                            </div>
                                            
                                            
                                            <div class="small mb-3">
                                                <label >Role</label>
                                                <select name="role" class="form-select py-4">
                                                    <option value="peminjam">Peminjam</option>
                                                    
                                                </select>
                                            </div>
                                                <button class="btn btn-primary" type="submit" name="register" value="register">Register</button>
                                                <a class="btn btn-danger" href="login.php">Kembali ke halaman login</a>
                                            </div>
                                        </form>
                                    </div>
              </div>
                </div>
            </div>
        </div>
    </section>

    <script src="21/js/"></script>
  <script src="21/js/popper.js"></script>
  <script src="21/js/bootstrap.min.js"></script>
  <script src="21/js/main.js"></script>

    </body>
</html>