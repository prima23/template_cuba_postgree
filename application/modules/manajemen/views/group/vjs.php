<script src="<?= base_url('assets/'); ?>js/select2/select2.full.min.js"></script>
<script type="text/javascript">
    getDataListGroup();
    var myModal = new bootstrap.Modal(document.getElementById('form'), {
        backdrop: 'static',
        keyboard: false,
    });
    var myModalRules = new bootstrap.Modal(document.getElementById('modalRulesForm'), {
        backdrop: 'static',
        keyboard: false,
    });
    $("#refresh").on('click', function() {
        getDataListGroup();
    });
    // select2
    $(".select2").select2({
        dropdownParent: $('#form'),
        placeholder: "Pilih Data",
        allowClear: true
    });
    function getDataListGroup() {
        $('#tblList').dataTable({
            "pagingType": "full_numbers",
            "destroy": true,
            "processing":true,
            "serverSide": true,
            "stateSave" : true,
            "ordering": false,
            "ajax": {
                "url": site + '/listview',
                "type": "POST",
                "data": {
                    "<?php echo $this->security->get_csrf_token_name(); ?>" : $('input[name="'+csrfName+'"]').val()
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
                {
                    "targets": [ 1 ], //second column
                    "className":'lblGroup'
                },
            ],
        });
        $('#tblList_filter input').addClass('form-control').attr('placeholder','Search Data');
        $('#tblList_length select').addClass('form-control');
    }
    //panggil form Entri
    $(document).on('click', '#btnAdd', function(e){
        formReset();
        $("#judulForm").html('Input Data Group');
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
                    $('input[name="'+csrfName+'"]').val(data.csrfHash);
                    if(data.status == 'RC404') {
                        $('#formEntry').addClass('was-validated');
                        swal404.fire().then((result) => {
                            if (result.value) {
                                $('#errEntry').html(msg.error('Silahkan dilengkapi data pada form inputan dibawah'));
                                $.each(data.message, function(key,value){
                                    if(key != 'isi')
                                        $('input[name="'+key+'"], select[name="'+key+'"]').closest('div.required').find('div.invalid-feedback').text(value);
                                    else {
                                        $('#pesanErr').html(value);
                                    }
                                });
                            }
                        })
                    } else {
                        formReset();
                        myModal.toggle();
                        getDataListGroup();
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
            } else if (result.dismiss === Swal.DismissReason.cancel ) {
                swalBatalSimpan.fire();
            }
        })
    });
    $(document).on('click', '.btnEdit', function(e) {
        formReset();
        $("#judulForm").html('Edit Data Group');
        $('#formEntry').attr('action', site + '/update');
        var token = $(this).data('id');
        myModal.toggle();
        getDataGroup(token);
    });
    function getDataGroup(token) {
        $.ajax({
            type: 'POST',
            url: site + '/details',
            data: {'token' : token, '<?php echo $this->security->get_csrf_token_name(); ?>' : $('input[name="'+csrfName+'"]').val()},
            dataType: 'json',
            beforeSend: function() {
                run_waitMe($("#formEntry"));
            },
            success: function(data) {
                $('input[name="'+csrfName+'"]').val(data.csrfHash);
                if(data.status == 'RC200') {
                    $('input[name="tokenId"]').val(token);
                    $('#nama_group').val(data.message.nama);
                    $('#level_akses').val(data.message.akses).trigger("change");
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
                        getDataListGroup();
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
    //panggil form privilege
    $(document).on('click', '.btnPrivilage', function(e) {
        myModalRules.toggle();
        let token = $(this).data('id');
        let label = $(this).closest('tr').find('td.lblGroup').text();
        $('input[name="tokenGroup"]').val(token);
        $('.lblNameGroup').text(label);
        getDataListPrivilage(token);
    });
    //panggil data privilege
    function getDataListPrivilage(token) {
        let html = '';
        $.ajax({
            type: 'GET',
            url: site + '/privileges',
            data: {'token' : token, '<?php echo $this->security->get_csrf_token_name(); ?>' : $('input[name="'+csrfName+'"]').val()},
            dataType: 'json',
            success: function(data) {
                $('input[name="'+csrfName+'"]').val(data.csrfHash);
                if(data.status = 'RC200') {
                    if(Object.keys(data.message).length > 0) {
                        html += '<div class="contact-form">';
                        $.each(data.message, function(listmodule, module){
                            let m_class = 'm_'+ listmodule.toLowerCase().replace(' ', '');
                            html += '<div class="theme-form mb-3">';
                                html += '<div class="row border-bottom">';
                                    html += '<div class="col-12">';
                                        html += '<label class="d-block" for="'+m_class+'">';
                                            html += '<input class="checkbox_animated checkall" id="'+m_class+'" type="checkbox"><span class="namamodule"><small class="text-muted">Module | </small>'+listmodule+'</span>';
                                        html += '</label>';
                                    html += '</div>';
                                html += '</div>';
                                html += '<div class="row">';
                                    let i=0;
                                    $.each(module, function(listkontrol, kontrol){
                                        i++;
                                        let k_class = m_class+'_'+'k_'+ listkontrol.toLowerCase().replace(' ', '');
                                        html += '<div class="col-6 col-sm-6 col-md-6 mt-3">';
                                            html += '<label class="d-block border-bottom pb-2" for="'+k_class+'">';
                                                html += '<input class="checkbox_animated checkall '+m_class+'" id="'+k_class+'" type="checkbox"><span class="namakontrol"><small class="text-muted">Kontrol | </small>'+listkontrol+'</span>';
                                            html += '</label>';
                                            $.each(kontrol, function(fungsi, row){
                                                let f_class = k_class+'_'+'f_'+ row['title_fungsi'].toLowerCase().replace(' ', '');
                                                
                                                html += '<label class="d-block" for="'+f_class+'">';
                                                    html += '<input name="prvlg[]" class="checkbox_animated checkall '+m_class+' '+k_class+'" id="'+f_class+'" type="checkbox" value="'+row.id_rules+'" '+row.checked+'><span class="namafungsi">'+row.title_fungsi+'</span>';
                                                html += '</label>';
                                            });
                                        html += '</div>';
                                        if(i==4) html += '</div><div class="row mt-2">';
                                    });
                                html += '</div>';
                            html += '</div>';
                        });
                        html += '</div>';
                    } else
                        html = '';
                } else
                    html = '';
                $('#listRules').html(html);
                checkedParent();
            }
        });
    }
    function checkedParent() {
        $.each($('input[name="prvlg[]"]:checked'), function(){
            let classNames = $(this).attr('class').split(' ');
            for (index = classNames.length - 1; index > 0; --index) {
                let lenAll = $('.' + classNames[index]).length;
                //hitung semua chekbox yang di ckelist
                let lenIsChecked = $('.' + classNames[index] + ':checked').length;
                //jika hasilnya sama maka lakukan checklis
                $.each($('#' + classNames[index]), function () {
                    if (lenAll === lenIsChecked)
                        this.checked = true;
                    else
                        this.checked = false;
                });
            }
        });
    }
    // Handle click on "checked" control
    $(document).on('change', 'input[type="checkbox"]', function () {
        //cek ke bawah
        let id = $(this).attr('id');
        if($('#'+id).is(':checked')){
            $('.'+id).prop('checked', 'checked');
        } else {
            $('.'+id).prop('checked', '');
        }
        //cek ke atas
        let classNames = $(this).attr('class').split(' ');
        for (index = classNames.length - 1; index > 0; --index) {
            let lenAll = $('.' + classNames[index]).length;
            //hitung semua chekbox yang di ckelist
            let lenIsChecked = $('.' + classNames[index] + ':checked').length;
            //jika hasilnya sama maka lakukan checklis
            $.each($('#' + classNames[index]), function () {
                if (lenAll === lenIsChecked)
                    this.checked = true;
                else
                    this.checked = false;
            });
        }
    });
    //btn save rules
    $(document).on('click', '#btnSaveRules', function (e){
        e.preventDefault();
        let token = $('input[name="tokenGroup"]').val();
        let rules = [];
        $.each($('#listRules input[type="checkbox"][name="prvlg[]"]:checked'), function(){
            rules.push($(this).val());
        });
        const postData = {
            'tokenId': token,
            'rulesId': rules,
            '<?php echo $this->security->get_csrf_token_name(); ?>': $('input[name="' + csrfName + '"]').val()
        };
        swalKonfirmasi.fire({
            title: 'Konfirmasi',
            text: 'Apakah anda ingin menyimpan data ini ?',
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: site + '/privileges/save-access',
                    type: 'POST',
                    data: postData,
                    dataType: "json",
                    beforeSend: function() {
                        run_waitMe($("#formrul"));
                    }
                }).done(function(data) {
                    $('input[name="'+csrfName+'"]').val(data.csrfHash);
                    if(data.status == 'RC404') {
                        swal404.fire().then((result) => {
                            if (result.value) {
                                $('#errRules').html(msg.error(data.message));
                                $('#frmRules').waitMe('hide');
                            }
                        })
                    } else {
                        myModalRules.toggle();
                        getDataListGroup();
                        swalInformasi.fire({
                            title: 'Berhasil Simpan',
                            text: data.message,
                            icon: 'success'
                        })
                    }
                }).fail(function() {
                    swalFail.fire();
                }).always(function() {
                    $('#formrul').waitMe('hide');
                });
            } else if (result.dismiss === Swal.DismissReason.cancel ) {
                swalBatalSimpan.fire();
            }
        })
    });
</script>