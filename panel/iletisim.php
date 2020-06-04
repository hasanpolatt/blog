<?php include 'layouts/nav.php';

 $ayarsor=$db->prepare("SELECT * FROM ayar where id=1");
  $ayarsor->execute(array(0));
  $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC); ?>
    ?>
<?php
    if(isset($_GET['status'])=='ok'){ ?>
        <script> Swal.fire(
                'Islem Basarili',
                ' ',
                'success'
            )
        </script>
    <?php }
    elseif(isset($_GET['status'])=='fail'){ ?>
        <script>  Swal.fire({
                icon: 'error',
                title: 'Hataa',
                text: 'Islem Gerçekleştirilemedi..',
            })
        </script>

    <?php } ?>


?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
         <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">SEO Ayarları</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form action="func/func.php" method="POST">

                <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Telefon Numarasıı</label>
                    <input type="number" name="phone" class="form-control" id="exampleInputEmail1"
                           value="<?php echo $ayarcek['phone'] ?>">
                  </div>
                     <div class="form-group">
                    <label for="exampleInputEmail1">Mail Adresi</label>
                    <input type="mail" name="mail" class="form-control" id="exampleInputEmail1"
                           value="<?php echo $ayarcek['mail'] ?>">
                  </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Adres</label>
                        <input type="text" name="address" class="form-control"
                               id="exampleInputEmail1"
                               value="<?php echo $ayarcek['address'] ?>">
                    </div>

                
            
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="iletisimkaydet" class="btn btn-primary">Kaydet</button>
                </div>
              </form>
                </form>
            </div>
        </div>
    </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php include 'layouts/footer.php' ?>