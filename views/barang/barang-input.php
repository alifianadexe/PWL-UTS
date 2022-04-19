<div class="row">
    <div class="col-lg-12">
        <?php if(!empty($_SESSION['ADMIN'])){?>
            <div class="alert alert-warning mt-5 alert-dismissible fade show" role="alert">
                <strong> 
                    <i class="fa fa-add"></i>
                    <a href="proses.php?aksi=barang_input">
                        Tambah Barang
                    </a>
                </strong> 
            </div>
            <div class="card mt-2">
                <div class="card-header">
                    Barang
                </div>
                <div class="card-body">
                     
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