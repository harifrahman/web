      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-comment-text-outline"></i>                 
              </span>
              Create Post 
            </h3>
          </div>
          <div class="row">
            <!-- section under row here  -->
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <a href="<?= base_url()?>admin/media">
                    <button type="button" class="btn btn-gradient-primary btn-fw"><i class="mdi mdi-arrow-left"></i>&nbsp; Kembali</button>
                  </a>&nbsp; 
                  <button type="button" class="btn btn-gradient-danger btn-fw" style="margin-top: -1px" data-toggle="modal" data-target="#myModal">
                  <i class="mdi mdi-note-plus"></i> &nbsp; Tambah Kategori
                  </button>
                  <br><br>
                  <!-- ============================================================================ -->
                  <form class="forms-sample" action="<?=base_url()?>admin/media/create/do_create" method="post" enctype="multipart/form-data">
                      <div class="form-group ">
                        <label for="kategori">Pilih Kategori</label>
                          <select class="form-control" id="kategori" name="media_med_kat_id" required>
                            <option></option>
                            <?php foreach ($kategori as $key): ?>
                              <option value="<?=$key->med_kat_id?>"><?=$key->med_kat_name?></option>
                            <?php endforeach ?>
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="judul">Judul</label>
                          <input type="text" class="form-control" name="media_judul" required>
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="media_gambar" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                    <div class="form-group">
                      <label for="body">Isi Berita</label>
                      <textarea class="form-control" id="body" name="media_isi" rows="7" placeholder="Write here..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                  <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
                </div>
              </div>
            </div>
          </div>
        </div>

<!-- pembatas +++++++++++++++++++++++++++++++++ -->

<!-- Classic Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" action="<?=base_url()?>admin/media/kategori/create" method="post">
        <div class="modal-header justify-content-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="nc-icon nc-simple-remove"></i>
          </button>
          <h6>Tambah Kategori</h6>
        </div>
        <div class="modal-body">
          <div class="row">
            <label class="col-md-3 col-form-label">Kategori</label>
            <div class="col-md-9">
              <div class="form-group">
                <input type="text" class="form-control" name="kategori" placeholder="" required="">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          
            <button type="submit" class="btn btn-gradient-primary mr-2" value="submit">Submit</button>
          
          <div class="divider"></div>
            <button type="submit" class="btn btn-gradient-warning mr-2" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>
 <!--  End Modal -->
