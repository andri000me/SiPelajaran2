
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <form class="" action="<?php echo base_url();?>kelola_jadwal/tampil_jadwal_mhs/" method="post">
            <div class="form-group">
              <div class="col-md-2 col-sm-2 col-xs-8">
                <select class="form-control" name="id_hari">
                  <?php foreach ($hari as $row): ?>
                    <option value="<?php echo $row->id_hari ; ?>"><?php echo $row->hari ; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <button type="submit" class="btn btn-success">Lihat Jadwal</button>
            </div>
          </form>

          <h1>JADWAL MATAKULIAH</h1>

          <?php foreach ($db as $row): ?>

            <p><?php  echo $row->hari ;?> - <?php echo $row->jam;?> - <?php echo $row->matakuliah;?> - <?php echo $row->nama_dosen;?></p>

          <?php endforeach; ?>
        </div>
    </div>
</div>
