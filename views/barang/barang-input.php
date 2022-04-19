<div class="row">
    <div class="col-lg-12">
        <?php if (!empty($_SESSION['ADMIN'])) { ?>
            <div class="alert alert-warning mt-5 alert-dismissible fade show" role="alert">
                <strong>
                    <i class="fa fa-add"></i>
                    <a href="proses.php?aksi=barang_input">
                        Tambah Barang
                    </a>
                </strong>
            </div>
            <?php
            $hasil['nama'] = '';
            $hasil['harga'] = '';
            $hasil['jml_stok'] = '';
            if (!empty($_GET['kode_id'])) {
                $kode_id = strip_tags($_GET['kode_id']);

                $row = $koneksi->prepare('SELECT * FROM barang WHERE kode_barang = ?');
                $row->execute(array($kode_id));
                $count = $row->rowCount();

                if ($count > 0) {
                    $hasil = $row->fetch();
                }
            }

            ?>
            <div class="card mt-2">
                <div class="card-header">
                    Barang
                </div>
                <div class="card-body">
                    <form action="proses.php" method="POST">
                        <div class="form-group">
                            <label>Nama </label>
                            <input type="text" value="<?php echo $hasil['nama']; ?>" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" value="<?php echo $hasil['harga']; ?>" class="form-control" name="harga">
                        </div>
                        <div class="form-group">
                            <label>Jumlah Stok</label>
                            <input type="text" value="<?php echo $hasil['jml_stok']; ?>" class="form-control" name="jml_stok">
                        </div>
                        <button class="btn btn-primary btn-md" name="create"><i class="fa fa-edit"> </i> Save Data</button>
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