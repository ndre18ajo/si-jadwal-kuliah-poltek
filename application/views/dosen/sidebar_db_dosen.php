    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url('assets/'); ?>images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="username" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('username'); ?></div>
                    <div class="email"><?php echo $this->session->userdata('email'); ?></div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="<?php echo base_url('c_dosen/dashboard_dosen'); ?>">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('c_matkul/sidebar_dosen'); ?>">
                            <i class="material-icons">book</i>
                            <span>Mata Kuliah</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('/keluar'); ?>">
                            <i class="material-icons">logout</i>
                            <span>Keluar</span>
                        </a>
                    </li>
            </div>
        </aside>
    </section>