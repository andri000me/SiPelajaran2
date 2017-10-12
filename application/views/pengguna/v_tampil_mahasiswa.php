
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <a class="btn btn-primary" href="<?php echo base_url();?>kelola_pengguna/tambah_mahasiswa">Tambah</a>
            <div class="x_title">
                <h2><?php echo $panel_title; ; ?></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="example" class="table table-striped responsive-utilities jambo_table">
                    <thead>
                        <tr class="headings">
                            <th>No </th>
                            <th>NPM </th>
                            <th>Nama </th>
                            <th width="16%">Aksi </th>
                        </tr>
                    </thead>

                    <tbody>
                      <?php
                        $no = 1;
                       foreach ($db as $row): ?>
                        <tr class="even pointer">
                          <td clcass=" "><?php  echo $no++ ;?></td>
                          <td class=" "><?php echo $row->npm ;?></td>
                          <td class=" "><?php echo $row->nama_mahasiswa ;?></td>
                          <td class=" ">
                            <a class="btn btn-info" href="<?php echo base_url();?>kelola_pengguna/edit_mahasiswa/<?php echo $row->id_mahasiswa;?>">Edit</a>
                            <a class="btn btn-danger" onclick="return hapus()" href="<?php echo base_url();?>kelola_pengguna/hapus_mahasiswa/<?php echo $row->id_mahasiswa;?>">Hapus</a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <br />
    <br />
    <br />

</div>
