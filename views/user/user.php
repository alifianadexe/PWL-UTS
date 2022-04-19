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
                    User
                </div>
                <div class="card-body">
                <table>
                    <tr>
                        <th>Kode User</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Telpon</th>
                        <th>Aksi</th>
                    </tr>
                    <?php 
                    $row = $koneksi->prepare('SELECT * FROM user');
                    $row->execute(array($user,$pass));
                    $count = $row->rowCount();
                    if($count > 0)
                    {
                        while($row_data = $row->fetch()){
                ?>
                    <tr>
                        <td><?=$row_data['kode_user']?></td>
                        <td><?=$row_data['nama']?></td>
                        <td><?=$row_data['email']?></td>
                        <td><?=$row_data['telp']?></td>
                        <td><a href="proses.php?aksi=delete_user&kode_id=<?=$row_data['kode_user']?>">
                                Delete
                            </a>
                            <a href="proses.php?aksi=update_user&kode_id=<?=$row_data['kode_user']?>">
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