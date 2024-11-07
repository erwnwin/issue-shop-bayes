         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
             <!-- Content Header (Page header) -->
             <section class="content-header">
                 <div class="container-fluid">
                     <div class="row mb-2">
                         <div class="col-sm-6">
                             <h1>Buat Prediksi / Perhitungan</h1>
                         </div>
                     </div>
                 </div><!-- /.container-fluid -->
             </section>

             <!-- Main content -->
             <section class="content">
                 <div class="container-fluid">


                     <div class="row">
                         <div class="col-lg-2">

                         </div>
                         <!-- ./col -->

                         <div class="col-lg-8 col-12">


                             <div class="card card-default">
                                 <div class="card-header">
                                     <h3 class="card-title">Form Prediksi Perhitungan Naive Bayes</span>
                                     </h3>
                                 </div>
                                 <div class="card-body p-0">
                                     <form action="<?= base_url('perhitungan/predict_by_date') ?>" method="POST">
                                         <div class="card-body">
                                             <div class="form-group row">
                                                 <label for="inputEmail3" class="col-sm-4 col-form-label" style="text-align: right;">Start Date</label>
                                                 <div class="col-sm-8">
                                                     <input type="date" class="form-control" id="start_date" name="start_date" required>
                                                 </div>
                                             </div>
                                             <div class="form-group row">
                                                 <label for="inputEmail3" class="col-sm-4 col-form-label" style="text-align: right;">End Date</label>
                                                 <div class="col-sm-8">
                                                     <input type="date" class="form-control" id="end_date" name="end_date" required>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="card-footer">
                                             <!-- <button type="submit" class="btn btn-info">Sign in</button> -->
                                             <button type="submit" class="btn btn-primaryku btn-sm float-right"
                                                 id="btnSimpanTeknisi">
                                                 <span id="btnLoader" style="display: none;">
                                                     <i class="fas fa-spinner fa-spin"></i>
                                                 </span>
                                                 Predict
                                             </button>
                                         </div>

                                         <!-- <button type="submit" class="btn btn-primaryku">Predict</button> -->
                                     </form>

                                 </div>
                             </div>

                         </div>

                         <div class="col-lg-2">

                         </div>
                     </div>

                 </div>
             </section>
             <div>
                 <br>
             </div>
         </div>