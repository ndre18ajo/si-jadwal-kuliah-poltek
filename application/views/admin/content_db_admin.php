    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <?php
                            $sql = $this->db->query("SELECT *FROM tb_prodi");
                            $jumlah = $sql->num_rows();
                            ?>
                            <div class="text">Program Studi</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumlah; ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">book</i>
                        </div>
                        <div class="content">
                            <?php
                            $sql = $this->db->query("SELECT *FROM tb_matkul");
                            $jumlah = $sql->num_rows();
                            ?>
                            <div class="text">Mata Kuliah</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumlah; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person</i>
                        </div>
                        <div class="content">
                            <?php
                            $sql = $this->db->query("SELECT *FROM tb_dosen");
                            $jumlah = $sql->num_rows();
                            ?>
                            <div class="text">Dosen</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumlah; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">people</i>
                        </div>
                        <div class="content">
                            <?php
                            $sql = $this->db->query("SELECT *FROM tb_mahasiswa");
                            $jumlah = $sql->num_rows();
                            ?>
                            <div class="text">Mahasiswa</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumlah; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">room_service</i>
                        </div>
                        <div class="content">
                            <?php
                            $sql = $this->db->query("SELECT *FROM tb_kelas");
                            $jumlah = $sql->num_rows();
                            ?>
                            <div class="text">Kelas</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumlah; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-brown hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">local_library</i>
                        </div>
                        <div class="content">
                            <?php
                            $sql = $this->db->query("SELECT *FROM tb_ruangan");
                            $jumlah = $sql->num_rows();
                            ?>
                            <div class="text">Ruangan</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumlah; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-teal hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">devices_other</i>
                        </div>
                        <div class="content">
                            <?php
                            $sql = $this->db->query("SELECT *FROM tb_alat_pinjaman");
                            $jumlah = $sql->num_rows();
                            ?>
                            <div class="text">Alat Peminjaman</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumlah; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">date_range</i>
                        </div>
                        <div class="content">
                            <?php
                            $sql = $this->db->query("SELECT *FROM tb_dosen");
                            $jumlah = $sql->num_rows();
                            ?>
                            <div class="text">Jadwal</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumlah; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-purple hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <?php
                            $sql = $this->db->query("SELECT *FROM tb_users");
                            $jumlah = $sql->num_rows();
                            ?>
                            <div class="text">Users</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumlah; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->

            <!-- isi nya  -->

            <!-- tutup isi -->
            </div>
        </div>
    </section>