<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ThemeGrill
 * @subpackage Suffice
 * @since Suffice 1.0.0
 */

?>

		</div><!-- #content -->
	</div> <!-- .container -->

	<?php
	/**
	 * suffice_before_footer hook
	 */
	do_action( 'suffice_before_footer' ); ?>

	<footer>
  <div class="footer-wrapper loc">
    <div class="container">
      <div class="row loc-second-row">
        <div class="col-md-5 col-sm-12 col-xs-12 what-we-do">
          <a target="_blank" class="footer-logo" href="/" title="Localtells">
             <img src="/wp-content/uploads/2017/07/logo-1.png" alt="Localtells.com">
          </a>
          <h4>Our Mission</h4>
          <p>
            At Localtells we're passionate about travel, and we love to share our experience.
            Using our website you can browse or search for hotels, then filter and compare, and even rope your friends into helping you decide.
            We try to make your job easier by including extra travel information, such as city-focused blogposts, events listings and detailed maps.
          </p>
        </div>
        <div class="col-md-5 col-sm-9 col-xs-12 experts">
          <h4>Our Travel Experts</h4>
          <ul>
            <li>
              <img src="//localtells.com/images/ted.jpg" alt=""><span>Ted Jansen</span>
            </li>
            <li>
              <img src="//localtells.com/images/maor.jpg" alt=""><span>Maor Bolokan</span>
            </li>
            <li>
              <img src="/wp-content/uploads/2017/07/konstantin-3-e1500830253477-150x150.jpg" alt=""><span>Konstantin Zavizion</span>
            </li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-12 networks">
          <h4>Follow Us</h4>
          <ul>
            <li class="fb">
              <a target="_blank" href="//www.facebook.com/localtells/"><img src="//localtells.com/images/fb.png" alt=""></a>
            </li>
            <li class="regular-f-link first"><a target="_blank" href="//www.localtells.com/cms/faq">FAQ</a></li>
            <li class="regular-f-link"><a target="_blank" href="//www.localtells.com/cms/about/#privacy-policy">Privacy</a></li> 
            <li class="regular-f-link"><a target="_blank" href="//www.localtells.com/cms/about/">Terms</a></li>
            <li class="regular-f-link"><a target="_blank" href="//www.localtells.com/cms/support">Support</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

	<?php
	/**
	 * suffice_after_footer hook
	 */
	do_action( 'suffice_after_footer' ); ?>

</div><!-- #page -->
<div class="suffice-body-dimmer">
</div>

<?php
/* If woocomemrce is active and show cart icon is active place mini cart */
if ( '1' === suffice_get_option( 'suffice_show_cart', '1' ) && suffice_is_woocommerce_active() ) :
	get_template_part( 'template-parts/woocommerce/mini', 'cart' );
endif;

/* If show preloader is active, show preloader */
if ( '1' === suffice_get_option( 'suffice_show_preloader', '0' ) ) :
	get_template_part( 'template-parts/preloader/preloader', 'main' );
endif;

// Show mobile menu.
get_template_part( 'template-parts/footer/navigation', 'mobile' );
?>

<?php wp_footer(); ?>

</body>
</html>
