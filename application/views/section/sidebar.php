<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
      <a type="button" onclick="home()" class="nav-link <?php if ($this->uri->segment(1) == 'home') echo 'active' ?>">
        <i class="nav-icon fas fa-home"></i>
        <p>Halaman Utama</p>
      </a>
    </li>
    <li class="nav-item has-treeview <?php if ($this->uri->segment(1) == 'users') echo 'menu-open' ?>">
      <a type="button" class="nav-link <?php if ($this->uri->segment(1) == 'users') echo 'active' ?>">
        <i class="nav-icon fas fa-users"></i>
        <p>
          Master
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a type="button" onclick="pengguna()" class="nav-link <?php if (@$title == 'Pengguna') echo 'active' ?>">
            <i class="far fa-circle nav-icon"></i>
            <p>Pengguna</p>
          </a>
        </li>
        <li class="nav-item">
          <a type="button" onclick="administrator()" class="nav-link <?php if (@$title == 'Administrator') echo 'active' ?>">
            <i class="far fa-circle nav-icon"></i>
            <p>Administrator</p>
          </a>
        </li>
        <li class="nav-item">
          <a type="button" onclick="dosen()" class="nav-link <?php if (@$title == 'Dosen') echo 'active' ?>">
            <i class="far fa-circle nav-icon"></i>
            <p>Dosen</p>
          </a>
        </li>
        <li class="nav-item">
          <a type="button" onclick="mahasiswa()" class="nav-link <?php if (@$title == 'Mahasiswa') echo 'active' ?>">
            <i class="far fa-circle nav-icon"></i>
            <p>Mahasiswa</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item has-treeview <?php if ($this->uri->segment(1) == 'akademik') echo 'menu-open' ?>">
      <a type="button" class="nav-link <?php if ($this->uri->segment(1) == 'akademik') echo 'active' ?>">
        <i class="nav-icon fas fa-folder-open"></i>
        <p>Akademik<i class="right fas fa-angle-left"></i></p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a type="button" onclick="fakultas()" class="nav-link <?php if (@$title == 'Fakultas') echo 'active' ?>"><i class="far fa-circle nav-icon"></i>
            <p>Fakultas</p>
          </a>
        </li>
        <li class="nav-item">
          <a type="button" onclick="program_studi()" class="nav-link <?php if (@$title == 'Program Studi') echo 'active' ?>">
            <i class="far fa-circle nav-icon"></i>
            <p>Program Studi</p>
          </a>
        </li>
        <li class="nav-item">
          <a type="button" onclick="kelas()" class="nav-link <?php if (@$title == 'Kelas') echo 'active' ?>">
            <i class="far fa-circle nav-icon"></i>
            <p>Kelas</p>
          </a>
        </li>
        <li class="nav-item">
          <a type="button" onclick="mata_kuliah()" class="nav-link <?php if ($this->uri->segment(2) == 'matkul') echo 'active' ?>">
            <i class="far fa-circle nav-icon"></i>
            <p>Mata Kuliah</p>
          </a>
        </li>
        <li class="nav-item">
          <a type="button" onclick="kelas_matkul()" class="nav-link <?php if ($this->uri->segment(2) == 'kelasmatkul') echo 'active' ?>">
            <i class="far fa-circle nav-icon"></i>
            <p>Kelas Mata Kuliah</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a type="button" onclick="soal_ujian()" class="nav-link <?php if($this->uri->segment(1) == 'soalujian') echo 'active' ?>">
        <i class="nav-icon fas fa-question"></i>
        <p>Soal Ujian</p>
      </a>
    </li>
    <li class="nav-item">
      <a type="button" onclick="hasil_ujian()" class="nav-link">
        <i class="nav-icon fas fa-folder"></i>
        <p>Hasil Ujian</p>
      </a>
    </li>
    <li class="nav-item">
      <a type="button" onclick="logout()" class="nav-link" >
        <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>Keluar</p>
      </a>
    </li>
  </ul>
</nav>
<script src="<?= base_url(JS . 'sidebar.js') ?>"></script>