<?php $bread = theme_get_setting('breadcrumbs');?>
<div class="body">
<?php include_once('includes/header.inc');?>

<div class="mobile-nav">

<div class="mobile-nav-wrapper">
<?php print render($page['menu_mobile']);?>
</div>
</div>

<div id="mobile-menu-overlay"></div>

<div role="main" class="main">
<?php if($title && $breadcrumb && $bread == 1 && !drupal_is_front_page()): ?>
    <section class="page-header mb-lg">
        <div class="container">
            <?php print $breadcrumb;?>
        </div>
    </section>
<?php endif;?>
<?php if($page['before_content']):?>
    <?php print render($page['before_content']);?>
<?php endif;?>

    <?php if($page['slider'] || $page['menu_vertical']):?>
        <div class="home-slider-area">
            <div class="container">
                <div class="row">
                    <?php if($page['slider']):?>
                        <div class="col-md-9 col-md-push-3">
                            <?php print render($page['slider']);?>

                        </div>
                    <?php endif;?>
                    <?php if($page['menu_vertical']):?>
                        <div class="col-md-3 col-md-pull-9">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php print render($page['menu_vertical']);?>
                                </div>

                            </div>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    <?php endif;?>

<div class="container">
    <?php print render($title_prefix); ?>
    <div class="row">
        <?php if ($messages): ?>
            <div class="col-md-12">
                <?php print $messages; ?>
            </div>
        <?php endif; ?>
        <?php if ($tabs = render($tabs)): ?>
        <div class="col-md-12">
            <div id="drupal_tabs" class="tabs ">
                <?php print render($tabs); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
            <ul class="action-links">
                <?php print render($action_links); ?>
            </ul>
        <?php endif; ?>
        <?php if($page['sidebar_left']): ?>
            <aside class="col-md-3 sidebar shop-sidebar <?php if(drupal_is_front_page()): print 'home-sidebar'; endif;?>">
                <div class="panel-group">
                    <?php print render($page['sidebar_left']); ?>
                </div>
            </aside>
        <?php endif; ?>

        <div class="<?php if(($page['sidebar_right']) AND ($page['sidebar_left']) ){ echo "col-md-6";} elseif (($page['sidebar_right']) OR ($page['sidebar_left']) ) {  echo "col-md-9"; }else{ echo "col-md-12"; }?>">
            <?php if (isset($page['content'])) { print render($page['content']); } ?>
        </div>



        <?php if($page['sidebar_right']): ?>
            <div class="<?php if ($page['sidebar_left']) { echo "col-md-3";} else { echo "col-md-3 "; } ?>">
                <aside class="sidebar">
                    <?php print render($page['sidebar_right']); ?>
                </aside>
            </div>
        <?php endif; ?>
    </div>

    <?php print render($page['after_content']); ?>
    <?php print render($title_suffix); ?>
</div>


</div>

<?php include_once('includes/footer.inc');?>
</div>
