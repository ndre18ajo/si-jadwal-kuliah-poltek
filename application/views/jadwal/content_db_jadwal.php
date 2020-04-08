<section class="content">
  <div class="container-fluid">
      <!-- isinya -->
    <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="header">
            <h2>
              Jadwal Kuliah
            </h2>
          </div><br>
          <div class="container">
            <div class="row clearfix">
              <div class="col-md-6">
                <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#modal-tambah"><i class="material-icons">add</i><span>Tambah Data</span></button>            
                <div id="modal-tambah" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
                      </div>
                      <div class="modal-body">
                        <form action="<?php echo base_url('c_jadwal/tambah');?>"  method="post" role="form">

                          <div class="form-group">
                              <label class="col-form-label">Kode Matkul</label>
                              <select class="form-control" name="id_matkul">
                                <option value="">Pilih Salah Satu</option>
                                <?php foreach ($matkul as $key => $value) : ?>
                                <option data-matkul='<?=json_encode($value)?>' value="<?=$value->id_matkul?>"><?=$value->kode_matkul?></option>
                                <?php endforeach; ?>
                              </select>
                          </div>
                          <div class="form-group">
                              <label class="col-form-label">Nama Matkul</label>
                              <input type="text" class="form-control" name="nama_matkul"  placeholder="masukkan Nama Matkul" required>
                          </div>
                          <div class="form-group">
                              <label class="col-form-label">Sks</label>
                              <input type="text" class="form-control" name="sks"  placeholder="masukkan Sks" required>
                          </div>
                          <div class="form-group">
                              <label class="col-form-label">Semester</label>
                              <input type="text" class="form-control" name="semester"  placeholder="masukkan Semester" required>
                          </div>
                          <div class="form-group">
                              <label class="col-form-label">Tingkat</label>
                              <input type="text" class="form-control" name="tingkat"  placeholder="masukkan Tingkat" required>
                          </div>
                          <div class="form-group">
                              <label class="col-form-label">Tahun Akademik</label>
                              <input type="text" class="form-control" name="tahun_akademik"  placeholder="masukkan Tahun Akademik" required>
                          </div>
                          <div class="form-group">
                              <label class="col-form-label">Waktu</label>
                              <input type="text" class="form-control" name="waktu"  placeholder="masukkan Waktu" required>
                          </div>

                           <div class="form-group">
                              <label class="col-form-label">Kelas</label>
                              <select required="" class="form-control" name="id_kelas">
                                <option value="">Pilih Salah Satu</option>
                                <?php foreach ($kelas as $key => $value) : ?>
                                <option value="<?=$value->id_kelas?>"><?=$value->nama_kelas?></option>
                                <?php endforeach; ?>
                              </select>
                          </div>

                          <div class="form-group">
                              <label class="col-form-label">Hari</label>
                              <select required="" class="form-control" name="hari">
                                <option value="senin">Senin</option>
                                <option value="selasa">Selasa</option>
                                <option value="rabu">Rabu</option>
                                <option value="kamis">Kamis</option>
                                <option value="jumat">Jumat</option>
                                <option value="sabtu">Sabtu</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label class="col-form-label">Dosen1</label>
                              <select required="" class="form-control" name="id_dosen1">
                                <option value="">Pilih Salah Satu</option>
                                <?php foreach ($dosen as $key => $value) : ?>
                                <option value="<?=$value->id_dosen?>"><?=$value->nama_dosen?></option>
                                <?php endforeach; ?>
                              </select>
                          </div>
                          <div class="form-group">
                              <label class="col-form-label">Dosen2</label>
                               <select required="" class="form-control" name="id_dosen2">
                                <option value="">Pilih Salah Satu</option>
                                <?php foreach ($dosen as $key => $value) : ?>
                                <option value="<?=$value->id_dosen?>"><?=$value->nama_dosen?></option>
                                <?php endforeach; ?>
                              </select>
                          </div>
                          <div class="form-group">
                              <label class="col-form-label">Koordinator</label>
                              <select required="" class="form-control" name="id_dosen_koordinator">
                                <option value="">Pilih Salah Satu</option>
                                <?php foreach ($dosen as $key => $value) : ?>
                                <option value="<?=$value->id_dosen?>"><?=$value->nama_dosen?></option>
                                <?php endforeach; ?>
                              </select>
                          </div>
                          <div class="form-group">
                              <label class="col-form-label">Prodi</label>
                              <select required="" class="form-control" name="id_prodi">
                                <option value="">Pilih Salah Satu</option>
                                <?php foreach ($prodi as $key => $value) : ?>
                                <option value="<?=$value->id_prodi?>"><?=$value->prodi?></option>
                                <?php endforeach; ?>
                              </select>
                          </div>
                          <div class="form-group">
                              <label class="col-form-label">Kode Ruangan</label>
                              <select required="" class="form-control" name="id_ruangan">
                                <option value="">Pilih Salah Satu</option>
                                <?php foreach ($ruangan as $key => $value) : ?>
                                <option value="<?=$value->id_ruangan?>"><?=$value->kode_ruangan?></option>
                                <?php endforeach; ?>
                              </select>
                          </div>
                          <div class="form-group">
                              <label class="col-form-label">Nama Alat</label>
                              <select required="" class="form-control" name="id_alat">
                                <option value="">Pilih Salah Satu</option>
                                <?php foreach ($alat as $key => $value) : ?>
                                <option value="<?=$value->id_alat?>"><?=$value->nama_alat?></option>
                                <?php endforeach; ?>
                              </select>
                          </div>
      
                          <div class="form-group">
                              <label class="col-form-label">Teori</label>
                              <input type="text" class="form-control" name="teori"  placeholder="masukkan Teori" required>
                          </div>
                          <div class="form-group">
                              <label class="col-form-label">Praktik</label>
                              <input type="text" class="form-control" name="praktik"  placeholder="masukkan Praktik" required>
                          </div>
                          <div class="form-group">
                              <label class="col-form-label">Klinik</label>
                              <input type="text" class="form-control" name="klinik"  placeholder="masukkan Klinik" required>
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
              </div>
            </div>
          </div>

          <div class="container">
            <?php if($this->session->flashdata('flash') ) : ?>
              <div class="row">
                <div class="col-md-9">
                    <div class="alert bg-teal alert-dismissible">
                      Jadwal Kuliah <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                </div>
              </div>
            <?php endif; ?>   
          </div>

          <div class="body">
            <div class="table-responsive">
              <table id="dataTables-example" class="table table-bordered table-striped table-hover" style="width:100%">
                  <thead>
                      <tr>
                        <th class="text-center">No.</th>
                          <th class="text-center">Kode Matkul</th>
                          <th class="text-center">Nama Matkul</th>
                          <th class="text-center">Sks</th>
                          <th class="text-center">Semester</th>
                          <th class="text-center">Tingkat</th>
                          <th class="text-center">Waktu</th>
                          <th class="text-center">Hari</th>
                          <th class="text-center">Dosen1</th>
                          <th class="text-center">Dosen2</th>
                          <th class="text-center">Koordinator</th>
                          <th class="text-center">Prodi</th>
                          <th class="text-center">Kode Ruangan</th>
                          <th class="text-center">Nama Alat</th>
                          <th class="text-center">Tahun Akademik</th>
                          <th class="text-center">Teori</th>
                          <th class="text-center">Praktik</th>
                          <th class="text-center">Klinik</th>
                          <th class="text-center">Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach($all as $row): ?>
                      <tr>
                          <td class="text-center"><?php echo $no++; ?>.</td>
                          <td><?php echo $row->kode_matkul; ?></td>
                          <td><?php echo $row->nama_matkul; ?></td>
                          <td><?php echo $row->sks; ?></td>
                          <td><?php echo $row->semester; ?></td>
                          <td><?php echo $row->tingkat; ?></td>
                          <td><?php echo $row->waktu; ?></td>
                          <td><?php echo $row->hari; ?></td>
                          <td><?php echo $row->dosen1; ?></td>
                          <td><?php echo $row->dosen2; ?></td>
                          <td><?php echo $row->koordinator; ?></td>
                          <td><?php echo $row->prodi; ?></td>
                          <td><?php echo $row->kode_ruangan; ?></td>
                          <td><?php echo $row->nama_alat; ?></td>
                          <td><?php echo $row->tahun_akademik; ?></td>
                          <td><?php echo $row->teori; ?></td>
                          <td><?php echo $row->praktik; ?></td>
                          <td><?php echo $row->klinik; ?></td>
                          <td>
                            <center>
                              <a data-toggle="modal" data-target="#modal-edit1<?=$row->id_jadwal;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="material-icons">update</i></a>

                                  <a data-toggle="modal" data-target="#modal-hapus<?=$row->id_jadwal;?>" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="material-icons">delete</i></a>
                            </center>
                          </td>
                      </tr>
                      <?php endforeach; ?>
                  </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>


  <!-- modal hapus data -->
      <?php $no=0; foreach($all as $row):  ?>
      <div class="row">
        <div id="modal-hapus<?=$row->id_jadwal;?>" class="modal fade">
          <div class="modal-dialog">
            <form action="<?php echo site_url('c_jadwal/hapus'); ?>" method="post">
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <h4 class="modal-title">Hapus Data</h4>
              </div>
              <div class="modal-body">

                <input type="hidden" readonly value="<?php echo $row->id_jadwal; ?>" name="id_jadwal" class="form-control" >

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




      <?php $no=0; foreach($all as $row):  ?>
        <div class="row">
          <div id="modal-edit1<?=$row->id_jadwal;?>" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">EDIT DATA</h4>
                </div>
                <div class="modal-body">
                  <form action="<?php echo site_url('c_jadwal/edit'); ?>" method="post">

                    <div class="form-group">
                        <label class="col-form-label">Kode Matkul</label>
                        <select class="form-control" name="id_matkul">
                          <option>Pilih Salah Satu</option>
                          <?php foreach ($matkul as $key => $value) : ?>
                          <option <?= ($row->id_matkul == $value->id_matkul ? 'selected': '') ?> data-matkul='<?=json_encode($value)?>' value="<?=$value->id_matkul?>"><?=$value->kode_matkul?></option>
                          <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Nama Matkul</label>
                        <input type="text" class="form-control" name="nama_matkul" value="<?= $row->nama_matkul ?>"  placeholder="masukkan Nama Matkul" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Sks</label>
                        <input type="text" class="form-control" name="sks"  value="<?= $row->sks ?>" placeholder="masukkan Sks" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Semester</label>
                        <input type="text" class="form-control" name="semester" value="<?= $row->semester ?>"  placeholder="masukkan Semester" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Tingkat</label>
                        <input type="text" class="form-control" name="tingkat"  value="<?= $row->tingkat ?>" placeholder="masukkan Tingkat" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Tahun Akademik</label>
                        <input type="text" class="form-control" name="tahun_akademik"  value="<?= $row->tahun_akademik ?>" placeholder="masukkan Tahun Akademik" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Waktu</label>
                        <input type="text" class="form-control" name="waktu"  value="<?= $row->waktu ?>"  placeholder="masukkan Waktu" required>
                    </div>


                    <div class="form-group">
                        <label class="col-form-label">Kelas</label>
                        <select required="" class="form-control" name="id_kelas">
                          <option value="">Pilih Salah Satu</option>
                          <?php foreach ($kelas as $key => $value) : ?>
                          <option <?= ($row->id_kelas == $value->id_kelas ? 'selected': '') ?> value="<?=$value->id_kelas?>"><?=$value->nama_kelas?></option>
                          <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Hari</label>
                        <select required="" class="form-control" name="hari">
                          <option value="<?php echo $row->hari; ?>" hidden><?php echo $row->hari; ?></option>
                          <option value="senin">Senin</option>
                          <option value="selasa">Selasa</option>
                          <option value="rabu">Rabu</option>
                          <option value="kamis">Kamis</option>
                          <option value="jumat">Jumat</option>
                          <option value="sabtu">Sabtu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Dosen1</label>
                        <select required="" class="form-control" name="id_dosen1">
                          <option>Pilih Salah Satu</option>
                          <?php foreach ($dosen as $key => $value) : ?>
                          <option <?= ($row->id_dosen1 == $value->id_dosen ? 'selected': '') ?> value="<?=$value->id_dosen?>"><?=$value->nama_dosen?></option>
                          <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Dosen2</label>
                         <select required="" class="form-control" name="id_dosen2">
                          <option>Pilih Salah Satu</option>
                          <?php foreach ($dosen as $key => $value) : ?>
                          <option <?= ($row->id_dosen2 == $value->id_dosen ? 'selected': '') ?> value="<?=$value->id_dosen?>"><?=$value->nama_dosen?></option>
                          <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Koordinator</label>
                        <select required="" class="form-control" name="id_dosen_koordinator">
                          <option>Pilih Salah Satu</option>
                          <?php foreach ($dosen as $key => $value) : ?>
                          <option <?= ($row->id_dosen_koordinator == $value->id_dosen ? 'selected': '') ?> value="<?=$value->id_dosen?>"><?=$value->nama_dosen?></option>
                          <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Prodi</label>
                        <select required="" class="form-control" name="id_prodi">
                          <option>Pilih Salah Satu</option>
                          <?php foreach ($prodi as $key => $value) : ?>
                          <option <?= ($row->id_prodi == $value->id_prodi ? 'selected': '') ?> value="<?=$value->id_prodi?>"><?=$value->prodi?></option>
                          <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Kode Ruangan</label>
                        <select required="" class="form-control" name="id_ruangan">
                          <option>Pilih Salah Satu</option>
                          <?php foreach ($ruangan as $key => $value) : ?>
                          <option <?= ($row->id_ruangan == $value->id_ruangan ? 'selected': '') ?> value="<?=$value->id_ruangan?>"><?=$value->kode_ruangan?></option>
                          <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Nama Alat</label>
                        <select required="" class="form-control" name="id_alat">
                          <option>Pilih Salah Satu</option>
                          <?php foreach ($alat as $key => $value) : ?>
                          <option <?= ($row->id_alat == $value->id_alat ? 'selected': '') ?> value="<?=$value->id_alat?>"><?=$value->nama_alat?></option>
                          <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label">Teori</label>
                        <input type="text" class="form-control" name="teori" value="<?= $row->teori ?>"   placeholder="masukkan Teori" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Praktik</label>
                        <input type="text" class="form-control" name="praktik"  value="<?= $row->praktik ?>"  placeholder="masukkan Praktik" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Klinik</label>
                        <input type="text" class="form-control" name="klinik" value="<?= $row->klinik ?>"   placeholder="masukkan Klinik" required>
                    </div> 

                  
                    <input type="hidden" readonly value="<?php echo $row->id_jadwal; ?>" name="id_jadwal" class="form-control" >
              
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
  </div>
</section>


<script type="text/javascript">
  $(document).on('change', 'select[name="id_matkul"]', function() {
    var selected = $(this).find(':selected').data('matkul');

    // ambil datanya dari parent biar tau form yang di maksud
    var parent = $(this).parents()[1];

    var children = $(parent).children();

    // masukin ke form detailnya


    $(children[1]).find('input').val(selected.nama_matkul)
    $(children[2]).find('input').val(selected.sks)
    $(children[3]).find('input').val(selected.semester)
    $(children[4]).find('input').val(selected.tingkat)
    $(children[5]).find('input').val(selected.tahun_akademik)
    
  })
</script>