<div class="page-header">
  <div class="header-wrapper row m-0">
    <div class="header-logo-wrapper col-auto p-0">
      <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="<?= base_url(); ?>/assets/img/logo.png" alt=""></a></div>
      <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
    </div>
    <div class="left-header col horizontal-wrapper ps-0">
      <?= '<i>' . (isset($app_name) ? $app_name : '') . '</i>'; ?>
    </div>
    <div class="nav-right col-8 pull-right right-header p-0">
      <ul class="nav-menus">
        <?php if($this->session->ngroup > 1): ?>
        <li class="onhover-dropdown">
          <div class=""><i data-feather="repeat"></i></div>
          <div class="onhover-show-div notification-dropdown">
            <h6 class="f-18 mb-0 dropdown-title">Rubah Akses </h6>
            <ul>
              <?php foreach($this->session->group_switch as $level): ?>
                <li class="b-l-primary border-4 p-2 switchl">
                <p class="switch_group" data-id="<?= $level["id_group"] ?>"><?= $level["nama_group"] ?><span class="font-danger"><i class="fa fa-user"></i></span></p>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </li>
        <?php endif; ?>
        <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>

        <li class="profile-nav onhover-dropdown p-0 me-0">
          <div class="media profile-media"><img class="b-r-10" style="height:35px" src="<?= base_url(); ?>/assets/img/pp/<?= $this->session->foto_profile ?>" alt="">
            <div class="media-body"><span><?= $this->session->fullname ?></span>
              <p class="mb-0 font-roboto"><?= $this->session->group_name ?> <i class="middle fa fa-angle-down"></i></p>
            </div>
          </div>
          <ul class="profile-dropdown onhover-show-div">
            <li><a href="#"><i data-feather="user"></i><span>Account </span></a></li>
            <!-- <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
            <li><a href="#"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
            <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li> -->
            <li><a href="<?= site_url('auth/signin/logout'); ?>"><i data-feather="log-out"></i> Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>