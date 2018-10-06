<?php $classes .= $submenu ? ' parent' : '';?>
<li class="<?php print $classes;?>">

  <a href="<?php print in_array($item['link']['href'], array('<nolink>')) ? "#" : url($item['link']['href']);?>" class=" <?php if($submenu):?>dropdown-toggle<?php endif;?> <?php print implode(" ", $a_classes);?>">

    <?php print t($item['link']['link_title']);?>
    <?php if(!empty($item_config['caption'])) : ?>
      <?php print t($item_config['caption']);?>
    <?php endif;?>
      <?php if(!empty($item_config['xicon'])) : ?>
          <i class="fa <?php print $item_config['xicon'];?>"></i>
      <?php endif;?>

  </a>
  <?php print $submenu ? $submenu : "";?>
</li>
