<?php include 'layouts/nav.php'?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <div align="right" class="col-md-12">

                               <a href="icerik-ekle.php" <button style="width: 100px; margin-top: 15px;" type="button"
                                                                 class="btn btn-block btn-success">Ekle</button></a>


                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>İçerik Tarihi</th>
                                    <th>İçerik Adı</th>
                                    <th>İçerik Resmi</th>
                                    <th>İçerik Detay</th>
                                    <th>İçerik Durumu</th>
                                    <th>Düzenle</th>
                                    <th>Sil</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                $iceriksor=$db->prepare("SELECT * FROM posts");
                                $iceriksor->execute();
                               
                                  $baseUrl = "http://localhost/uwu/blog/panel/";   
                           
                              while($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) {?>
                                
                                <tr>
                                    <td><?php echo $icerikcek['date'];  ?></td>
                                    <td><?php   echo $icerikcek['image_yol'];?></td>
                                    <td>
                                          <img height="100" width="100" src="<?php echo $icerikcek['image_yol']; ?>">

                                    </td>
                                    <td><?php echo $icerikcek['detail'] ?></td>
                                    <td></td>
                                    <td>
                                        <button style="width: 100px;" type="button" class="btn btn-block btn-primary">Düzenle</button>
                                    </td>
                                    <td>
                                        <button style="width: 60px;" type="button" class="btn btn-block btn-danger">Sil</button>
                                    </td>
                                </tr>
                                <?php } ?>


                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


<?php include 'layouts/footer.php' ?>
