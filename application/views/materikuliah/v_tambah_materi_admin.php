<div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
              <h2><?php echo $panel_title; ?></h2>

              <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <div class="<?php echo $notif;?> alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <?php echo $error;?>
              </div>
              <br/>
              <?php echo form_open_multipart('Kelola_materi/tambah_materi_admin_proses', array('class'=>'form-horizontal form-label-left'));?>
              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Pertemuan</label>
                  <div class="col-md-3 col-sm-3 col-xs-8">
                      <select class="form-control" name="id_pertemuan">
                        <?php foreach ($pertemuan as $row): ?>
                          <option value="<?php echo $row->id_pertemuan;?>"><?php echo $row->pertemuan;?></option>
                        <?php endforeach; ?>
                      </select>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Dosen</label>
                  <div class="col-md-4 col-sm-4 col-xs-8">
                      <select class="form-control" name="id_dosen">
                        <?php foreach ($dosen as $row): ?>
                          <option value="<?php echo $row->id_dosen;?>"><?php echo $row->nama_dosen;?></option>
                        <?php endforeach; ?>
                      </select>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Matakuliah</label>
                  <div class="col-md-4 col-sm-4 col-xs-8">
                      <select class="form-control" name="id_matakuliah">
                        <?php foreach ($matkul as $row): ?>
                          <option value="<?php echo $row->id_matakuliah;?>"><?php echo $row->matakuliah;?></option>
                        <?php endforeach; ?>
                      </select>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Pilih File</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input class="btn btn-default" type="file" name="file" size="20" />
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="reset" class="btn btn-default">Cancel</button>
                  </div>
              </div>

              <?php  echo form_close() ;?>
          </div>
      </div>
      </div>
</div>
