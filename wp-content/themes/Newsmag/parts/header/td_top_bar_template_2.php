<?php if (td_util::get_option('tds_top_bar') != 'hide_top_bar') { ?>

    <div class="td-top-bar-container top-bar-style-2">
        <?php locate_template('parts/header/top-widget.php', true); ?>
        <?php locate_template('parts/header/top-menu.php', true); ?>
    </div>

<?php }
    locate_template('parts/header/td-login-modal.php', true);
?>