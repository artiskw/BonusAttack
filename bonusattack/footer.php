<footer>
    <?php $footer = get_field('footer', 7); ?>
    <div class="footer-container">
        <div class="logo">
            <a href="<?php echo get_site_url(); ?>">
                <?php echo get_option('my_company_logo'); ?>
            </a>
        </div>
        <div class="footer-menu">
            <?php echo wp_nav_menu(array('menu' => 'Main menu')); ?>
        </div>
        <p class="sentence-text"><?php echo $footer['middle_text']; ?></p>
        <div class="icon-container">
            <?php foreach ($footer['icons'] as $icons) : ?>
            <a href="<?php echo $icons['link']; ?>" target="_blank">
                <?php echo $icons['icon']; ?>
            </a>
            <?php endforeach; ?>
        </div>
        <div class="footer-menu-bottom">
            <?php echo wp_nav_menu(array('menu' => 'Footer menu bottom')); ?>
        </div>
        <p class="terms-text"><?php echo $footer['copyright']; ?></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>




