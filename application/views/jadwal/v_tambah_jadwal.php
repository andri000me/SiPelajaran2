<div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
              <h2><?php echo $panel_title; ?></h2>

              <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <br>
              <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url();?>kelola_jadwal/tambah_jadwal_proses">
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Pukul</label>
                      <div class="col-md-2 col-sm-2 col-xs-8">
                          <input class="form-control jam" id="jam" name="jam" placeholder="00:00:00" type="text">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Hari</label>
                    <div class="col-md-2 col-sm-2 col-xs-8">
                      <select class="form-control" name="id_hari">
                        <?php foreach ($hari as $row): ?>
                          <option value="<?php echo $row->id_hari ; ?>"><?php echo $row->hari ; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Matakuliah</label>
                      <div class="col-md-6 col-sm-6 col-xs-8">
                          <select class="form-control" name="id_matakuliah">
                            <?php foreach ($matkul as $row): ?>
                              <option value="<?php echo $row->id_matakuliah ; ?>"><?php echo $row->matakuliah ; ?></option>
                            <?php endforeach; ?>
                          </select>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Dosen</label>
                      <div class="col-md-2 col-sm-2 col-xs-8">
                          <select class="form-control" name="id_dosen">
                            <?php foreach ($dosen as $row): ?>
                              <option value="<?php echo $row->id_dosen ; ?>"><?php echo $row->nama_dosen ; ?></option>
                            <?php endforeach; ?>
                          </select>
                      </div>
                  </div>


                  <div class="ln_solid"></div>
                  <div class="form-group">
                      <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="reset" class="btn btn-default">Cancel</button>
                      </div>
                  </div>

              </form>
          </div>
      </div>
      </div>
</div>
