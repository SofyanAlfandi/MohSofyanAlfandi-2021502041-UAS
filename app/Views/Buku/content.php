<?php
echo $this->extend('template/index');
echo $this->section('content');
?>
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?php echo $title_card; ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <table class="table">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Kd Buku</th>
                  <th>Judul Buku</th>
                  <th>Pengarang</th>
                  <th>Penerbit</th>
                  <th>Tahun Terbit</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($data_buku as $r) {
                 ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $r['kdbuku']; ?></td>
                      <td><?php echo $r['judul_buku']; ?></td>
                      <td><?php echo $r['pengarang']; ?></td>
                      <td><?php echo $r['penerbit']; ?></td>
                      <td><?php echo $r['tahun_terbit']; ?></td>
                    </tr>
                 <?php
                 $no++;
                }
                ?>
              </tbody>
             </table>
              </div>
              <!-- /.card-body -->            
            </div>
            <!-- /.card -->
        </div>
</div>
<?php
echo $this->endSection();

