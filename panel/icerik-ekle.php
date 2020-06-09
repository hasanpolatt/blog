    <?php include 'layouts/nav.php' ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <!-- left column                -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">İçerik Ekle</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form action="func/func.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group col-md-8">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="image_yol" type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group col-md-8">
                                <label>Tarih ve Saat</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input name="date" type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group col-md-8">
                                <label>İçerik Adı</label>
                                <input name="title" type="text" class="form-control" placeholder="Yaz...">
                            </div>


                            <div class="form-group-lg col-md-8">
                                <label>İçerik</label>
                                <!-- tools box -->

                                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                            title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                            title="Remove">
                                        <i class="fas fa-times"></i></button>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body pad">
                                <div class="col-md-8">
                    <textarea name="detail" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                    </div>


                            <div class="form-group col-md-8">
                                <label>İçerik Keywords</label>
                                <input name="keyword" type="text" class="form-control" placeholder="Yaz...">
                            </div>
                            <div class="form-group col-md-8">
                                <label>İçerik Durumu</label>
                                <input name="status"  type="text" class="form-control" placeholder="Yaz...">
                            </div>
                            <div class="form-group col-md-8">
                            <button type="submit" name="icerikekle" class="btn btn-primary">Kaydet</button>
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
