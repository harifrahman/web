      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-alphabetical"></i>                 
              </span>
              Post Table's
            </h3>
          </div>
          <div class="row">
          	<!-- section under row here  -->
          	<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <a href="<?= base_url()?>admin/media/create">
                  	<button type="button" class="btn btn-gradient-primary btn-fw">Create New Post</button>
                  </a><br><br>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th><b>#</b></th>
                        <th>Gambar</th>
                        <th>Kategori</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th class="text-right">Action</th>
                      </tr>
                    </thead>
                    <?php $n = 0; ?>
                    <tbody>
                    	<?php foreach ($media as $row): ?>	
						        <tr>
                      <td class="text-center"><?= ++$n; ?></td>
                      <td class="text-right"><img src="<?=base_url()?>assets/img/media/<?=$row->media_gambar?>" height="100"></td>
                      <td><?=$row->med_kat_name?></td>
                      <td><?=$row->media_judul?></td>
                      <td><?=date('d-m-Y', strtotime($row->media_created_time))?></td>
                      <td class="text-right">
                        <a href="#" class="btn btn-outline-primary btn-fw" onclick="showAjaxModal('<?php echo base_url();?>index.php/admin/media/detail/<?=$row->media_id?>');">
                          <i class="fa fa-search-plus"></i>
                        </a>
                        <a href="<?=base_url()?>index.php/admin/media/update/<?=$row->media_id?>" class="btn btn-outline-warning btn-fw">
                          <i class="fa fa-edit"></i>
                        </a>
                        <a onclick="return confirm('Apakah Anda yakin menghapus data ini?')" href="<?=base_url()?>index.php/admin/media/delete/<?=$row->media_id?>" class="btn btn-outline-danger btn-fw">
                          <i class="fa fa-times"></i>
                        </a>
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
