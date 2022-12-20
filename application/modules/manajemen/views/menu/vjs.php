<script src="<?= base_url('assets/'); ?>js/select2/select2.full.min.js"></script>
<script type="text/javascript">
    getDataListMenu();
    var myModal = new bootstrap.Modal(document.getElementById('form'), {
        backdrop: 'static',
        keyboard: false,
    });
    var myModal2 = new bootstrap.Modal(document.getElementById('modalModuleList'), {
        backdrop: 'static',
        keyboard: false,
    });
    $("#refresh").on('click', function() {
        console.log('ok');
        getDataListMenu();
    });
    $(".select2").select2({
        dropdownParent: $('#form'),
        placeholder: "Pilih Data",
        allowClear: true
    });
    function getDataListMenu() {
        $.ajax({
            type: 'GET',
            url: site + '/listview',
            data: {
                '<?php echo $this->security->get_csrf_token_name(); ?>': $('input[name="' + csrfName + '"]').val()
            },
            dataType: 'json',
            beforeSend: function() {
                run_waitMe($("#tblList"));
            },
            success: function(data) {
                $('input[name="' + csrfName + '"]').val(data.csrfHash);
                if (data.status == 'RC200') {
                    $('#tblList > tbody').html(data.message);
                } else {
                    $('#tblList > tbody').html('<tr><td colspan="4"></td></td>');
                }
            },complete:function(){
                $('#tblList').waitMe('hide');
            }
        });
    }
    $(document).on('click', '.btnAdd', function(e) {
        formReset();
        $("#judulForm").html('Input Data Menu');
        myModal.toggle();
        let id = $(this).data('id');
        $('#parent_id').val(id).trigger('change');
    });
    $(document).on('click', '#pilihData', function(e) {
        myModal.hide();
        myModal2.show();
    });
    $(document).on('change', 'input[type=radio][name=is_parent]', function(e) {
        if ($("#type_1").is(":checked")) {
            document.getElementById("url_menu").value = '#';
            $('input[name="nama_rules"]').removeAttr('required').attr('disabled', '');
        } else if ($("#type_2").is(":checked")) {
            document.getElementById("url_menu").value = '';
            $('input[name="nama_rules"]').attr('required', '').removeAttr('disabled');
        }
    });
    $(document).on('click', '.setModule', function(e) {
        document.getElementById("id_rules").value = $(this).attr('data-id');
        document.getElementById("nama_rules").value = $(this).attr('data-nm');
        $('#modalModuleList').modal('hide');
    });
    $(document).on('submit', '#formEntry', function(e) {
        e.preventDefault();
        let postData = $(this).serialize();
        let formActionURL = $(this).attr("action");
        swalKonfirmasi.fire({
            title: 'Konfirmasi',
            text: 'Apakah anda ingin menyimpan data ini ?',
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: formActionURL,
                    type: "POST",
                    data: postData,
                    dataType: "json",
                    beforeSend: function() {
                        run_waitMe($("#formEntry"));
                    }
                }).done(function(data) {
                    $('input[name="' + csrfName + '"]').val(data.csrfHash);
                    if (data.status == 'RC404') {
                        $('#formEntry').addClass('was-validated');
                        swal404.fire().then((result) => {
                            if (result.value) {
                                $('#errEntry').html(msg.error('Silahkan dilengkapi data pada form inputan dibawah'));
                                $.each(data.message, function(key, value) {
                                    if (key != 'isi')
                                        $('input[name="' + key + '"], select[name="' + key + '"]').closest('div.required').find('div.invalid-feedback').text(value);
                                    else {
                                        $('#pesanErr').html(value);
                                    }
                                });
                            }
                        })
                    } else {
                        formReset();
                        myModal.toggle();
                        getDataListMenu();
                        swalInformasi.fire({
                            title: 'Berhasil Simpan',
                            text: data.message,
                            icon: 'success'
                        })
                    }
                }).fail(function() {
                    swalFail.fire();
                }).always(function() {
                    $('#formEntry').waitMe('hide');
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalBatalSimpan.fire();
            }
        })
    });
    $(document).on('click', '.btnEdit', function(e) {
        formReset();
        $('#formEntry').attr('action', site + '/update');
        let token = $(this).data('id');
        myModal.toggle();
        getDataMenu(token);
    });
    function getDataMenu(token) {
        run_waitMe($('#frmEntry'));
        $.ajax({
            type: 'POST',
            url: site + '/details',
            data: {
                'token': token,
                '<?php echo $this->security->get_csrf_token_name(); ?>': $('input[name="' + csrfName + '"]').val()
            },
            dataType: 'json',
            success: function(data) {
                $('input[name="' + csrfName + '"]').val(data.csrfHash);
                if (data.status == 'RC200') {
                    console.log(data);
                    $('input[name="tokenId"]').val(token);
                    $('#nama_menu').val(data.message.title);
                    $('#parent_id').val(data.message.parent).trigger('change');
                    $('input[type="radio"][value="' + data.message.type + '"]').prop('checked', true);
                    $('#id_rules').val(data.message.rules);
                    $('#url_menu').val(data.message.url);
                    $('#order_menu').val(data.message.order);
                    $('#icon_menu').val(data.message.icon);
                    $('#status').select2().val(data.message.status).trigger('change');
                    if (data.message.type == 'Y') {
                        $('#nama_rules').val('');
                        $('input[name="nama_rules"]').removeAttr('required').attr('disabled', '');
                    } else if (data.message.type == 'N') {
                        $('#nama_rules').val(data.message.access);
                        $('input[name="nama_rules"]').attr('required', '').removeAttr('disabled');
                    }
                }
                $('#frmEntry').waitMe('hide');
            }
        });
    }
    $(document).on('click', '.btnDelete', function(e) {
        e.preventDefault();
        let postData = {
            'tokenId': $(this).data('id'),
            '<?php echo $this->security->get_csrf_token_name(); ?>': $('input[name="' + csrfName + '"]').val()
        };
        run_waitMe($('#tblList'));
        swalKonfirmasi.fire({
            title: 'Konfirmasi',
            text: 'Apakah anda ingin menghapus data ini ?'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: site + '/delete',
                    type: "POST",
                    data: postData,
                    dataType: "json",
                }).done(function(data) {
                    $('input[name="' + csrfName + '"]').val(data.csrfHash);
                    if (data.status == 'RC404') {
                        swalInformasi.fire({
                            title: 'Gagal Dihapus',
                            text: data.message,
                            icon: 'error'
                        })
                    } else {
                        getDataListMenu();
                        swalInformasi.fire({
                            title: 'Berhasil Dihapus',
                            text: data.message,
                            icon: 'success'
                        })
                    }
                }).fail(function() {
                    swalFail.fire();
                }).always(function() {
                    $('#tblList').waitMe('hide');
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                $('#tblList').waitMe('hide');
                swalBatalHapus.fire();
            }
        })
    });
    $(document).on('keypress keyup', '.nominal', function(e) {
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            return false;
        }
    });
    $('#modalModuleList').on('hide.bs.modal', function(e) {
        myModal.toggle();
    });

    // $('#modalModuleList').on('hidden.bs.modal', function (e) {
    //     $('body').addClass('modal-open');
    // });
    // $('#form').on('hidden.bs.modal', function (e) {
    //     $('body').addClass('modal-open');
    // });
</script>