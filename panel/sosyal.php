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
                    <label for="exampleInputEmail1">Instagram</label>
                    <input type="text" name="instagram" class="form-control" id="exampleInputEmail1" placeholder="Site başlığı giriniz..">
                  </div>
                     <div class="form-group">
                    <label for="exampleInputEmail1">Facebook</label>
                    <input type="text" name="facebook" class="form-control" id="exampleInputEmail1" placeholder="Site keywords giriniz..">
                  </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Twitter</label>
                        <input type="text" name="twitter" class="form-control" id="exampleInputEmail1" placeholder="Site keywords giriniz..">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Google</label>
                        <input type="text" name="google" class="form-control" id="exampleInputEmail1" placeholder="Site keywords giriniz..">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Linkedin</label>
                        <input type="text" name="linkedin" class="form-control" id="exampleInputEmail1" placeholder="Site keywords giriniz..">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Github</label>
                        <input type="text" name="github" class="form-control" id="exampleInputEmail1" placeholder="Site keywords giriniz..">
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