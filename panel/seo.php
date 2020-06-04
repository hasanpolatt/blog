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
                    <label for="exampleInputEmail1">Site Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                           value="<?php echo $ayarcek['title'];?>">
                  </div>
                     <div class="form-group">
                    <label for="exampleInputEmail1">Site Keywords</label>
                    <input type="text" name="keyword" class="form-control" id="exampleInputEmail1"
                    value="<?php echo $ayarcek['keyword'] ?>">
                  </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Site Açıklaması</label>
                        <input type="text" name="description" class="form-control" id="exampleInputEmail1"
                        value="<?php echo $ayarcek['description'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Site Yazarı</label>
                        <input type="text" name="author" class="form-control" id="exampleInputEmail1"
                        value="<?php echo $ayarcek['author']?>">
                    </div>



                
            
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="seokaydet" class="btn btn-primary">Kaydet</button>
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