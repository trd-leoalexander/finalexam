<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div id="footer" style="top: 3665px;">
			<script>
			if(window.matchMedia('(min-device-width: 320px) and (max-device-width: 480px)').matches){
				$("#footer").css("top", "4315px");
			}
			</script>
				<div id="footObj">
					<div id="pic">
						<img id="img1" src="<?php bloginfo('template_url'); ?>/images/images/foot_bird1.png">
						<img id="img2" src="<?php bloginfo('template_url'); ?>/images/images/foot_bird2.png">
						<img id="img3" src="<?php bloginfo('template_url'); ?>/images/images/foot_tree.png">
					</div>
					<img id="img4" src="<?php bloginfo('template_url'); ?>/images/images/foot_logo.png" alt="Caohagan Island">
					<img id="img5" src="<?php bloginfo('template_url'); ?>/images/images/foot_copyright.png" alt="Copyright(C)2013 Caohagan Island All Rights Reserved.">
				</div>
			</div>
		</footer><!-- #colophon -->
		</div> <!-- wrapper-inner -->
	<?php wp_footer(); ?>
	</div><!-- wrapper-outer -->
</body>
</html>