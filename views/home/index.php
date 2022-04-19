<div class="row">
    <div class="col-lg-12">
        <?php if(!empty($_SESSION['ADMIN'])){?>
            <div class="alert alert-warning mt-5 alert-dismissible fade show" role="alert">
                <strong> 
                    <i class="fa fa-check"></i>
                    Selamat Datang, 
                    <?php echo $_SESSION['ADMIN']['nama'];?>
                </strong> 
            </div>
            <div class="card mt-2">
                <div class="card-header">
                    Dashboard
                </div>
                <div class="card-body">
                    <ul class="navbar-nav ml-auto">
                        <li><a class="nav-link" href="index.php?hal=barang&file=barang">Produk</a</li>
                        
                        <li><a class="nav-link" href="index.php?hal=user&file=user">User</a></li>
                    </ul>
                </div>
            </div>
        <?php }else{?>
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
        <?php }?>
    </div>
</div>