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
                <form action="<?php echo $action; ?>" method="post">
                    <div class="card-body">
                        <?php if (validation_errors()) {
                            ?>
                              <div class="alert alert-danger alert-dismissible">
                                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                 <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                                 <?php echo validation_list_errors() ?>
                            </div>
                        <?php
                        }
                        ?>

                        <?php
                        if(session()->getFlashdata('error')){
                        ?>
                            <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <h5><i class="icon fas fa-warning"></i> Error</h5>
                                        <?php echo session()->getFlashdata('error'); ?>
                                    </div>
                        <?php   
                        }
                        ?>              
                        <?php echo csrf_field() ?>
                        <?php
                        if(current_url(true)->getSegment(2) =='edit'){
                            ?>
                            <input type="hidden" name="param" id="param" value="<?php echo $edit_data['kdpetugas']; ?>">
                            <?php
                        }
                        ?>
                    <div class="form-group">
                        <label for="kdpetugas">Kode Petugas</label>
                        <input type="text" name="kdpetugas" id="kdpetugas" value="<?php echo empty(set_value('kdpetugas')) ?(empty($edit_data['kdpetugas']) ? "" : $edit_data['kdpetugas']) : set_value('kdpetugas');?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="namapetugas">Nama Petugas</label>
                        <input type="text" name="nama_petugas" id="nama_petugas" value="<?php echo empty(set_value('nama_petugas')) ?(empty($edit_data['nama_petugas']) ? "" : $edit_data['nama_petugas']) : set_value('nama_petugas');?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" name="jabatan" id="jabatan" value="<?php echo empty(set_value('jabatan')) ?(empty($edit_data['jabatan']) ? "" : $edit_data['jabatan']) : set_value('jabatan');?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" value="" class="form-control">
                    </div>
                <div>
               
                  <button type="submit" class="btn btn-primary"><i class="fa-solid fa-save"></i>Simpan</button>
               
                </form>
            </div>
        </div>
</div>
<?php
echo $this->endSection();