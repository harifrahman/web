      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-alphabetical"></i>                 
              </span>
              Contact Table's
            </h3>
          </div>
          <div class="row">
          	<!-- section under row here  -->
          	<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th><b>#</b></th>
                        <th>Nama</th>
                        <th>Subject</th>
                        <th>Email</th>
                        <th>Isi Pesan</th>
                        <th>No HP</th>
                        <th>Tanggal</th>
                        <th class="text-right">Action</th>
                      </tr>
                    </thead>
                    <?php $n = 0; ?>
                    <tbody>
                    	<?php foreach ($contact as $row): ?>	
						        <tr>
                      <td class="text-center"><?= ++$n; ?></td>
                      <td><?=$row->contact_nama?></td>
                        <td><?=$row->contact_subject?></td>
                        <td><?=$row->contact_email?></td>
                        <td><?=$row->contact_isi?></td>
                        <td><?=$row->contact_nohp?></td>
                        <td><?=date('d-m-Y', strtotime($row->contact_created_time))?></td>
                        <td class="text-right">
                          <a onclick="return confirm('Apakah Anda yakin menghapus data?')" href="<?=base_url()?>contact/delete/<?=$row->contact_id?>" class="btn btn-danger btn-link btn-icon"><i class="fa fa-times"></i></a>
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
