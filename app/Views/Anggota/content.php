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
              <table class="table ">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>KD Anggota</th>
                      <th>Nama Anggota</th>
                      <th>Foto Anggota</th>
                      <th>Status</th>
                      <th>Alamat</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   $no= 1. ;
                   foreach ($data_anggota as $r) {
                        
                      ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo  $r['kd_anggota']; ?></td>
                        <td><?php echo  $r['nama_anggota']; ?></td>
                        <td><?php echo  $r['foto_anggota']; ?></td>
                        <td><?php echo  $r['status']; ?></td>
                        <td><?php echo  $r['alamat']; ?></td>
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


