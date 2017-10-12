<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

          <h1>JADWAL MATAKULIAH</h1>

          <?php foreach ($db as $row): ?>

            <p><?php  echo $row->hari ;?> - <?php echo $row->jam;?> - <?php echo $row->matakuliah;?> - <?php echo $row->semester;?>
              ( <?php echo $row->kelas;?> )
              - <?php echo $row->nama_dosen;?></p>

          <?php endforeach; ?>
        </div>
    </div>
</div>
