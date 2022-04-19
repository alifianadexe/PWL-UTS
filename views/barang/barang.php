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
                <table>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Jumlah Stok</th>
                    </tr>
                    <?php 
                    $row = $koneksi->prepare('SELECT * FROM barang');
                    $row->execute(array($user,$pass));
                    $count = $row->rowCount();
                    if($count > 0)
                    {
                        while($row_data = $row->fetch()){
                ?>
                    <tr>
                        <td><?=$row_data['kode_barang']?></td>
                        <td><?=$row_data['nama']?></td>
                        <td><?=$row_data['harga']?></td>
                        <td><?=$row_data['gambar']?></td>
                        <td><?=$row_data['jumlah_stok']?></td>
                        <td><a href="proses.php?action=delete_barang&kode_id=<?=$row_data['kode_barang']?>">
                                Delete
                            </a>
                            <a href="proses.php?action=update_barang&kode_id=<?=$row_data['kode_barang']?>">
                                Edit
                            </a>
                        </td>
                        
                    </tr>
                    <?php 
                    }
                }
                    
                    ?>
                    </table> 
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