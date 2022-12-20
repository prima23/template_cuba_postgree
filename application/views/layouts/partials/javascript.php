<script src="<?= base_url('assets/'); ?>js/jquery-3.5.1.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/icons/feather-icon/feather.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/icons/feather-icon/feather-icon.js"></script>
<!-- <script src="<?= base_url('assets/'); ?>js/sidebar-menu.js"></script> -->
<script src="<?= base_url('assets/'); ?>js/scrollbar/simplebar.js"></script>
<script src="<?= base_url('assets/'); ?>js/sweet-alert/dist/sweetalert2.all.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/waitme/waitMe.js"></script>
<script src="<?= base_url('assets/'); ?>js/myjs.js"></script>
<script src="<?= base_url('assets/'); ?>js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/scrollbar/custom.js"></script>
<script src="<?= base_url('assets/'); ?>js/script.js"></script>
<script>
    let csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
    let site = '<?php echo site_url(isset($siteUri) ? $siteUri : ''); ?>';
    let si = '<?php echo base_url(); ?>auth/signin/switch_group/';

    $(".switch_group").on("click", function() {
        // console.log(si);
        run_waitMe($('#pageWrapper'));
        swalKonfirmasi.fire({
            title: 'Konfirmasi',
            text: 'Apakah anda ingin ganti level akses ?'
        }).then((result) => {
            if (result.value) {
                window.location.href = si + $(this).data("id");
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                $('#pageWrapper').waitMe('hide');
                swalInformasi.fire({
                    title: 'Batal ganti level akses',
                    text: 'Membatalkan ganti level akses',
                    icon: 'info'
                })
            }

        })
        // console.log($(this).data("id"));
    });
</script>
<?= isset($page_js) ? $page_js : ''; ?>