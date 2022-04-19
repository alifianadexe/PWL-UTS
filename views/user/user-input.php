<div class="row">
    <div class="col-lg-12">
        <?php if (!empty($_SESSION['ADMIN'])) { ?>
            <div class="alert alert-warning mt-5 alert-dismissible fade show" role="alert">
                <strong>
                    <i class="fa fa-check"></i>
                    <a href="proses.php?aksi=user_input">
                        User Input
                    </a>
                </strong>
            </div>
            <div class="card mt-2">
                <div class="card-header">
                    User
                </div>
                <?php
                $pass = strip_tags($_POST['pass']);

                $row = $koneksi->prepare('SELECT * FROM user WHERE nama = ? AND password = md5(?)');
                $row->execute(array($user, $pass));
                $count = $row->rowCount();
                if ($count > 0) {
                    // buat sesi 
                    session_start();

                    $result = $row->fetch();
                    $_SESSION['ADMIN'] = $result;
                    // status yang diberikan 
                    echo "<script>window.location='index.php';</script>";
                }


                ?>
                <div class="card-body">
                    <form action="proses/crud.php?aksi_user=edit" method="POST">
                        <div class="form-group">
                            <label>Nama </label>
                            <input type="text" value="<?php echo $hasil['nama']; ?>" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" value="<?php echo $hasil['email']; ?>" class="form-control" name="harga">
                        </div>
                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="number" value="<?php echo $hasil['telp']; ?>" class="form-control" name="telp">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" value="<?php echo $hasil['password']; ?>" class="form-control" name="password">
                        </div>
                        <button class="btn btn-primary btn-md" name="create"><i class="fa fa-edit"> </i> Edit Data</button>
                    </form>
                </div>
            </div>
        <?php } else { ?>
            <div class="card mt-5">
                <div class="card-header">
                    Home
                </div>
                <div class="card-body">
                    <div class="alert alert-danger mt-2">
                        <h5> <i class="fa fa-ban"></i>
                            Maaf Anda Belum Dapat Akses Website,
                            Silahkan Login Terlebih Dahulu !
                        </h5>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>