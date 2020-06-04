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
                    <label for="exampleInputEmail1">Telefon Numarası</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Site başlığı giriniz..">
                  </div>
                     <div class="form-group">
                    <label for="exampleInputEmail1">Mail Adresi</label>
                    <input type="number" name="mail" class="form-control" id="exampleInputEmail1" placeholder="Site keywords giriniz..">
                  </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Adres</label>
                        <input type="number" name="adress" class="form-control" id="exampleInputEmail1" placeholder="Site keywords giriniz..">
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