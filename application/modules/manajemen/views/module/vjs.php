<script src="<?= base_url('assets/'); ?>js/select2/select2.full.min.js"></script>
<script type="text/javascript">
    getDataListModule();
    var myModal = new bootstrap.Modal(document.getElementById('form'), {
        backdrop: 'static',
        keyboard: false,
    });
    var myModalRules = new bootstrap.Modal(document.getElementById('modalRulesForm'), {
        backdrop: 'static',
        keyboard: false,
    });
    // select2
    $(".select2").select2({
        dropdownParent: $('#form'),
        placeholder: "Pilih Data",
        allowClear: true
    });
    $(".select21").select2({
        dropdownParent: $('#modalRulesForm'),
        placeholder: "Pilih Data",
        allowClear: true
    });
    $("#refresh").on('click', function() {
        getDataListModule();
    });
    function getDataListModule() {
        $('#tblList').dataTable({
            "destroy": true,
            "processing": true,
            "ordering": true,
            "stateSave": true,
            "serverSide": true,
            "ajax": {
                "url": site + '/listview',
                "type": "POST",
                "data": {
                    "<?php echo $this->security->get_csrf_token_name(); ?>": $('input[name="' + csrfName + '"]').val()
                },
                "beforeSend": function() {
                    run_waitMe($("#tblList"));
                },
                "complete": function() {
                    $('#tblList').waitMe('hide');
                }
            },
            "columnDefs": [
                {
                    "targets": [ 0 ], //first column
                    "orderable": false, //set not orderable
                    "className":'text-center'
                },
            ],
        });
    }
    //reset
    $(document).on('click', '#btnReset', function(e) {
        formReset();
    });
    //panggil form Entri
    $(document).on('click', '#btnAdd', function(e) {
        formReset();
        $("#judulForm").html('Input Data Module');
        myModal.toggle();
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
                        getDataListModule();
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
        $("#judulForm").html('Edit Data Module');
        $('#formEntry').attr('action', site + '/update');
        var token = $(this).data('id');
        myModal.toggle();
        getDataModule(token);
    });
    function getDataModule(token) {
        $.ajax({
            type: 'POST',
            url: site + '/details',
            data: {
                'token': token,
                '<?php echo $this->security->get_csrf_token_name(); ?>': $('input[name="' + csrfName + '"]').val()
            },
            dataType: 'json',
            beforeSend: function() {
                run_waitMe($("#formEntry"));
            },
            success: function(data) {
                $('input[name="' + csrfName + '"]').val(data.csrfHash);
                if (data.status == 'RC200') {
                    $('input[name="tokenId"]').val(token);
                    $('#label_module').val(data.message.label);
                    $('#nama_module').val(data.message.nama);
                    $('#url_module').val(data.message.url);
                    $('#deskripsi_module').val(data.message.ket);
                    $('#status').val(data.message.status).trigger("change");
                }
                $('#formEntry').waitMe('hide');
            }
        });
    }
    $(document).on('click', '.btnDelete', function(e){
        e.preventDefault();
        let postData = {
            'tokenId': $(this).data('id'),
            '<?php echo $this->security->get_csrf_token_name(); ?>' : $('input[name="'+csrfName+'"]').val()
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
                    $('input[name="'+csrfName+'"]').val(data.csrfHash);
                    if(data.status == 'RC404') {
                        swalInformasi.fire({
                            title: 'Gagal Dihapus',
                            text: data.message,
                            icon: 'error'
                        })
                    } else {
                        getDataListModule();
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
            } else if (result.dismiss === Swal.DismissReason.cancel ) {
                $('#tblList').waitMe('hide');
                swalBatalHapus.fire();
            }
        })
    });
    //panggil form Rule
    $(document).on('click', '.btnRules', function(e) {
        $('#formSettingRules').hide();
        $('.eventRules').hide();
        myModalRules.toggle();
        let token = $(this).data('id');
        let label = $(this).closest('tr').find('td.lblModule').text();
        $('input[name="tokenRules"]').val(token);
        $('.lblMod').text(label);
        getDataListRules(token);
    });
    $(document).on('click', '.btnSetting', function(e) {
        $(".select21").val('').trigger('change');
        $('#formSettingRules').slideToggle('slow');
    });
    $(document).on('submit', '#formRules', function(e) {
        e.preventDefault();
        let postData = $(this).serialize();
        let formActionURL = $(this).attr("action");
        swalKonfirmasi.fire({
            title: 'Konfirmasi',
            text: 'Apakah anda ingin menyimpan data ini ?',
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: formActionURL + '/new-rules',
                    type: "POST",
                    data: postData,
                    dataType: "json",
                    beforeSend: function() {
                        run_waitMe($("#formRules"));
                    }
                }).done(function(data) {
                    $('input[name="' + csrfName + '"]').val(data.csrfHash);
                    if (data.status == 'RC404') {
                        $('#formRules').addClass('was-validated');
                        swal404.fire().then((result) => {
                            if (result.value) {
                                $('#errRules').html(msg.error('Silahkan dilengkapi data pada form inputan dibawah'));
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
                        $('#formSettingRules').slideToggle();
                        getDataListRules(data.kode);
                        swalInformasi.fire({
                            title: 'Berhasil Simpan',
                            text: data.message,
                            icon: 'success'
                        })
                    }
                }).fail(function() {
                    swalFail.fire();
                }).always(function() {
                    $('#formRules').waitMe('hide');
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalBatalSimpan.fire();
            }
        })
    });
    function getDataListRules(token) {
        let html = '';
        $.ajax({
            type: 'GET',
            url: site + '/rules',
            data: {
                'token': token,
                '<?php echo $this->security->get_csrf_token_name(); ?>': $('input[name="' + csrfName + '"]').val()
            },
            dataType: 'json',
            success: function(data) {
                $('input[name="' + csrfName + '"]').val(data.csrfHash);
                if (data.status = 'RC200') {
                    if (Object.keys(data.message).length > 0) {
                        $.each(data.message, function(key, val) {
                            html += ' <tr class="table-info"><td colspan="4"><strong>Nama Kontrol : ' + key + '</strong></td></tr>';
                            let no = 1;
                            $.each(val, function(row, v) {
                                html += '<tr>';
                                html += '<td class="text-center">' +
                                    '<div class="custom-control custom-checkbox ml-2">' +
                                    '<input type="checkbox" class="custom-control-input" name="checkid[]" id="checkid_' + key.toLowerCase().replace(' ', '_') + '_' + no + '" class="checkid" value="' + v['id_rules'] + '">' +
                                    '<label class="custom-control-label" for="checkid_' + key.toLowerCase().replace(' ', '_') + '_' + no + '"></label>' +
                                    '</div>' +
                                    '</td>';
                                html += '<td class="text-center">' + no + '.</td>';
                                html += '<td>' + v['label_fungsi'] + '</td>';
                                html += '<td class="text-center">' + v['status'] + '</td>';
                                html += '</tr>';
                                no++;
                            });
                        });
                    } else
                        html = '<tr><td colspan="4"><i>Tidak Ada Data Rules</i></td></tr>';
                } else
                    html = '<tr><td colspan="4"><i>Tidak Ada Data Rules</i></td></tr>';
                $('#tblRules > tbody').html(html);
            }
        });
    }
    // Handle click on "check all" control
    $(document).on('click', '#checkAll', function() {
        $('#tblRules > tbody input[type="checkbox"]').prop('checked', this.checked).trigger('change');
    });
    // Handle click on "checked" control
    $(document).on('change', '#tblRules > tbody input[type="checkbox"]', function(e) {
        let rowCount = $('#tblRules > tbody input[type="checkbox"]').length;
        let n = $('#tblRules > tbody input[type="checkbox"]').filter(':checked').length;
        if (n > 0) {
            $('.eventRules').show();
            $('#btnDeleteRules').removeAttr('disabled');
            $('#btnAktifRules').removeAttr('disabled');
            $('#btnNonaktifRules').removeAttr('disabled');
        } else {
            $('.eventRules').hide();
            $('#btnDeleteRules').attr('disabled', '');
            $('#btnAktifRules').attr('disabled', '');
            $('#btnNonaktifRules').attr('disabled', '');
        }
        $(this).is(':checked') ? $(this).closest('tr').addClass('table-active') : $(this).closest('tr').removeClass('table-active');
        if (rowCount !== n)
            $('#checkAll').prop('checked', '');
        else
            $('#checkAll').prop('checked', 'checked');
    });
    // Handle click on "tr" control
    $(document).on('click', '#tblRules > tbody > tr', function() {
        let n = $(this).find('input[type="checkbox"]');
        n.prop('checked', (n.is(':checked')) ? false : true).trigger('change');
    });
    //btn delete rules
    $(document).on('click', '#btnDeleteRules', function(e) {
        e.preventDefault();
        let token = $('input[name="tokenRules"]').val();
        let rules = [];
        $.each($('#tblRules > tbody input[type="checkbox"]:checked'), function() {
            rules.push($(this).val());
        });
        const postData = {
            'tokenId': token,
            'rulesId': rules,
            'flag': '<?= $this->encryption->encrypt('DR'); ?>',
            '<?php echo $this->security->get_csrf_token_name(); ?>': $('input[name="' + csrfName + '"]').val()
        };
        // get form action url
        run_waitMe($('#tblRules'));
        swalKonfirmasi.fire({
            title: 'Konfirmasi',
            text: 'Apakah anda ingin menghapus data ini ?'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: site + '/rules/set-rules',
                    type: 'POST',
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
                        getDataListRules(data.kode);
                        swalInformasi.fire({
                            title: 'Berhasil Dihapus',
                            text: data.message,
                            icon: 'success'
                        })
                    }
                }).fail(function() {
                    swalFail.fire();
                }).always(function() {
                    $('#tblRules').waitMe('hide');
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                $('#tblRules').waitMe('hide');
                swalBatalHapus.fire();
            }
        })
    });
    //btn update status aktif
    $(document).on('click', '#btnAktifRules', function(e) {
        e.preventDefault();
        let token = $('input[name="tokenRules"]').val();
        let rules = [];
        $.each($('#tblRules > tbody input[type="checkbox"]:checked'), function() {
            rules.push($(this).val());
        });
        const postData = {
            'tokenId': token,
            'rulesId': rules,
            'flag': '<?= $this->encryption->encrypt('AR'); ?>',
            '<?php echo $this->security->get_csrf_token_name(); ?>': $('input[name="' + csrfName + '"]').val()
        };
        // get form action url
        swalKonfirmasi.fire({
            title: 'Konfirmasi',
            text: 'Apakah anda ingin mengaktifkan fungsi ini ?'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: site + '/rules/set-rules',
                    type: 'POST',
                    data: postData,
                    dataType: "json",
                    beforeSend: function() {
                        run_waitMe($("#tblRules"));
                    }
                }).done(function(data) {
                    $('input[name="' + csrfName + '"]').val(data.csrfHash);
                    if (data.status == 'RC404') {
                        swal404.fire().then((result) => {
                            if (result.value) {
                                $('#errRules').html(msg.error(data.message));
                            }
                        })
                    } else {
                        getDataListRules(data.kode);
                        swalInformasi.fire({
                            title: 'Berhasil Simpan',
                            text: data.message,
                            icon: 'success'
                        })
                    }
                }).fail(function() {
                    swalFail.fire();
                }).always(function() {
                    $('#tblRules').waitMe('hide');
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalBatalSimpan.fire();
            }
        })
    });
    //btn update status non aktif
    $(document).on('click', '#btnNonaktifRules', function(e) {
        e.preventDefault();
        let token = $('input[name="tokenRules"]').val();
        let rules = [];
        $.each($('#tblRules > tbody input[type="checkbox"]:checked'), function() {
            rules.push($(this).val());
        });
        const postData = {
            'tokenId': token,
            'rulesId': rules,
            'flag': '<?= $this->encryption->encrypt('NR'); ?>',
            '<?php echo $this->security->get_csrf_token_name(); ?>': $('input[name="' + csrfName + '"]').val()
        };
        swalKonfirmasi.fire({
            title: 'Konfirmasi',
            text: 'Apakah anda ingin menonaktifkan fungsi ini ?'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: site + '/rules/set-rules',
                    type: 'POST',
                    data: postData,
                    dataType: "json",
                    beforeSend: function() {
                        run_waitMe($("#tblRules"));
                    }
                }).done(function(data) {
                    $('input[name="' + csrfName + '"]').val(data.csrfHash);
                    if (data.status == 'RC404') {
                        swal404.fire().then((result) => {
                            if (result.value) {
                                $('#errRules').html(msg.error(data.message));
                            }
                        })
                    } else {
                        getDataListRules(data.kode);
                        swalInformasi.fire({
                            title: 'Berhasil Simpan',
                            text: data.message,
                            icon: 'success'
                        })
                    }
                }).fail(function() {
                    swalFail.fire();
                }).always(function() {
                    $('#tblRules').waitMe('hide');
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalBatalSimpan.fire();
            }
        })
    });
</script>