<!-- menu prile quick info -->
<div class="profile">
    <div class="profile_pic">
        <img src="<?php echo base_url();?>assets/images/uploads/<?php echo $this->session->userdata('gambar'); ?>" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
        <span>Selamat Datang !</span>
        <h2><?php echo $this->session->userdata('nama_dosen'); ?></h2>
        <h2><?php echo $this->session->userdata('nama_mahasiswa'); ?></h2>
    </div>
</div>
<!-- /menu prile quick info -->
<br />
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3><?php echo $this->session->userdata('jabatan'); ?></h3>
        <br>
        <?php
              $jabatan = [ 1 => "Admin", "Dosen", "Mahasiswa" ];
              $hak_akses = $this->session->userdata('jabatan');
              if($hak_akses == $jabatan[1]) {
          ;?>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none">
                    <li><a href="index.html">Dashboard</a>
                    </li>
                </ul>
            </li>
            <li>
              <a href="<?php echo base_url();?>kelola_matakuliah/tampil_mk"><i class="fa fa-file"></i> Kelola Matakuliah</a>
            </li>
            <li>
              <a href="<?php echo base_url();?>kelola_materi/tampil_materi_admin"><i class="fa fa-book"></i> Materi Kuliah</a>
            </li>
            <li>
              <a href="<?php echo base_url();?>kelola_jadwal/tampil_jadwal"><i class="fa fa-calendar"></i> Kelola Jadwal</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-users"></i> Kelola Pengguna <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu" style="display: none">
                  <li><a href="<?php echo base_url();?>kelola_pengguna/tampil_dosen">Kelola Dosen</a></li>
                  <li><a href="<?php echo base_url();?>kelola_pengguna/tampil_mahasiswa">Kelola Mahasiswa</a></li>
              </ul>
            </li>
        </ul>

        <?php }

              if($hak_akses == $jabatan[2]) {
          ;?>

          <ul class="nav side-menu">
              <li>
                <a href="<?php echo base_url();?>kelola_materi/tampil_materi_dosen"><i class="fa fa-book"></i> Kelola Materi Kuliah</a>
              </li>
              <li>
              <a href="<?php echo base_url();?>kelola_jadwal/tampil_jadwal_dosen"><i class="fa fa-calendar"></i> Informasi Jadwal</span></a></li>
          </ul>
        <?php }
              if($hak_akses == $jabatan[3]) {
          ;?>
          <ul class="nav side-menu">
            <li>
              <a href="<?php echo base_url();?>kelola_materi/tampil_materi_mhs"><i class="fa fa-book"></i> Materi Kuliah</a>
            </li>
            <li>
              <a href="<?php echo base_url();?>kelola_jadwal/tampil_jadwal_mhs"><i class="fa fa-calendar"></i> Informasi Jadwal</span></a>
            </li>
          </ul>
        <?php } ;?>
    </div>

</div>
