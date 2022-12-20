<div class="col-md-12 project-list animated fadeInDown">
    <div class="card p-0">
        <div class="row">
            <div class="col-6">
                <ul class="nav nav-tabs border-tab f-left" id="top-tab" role="tablist">
                    <li class="nav-item">
                        <button class="btn btn-pill btn-sm btn-outline-primary" id="refresh" type="button">
                            <i data-feather="refresh-cw"></i>Perbaharui</button>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <a class="btn f-right btn-pill btn-sm btn-primary" id="btnAdd"> <i data-feather="plus-square"></i>Tambah</a>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-12">
    <div class="card">
        <div class="card-body p-3 border-bottom">
            <div class="table-responsive p-1">
                <table class="table table-hover table-striped table-sm order-column" id="tblList">
                    <thead>
                        <tr>
                            <th width="65px" class="font-weight-bold"></th>
                            <th width="5%" class="font-weight-bold">#</th>
                            <th width="15%" class="font-weight-bold">Label Kontrol</th>
                            <th width="13%" class="font-weight-bold">Nama Kontrol</th>
                            <th class="font-weight-bold">URL Kontrol</th>
                            <th class="font-weight-bold">Deskripsi</th>
                            <th width="7%" class="font-weight-bold">Status</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="col-12">
    <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content card">
                <?php echo form_open(site_url(isset($siteUri) ? $siteUri . '/create' : ''), array('id' => 'formEntry', 'class=' => 'needs-validated', 'novalidate' => '')); ?>
                <?php echo form_hidden('tokenId', ''); ?>
                <div class="modal-header card-header b-l-primary border-2">
                    <h5 class="modal-title"><small class="text-muted">Form | </small><span id="judulForm">Input Data Kontrol</span></h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row px-3">
                        <div class="col-12 col-lg-6">
                            <div class="mb-3 required">
                                <label for="label_kontrol" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Label Kontrol </label>
                                <input type="text" class="form-control" name="label_kontrol" id="label_kontrol" placeholder="Label Kontrol" value="<?php echo $this->input->post('label_kontrol', TRUE); ?>" required>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="mb-3 required">
                                <label for="nama_kontrol" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Nama Kontrol </label>
                                <input type="text" class="form-control" name="nama_kontrol" id="nama_kontrol" placeholder="Nama Kontrol" value="<?php echo $this->input->post('nama_kontrol', TRUE); ?>" required>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="mb-3 required">
                                <label for="url_kontrol" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Url Kontrol </label>
                                <input type="text" class="form-control" name="url_kontrol" id="url_kontrol" placeholder="Url Kontrol" value="<?php echo $this->input->post('url_kontrol', TRUE); ?>" required>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mb-3 required">
                                <label for="status" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Status </label>
                                <?php echo form_dropdown('status', status(), $this->input->post('status', TRUE), 'class="select2" id="status" style="width:100%" required=""'); ?>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="mb-3 required">
                                <label for="deskripsi_kontrol" class="control-label font-weight-bolder">Deskripsi Kontrol</label>
                                <textarea class="form-control" name="deskripsi_kontrol" id="deskripsi_kontrol" rows="3" placeholder="Deskripsi Kontrol"><?php echo $this->input->post('deskripsi_kontrol', TRUE); ?></textarea>
                                <div class="invalid-feedback"></div>
                            </div>

                        </div>
                    </div>
                    <div class="row p-3 pb-0">
                        <hr>
                        <figcaption class="blockquote-footer">
                            <b>NB:</b> <cite>Nama kontrol adalah nama class/controller yang digunakan di dalam modules</cite>
                        </figcaption>
                        <figcaption class="blockquote-footer mt-n3">
                            <cite>Tanda <i class="icon-pin-alt txt-danger"></i> wajib diisi.</cite>
                        </figcaption>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal"><i class="icon-close"></i> Tutup</button>
                    <button type="reset" class="btn btn-sm btn-light" id="btnReset"><i class="icon-back-right"></i> Reset</button>
                    <button class="btn btn-sm btn-primary" id="btnSave" type="submit"><i class="icon-save"></i> Simpan</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>