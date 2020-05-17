<!doctype html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Poppins:500|Oswald:400,500|Annie+Use+Your+Telescope:400&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?= get_bloginfo('template_directory') ?>/assets/style/all.min.css?20200202">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_bloginfo('template_directory') ?>/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_bloginfo('template_directory') ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_bloginfo('template_directory') ?>/assets/favicon/favicon-16x16.png">
    <link rel="icon" type="image/x-icon" href="<?= get_bloginfo('template_directory') ?>/assets/favicon/favicon.ico">
    <link rel="manifest" href="<?= get_bloginfo('template_directory') ?>/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?= get_bloginfo('template_directory') ?>/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>InDaHouse Hungary Egyesület</title>
    <?php wp_head() ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148882330-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-148882330-1');
    </script>
</head>
<body>
    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand navbar-dark upper-nav">
            <div class="upper-nav-wrapper d-flex justify-content-end mx-auto">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link py-0 px-0 mr-2 mr-md-4" target="_blank" href="mailto:info@indahousehungary.hu">
                            <i class="material-icons upper-nav-icon">email</i> <span class="d-none d-sm-inline">info@indahousehungary.hu</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-0 px-0 mr-4" target="_blank" href="tel:+36705704950">
                            <i class="material-icons upper-nav-icon">phone_enabled</i> <span class="d-none d-sm-inline">+36705704950‬</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://hu-hu.facebook.com/indahousehungary" target="_blank" class="nav-link navbar-icon facebook mr-2"></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.instagram.com/indahouse.hungary/?hl=hu" target="_blank" class="nav-link navbar-icon instagram mr-2"></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.youtube.com/user/indahousehungary" target="_blank" class="nav-link navbar-icon youtube"></a>
                    </li>
                </ul>
            </div>
        </nav>

        <nav class="main-nav navbar navbar-expand-sm navbar-light bg-white d-flex sticky-top justify-content-end">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Menü">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="main-nav-wrapper d-flex justify-content-sm-start">
                <a href="<?= get_bloginfo( 'wpurl' ) ?>" class="position-fixed logo">
                    <img src="<?= get_bloginfo('template_directory') ?>/assets/svg/logo.svg" alt="InDaHouse Hungary">
                </a>

                <?php wp_nav_menu(array(
                    'theme_location'  => 'mainmenu',
                    'depth'           => 2,
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse pl-sm-8 pl-0',
                    'container_id'    => 'navbarToggler',
                    'menu_class'      => 'navbar-nav text-uppercase py-1 text-center',
                    'link_attrs'      => ['class' => 'nav-link'],
                    'li_attrs'        => ['class' => 'nav-item'],
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                )) ?>

                    <?php /* <?php wp_nav_menu([
                        'theme_location' => 'mainmenu',
                        'container' => '',
                        'fallback_cb' => false,
                        'link_attrs' => ['class' => 'nav-link'],
                        'li_attrs' => ['class' => 'nav-item'],
                        'menu_class' => 'navbar-nav text-uppercase py-1 text-center',
                    ]); ?> */ ?>


                <div class="d-none d-sm-block">
                    <a href="http://www.joszolgalatdij.hu/201617/szia-indahouse-tanoda" target="_blank">
                        <img src="https://indahousehungary.trau.hu/wp-content/themes/indahouse/images/partners/joszolgalati-dij.svg" alt="Jószolgálati díj 2017" width="100" style="width: 59px; margin: -7px;" />
                    </a>
                </div>
            </div>
        </nav>
