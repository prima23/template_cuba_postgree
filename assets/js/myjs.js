const swalInformasi = Swal.mixin({
  position: "center",
  showConfirmButton: true,
  confirmButtonText: '<i class="icon-check"></i> Oke',
  timer: 2000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener("mouseenter", Swal.stopTimer);
    toast.addEventListener("mouseleave", Swal.resumeTimer);
  },
});

const swalBatalSimpan = Swal.mixin({
  position: "center",
  showConfirmButton: true,
  title: 'Batal Simpan',
  text: 'Proses simpan data telah dibatalkan.',
  icon: 'error',
  confirmButtonText: '<i class="icon-check"></i> Oke',
  timer: 2000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener("mouseenter", Swal.stopTimer);
    toast.addEventListener("mouseleave", Swal.resumeTimer);
  },
});

const swalBatalHapus = Swal.mixin({
  position: "center",
  showConfirmButton: true,
  title: 'Batal Dihapus',
  text: 'Proses hapus data telah dibatalkan.',
  icon: 'error',
  confirmButtonText: '<i class="icon-check"></i> Oke',
  timer: 2000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener("mouseenter", Swal.stopTimer);
    toast.addEventListener("mouseleave", Swal.resumeTimer);
  },
});

const swal404 = Swal.mixin({
  position: "center",
  showConfirmButton: true,
  title: 'Batal Simpan',
  text: 'Proses simpan data gagal, silahkan diperiksa kembali.',
  icon: 'error',
  confirmButtonText: '<i class="icon-check"></i> Oke',
  timer: 2000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener("mouseenter", Swal.stopTimer);
    toast.addEventListener("mouseleave", Swal.resumeTimer);
  },
});

const swalFail = Swal.mixin({
  position: "center",
  showConfirmButton: true,
  title: 'Batal Simpan',
  text: 'Proses simpan data telah dibatalkan, Proses simpan tidak berjalan.',
  icon: 'error',
  confirmButtonText: '<i class="icon-check"></i> Oke',
  timer: 2000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener("mouseenter", Swal.stopTimer);
    toast.addEventListener("mouseleave", Swal.resumeTimer);
  },
});

const swalKonfirmasi = Swal.mixin({
  customClass: {
    confirmButton: "btn btn-success",
    cancelButton: "btn btn-danger",
  },
  buttonsStyling: false,
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: '<i class="icon-check"></i> Ya, lanjutkan',
  cancelButtonText: '<i class="icon-close"></i> Tidak, batalkan',
  reverseButtons: true,
});

function formReset(tambahan) {
    // $('.select2').select2().val('1').trigger("change");
    $('#formEntry').attr('action', site + '/create');
    $(".select2").val('').trigger('change');
    $('#errEntry').html('');
    $('form#formEntry').trigger('reset');
    $('form#formEntry').removeClass('was-validated');
    tambahan;
}

function run_waitMe(element,text='Mohon tunggu...',posisi='vertical') {
  element.waitMe({
      effect: 'roundBounce',
      text: text,
      bg: 'rgba(255,255,255,0.7)',
      color: '#000',
      maxSize: 600,
      waitTime: -1,
      textPos: posisi,
      source: '',
      fontSize: '',
      onClose: function(el) {
          
      }
  });
}

function run_waitMe2(element,text='Mohon tunggu...',posisi='horizontal') {
  element.waitMe({
      effect: 'facebook',
      text: text,
      bg: 'rgba(255,255,255,0.7)',
      color: '#000',
      maxSize: 600,
      waitTime: -1,
      textPos: posisi,
      source: '',
      fontSize: '',
      onClose: function(el) {
          
      }
  });
}


// $(".select2-selection__clear").on('click', function () {
//   console.log('clear');
//   $(this).closest().closest().closest().closest().removeClass("select2-container--below");
// });



// ToastKonfirmasi.fire({
//     title: 'Are you sure?',
//     text: "You won't be able to revert this!",
//     icon: 'warning',
//     showCancelButton: true,
//     confirmButtonText: 'Yes, delete it!',
//     cancelButtonText: 'No, cancel!'
// }).then((result) => {
//     if (result.isConfirmed) {
//         ToastInformasi.fire(
//             'Deleted!',
//             'Your file has been deleted.',
//             'success'
//         )
//     } else if (
//         /* Read more about handling dismissals below */
//         result.dismiss === Swal.DismissReason.cancel
//     ) {
//         ToastInformasi.fire(
//             'Cancelled',
//             'Your imaginary file is safe :)',
//             'error'
//         )
//     }
// })

// ToastInformasi.fire({
//     icon: 'success',
//     title: 'Signed in successfully',
//     text: 'Welcome to the application'
// })

// $("#tblList").DataTable({
//     "saveState": true,
//     "columnDefs": [{
//         "targets": 3,
//         "render": $.fn.dataTable.render.number( ',', '.', 3 )
//     }]
// });
