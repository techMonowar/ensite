<?php
defined('APP_NAME') or die(header('HTTP/1.0 403 Forbidden'));

/*
 * @author Enbiit
 * @Theme: Default Style
 * @copyright 2018 Enbiit.com
 */
?>
<!DOCTYPE html>
<html lang="<?php echo ACTIVE_LANG; ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="<?php echo ACTIVE_LANG; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo $themeOptions['general']['favicon']; ?>">

    <!-- Meta Data -->
    <title><?php echo $metaTitle; ?></title>
    <meta property="site_name" content="<?php echo $site_name; ?>"/>
    <meta name="description" content="<?php echo $des; ?>" />
    <meta name="keywords" content="<?php echo $keyword; ?>" />
    <meta name="author" content="Balaji" />

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $metaTitle; ?>" />
    <meta property="og:site_name" content="<?php echo $site_name; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="<?php echo $des; ?>" />
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400italic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <?php genCanonicalData($baseURL, $currentLink, $loadedLanguages, false, isSelected($themeOptions['general']['langSwitch'])); ?>

    <!-- Stylesheets -->
    <link href="<?php themeLink('css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php themeLink('css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?php themeLink('css/custom.css'); ?>" rel="stylesheet" type="text/css">
    
    <?php if ($isRTL) echo '<link href="' . themeLink('css/rtl.css', true) . '" rel="stylesheet" type="text/css" />'; ?>
    
    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    
    <?php if ($themeOptions['custom']['css'] != '') echo '<style>' . htmlPrint($themeOptions['custom']['css'], true) . '</style>'; ?>
</head>

<body data-spy="scroll" data-target="#scroll-menu" data-offset="50" id="top">

<!-- Mobile Navigation -->
<nav class="mobile-nav animated fadeIn">
    <ul class="main-nav">
        <?php
        foreach ($headerLinks as $headerLink)
            echo $headerLink[1];
        ?>
    </ul>

    <ul class="login-nav">
        <?php echo $loginNav; ?>
    </ul>

    <ul class="main-nav">
        <li class="wrapper-submenu">
            <?php if (isSelected($themeOptions['general']['langSwitch'])) { ?>
                <a href="javascript:void(0)"><?php echo strtoupper(ACTIVE_LANG); ?> <i class="fa fa-angle-down"></i></a>
                <div class="submenu">
                    <ul class="submenu-nav">
                        <?php foreach ($loadedLanguages as $language) {
                            echo '<li><a href="' . $baseURL . $language[2] . '">' . $language[3] . '</a></li>';
                        } ?>
                    </ul>
                    <span class="arrow"></span>
                </div>
            <?php } ?>
        </li>
    </ul>
</nav>
<!-- End Mobile Navigation -->

<div class="main-content">
    <!-- Desktop Navigation -->
    <div class="wrapper-header navbar-fixed-top">
        <div class="container main-header" id="header">
            <a href="<?php createLink(); ?>">
                <div class="logo animated slideInDown">
                    <?php echo $themeOptions['general']['themeLogo']; ?>
                </div>
            </a>
            <a href="javascript:void(0)" class="start-mobile-nav"><span class="fa fa-bars"></span></a>
            <nav class="desktop-nav animated fadeIn">
                <ul class="main-nav">
                    <?php
                    foreach ($headerLinks as $headerLink)
                        echo $headerLink[1];
                    ?>
                </ul>
                <ul class="login-nav">
                    <?php if (isSelected($themeOptions['general']['langSwitch'])) { ?>
                        <li class="dropdown">
                            <a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle"
                               aria-expanded="false"><i class="fa fa-globe fa-lg"></i></a>
                            <ul class="dropdown-menu">
                                <?php foreach ($loadedLanguages as $language) {
                                    echo '<li><a href="' . $baseURL . $language[2] . '">' . $language[3] . '</a></li>';
                                } ?>
                            </ul>
                        </li>
                        <li class="lang-li"><a><?php echo strtoupper(ACTIVE_LANG); ?></a></li>
                    <?php }
                    echo $loginNav;
                    ?>
                </ul>
            </nav>
        </div>
    </div>
    <!-- End Desktop Navigation -->

    <?php if ($controller == CON_MAIN) { ?>
        <section class="headturbo animated fadeIn" id="headturbo">
            <div class="headturbo-wrap" id="headturbo-wrap">
                <div class="texture-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div style="height: 870px;" class="headturbo-img pull-right hidden-xs">
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="headturbo-content">
                                <h1 class="pulse"><?php trans('Instantly Analyze Your SEO Issues', $lang['145']); ?></h1>
                                <h2><?php trans('Helps to identify your SEO mistakes and better optimize your site content.', $lang['146']); ?></h2>
                                <form class="turboform" method="POST"
                                      action="<?php createLink('domain'); ?>" onsubmit="return fixURL();">
                                    <div class="input-group review">
                                        <input type="text" autocomplete="off" spellcheck="false" class="form-control"
                                               placeholder="<?php trans('Type Your Website Address', $lang['147']); ?>"
                                               name="url"/>
                                        <span class="input-group-btn"> <button class="btn btn-green" type="submit"
                                                                             id="review-btn"><span
                                                        class="glyphicon glyphicon-search"></span> <?php trans('REVIEW', $lang['148']); ?>
                                            </button></span>
                                    </div>
                                </form>
                                <br/>
                                <ul class="top-link list-inline">
                                    <?php
                                    if ($themeOptions['general']['example1'] != '') echo '<li><a href="' . $baseLink . 'domain/' . $themeOptions['general']['example1'][0] . '">' . htmlPrint($themeOptions['general']['example1'][1], true) . '</a></li>';
                                    if ($themeOptions['general']['example2'] != '') echo '<li><a href="' . $baseLink . 'domain/' . $themeOptions['general']['example2'][0] . '">' . htmlPrint($themeOptions['general']['example2'][1], true) . '</a></li>';
                                    if ($themeOptions['general']['example3'] != '') echo '<li><a href="' . $baseLink . 'domain/' . $themeOptions['general']['example3'][0] . '">' . htmlPrint($themeOptions['general']['example3'][1], true) . '</a></li>';
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } else { ?>
        <div class="bg-primary-color page-block animated fadeIn">
            <div class="container">
                <h1 class="pageTitle text-center"><?php echo $pageTitle; ?></h1>
            </div>
        </div>
    <?php } ?>
</div>
</body>
</html>
