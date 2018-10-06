<?php $menu_layout = theme_get_setting('menu_layout');?>
<?php if(isset($menu_layout) && $menu_layout == 'vertical'):?>
    <ul class="home-side-menu"><?php print $content;?></ul>
<?php else:?>
    <nav>
        <ul class="nav nav-pills" id="mainNav"><?php print $content;?></ul>
    </nav>
<?php endif;?>