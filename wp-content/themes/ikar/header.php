<!DOCTYPE html>
<html lang="<?php echo $_GET['l'] ?? 'ru'; ?>">
<head>
    <title><?php wp_title( '', true ); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
	<?php
	wp_head();
	?>
</head>
<body>
<div class="wrapper">
    <header class="js-header-fixed" id="header">
        <div class="container">
            <div class="header">
                <div class="header__left">
                    <a class="btn btn--header js-drop-click">
                        <img src="<?php echo get_upload_dir_custom() . 'phone-icon.svg'; ?>"
                             alt="">
                        <span><?php esc_html_e( 'Обратный звонок', 'ikar' ); ?></span>
                    </a>
                    <div class="dropdown-form">
                        <form action="">
                            <div class="form-control">
                                <input type="text" placeholder="Имя">
                            </div>
                            <div class="form-control">
                                <input type="tel" placeholder="Телефон">
                            </div>
                            <button class="btn" type="submit"><?php esc_html_e( 'Отправить', 'ikar' ); ?></button>
                        </form>
                    </div>
                    <a class="btn btn--header js-drop-click">
                        <img src="<?php echo get_upload_dir_custom() . 'mail-icon.svg'; ?>" alt="">
                        <span><?php esc_html_e( 'Письмо генеральному директору', 'ikar' ); ?></span>
                    </a>
                    <div class="dropdown-form dropdown-form--second">
                        <form action="">
                            <div class="form-control">
                                <input type="text" placeholder="Имя">
                            </div>
                            <div class="form-control">
                                <input type="tel" placeholder="Телефон">
                            </div>
                            <div class="form-control">
                                <input type="text" placeholder="Ваш вопрос?">
                            </div>
                            <button class="btn" type="submit"><?php esc_html_e( 'Отправить', 'ikar' ); ?></button>
                        </form>
                    </div>
                </div>
                <div class="header__center"><a href="<?php echo is_home() ? '#' : get_home_url(); ?>">
                        <div class="logo">
                            <img class="img" src="<?php echo get_logo(); ?>" alt=""></div>
                    </a></div>
                <div class="header__right">
                    <a class="phone-header" href="tel:+7 (495) 232 90-07">+7 (495) 232 90-07</a>
                    <ul class="lang">
                        <li><a href="<?php echo add_query_arg( [ 'l' => 'en_US' ] ); ?>">En</a></li>
                        <li><a href="<?php echo add_query_arg( [ 'l' => 'ru_RU' ] ); ?>">Rus</a></li>
                    </ul>
                    <ul class="header-controls">
                        <li><a href="<?php echo is_home() ? '#' : get_home_url(); ?>">
                                <img src="<?php echo get_upload_dir_custom() . 'home-icon.svg' ?>" alt="">
                            </a>
                        </li>
                        <li><a class="search-control js-drop-click"> <img
                                        src="<?php echo get_upload_dir_custom() . 'search-icon.svg'; ?>" alt=""></a>
                            <div class="header-search">
                                <form>
                                    <input type="text" placeholder="Поиск">
                                    <button type="submit"><img
                                                src="<?php echo get_upload_dir_custom() . 'search-icon.svg'; ?>" alt="">
                                    </button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="menu-control"><span><?php esc_html_e( 'Меню', 'ikar' ); ?></span></div>
	<?php echo wp_nav_menu( [
		'theme_location'  => '',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu',
		'container_id'    => '',
		'menu_class'      => '',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => '',
	] ); ?>

    <div class="content">
