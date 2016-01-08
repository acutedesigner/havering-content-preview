<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Intranet
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'skeleton' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'skeleton' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'skeleton' ), 'skeleton', '<a href="https://twitter.com/acute_designer" rel="designer">NM Peters</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>

		<script type="text/javascript">
		$(document).ready(function () {
			menuWidth = $('.cssplay_responsive').attr('data-mobile');
			mini = false;
			hidden = true;

		$(window).resize(function() {
			winWidth = $(window).width();
			if ((menuWidth >= winWidth) && !mini) {
				$('.cssplay_responsive').removeClass('cssplay_menu').addClass('cssplay_menu_mini').removeAttr('style'); 
				mini=true;
			}
			if ((menuWidth < winWidth) && mini) {
				$('.cssplay_responsive').removeClass('cssplay_menu_mini').addClass('cssplay_menu').removeAttr('style');
				$('html').removeAttr('style');
				$('.cssplay_overlay').hide();
				$('body').off('touchmove');
				mini=false;
			}
		}).resize();

		$('.cssplay_toggle').click(function(){
			$('html').css({overflow:'hidden'});
			$('body').on('touchmove', function (e) {
				if (!$('.cssplay_responsive').has($(e.target)).length) e.preventDefault();});
			$('.cssplay_responsive').animate({left:0},500);
			$('.cssplay_overlay').fadeIn();
		});
		$('.close').click(function(){
			$('body').off('touchmove');
			$('html').css({overflow:'auto'});
			$('.cssplay_responsive').animate({left:-300},500);
			$('.cssplay_overlay').fadeOut();
		});
		$('.cssplay_overlay').click(function(){
			$('body').off('touchmove');
			$('html').css({overflow:'auto'});
			$('.cssplay_responsive').animate({left:-300},500);
			$(this).fadeOut();
		});

		/* close an open mobile menu if back button is used to return to this page */
		$(window).on("pageshow", function() {
			if (mini) {
				$('body').off('touchmove');
				$('html').css({overflow:'auto'});
				$('.cssplay_responsive').css({left:-300});
				$('.cssplay_overlay').fadeOut();
			}
		});

		});
		</script>
<?php wp_footer(); ?>

</body>
</html>
