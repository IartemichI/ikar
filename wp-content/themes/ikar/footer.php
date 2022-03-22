</div>
<footer class="footer"
        style="background: url(<?php echo get_upload_dir_custom() . '/footer-bg.png'; ?>) center center / cover no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6"><a href="<?php echo is_home() ? '#' : get_home_url(); ?>">
                    <div class="logo">
                        <img class="img" src="<?php echo get_logo(); ?>" alt="logo">
                    </div>
                </a></div>

			<?php echo wp_nav_menu( [
				'theme_location'  => '',
				'menu'            => '',
				'container'       => 'div',
				'container_class' => 'col-lg-3 col-md-6',
				'container_id'    => '',
				'menu_class'      => '',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul class="footer__menu">%3$s</ul>',
				'depth'           => 0,
				'walker'          => '',
			] ); ?>

            <div class="col-lg-3 col-md-6">
                <div class="footer__address">
                    <p>
						<?php esc_html_e( '109428, Москва,
                        Рязанский пр-т, д. 24 к. 1,
                        Бизнес-центр "Рязанский 24" (правый подъезд),
                        офис 607, ИКАР', 'ikar' ); ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer__info">
                    <ul class="social">
                        <li><a href="#" target="_blank"><img
                                        src="<?php echo get_upload_dir_custom() . 'telegram.svg'; ?>" alt=""></a></li>
                        <li><a href="#" target="_blank"><img
                                        src="<?php echo get_upload_dir_custom() . 'facebook.svg'; ?>" alt=""></a></li>
                        <li><a href="#" target="_blank"><img
                                        src="<?php echo get_upload_dir_custom() . 'instagram.svg'; ?>" alt=""></a></li>
                        <li><a href="#" target="_blank"><img
                                        src="<?php echo get_upload_dir_custom() . 'youtube.svg'; ?>" alt=""></a></li>
                    </ul>
                    <div class="phone"><a href="tel:74952329007">+7 (495) 232-90-07</a></div>
                    <div class="mail"><a href="mailto:mail@ikar.ru">mail@ikar.ru </a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</div>
</body>
</html>