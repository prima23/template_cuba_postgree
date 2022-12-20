<!DOCTYPE html>
<html lang="in">
<?= isset($template['partials']['header']) ? $template['partials']['header'] : ''; ?>
</head>

<body>
    <div class="loader-wrapper">
        <div class="loader-index"><span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
            </filter>
        </svg>
    </div>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <?= isset($template['partials']['title']) ? $template['partials']['title'] : ''; ?>
        <!-- Page Header Ends-->

        <div class="page-body-wrapper horizontal-menu">
            <!-- Page Sidebar Start-->
            <?= isset($template['partials']['navigation']) ? $template['partials']['navigation'] : ''; ?>
            <!-- Page Sidebar Ends-->

            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title pb-0">
                        <div class="row">
                            <div class="col-6">
                                <h6><?= isset($page_name) ? $page_name : ''; ?></h6>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>"> <i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item"><?= isset($page_name) ? $page_name : ''; ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid mt-3">
                    <div class="row">
                        <?= isset($template['body']) ? $template['body'] : ''; ?>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <?= isset($template['partials']['footer']) ? $template['partials']['footer'] : ''; ?>
        </div>
    </div>
    <?= isset($template['partials']['javascript']) ? $template['partials']['javascript'] : ''; ?>
</body>

</html>