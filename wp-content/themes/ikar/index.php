<?php
get_header(); ?>
    <section class="home-section">
        <div class="home-slider">

			<?php

			$gallery_items = get_posts( array(
				'post_type'   => 'slider-home',
				'numberposts' => 999,
			) );
			if ( $gallery_items ) {
				foreach ( $gallery_items as $item ) {
					$url_image = get_the_post_thumbnail_url( $item->ID, 'full' );
					?>
                    <div class="home-slider__item" style="background-image: url(<?php echo $url_image; ?>);">
                        <div class="home-slider__content">
                            <h1 class="home-slider__title"><?php esc_html_e( $item->post_title ); ?></h1>
                            <div class="home-slider__subtitle">
								<?php esc_html_e( get_post_meta( $item->ID, 'description', 1 ), 'ikar' ); ?>
                            </div>
                            <a class="btn"
                               href="<?php esc_html_e( get_post_meta( $item->ID, 'ling', 1 ), 'ikar' ); ?>"><?php esc_html_e( 'Подробнее', 'ikar' ); ?></a>
                        </div>
                    </div>
				<?php }
			}
			?>
        </div>
    </section>
    <section class="services-section">
        <div class="container-fluid">
            <div class="row">
				<?php
				$services = get_posts( array(
					'post_type'   => 'service',
					'numberposts' => 3,
					'orderby'     => 'date',
				) );

				foreach ( $services as $service ) {
					?>
                    <div class="col-md-4">
                        <a href="<?php echo get_permalink( $service->ID ); ?>">
                            <div class="services-block-home">
                                <div class="services-block-home__img"><img
                                            src="<?php echo get_the_post_thumbnail_url( $service->ID, 'full' ) ?>"
                                            alt="<?php esc_html_e( get_the_title( $service->ID ) ); ?>"/></div>
                                <div class="services-block-home__content">
                                    <div class="services-block-home__title"><?php esc_html_e( $service->post_title ); ?></div>
                                </div>
                            </div>
                        </a>
                    </div>
				<?php } ?>
            </div>
        </div>
    </section>

    <section class="news-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-right"><a class="btn btn--grey" href="news.html">Все новости</a></div>
					<?php
					$news = get_posts( array(
						'post_type'   => 'post',
						'numberposts' => 3,
						'orderby'     => 'date',
					) );
					foreach ( $news as $new ) { ?>
                        <div class="news-small"><span><?php echo get_the_date( 'Y-m-d', $new->ID ); ?></span><a
                                    href="<?php echo get_permalink( $new->ID ) ?>>">
								<?php echo( $new->post_title ); ?></a></div>
					<?php } ?>

                </div>
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center">Немного о нас</h2>
                </div>
				<?php $page_about_us = get_post( 18 ); ?>
                <div class="col-lg-6">
                    <a href="<?php echo get_permalink( $page_about_us->ID ); ?>">
                        <div class="services-block-home">
                            <div class="services-block-home__img"><img
                                        src="<?php echo get_the_post_thumbnail_url( $page_about_us->ID, 'full' ) ?>"
                                        alt=""/></div>
                            <div class="services-block-home__content">
                                <div class="services-block-home__title"><?php echo $page_about_us->post_title ?></div>
                            </div>
                        </div>
                    </a>
                </div>
				<?php $page_partners = get_post( 20 ); ?>
                <div class="col-lg-6">
                    <a href="<?php echo get_permalink( $page_partners->ID ); ?>">
                        <div class="services-block-home">
                            <div class="services-block-home__img"><img
                                        src="<?php echo get_the_post_thumbnail_url( $page_partners->ID, 'full' ) ?>"
                                        alt=""/></div>
                            <div class="services-block-home__content">
                                <div class="services-block-home__title"><?php echo $page_partners->post_title ?></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="index-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center">Индексы Икар</h2>
                    <div class="charts-slider-block">
                        <div class="charts-slider">
                            <div class="slider-wrapper">
                                <div class="slide">
                                    <img src="<?php echo get_upload_dir_custom() . 'charts-img.jpg' ?>"
                                         alt="">
                                </div>
                                <div class="slide">
                                    <img src="<?php echo get_upload_dir_custom() . 'charts-img.jpg' ?>"
                                         alt="">
                                </div>
                                <div class="slide">
                                    <img src="<?php echo get_upload_dir_custom() . 'charts-img.jpg' ?>"
                                         alt="">
                                </div>
                                <div class="slide">
                                    <img src="<?php echo get_upload_dir_custom() . 'charts-img.jpg' ?>"
                                         alt="">
                                </div>
                                <div class="slide">
                                    <img src="<?php echo get_upload_dir_custom() . 'charts-img.jpg' ?>"
                                         alt="">
                                </div>
                                <div class="slide">
                                    <img src="<?php echo get_upload_dir_custom() . 'charts-img.jpg' ?>"
                                         alt="">
                                </div>
                            </div>
                            <div class="slider-arrows slider-arrows__prev"><img
                                        src="<?php echo get_upload_dir_custom() . 'slider-prev.svg' ?>"
                                        alt="arrow-prev">
                            </div>
                            <div class="slider-arrows slider-arrows__next"><img
                                        src="<?php echo get_upload_dir_custom() . 'slider-next.svg' ?>"
                                        alt="arrow-next">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="events-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="event-box">
                        <div class="event-box__img"><img src="<?php echo get_upload_dir_custom() . 'event-cover.jpg' ?>"
                                                         alt=""></div>
                        <div class="event-box__title">Приглашаем на конференцию <span class="red">Где маржа® 2022</span>
                        </div>
                        <div class="event-box__subtitle">
                            13-я Международная Конференция сельскохозяйственных производителей
                            и поставщиков средств производства и услуг для аграрного сектора
                        </div>
                        <div class="text-center"><a class="btn btn--light btn--big" href="http://ikar.ru/gdemarzha">Узнать
                                больше</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section> <?php
get_footer();