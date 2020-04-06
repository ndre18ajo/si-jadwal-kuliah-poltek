    <section class="content">
        <div class="container-fluid">
            <!-- isinya -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Users
                            </h2>
                        </div><br>
                        <div class="container">
                        	<div class="row">
                        		<div class="col-md-6">
									<button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#modal-tambah">
									  <i class="material-icons">add</i>
                                    	<span>Tambah Data</span>
									</button>

									<!-- Modal Tambah -->
									<div id="modal-tambah" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header bg-primary">
									      	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
									      </div>
									      <div class="modal-body">
                                            <?php if(validation_errors()) : ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?php echo validation_errors(); ?>
                                                </div>
                                            <?php endif; ?>
									        <form action="<?php echo base_url('c_users/tambah');?>" method="post" role="form">
									        	
										        <div class="form-group">
										            <label for="username" class="col-form-label">Username :</label>
										            <input type="text" class="form-control" name="username" id="username" placeholder="masukkan username" required>
										        </div>
										        <div class="form-group">
										            <label for="nama" class="col-form-label">Nama :</label>
										            <input type="text" class="form-control" name="nama" id="nama" placeholder="masukkan nama" required>
										        </div>
										        <div class="form-group">
										            <label for="email" class="col-form-label">Email :</label>
										            <input type="text" class="form-control" name="email" id="email" placeholder="masukkan email" required>
										        </div>
										        <div class="form-group">
										            <label for="password" class="col-form-label">Password :</label>
										            <input type="text" class="form-control" name="password" id="password" placeholder="masukkan password" required>
										        </div>
										        <div class="form-group">
                              <label for="level" class='col-form-label'>Level :</label><br>
                                <select name="level" class="custom-select mr-sm-2" id="level" required="">
                                  <option value="Pilih">Pilih</option>
                                  <option value="Admin">Admin</option>
                                  <option value="Dosen">Dosen</option>
                                  <option value="Mahasiswa">Mahasiswa</option>
                                </select>
                            </div>
										        
										        <div class="modal-footer">
										        	<button type="reset" class="btn btn-danger">RESET</button>
										        	<button type="submit" name="#modal-tambah" class="btn btn-primary">TAMBAH</button>
										      	</div>
									        </form>
									      </div>
									    </div>
									  </div>
									</div>
                                    <!-- Akhir Modal Tambah -->

                        		</div>
                        	</div>
                    	</div><br>

                        <!-- alert atau notifikasi jika berhasil ditambahkan -->
                        <div class="container">
                            <?php if($this->session->flashdata('flash') ) : ?>
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="alert bg-teal alert-dismissible">
                                            Data Users <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!-- akhir alert -->

                        <!-- isi table -->
                        <div class="body">
                            <div class="table-responsive">
                                <table id="dataTables-example" class="display table table-bordered table-striped table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                        	<th class="text-center">No.</th>
                                            <th class="text-center">Username</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Password</th>
                                            <th class="text-center">Level</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $no=1; foreach($all as $row): ?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++; ?>.</td>
                                            <td><?php echo $row->username; ?></td>
                                            <td><?php echo $row->nama; ?></td>
                                            <td><?php echo $row->email; ?></td>
                                            <td><?php echo $row->password; ?></td>
                                            <td><?php echo $row->level; ?></td>
                                            <td>
                                            	<center>
                                            		<a data-toggle="modal" data-target="#modal-edit1<?=$row->id_users;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="material-icons">update</i></a>

                                                    <a data-toggle="modal" data-target="#modal-hapus<?=$row->id_users;?>" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="material-icons">delete</i></a>
                                            	</center>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <!-- akhir isi table -->
                    </div>
                </div>
            </div>
            <!-- akhir isi -->

            <!-- modal hapus data -->
            <?php $no=0; foreach($all as $row):  ?>
            <div class="row">
              <div id="modal-hapus<?=$row->id_users;?>" class="modal fade">
                <div class="modal-dialog">
                  <form action="<?php echo site_url('c_users/hapus'); ?>" method="post">
                  <div class="modal-content">
                    <div class="modal-header bg-primary">
                      <h4 class="modal-title">Hapus Data</h4>
                    </div>
                    <div class="modal-body">

                      <input type="hidden" readonly value="<?php echo $row->id_users; ?>" name="id_users" class="form-control" >

                      <div class="form-group">
                        <div class='col-md-9'><h4>Apakah Anda Yakin Ingin Menghapus Data ini?</h4></div>
                      </div>
                      <br>
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                      </div>
                    </form>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- akhir modal hapus data -->

            <!-- modal ubah -->
            <?php $no=0; foreach($all as $row):  ?>
            <div class="row">
              <div id="modal-edit1<?=$row->id_users;?>" class="modal fade">
                <div class="modal-dialog">
                  <form action="<?php echo site_url('c_users/edit'); ?>" method="post">
                  <div class="modal-content">
                    <div class="modal-header bg-primary">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">EDIT DATA</h4>
                    </div>
                    <div class="modal-body">
                      <!-- WAJIB PRIMARY KEY -->
                      <input type="hidden" readonly value="<?php echo $row->id_users; ?>" name="id_users" class="form-control" >
                      <!-- AKHIR PRIMARY KEY -->

                      <div class="form-group">
                        <label for="username" class="col-form-label">Username :</label>
                        <input type="text" class="form-control" autocomplete="on" name="username" id="username" value="<?php echo $row->username; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="nama" class="col-form-label">Nama :</label>
                        <input type="text" class="form-control" autocomplete="on" name="nama" id="nama" value="<?php echo $row->nama; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="email" class="col-form-label">Email :</label>
                        <input type="text" class="form-control" autocomplete="on" name="email" id="email" value="<?php echo $row->email; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="password" class="col-form-label">Password :</label>
                        <input type="text" class="form-control" autocomplete="on" name="password" id="password" value="<?php echo $row->password; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="level" class="col-form-label">Level :</label><br>
                          <select name="level" class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
                            <option value="<?php echo $row->level; ?>" hidden><?php echo $row->level; ?></option>
                            <option value="Admin">Admin</option>
                            <option value="Dosen">Dosen</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                          </select>
                      </div>
                  
                    </div>
                    <br><br><br>
                      <div class="modal-footer">
                        <button type="reset" class="btn btn-danger">RESET</button>
                        <button type="submit" class="btn btn-warning">EDIT</button>
                      </div>
                    </form>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- akhir modal ubah -->

        </div>
    </section>