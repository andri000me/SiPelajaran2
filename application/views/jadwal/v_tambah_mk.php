<div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
              <h2><?php echo $panel_title; ?></h2>

              <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <br>
              <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url();?>kelola_jadwal/tambah_mk_proses">
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Mata kuliah</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control" name="matakuliah" placeholder="Nama Mata kuliah" type="text">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Semester</label>
                      <div class="col-md-6 col-sm-6 col-xs-8">
                          <select class="form-control" name="id_semester">
                            <?php foreach ($semester as $row): ?>
                              <option value="<?php echo $row->id_semester ; ?>"><?php echo $row->semester ; ?></option>
                            <?php endforeach; ?>
                          </select>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Kredit Semester (SKS)</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control" name="sks" placeholder="SKS" type="text">
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
