<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?=base_url()?>assets/img/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?=base_url()?>assets/img/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>assets/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="<?=base_url()?>assets/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <div id="page-container" class="main-content-boxed">
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="bg-image" style="background-image: url('<?=base_url()?>assets/img/photos/photo34@2x.jpg');">
                    <div class="row mx-0 bg-black-op">
                        <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                            <div class="p-30 invisible" data-toggle="appear">
                                <p class="font-size-h3 font-w600 text-white">
                                    Teste EZOOM - Jones Preira.
                                </p>
                                <p class="font-italic text-white-op">
                                    Copyright &copy; <span class="js-year-copy">2018</span>
                                </p>
                            </div>
                        </div>
                        <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white invisible" data-toggle="appear" data-class="animated fadeInRight">
                            <div class="content content-full">
                                <!-- Header -->
                                <div class="px-30 py-10">
                                    <a class="link-effect font-w700" href="index.html">
                                        <i class="si si-fire"></i>
                                        <span class="font-size-xl text-primary-dark">Ezoom</span>
                                    </a>
                                    <h1 class="h3 font-w700 mt-30 mb-10">Bem vindo ao Dashboard</h1>
                                    <h2 class="h5 font-w400 text-muted mb-0">Faça o login</h2>
                                </div>
                                <!-- END Header -->
                                <?php if (validation_errors()) :?>
                                    <div class="block block-themed">
                                        <div class="block-content bg-pulse-lighter">
                                            <?=validation_errors()?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($this->session->flashdata('logout_msg'))) :?>
                                    <div class="block block-themed">
                                        <div class="block-content bg-pulse-lighter">
                                            <p><?=$this->session->flashdata('logout_msg')?></p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <!-- Sign In Fosrm -->
                                <form class="js-validation-signin px-30" action="<?=base_url()?>index.php/login/validate" method="post">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="text" class="form-control" id="email" name="email">
                                                <label for="login-username">Usuário</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="password" class="form-control" id="password" name="password">
                                                <label for="login-password">Senha</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="login-remember-me" name="login-remember-me">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
                                            <i class="si si-login mr-10"></i> Entrar
                                        </button>                                        
                                    </div>
                                </form>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="<?=base_url()?>assets/js/core/jquery.min.js"></script>
        <script src="<?=base_url()?>assets/js/core/popper.min.js"></script>
        <script src="<?=base_url()?>assets/js/core/bootstrap.min.js"></script>
        <script src="<?=base_url()?>assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="<?=base_url()?>assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="<?=base_url()?>assets/js/core/jquery.appear.min.js"></script>
        <script src="<?=base_url()?>assets/js/core/jquery.countTo.min.js"></script>
        <script src="<?=base_url()?>assets/js/core/js.cookie.min.js"></script>
        <script src="<?=base_url()?>assets/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <script src="<?=base_url()?>assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="<?=base_url()?>assets/js/pages/op_auth_signin.js"></script>
    </body>
</html>