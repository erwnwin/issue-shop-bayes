         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
             <!-- Content Header (Page header) -->
             <section class="content-header">
                 <div class="container-fluid">
                     <div class="row mb-2">
                         <div class="col-sm-6">
                             <h1>Data Set / Penjualan</h1>
                         </div>
                     </div>
                 </div><!-- /.container-fluid -->
             </section>

             <!-- Main content -->
             <section class="content">
                 <div class="container-fluid">

                     <div class="card card-default">
                         <div class="card-header">
                             <div class="card-title">
                                 <form id="filterForm" method="get">
                                     <div class="input-group input-group-sm mb-3">
                                         <select id="bulan" name="bulan" class="form-control" required>
                                             <option value="">Pilih Bulan</option>
                                             <option value="1" <?= $bulan == 1 ? 'selected' : '' ?>>Januari</option>
                                             <option value="2" <?= $bulan == 2 ? 'selected' : '' ?>>Februari</option>
                                             <option value="3" <?= $bulan == 3 ? 'selected' : '' ?>>Maret</option>
                                             <option value="4" <?= $bulan == 4 ? 'selected' : '' ?>>April</option>
                                             <option value="5" <?= $bulan == 5 ? 'selected' : '' ?>>Mei</option>
                                             <option value="6" <?= $bulan == 6 ? 'selected' : '' ?>>Juni</option>
                                             <option value="7" <?= $bulan == 7 ? 'selected' : '' ?>>Juli</option>
                                             <option value="8" <?= $bulan == 8 ? 'selected' : '' ?>>Agustus</option>
                                             <option value="9" <?= $bulan == 9 ? 'selected' : '' ?>>September</option>
                                             <option value="10" <?= $bulan == 10 ? 'selected' : '' ?>>Oktober</option>
                                             <option value="11" <?= $bulan == 11 ? 'selected' : '' ?>>November</option>
                                             <option value="12" <?= $bulan == 12 ? 'selected' : '' ?>>Desember</option>
                                         </select>
                                         <input type="text" id="tahun" name="tahun" class="form-control" min="2000" max="2099" maxlength="4" value="<?= $tahun ?>">
                                         <div class="input-group-append">
                                             <button class="btn btn-primaryku" type="submit">
                                                 <i class="fas fa-search"></i> Filter
                                             </button>
                                         </div>
                                     </div>
                                 </form>
                             </div>


                             <div class="card-tools">
                                 <form id="uploadForm" method="post" enctype="multipart/form-data">
                                     <input type="file" name="uploaded_file" id="fileInput" class="form-control-file" accept=".csv, .xls, .xlsx" required>
                                 </form>

                                 <div id="progressContainer" style="display: none;">
                                     <p>Uploading... <span id="progressPercentage">0%</span></p>
                                     <progress id="progressBar" value="0" max="100" style="width: 100%;"></progress>
                                 </div>

                                 <a href="<?= base_url('data-set/sample') ?>" class="btn btn-sm btn-primaryku mt-2">Sample File</a>


                             </div>
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body">


                             <div id="filteredData">
                                 <div class="table-responsive">
                                     <table class="table">
                                         <thead>
                                             <tr>
                                                 <th>Kode Produk</th>
                                                 <th>Nama Brand</th>
                                                 <th>Harga Brand</th>
                                                 <th>Ukuran</th>
                                                 <th>Total Qty</th>
                                                 <th>Total Harga</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <?php if (!empty($results)): ?>
                                                 <?php foreach ($results as $row): ?>
                                                     <tr>
                                                         <td><?= htmlspecialchars($row->kode_produk); ?></td>
                                                         <td><?= htmlspecialchars($row->nama_brand); ?></td>
                                                         <td>Rp. <?= number_format($row->harga_brand, 2); ?></td>
                                                         <td><?= htmlspecialchars($row->ukuran); ?></td>
                                                         <td><?= htmlspecialchars($row->total_qty); ?></td>
                                                         <td>Rp. <?= number_format($row->total_harga, 2); ?></td>
                                                     </tr>
                                                 <?php endforeach; ?>
                                             <?php else: ?>
                                                 <tr>
                                                     <td colspan="6" class="text-center">Tidak ada data untuk bulan dan tahun yang dipilih.</td>
                                                 </tr>
                                             <?php endif; ?>
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                         </div>


                     </div>
              
             </section>
             <div>
                 <br>
             </div>
         </div>