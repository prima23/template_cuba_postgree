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
                <a href="javascript:void(0);" class="btnFilter btn btn-sm btn-secondary btn-pill">
                    <i data-feather="filter"></i> Filter Data
                </a>
                <button type="button" class="btn btn-danger btn-pill btn-sm" id="btnDelete" style="display:none;"><i class="fa fa-trash-o fa-lg"></i> Delete User</button>
                <a class="btn f-right btn-pill btn-sm btn-primary" id="btnAdd"> <i data-feather="plus-square"></i>Tambah</a>
            </div>
        </div>
        <?php echo form_open(site_url('#'), array('id' => 'formFilter', 'class' => 'theme-form mt-4', 'style' => 'display:none;')); ?>
        <div class="contact-form">
            <div class="theme-form">
                <div class="form-icon"><i data-feather="filter"></i></div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="fullname" class="control-label font-weight-bolder">Nama Lengkap</label>
                        <input type="text" class="form-control" name="fullname" placeholder="Nama Lengkap" value="<?php echo $this->input->post('fullname', TRUE); ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="username" class="control-label font-weight-bolder">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $this->input->post('username', TRUE); ?>">
                    </div>
                    <div class="col-md-2">
                        <label for="group" class="control-label font-weight-bolder">Group User</label>
                        <?php echo form_dropdown('group', isset($group_user) ? $group_user : array('' => 'Pilih Group User'), $this->input->post('group', TRUE), 'class="form-control select-all" style="width:100%"'); ?>
                    </div>
                    <div class="col-md-2">
                        <label for="blokir" class="control-label font-weight-bolder">Blokir</label>
                        <?php echo form_dropdown('blokir', array('' => 'Pilih Data', 1 => 'Blokir', 0 => 'Tidak Blokir'), $this->input->post('blokir', TRUE), 'class="form-control select-all" style="width:100%"'); ?>
                    </div>
                    <div class="col-md-2">
                        <label for="status" class="control-label font-weight-bolder">Status</label>
                        <?php echo form_dropdown('status', array('' => 'Pilih Status', 1 => 'Aktif', 0 => 'Tidak Aktif'), $this->input->post('status', TRUE), 'class="form-control select-all" style="width:100%"'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <hr>
                        <div class="d-flex justify-content-lg-end align-items-center">
                            <button type="button" class="btn btn-danger btn-sm" name="cancel" id="cancel"><i data-feather="x"></i> Cancel</button>
                            <button type="submit" class="btn btn-primary btn-sm" name="filter" id="filter"><i data-feather="search"></i> Lakukan Pencarian</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
<div class="col-sm-12">
    <div class="card">
        <div class="card-body p-3 border-bottom">
            <div class="table-responsive p-1">
                <table class="table table-hover table-striped table-sm order-column" id="tblList">
                    <thead>
                        <tr>
                            <th width="10px">
                                <div class="form-check checkbox checkbox-primary mb-0">
                                    <input class="form-check-input checkbox_animated" id="checkAll" type="checkbox">
                                    <label class="form-check-label" for="checkAll"></label>
                                </div>
                            </th>
                            <th width="10px" class="font-weight-bold">#</th>
                            <th width="200px" class="font-weight-bold">Pengguna</th>
                            <th class="font-weight-bold">Group</th>
                            <th class="font-weight-bold">OPD</th>
                            <th width="10px" class="font-weight-bold">Blokir</th>
                            <th width="10px" class="font-weight-bold">Status</th>
                            <th width="10px" class="font-weight-bold">Edit</th>
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
                    <h5 class="modal-title"><small class="text-muted">Form | </small><span id="judulForm">Input Data User</span></h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row px-3">
                        <div class="col-12 col-lg-6">
                            <div class="mb-3 required">
                                <label for="fullname" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Nama Lengkap</label>
                                <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Nama Lengkap" value="<?php echo $this->input->post('fullname', TRUE); ?>" required>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="mb-3 required">
                                <label for="username" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Username <span class="grey-text" style="font-size: 80%;">(min 6 karakter)</span></label>
                                <input type="text" class="form-control" name="username" minlength="6" id="username" placeholder="Username" value="<?php echo $this->input->post('username', TRUE); ?>" required>
                                <div class="invalid-feedback mt-3"></div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mb-3 required">
                                <label for="password" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Password <span class="grey-text" style="font-size: 80%;">(min 8 karakter)</span></label>
                                <div class="input-group required">
                                    <input type="password" class="form-control" name="password" minlength="8" id="password" placeholder="Password" value="<?php echo $this->input->post('password', TRUE); ?>" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text showPass"><i class="fa fa-eye"></i></span>
                                    </div>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="mb-3 required">
                                <label for="conf_password" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Konfirmasi Password</label>
                                <div class="input-group required">
                                    <input type="password" class="form-control" name="conf_password" id="conf_password" placeholder="Konfirmasi Password" minlength="8" value="<?php echo $this->input->post('conf_password', TRUE); ?>" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text showPass"><i class="fa fa-eye"></i></span>
                                    </div>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="valid-password mt-1" style="font-size:80%;"></div>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="groupid" class="control-label col-12 col-md-12 font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Group User</label>
                            <div class="col-12 col-md-12">
                                <div class="row">
                                    <?php foreach ((isset($data_group) ? $data_group : array()) as $key => $dg) {
                                        echo '<div class="col-md-4">';
                                        echo '<label class="d-block" for="groupid_' . $dg['id_group'] . '">
                                            <input type="checkbox" class="checkbox_animated" name="groupid[]" id="groupid_' . $dg['id_group'] . '" value="' . $this->encryption->encrypt($dg['id_group']) . '" ' . set_checkbox('groupid[]', $this->encryption->encrypt($dg['id_group'])) . ' required> ' . $dg['nama_group'] . '
                                         </label>';
                                        echo '</div>';
                                    } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 hide" id="fopd">
                            <div class="mb-3 required">
                                <div class="align-items-center mt-4 mb-3 ml-1 loading-simpeg-opd hide">
                                    <span class="ml2 text-monospace"> Connection to simpeg...</span>
                                    <div class="spinner-border spinner-grow-sm fast ml-auto align-right" role="status" aria-hidden="true"></div>
                                </div>
                                <div class="hide" id="text-opd">
                                    <label for="opd" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> OPD </label>
                                    <?php echo form_dropdown('opd', isset($data_opd) ? $data_opd : array('' => 'Pilih Data'), $this->input->post('opd', TRUE), 'class="select2" id="opd" style="width:100%" required=""'); ?>
                                    <div class="invalid-feedback" id="invalid-opd"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 required">
                                <label for="blokir" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Blokir</label>
                                <?php echo form_dropdown('blokir', blokir(), $this->input->post('blokir', TRUE), 'class="select2" id="blokir" style="width:100%" required=""'); ?>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 required">
                                <label for="status" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Status</label>
                                <?php echo form_dropdown('status', status(), $this->input->post('status', TRUE), 'class="select2" id="status" style="width:100%" required=""'); ?>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row p-3 pb-0">
                        <hr>
                        <figcaption class="blockquote-footer">
                            <b>NB:</b> <cite>Group user dapat ditambah di menu group</cite>
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
