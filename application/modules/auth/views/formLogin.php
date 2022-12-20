<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= 'Login | ' . (isset($appName) ? $appName : ''); ?></title>
  <meta name="description" content="<?= isset($appDescs) ? $appDescs : ''; ?>">
  <meta name="author" content="<?= isset($appAuthor) ? $appAuthor : ''; ?>">
  <meta name="keywords" content="<?= isset($appKeys) ? $appKeys : ''; ?>" />
  <link rel="icon" type="image/png" href="<?php echo $this->asset->image_path((isset($appFavico) ? $appFavico : '')) ?>">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">


  <?= $this->asset->css('vendors/icofont.css') ?>
  <?= $this->asset->css('vendors/themify.css') ?>


  <?= $this->asset->css('vendors/bootstrap.css') ?>
  <?= $this->asset->css('style.css') ?>
  <?= $this->asset->css('responsive.css') ?>
  <style>
    .hide {
      display: none;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">

      <div class="col-xl-7 p-0">
        <div class="login-card">
          <div>
            <div><a class="logo text-start" href="index.html"><img class="img-fluid" style="width: 28px;margin-top:-10px;" src="<?php echo $this->asset->image_path('logo_sumbar.png') ?>" alt="looginpage"> <span style="font-size:25px;padding-top:100px;"><?= $appName ?></span></a></div>
            <div class="login-main shadow-lg">
              <?php echo form_open('auth/signin/login', array('id' => 'formLogin', 'novalidate' => '')); ?>
              <?php echo form_hidden('authorization', $this->encryption->encrypt('login')); ?>
              <?php echo $this->session->flashdata('message'); ?>
              <h4>Sign in to account</h4>
              <p>Enter your username & password to login</p>
              <div class="alert alert-danger inverse alert-dismissible fade show hide" id="pesanErr" role="alert"><i class="icon-info-alt"></i>
                <p id="pesanSistem"></p>
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
              </div>
              <div class="app-screen-body" id="pilihRole">
              </div>
              <div class="form-group">
                <label class="col-form-label">Username</label>
                <input class="form-control" type="username" name="username" id="username" required="" placeholder="Username">
              </div>
              <div class="form-group">
                <label class="col-form-label">Password</label>
                <div class="form-input position-relative">
                  <input class="form-control" type="password" name="password" id="password" required="" placeholder="*********">
                  <div class="show-hide"><span class="show"> </span></div>
                </div>
              </div>
              <div class="form-group mb-0">
                <div class="checkbox p-0">
                  <input id="checkbox1" type="checkbox">
                  <label class="text-muted" for="checkbox1">Remember password</label>
                </div>
                <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
              </div>
              <hr class="mt-5">
              <p class="mt-4 mb-0 text-center">Copyright &copy; 2023 - <a href="https://diskominfotik.sumbarprov.go.id/">Diskominfotik</a> | IT Team  </p>
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-5">
        <img class="bg-img-cover bg-center" src="<?php echo $this->asset->image_path('login/5.svg') ?>" alt="looginpage">
      </div>
    </div>
    <?php echo $this->asset->js('jquery-3.5.1.min.js'); ?>
    <?php echo $this->asset->js('bootstrap/bootstrap.bundle.min.js'); ?>
    <?php echo $this->asset->js('icons/feather-icon/feather.min.js'); ?>
    <?php echo $this->asset->js('icons/feather-icon/feather-icon.js'); ?>
    <?php echo $this->asset->js('config.js'); ?>
    <?php echo $this->asset->js('script.js'); ?>

    <script type="text/javascript">
      let csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
      let site = '<?php echo site_url(); ?>';


      function cekKosong(field, pesan) {
        if (field.val() == '') {
          $("#pesanSistem").html(pesan);
          $("#pesanErr").fadeIn("slow");
          $(field).focus();
          return false;
        }
      }

      $(function() {
        $(document).on('submit', '#formLogin', function(e) {
          e.preventDefault();
          $("#pesanErr").hide();
          cekKosong($("#password"), 'Password tidak boleh kosong');
          cekKosong($("#username"), 'Username tidak boleh kosong');
          let postData = $(this).serialize();
          let formActionURL = $(this).attr("action");
          $("#submit").html('<span class="spinner-grow spinner-grow-sm mr-2" role="status" aria-hidden="true"></span>Loading...');
          $("#submit").addClass('disabled');
          $.ajax({
            url: formActionURL,
            type: "POST",
            data: postData,
            dataType: "json"
          }).done(function(data) {
            console.log(data);
            $('input[name="' + csrfName + '"]').val(data.csrfHash);
            if (data.status == 1) {
              location.href = data.message.url;
            } else if (data.status == 2) {
              $('#pilihRole').html(data.message);
            } else {
              $("#pesanSistem").html(data.message.isi);
              $("#pesanErr").fadeIn("slow");
            }
          }).fail(function() {
            $("#pesanSistem").html('Terjadi kesalahan, silahkan coba lagi');
            $("#pesanErr").fadeIn("slow");
          }).always(function(data) {
            $("#submit").html((data.flag == 2) ? 'NEXT' : 'SIGN IN');
            $("#submit").removeClass('disabled');
          });
        });
      });
    </script>
  </div>
</body>

</html>