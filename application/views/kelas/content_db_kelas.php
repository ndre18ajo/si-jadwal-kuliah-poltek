    <section class="content">
        <div class="container-fluid">
            <!-- isinya -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Kelas
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
									        <form action="<?php echo base_url('c_kelas/tambah');?>" method="post" role="form">
									        	
										        <div class="form-group">
										            <label for="nama_kelas" class="col-form-label">Nama Kelas :</label>
										            <input type="text" class="form-control" name="nama_kelas" placeholder="masukkan nama kelas" required>
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
                                            Data Kelas <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
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
                                            <th class="text-center">Nama Kelas</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $no=1; foreach($all as $row): ?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++; ?>.</td>
                                            <td><?php echo $row->nama_kelas; ?></td>
                                            <td>
                                            	<center>
                                            		<a data-toggle="modal" data-target="#modal-edit1<?=$row->id_kelas;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="material-icons">update</i></a>

                                                    <a data-toggle="modal" data-target="#modal-hapus<?=$row->id_kelas;?>" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="material-icons">delete</i></a>
                                            	</center>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                                <script>
                                  $(document).ready(function() {
                                        $('#example').DataTable();
                                    } );
                                </script>

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
              <div id="modal-hapus<?=$row->id_kelas;?>" class="modal fade">
                <div class="modal-dialog">
                  <form action="<?php echo site_url('c_kelas/hapus'); ?>" method="post">
                  <div class="modal-content">
                    <div class="modal-header bg-primary">
                      <h4 class="modal-title">Hapus Data</h4>
                    </div>
                    <div class="modal-body">

                      <input type="hidden" readonly value="<?php echo $row->id_kelas; ?>" name="id_kelas" class="form-control" >

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
              <div id="modal-edit1<?=$row->id_kelas;?>" class="modal fade">
                <div class="modal-dialog">
                  <form action="<?php echo site_url('c_kelas/edit'); ?>" method="post">
                  <div class="modal-content">
                    <div class="modal-header bg-primary">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">EDIT DATA</h4>
                    </div>
                    <div class="modal-body">
                      <!-- WAJIB PRIMARY KEY -->
                      <input type="hidden" readonly value="<?php echo $row->id_kelas; ?>" name="id_kelas" class="form-control" >
                      <!-- AKHIR PRIMARY KEY -->

                      <div class="form-group">
                        <label for="nama_kelas" class="col-form-label">Nama Kelas :</label>
                        <input type="text" class="form-control" autocomplete="on" name="nama_kelas" value="<?php echo $row->nama_kelas; ?>" required>
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