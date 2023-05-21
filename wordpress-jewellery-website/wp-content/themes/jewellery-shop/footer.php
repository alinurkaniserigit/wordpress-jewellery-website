<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Jewellery Shop
 */
?>
<div id="footer">
  <div class="container">
    <div class="ftr-4-box">
      <?php dynamic_sidebar('footer-nav'); ?>
    </div>
  </div>
  <div class="copywrap text-center">
    <div class="container">
      <a href="<?php echo esc_url(JEWELLERY_SHOP_FOOTER_LINK); ?>" target="_blank"><?php echo esc_html(get_theme_mod('jewellery_shop_copyright_line',__('Jewellery WordPress Theme','jewellery-shop'))); ?></a>      
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>