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
                <a class="btn f-right btn-pill btn-sm btn-primary btnAdd" id="btnAdd"> <i data-feather="plus-square"></i>Tambah</a>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-12">
    <div class="card">
        <div class="card-body p-3 border-bottom">
            <div class="table-responsive p-1">
                <table class="table table-hover table-sm order-column" id="tblList">
                    <thead>
                        <tr>
                            <th width="170px" class="font-weight-bold text-center">Aksi</th>
                            <th class="font-weight-bold">Judul Menu / Sub Menu</th>
                            <th width="50px" class="font-weight-bold text-center">Urutan</th>
                            <th width="80px" class="font-weight-bold text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<div class="col-12">
    <div class="modal fade modal23" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content card">
                <?php echo form_open(site_url(isset($siteUri) ? $siteUri . '/create' : ''), array('id' => 'formEntry', 'class=' => 'needs-validated', 'novalidate' => '')); ?>
                <?php echo form_hidden('tokenId', ''); ?>
                <div class="modal-header card-header b-l-primary border-2">
                    <h5 class="modal-title"><small class="text-muted">Form | </small><span id="judulForm">Input Data Menu</span></h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row px-3">
                        <div class="col-12 col-md-6 mb-3 required">
                            <label for="nama_menu" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Nama Menu</label>
                            <input type="text" class="form-control" name="nama_menu" id="nama_menu" placeholder="Nama Menu" value="<?php echo $this->input->post('nama_menu', TRUE); ?>" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="col-12 col-md-6 mb-3 required">
                            <label for="parent_id" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Parent Menu</label>
                            <?php echo form_dropdown('parent_id', isset($parent) ? $parent : array('' => 'Pilih Data'), $this->input->post('parent_id', TRUE), 'class="select2" id="parent_id" style="width:100%" required=""'); ?>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="row px-3">
                        <div class="col-12 col-md-12 mb-3">
                            <label for="type_menu" class="control-label text-nowrap col-2 font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Tipe Menu</label>
                            <div class="m-checkbox-inline custom-radio-ml">
                                <div class="form-check form-check-inline radio radio-primary">
                                    <input type="radio" class="form-check-input radio_animated" name="is_parent" id="type_1" value="Y" <?php echo set_radio('is_parent', 'Y'); ?> required>
                                    <label class="form-check-label mb-0" for="type_1">Root Menu</label>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-check form-check-inline radio radio-primary">
                                    <input type="radio" class="form-check-input radio_animated" name="is_parent" id="type_2" value="N" <?php echo set_radio('is_parent', 'N'); ?> required>
                                    <label class="form-check-label mb-0" for="type_2">Sub Menu</label>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row px-3">
                        <div class="col-12 mb-3">
                            <label for="id_rules" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Module</label>
                            <div class="row">
                                <div class="col-9 required">
                                    <input type="hidden" class="form-control" name="id_rules" id="id_rules" value="<?php echo $this->input->post('id_rules', TRUE); ?>">
                                    <input type="text" class="form-control" name="nama_rules" id="nama_rules" placeholder="Pilih Module" value="<?php echo $this->input->post('nama_rules', TRUE); ?>" required disabled>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="col-2 m-0 p-0">
                                    <div class="btn text-nowrap btn-info m-0 px-2" id="pilihData"> <i class="fa fa-list-alt"></i> <span style="font-size:12px;">Pilih Data</span></div>
                                </div>
                                <span><code style="letter-spacing: 0px;line-height:0;"> Module tidak perlu diisi jika tipe Menu yang dipilih bukan Sub Menu</code></span>
                            </div>
                        </div>
                    </div>
                    <div class="row px-3">
                        <div class="col-12 col-md-6 mb-3 required">
                            <label for="order_menu" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Order Menu</label>
                            <input type="number" class="form-control nominal" name="order_menu" id="order_menu" placeholder="Order Menu" min="1" value="<?php echo $this->input->post('order_menu', TRUE); ?>" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="col-12 col-md-6 mb-3 required">
                            <label for="url_menu" class="control-label font-weight-bolder">URL Menu</label>
                            <input type="text" class="form-control" name="url_menu" id="url_menu" placeholder="URL Menu" value="<?php echo $this->input->post('url_menu', TRUE); ?>" readonly="">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="col-12 col-md-6 mb-3 required">
                            <label for="status" class="control-label font-weight-bolder"><i class="icon-pin-alt txt-danger"></i> Status</label>
                            <?php echo form_dropdown('status', status(), $this->input->post('status', TRUE), 'class="select2" id="status" style="width:100%" required=""'); ?>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="col-12 col-md-6 mb-3 required">
                            <label for="icon_menu" class="control-label font-weight-bolder">Icon Menu</label>
                            <input type="text" class="form-control" name="icon_menu" id="icon_menu" placeholder="Icon Menu" value="<?php echo $this->input->post('icon_menu', TRUE); ?>">
                            <div class="invalid-feedback"></div>
                        </div>

                    </div>
                    <div class="row p-3 pb-0">
                        <hr>
                        <figcaption class="blockquote-footer">
                            <b>NB:</b> <cite>Jika menu bertipe sub menu maka icon manu tidak usah diisi</cite>
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
    <div class="modal fade modal23" id="modalModuleList" tabindex="-1" role="dialog" aria-labelledby="modalModuleListLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content card">
                <div class="modal-header card-header b-l-primary border-2">
                    <h5 class="modal-title"><small class="text-muted">Pilih | </small><span id="judulForm"> Data Rules Module</span></h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-bordered table-hover table-sm" cellspacing="0" id="tblRules" width="100%">
                        <thead>
                            <tr>
                                <th width="5%" class="font-weight-bold text-center">#</th>
                                <th class="font-weight-bold">Module</th>
                                <th class="font-weight-bold">Kontrol</th>
                                <th class="font-weight-bold">Fungsi</th>
                                <th width="7%" class="font-weight-bold text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ((isset($rules) ? $rules : array()) as $key => $r) : ?>
                                <tr>
                                    <td width="5%" class="text-center"><?php echo $i; ?>.</td>
                                    <td><?php echo $r['label_module']; ?></td>
                                    <td><?php echo $r['label_kontrol']; ?></td>
                                    <td><?php echo $r['label_fungsi']; ?></td>
                                    <td width="7%" class="text-center">
                                        <button class="btn btn-primary btn-sm px-2 py-1 my-0 mx-0 waves-effect waves-light setModule" data-id="<?php echo $this->encryption->encrypt($r['id_rules']); ?>" data-nm="<?php echo $r['url_module'] . '/' . $r['url_kontrol'] . '/' . $r['url_fungsi']; ?>"> Set </button>
                                    </td>
                                </tr>
                            <?php $i++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
