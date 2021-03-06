      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-alphabetical"></i>                 
              </span>
              Testimony Table's
            </h3>
          </div>
          <div class="row">
          	<!-- section under row here  -->
          	<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <a href="<?= base_url()?>admin/testimony/create">
                  	<button type="button" class="btn btn-gradient-primary btn-fw">Create New Testimony</button>
                  </a><br><br>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th><b>#</b></th>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Isi Testimoni</th>
                        <th>Tanggal</th>
                        <th class="text-right">Action</th>
                      </tr>
                    </thead>
                    <?php $n = 0; ?>
                    <tbody>
                    	<?php foreach ($testimoni as $row): ?>	
						        <tr>
                      <td class="text-center"><?= ++$n; ?></td>
                      <td class="text-right"><img src="<?=base_url()?>assets/img/testimoni/<?=$row->testimony_image?>" height="100"></td>
                      <td><?=$row->testimony_nama?></td>
                        <td><?=$row->testimony_jabatan?></td>
                        <td><?=$row->testimony_isi?></td>
                        <td><?=date('d-m-Y', strtotime($row->testimony_created_time))?></td>
                        <td class="text-right">
                          <a href="<?=base_url()?>admin/testimony/update/<?=$row->testimony_id?>" class="btn btn-warning btn-link btn-icon"><i class="fa fa-edit"></i></a>
                          <a onclick="return confirm('Apakah Anda yakin menghapus data?')" href="<?=base_url()?>admin/testimony/delete/<?=$row->testimony_id?>" class="btn btn-danger btn-link btn-icon"><i class="fa fa-times"></i></a>
                        </td>
                   	</tr>
						<?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
