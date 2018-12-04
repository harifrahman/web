  	<?php foreach ($data_work as $row) : ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-comment-text-outline"></i>                 
              </span>
              Edit Work 
            </h3>
          </div>
          <div class="row">
            <!-- section under row here  -->
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <a href="<?= base_url()?>admin/work">
                    <button type="button" class="btn btn-gradient-primary btn-fw"><i class="mdi mdi-arrow-left"></i>&nbsp; Kembali</button>
                  </a>
                  <br><br>
                  <!-- ============================================================================ -->
                  <form class="forms-sample" action="<?=base_url()?>admin/work/update/<?=$row->work_id?>/do_update" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="nama">Nama</label>
                          <input type="text" class="form-control" name="work_nama" value="<?=$row->work_nama?>" required>
                      </div>
                      <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                          <input type="text" class="form-control" name="work_deskripsi" value="<?=$row->work_deskripsi?>" required>
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="work_image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" value="<?=$row->work_image?>">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                    <div class="form-group">
                      <label for="body">Isi Work</label>
                      <textarea class="form-control" id="body" name="work_isi" rows="7" placeholder="Write here..."><?=$row->work_isi?></textarea>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <?php endforeach; ?>
                  </form>
                  <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                </div>
              </div>
            </div>
          </div>
        </div>

<!-- pembatas +++++++++++++++++++++++++++++++++ -->
