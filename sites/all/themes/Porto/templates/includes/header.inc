<?php global $base_url,$user;
$contact = theme_get_setting('contact_us');
$contact_link = theme_get_setting('contact_us_link');
$phone_number = theme_get_setting('phone_number');
?>
<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": false, "stickyStartAt": 147, "stickySetTop": "-147px", "stickyChangeLogo": false}'>
<div class="header-body">
<div class="header-top">
    <div class="container">
        <div class="dropdowns-container">
            <?php if ($page['currency'] && module_exists('commerce_multicurrency')) : ?>
            <?php $currency = commerce_currency_load(commerce_multicurrency_get_user_currency_code());?>
            <div class="header-dropdown cur-dropdown">
                <a href="#"><?php print $currency['code']; ?> <i class="fa fa-caret-down"></i></a>

                <div class="header-dropdownmenu">
                    <?php print render($page['currency']); ?>
                </div>
            </div>
            <?php endif;?>
            <?php if($page['language']):?>
            <div class="header-dropdown lang-dropdown">
                <a href="#"><img src="<?php print $base_url;?>/sites/all/modules/languageicons/flags/<?php print $language->language ?>.png" alt="English"><?php print $language->name; ?> <i class="fa fa-caret-down"></i></a>

                <div class="header-dropdownmenu">
                    <?php print render($page['language']);?>
                </div>
            </div>
            <?php endif;?>
            <?php if(module_exists('flag')): ?>
            <div class="compare-dropdown">
                <a href="<?php print $base_url;?>/compare-products"><i class="fa fa-retweet"></i> <?php print t('Compare');?> </a>
            </div>
            <?php endif;?>
        </div>
        <?php if(isset($page['header_top'])):?>
        <?php print render($page['header_top']);?>
        <?php endif;?>

    </div>
</div>
<div class="header-container container">
    <div class="header-row">
        <?php if ($logo): ?>
        <div class="header-column">
            <div class="header-logo">
                <a href="<?php print $front_page; ?>">
                    <img alt="Porto" width="111" height="51" src="<?php print $logo; ?>">
                </a>
            </div>
        </div>
        <?php endif; ?>

        <div class="header-column">
            <div class="row">
                <div class="cart-area">
                    <div class="custom-block">
                        <?php if(isset($phone_number)):?>
                        <i class="fa fa-phone"></i>
                        <span><?php print $phone_number;?></span>
                        <?php endif;?>
                        <?php if(isset($contact)):?>
                        <span class="split"></span>
                        <a href="<?php print $base_url.'/'.$contact_link;?>"><?php print $contact;?></a>
                        <?php endif;?>
                    </div>
                    <?php if($page['header_cart']):
                        $quantity = 0;
						$order = commerce_cart_order_load($user->uid);
                        if ($order) {
                            $wrapper = entity_metadata_wrapper('commerce_order', $order);
                            $line_items = $wrapper->commerce_line_items;
                            $quantity = commerce_line_items_quantity($line_items, commerce_product_line_item_types());
                        }
                        ?>
                    <div class="cart-dropdown">
                        <a href="#" class="cart-dropdown-icon">
                            <i class="minicart-icon"></i>
                            <span class="cart-info">
                                <span class="cart-qty"><?php print $quantity;?></span>
                            </span>
                        </a>
                        <div class="cart-dropdownmenu right">
                            <div class="dropdownmenu-wrapper">
                                <div class="cart-products">
                                    <?php print render($page['header_cart']);?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif;?>
                </div>
                <?php if (isset($page['header_search'])) : ?>
                <div class="header-search">
                    <a href="#" class="search-toggle"><i class="fa fa-search"></i></a>
                    <div class="header-search-wrapper">
                        <?php print render($page['header_search']); ?>
                    </div>
                </div>
                <?php endif; ?>

                <a href="#" class="mmenu-toggle-btn" title="Toggle menu">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<?php if($page['header_menu']):?>
<div class="header-container header-nav">
<div class="container">
<div class="header-nav-main">
<?php print render($page['header_menu']);?>
</div>
</div>
</div>
<?php endif;?>
</div>

</header>