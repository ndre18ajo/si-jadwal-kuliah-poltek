    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
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
            </div>
            <!-- #END# Widgets -->

            <!-- isi nya  -->

            <!-- tutup isi -->
            </div>
        </div>
    </section>