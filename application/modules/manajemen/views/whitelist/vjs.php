<script src="<?= base_url('assets/'); ?>js/select2/select2.full.min.js"></script>
<script type="text/javascript">
    getDataListWhiteList();
    var myModal = new bootstrap.Modal(document.getElementById('form'), {
        backdrop: 'static',
        keyboard: false,
    });
    // select2
    $(".select2").select2({
        dropdownParent: $('#form'),
        // placeholder: "Pilih Data",
        allowClear: true
    });
    
    $("#refresh").on('click', function() {
        getDataListWhiteList();
    });
    function getDataListWhiteList() {
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
            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }],
        });
    }
    //panggil form Entri
    $(document).on('click', '#btnAdd', function(e) {
        formReset();
        $("#judulForm").html('Input Data White List');
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
                                $('#frmEntry').waitMe('hide');
                            }
                        })
                    } else if(data.status == "DUP"){
                        swalInformasi.fire({
                            title: 'Gagal Simpan',
                            text: data.message.isi,
                            icon: 'error'
                        })
                    }else {
                        formReset();
                        myModal.toggle();
                        getDataListWhiteList();
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
        $("#judulForm").html('Edit Data White List');
        $('#formEntry').attr('action', site + '/update');
        var token = $(this).data('id');
        myModal.toggle();
        getDataWhiteList(token);
    });
    function getDataWhiteList(token) {
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
                    $('#module').val(data.message.module).trigger("change");
                    $('#kontrol').val(data.message.kontrol).trigger("change");
                    $('#fungsi').val(data.message.fungsi).trigger("change");
                    $('#keterangan').val(data.message.keterangan);
                    $('#status').val(data.message.status).trigger("change");
                }
                $('#formEntry').waitMe('hide');
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
                    $('input[name="'+csrfName+'"]').val(data.csrfHash);
                    if(data.status == 'RC404') {
                        swalInformasi.fire({
                            title: 'Gagal Dihapus',
                            text: data.message,
                            icon: 'error'
                        })
                    } else {
                        getDataListWhiteList();
                        swalInformasi.fire({
                            title: 'Berhasil Dihapus',
                            text: data.message,
                            icon: 'success'
                        })
                    }
                    $('#formParent').waitMe('hide');
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
</script>