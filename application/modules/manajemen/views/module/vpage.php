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
                            <th width="90px" class="font-weight-bold">Action</th>
                            <th width="5%" class="font-weight-bold">#</th>
                            <th width="13%" class="font-weight-bold">Label Module</th>
                            <th class="font-weight-bold">Nama Module</th>
                            <th class="font-weight-bold">URL Module</th>
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
                    <h5 class="modal-title"><small class="text-muted">Form | </small><span id="judulForm">Input Data Module</span></h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row px-3">
                        <div class="col-12 col-lg-6">
                            <div class="mb-3 required">
                                <label for="label_module" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Label Module</label>
                                <input type="text" class="form-control" name="label_module" id="label_module" placeholder="Label Module" value="<?php echo $this->input->post('label_module', TRUE); ?>" required>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="mb-3 required">
                                <label for="nama_module" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Nama Module</label>
                                <input type="text" class="form-control" name="nama_module" id="nama_module" placeholder="Nama Module" value="<?php echo $this->input->post('nama_module', TRUE); ?>" required>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="mb-3 required">
                                <label for="url_module" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Url Module</label>
                                <input type="text" class="form-control" name="url_module" id="url_module" placeholder="Url Module" value="<?php echo $this->input->post('url_module', TRUE); ?>" required>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mb-3 required">
                                <label for="status" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Status</label>
                                <?php echo form_dropdown('status', status(), $this->input->post('status', TRUE), 'class="select2" id="status" style="width:100%" required=""'); ?>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="mb-3 required">
                                <label for="deskripsi_module" class="control-label font-weight-bolder">Deskripsi Module</label>
                                <textarea class="form-control" name="deskripsi_module" id="deskripsi_module" rows="3" placeholder="Deskripsi Module"><?php echo $this->input->post('deskripsi_module', TRUE); ?></textarea>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row p-3 pb-0">
                        <hr>
                        <figcaption class="blockquote-footer">
                            <b>NB:</b> <cite>Nama module adalah nama modules yang digunakan</cite>
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


<div class="col-12">
    <div class="modal fade" id="modalRulesForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content card">

                <div class="modal-header card-header b-l-primary border-2">
                    <h5 class="modal-title"><small class="text-muted">Form | </small><span id="judulForm">Rules Manajemen</span></h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-12 clearfix mb-3">
                            <div>
                                <button class="btn btn-success btn-sm waves-effect waves-light mb-1 font-weight-bold btnSetting" type="button"><i class="fa fa-plus-square"></i> Tambah Rules</button>
                                <button class="btn btn-sm btn-danger waves-effect eventRules waves-light mb-1 font-weight-bold" type="button" id="btnDeleteRules" disabled=""><i class="fa fa-trash-o"></i> Delete Rules</button>
                                <button class="btn btn-sm btn-warning waves-effect eventRules waves-light mb-1 font-weight-bold" type="button" id="btnNonaktifRules" disabled=""><i class="fa fa-minus-square"></i> Non Aktifkan Rules</button>
                                <button class="btn btn-sm btn-primary waves-effect eventRules waves-light mb-1 font-weight-bold" type="button" id="btnAktifRules" disabled=""><i class="fa fa-check-square-o"></i> Aktifkan Rules</button>
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div id="errRules"></div>
                        </div>
                        <?php echo form_open(site_url(isset($siteUri) ? $siteUri . '/rules' : ''), array('id' => 'formRules', 'class=' => 'needs-validated theme-form', 'novalidate' => '')); ?>
                        <?php echo form_hidden('tokenRules', ''); ?>
                        <div class="p-3 contact-form" id="formSettingRules" style="display: none;">
                            <div class="theme-form">
                                <div class="form-icon"><i data-feather="plus-circle"></i></div>
                                <div class="required mb-2">
                                    <label for="nama_kontrol" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Nama Kontrol</label>
                                    <?php echo form_dropdown('nama_kontrol', isset($data_kontrol) ? $data_kontrol : array('' => 'Pilih Data'), $this->input->post('nama_kontrol', TRUE), 'class="select21" style="width:100%" id="nama_kontrol" required=""'); ?>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="required mb-2">
                                    <label for="nama_fungsi" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Nama Fungsi</label>
                                    <?php echo form_multiselect('nama_fungsi[]', isset($data_fungsi) ? $data_fungsi : array('' => 'Pilih Data'), $this->input->post('nama_fungsi[]', TRUE), 'class="select21" style="width:100%" data-placeholder="Pilih Data Fungsi" required=""'); ?>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="required mb-3">
                                    <label for="status_rules" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Status</label>
                                    <?php echo form_dropdown('status_rules', status(), $this->input->post('status_rules', TRUE), 'class="select21" id="status_rules" style="width:100%" required=""'); ?>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="text-sm-end">
                                    <button class="btn btn-sm btn-secondary btnSetting" type="button"><i class="icon-close"></i> Tutup</button>
                                    <button class="btn btn-sm btn-primary" id="saveRules" type="submit"><i class="icon-save"></i> Simpan</button>
                                </div>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                    <div class="row px-3">
                        <div class="table-responsive-md">
                            <h5 class="heading"><i class="fa fa-list-ul"></i> Daftar Rules <span class="lblMod"></span></h5>
                            <table cellspacing="0" class="table table-striped table-responsive table-borderless table-hover table-sm" id="tblRules" width="100%">
                                <thead>
                                    <tr>
                                        <th width="10px" class="text-center">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkAll">
                                                <label class="custom-control-label" for="checkAll"></label>
                                            </div>
                                        </th>
                                        <th width="10px" class="font-weight-bold text-center">No.</th>
                                        <th class="font-weight-bold">Nama Fungsi</th>
                                        <th width="10px" class="font-weight-bold text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row p-3 pb-0">
                        <hr>
                        <figcaption class="blockquote-footer">
                            <b>NB:</b> <cite>Nama module adalah nama modules yang digunakan</cite>
                        </figcaption>
                        <figcaption class="blockquote-footer mt-n3">
                            <cite>Tanda <i class="icon-pin-alt txt-danger"></i> wajib diisi.</cite>
                        </figcaption>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal"><i class="icon-close"></i> Tutup</button>
                </div>
            </div>
        </div>
    </div>
</div>