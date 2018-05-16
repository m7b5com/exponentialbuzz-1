<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>
				<div class="custom-footer">
					<div class="er-custom-footer">
						<?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
							<div id="et-footer-nav">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'footer-menu',
										'depth'          => '1',
										'menu_class'     => 'bottom-nav',
										'container'      => '',
										'fallback_cb'    => '',
									) );
								?>
							</div>
						<?php endif; ?>

						<div class="er-bsocials">
							<div class="er-sicons"><a href="https://www.facebook.com/exponentialbuzz/" target="_blank"><img src="/wp-content/uploads/2018/03/fcb.png" /></a></div>
							<div class="er-sicons"><a href="https://twitter.com/xponentialbuzz" target="_blank"><img src="/wp-content/uploads/2018/03/twt.png" /></a></div>
							<div class="er-sicons"><a href="https://www.linkedin.com/company/exponential-buzz/?irgwc=1" target="_blank"><img src="/wp-content/uploads/2018/03/link.png" /></a></div>
							<!-- <div class="er-sicons"><a href="#" target="_blank"><img src="/wp-content/uploads/2018/03/inst.png" /></a></div> -->
							<div class="er-fcopyright">Copyright 2018. Exponential.buzz. All right reserved.</div>
						</div>
					</div>


			</div>
				<div id="footer-bottom">
					<div class="container clearfix">

					</div>	<!-- .container -->

				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
</body>
</html>
