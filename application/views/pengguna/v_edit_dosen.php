<div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
              <h2><?php echo $panel_title; ?></h2>

              <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <br>
              <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url();?>kelola_pengguna/edit_dosen_proses/<?php echo $this->uri->segment('3');?>">
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Dosen</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control" value="<?php echo $db->nama_dosen;?>" name="nama_dosen" placeholder="Nama Dosen" type="text">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">No Kontak</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control" value="<?php echo $db->kontak;?>" name="kontak" placeholder="" type="text">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" name="alamat"><?php echo $db->alamat;?></textarea>
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
