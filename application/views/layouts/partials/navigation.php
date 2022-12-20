<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper">
            <a href="index.html">
                <?= $this->asset->image((isset($appIcon) ? $appIcon : ''), '', array('alt' => 'Logo Pemuda Pasar Baru', 'class' => 'img img-responsive mr-1 ml-1', 'style' => 'width:25px;')); ?>
                <b>Monitoring Aplikasi</b>
            </a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.html"><?= $this->asset->image((isset($appIcon) ? $appIcon : ''), '', array('alt' => 'Logo', 'class' => 'img-fluid', 'style' => 'width:25px;')); ?></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    
                    <?= $this->app_loader->create_menu(); ?>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>