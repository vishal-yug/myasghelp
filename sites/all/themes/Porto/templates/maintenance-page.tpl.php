<?php
/**
 * @file
 * Porto's HTML template.
 */
global $theme_root;
$header_layout = theme_get_setting('header_layout');
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie ie6 <?php if (theme_get_setting('background_color') == 'dark') {print "dark";} ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?><?php if ($language->dir == 'rtl'){ echo " rtl"; } ?>"> <![endif]-->
<!--[if IE 7]>    <html class="ie ie7 <?php if (theme_get_setting('background_color') == 'dark') {print "dark";} ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?><?php if ($language->dir == 'rtl'){ echo " rtl"; } ?>"> <![endif]-->
<!--[if IE 8]>    <html class="ie ie8 <?php if (theme_get_setting('background_color') == 'dark') {print "dark";} ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?><?php if ($language->dir == 'rtl'){ echo " rtl"; } ?>"> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="<?php if(arg(0)== 'index-header-side-header-left' || $header_layout == 'h_side_header_left'): print 'side-header'; elseif(arg(0)== 'index-header-side-header-right' || $header_layout == 'h_side_header_right'): print 'side-header side-header-right'; endif;?> <?php if (theme_get_setting('background_color') == 'dark') {print "dark ";} if(theme_get_setting('site_layout') == 'boxed'){ echo "boxed"; } ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?><?php if ($language->dir == 'rtl'){ echo " rtl"; } ?>"> <!--<![endif]-->
<head>
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <!-- Call bootstrap.css before $scripts to resolve @import conflict with respond.js -->
    <link rel="stylesheet" href="<?php print base_path() . drupal_get_path('theme', 'porto'); ?>/vendor/bootstrap/css/bootstrap.min.css">
    <?php if ($language->dir == 'rtl'): ?>
        <link rel="stylesheet" href="<?php print base_path() . drupal_get_path('theme', 'porto'); ?>/vendor/bootstrap-rtl/bootstrap-rtl.css">
    <?php endif; ?>

    <?php print $styles; ?>
    <?php print $scripts; ?>
    <!-- IE Fix for HTML5 Tags -->
    <!--[if lt IE 9]>
    <![endif]-->

    <!--[if IE]>
    <link rel="stylesheet" href="<?php global $parent_root; echo $parent_root; ?>/css/ie.css">
    <![endif]-->

    <!--[if lte IE 8]>
    <script src="<?php global $parent_root; echo $parent_root; ?>/vendor/respond.js"></script>
    <![endif]-->

    <!-- Web Fonts  -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext" type="text/css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>

    <?php porto_user_css();?>
</head>
<body class="<?php print $classes; ?>"<?php print $attributes;?> <?php if(arg(0) == 'one-page'):?> class="one-page" <?php endif; ?> data-target="<?php if(arg(0) == 'index-corporate-hosting'):?> #navSecondary<?php else: ?>#header<?php endif; ?>" data-spy="scroll" data-offset="100">

<div class="body coming-soon">



<div id="wrapper">
    <header id="header" data-plugin-options='{"stickyEnabled": false}'>
        <div class="header-body">
            <div class="header-top">
                <div class="container">
                    <p>
                        Get in touch! <span class="ml-xs"><i class="fa fa-phone"></i> (123) 456-789</span><span class="hidden-xs"> | <a href="#">mail@domain.com</a></span>
                    </p>
                    <ul class="header-social-icons social-icons hidden-xs">
                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <?php if ($logo): ?>
            <div class="row">
                <div class="col-md-12 center">
                    <div class="logo">
                        <a href="<?php print $front_page; ?>">
                            <img width="111" height="54" src="<?php print $logo; ?>" alt="Porto">
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-12">
                <hr class="tall">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 center">
                <?php if($title): ?>
                    <h1 class="mb-sm small"><?php print $title;?></h1>
                <?php endif;?>
                <p class="lead"><?php print render($page['content']);?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr class="tall">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-support"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4>Whats this about?</h4>
                                <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. Quisque rutrum pellentesque imperdiet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4>Come back later</h4>
                                <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4>Get in Touch</h4>
                                <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="short" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="heading-primary">About Porto</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos... <a href="#" class="btn-flat btn-xs">View More <i class="fa fa-arrow-right"></i></a></p>
                    <hr class="light">
                </div>
                <div class="col-md-3 col-md-offset-1">
                    <h5 class="mb-sm">Contact Us</h5>
                    <span class="phone">(800) 123-4567</span>
                    <p class="mb-none">International: (333) 456-6670</p>
                    <p class="mb-none">Fax: (222) 531-8999</p>
                    <ul class="list list-icons list-icons-sm">
                        <li><i class="fa fa-envelope"></i> <a href="mailto:okler@okler.net">okler@okler.net</a></li>
                    </ul>
                    <ul class="social-icons">
                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-1">
                        <a href="<?php print $front_page; ?>" class="logo">
                            <img alt="Porto Website Template" class="img-responsive" src="<?php print $logo; ?>">
                        </a>
                    </div>
                    <div class="col-md-11">
                        <p>© Copyright 2016. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

</div>
</body>
</html>



