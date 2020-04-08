   <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url($user->foto); ?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="username" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $user->username; ?></div>
                    <div class="email"><?php echo $user->email; ?></div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="<?php echo base_url('c_admin/index'); ?>">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                    <li>
                        <a href="<?php echo base_url('c_prodi/index'); ?>">
                            <i class="material-icons">playlist_add_check</i>
                            <span>Program Studi</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('c_mahasiswa/index'); ?>">
                            <i class="material-icons">people</i>
                            <span>Mahasiswa</span>
                        </a>
                    </li>
                        <a href="<?php echo base_url('c_dosen/index'); ?>">
                            <i class="material-icons">person</i>
                            <span>Dosen</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('c_kelas/index'); ?>">
                            <i class="material-icons">room_service</i>
                            <span>Kelas</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('c_ruangan/index'); ?>">
                            <i class="material-icons">local_library</i>
                            <span>Ruangan</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('c_matkul/index'); ?>">
                            <i class="material-icons">book</i>
                            <span>Mata Kuliah</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('c_jadwal/index'); ?>">
                            <i class="material-icons">date_range</i>
                            <span>Jadwal</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('c_alat_peminjaman/index'); ?>">
                            <i class="material-icons">devices_other</i>
                            <span>Alat Peminjaman</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('c_users/index'); ?>">
                            <i class="material-icons">person_add</i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('c_profil/index'); ?>">
                            <i class="material-icons">account_box</i>
                            <span>Profil</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('/keluar'); ?>">
                            <i class="material-icons">logout</i>
                            <span>Keluar</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>