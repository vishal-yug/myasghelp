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
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
<?php porto_user_css();?>  
</head>
<body>
<div class="body">
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
</div>
</body>

</html>