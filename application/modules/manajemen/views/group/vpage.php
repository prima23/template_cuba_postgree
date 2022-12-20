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
                            <th width="3%" class="font-weight-bold">#</th>
                            <th width="20%" class="font-weight-bold">Nama Group</th>
                            <th width="15%" class="font-weight-bold">Level Akses</th>
                            <th class="font-weight-bold">Hak Akses</th>
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
        <div class="modal-dialog" role="document">
            <div class="modal-content card">
                <?php echo form_open(site_url(isset($siteUri) ? $siteUri . '/create' : ''), array('id' => 'formEntry', 'class=' => 'needs-validated', 'novalidate' => '')); ?>
                <?php echo form_hidden('tokenId', ''); ?>
                <div class="modal-header card-header b-l-primary border-2">
                    <h5 class="modal-title"><small class="text-muted">Form | </small><span id="judulForm">Input Data Group</span></h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row px-3">
                        <div class="col-12">
                            <div class="mb-3 required">
                                <label for="nama_group" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Nama Group</label>
                                <input type="text" class="form-control" name="nama_group" id="nama_group" placeholder="Nama Group" value="<?php echo $this->input->post('nama_group', TRUE); ?>" required>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="mb-3 required">
                                <label for="level_akses" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Level Akses</label>
                                <?php echo form_dropdown('level_akses', isset($level_akses) ? $level_akses : array('' => 'Pilih Data'), $this->input->post('level_akses', TRUE), 'class="select2" style="width:100%" id="level_akses" required=""'); ?>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="mb-3 required">
                                <label for="status" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Status</label>
                                <?php echo form_dropdown('status', status(), $this->input->post('status', TRUE), 'class="select2" id="status" style="width:100%" required=""'); ?>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row p-3 pb-0">
                        <hr>
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
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content card">

                <div class="modal-header card-header b-l-primary border-2">
                    <h5 class="modal-title"><small class="text-muted">Form | </small><span id="judulForm">Group Privilege Manajemen</span></h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="formrul">
                    <div class="row p-3">
                        <div class="d-flex justify-content-between">
                            <div><h6>Silahkan pilih privilege untuk Group</h6></div>
                            <label class="d-block" for="chk-ani">
                                <input class="checkbox_animated" id="checkall" type="checkbox"> Check All Global Privileges
                            </label>
                        </div>
                        <?php echo form_hidden('tokenGroup', ''); ?>
                        <div class="p-0" id="listRules"></div>

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
                    <button type="button" class="btn btn-primary btn-sm" id="btnSaveRules"><i class="icon-save"></i> Save Privilege</button>
                </div>
            </div>
        </div>
    </div>
</div>