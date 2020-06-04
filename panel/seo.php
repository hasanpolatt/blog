<?php include 'layouts/nav.php' ?>
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
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Site başlığı giriniz..">
                  </div>
                     <div class="form-group">
                    <label for="exampleInputEmail1">Site Keywords</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Site keywords giriniz..">
                  </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Site Açıklaması</label>
                        <input type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="Site keywords giriniz..">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Site Yazarı</label>
                        <input type="text" name="author" class="form-control" id="exampleInputEmail1" placeholder="Site keywords giriniz..">
                    </div>



                
            
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="seokaydet" class="btn btn-primary">Kaydet</button>
                </div>
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