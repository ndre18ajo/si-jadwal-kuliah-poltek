<section class="content">
        <div class="container-fluid">
            <div class="row clearfix">

                <div class="col-xs-12 col-sm-3">
                    <div class="card profile-card">
                        <div class="profile-header">&nbsp;</div>
                        <div class="profile-body">
                            <div class="image-area">
                                <img src="<?php echo base_url('assets/foto_profil/user.png'); ?>"  alt="foto" />
                            </div>
                            <div class="content-area">
                                <h3>
                                    <div class="username" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('username'); ?></div>
                                </h3>
                                <p><div class="email"><?php echo $this->session->userdata('email'); ?></div></p>
                                <p><div class="col-pink"><?php echo $this->session->userdata('nama'); ?></div></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-9">
                    <!-- alert atau notifikasi jika berhasil diupdate -->
                    <?php if($this->session->flashdata('flash') ) : ?>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="alert bg-teal alert-dismissible">
                                    <?php echo $this->session->flashdata('flash'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!-- akhir alert -->

                    <!-- alert atau notifikasi jika berhasil ubah password -->
                    <?php if($this->session->flashdata('flash2') ) : ?>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="alert bg-teal alert-dismissible">
                                    <?php echo $this->session->flashdata('flash2'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            </div>
                        <?php endif; ?>
                    <!-- akhir alert -->

                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Edit Profil</a></li>
                                    <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Ganti Password</a></li>
                                </ul><br>

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="profile_settings">
                                        <div class="panel panel-default panel-post">
                                        <form class="form-horizontal" action="<?php echo base_url('c_profil/edit') ;?>" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label">Username</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $this->session->userdata('username'); ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $this->session->userdata('email'); ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="foto" class="col-sm-2 control-label">Foto</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <div class="custom-file">
                                                            <img src="<?php echo base_url('assets/foto_profil/user.png'); ?>" class="img-thumbnail"><br>
                                                            <input type="file" class="custom-file-input" id="foto" name="foto" for="foto">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </form> 
                                    </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                        <form class="form-horizontal" action="<?php echo base_url('c_profil/ganti_password'); ?>" method="post">
                                            <div class="form-group">
                                                <label for="password_lama" class="col-sm-3 control-label">Password Lama</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="password_lama" name="password_lama" placeholder="Password Lama" required>
                                                        <?php echo form_error('password_lama', '<small class="text-danger pl-3">','</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="password_baru" class="col-sm-3 control-label">Password Baru</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="password_baru" name="password_baru" placeholder="Password Baru" required>
                                                        <?php echo form_error('password_baru', '<small class="text-danger pl-3">','</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>