<div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
              <h2><?php echo $panel_title; ?></h2>

              <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <br>
              <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url();?>kelola_pengguna/tambah_mahasiswa_proses">
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">NPM</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control" name="npm" placeholder="NPM" type="text">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Mahasiswa</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control" name="nama_mahasiswa" placeholder="Nama Mahasiswa" type="text">
                      </div>
                  </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control" name="username" placeholder="Username" type="text">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control" name="password" placeholder="Password" type="password">
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
