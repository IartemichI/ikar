<!DOCTYPE html>
<html lang="ru">
<head>
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
                        <img src="images/phone-icon.svg"
                             alt=""><span>Обратный звонок</span>
                    </a>
                    <div class="dropdown-form">
                        <form action="">
                            <div class="form-control">
                                <input type="text" placeholder="Имя">
                            </div>
                            <div class="form-control">
                                <input type="tel" placeholder="Телефон">
                            </div>
                            <button class="btn" type="submit">Отправить</button>
                        </form>
                    </div>
                    <a class="btn btn--header js-drop-click"><img src="images/mail-icon.svg" alt=""><span>Письмо генеральному директору</span></a>
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
                            <button class="btn" type="submit">Отправить</button>
                        </form>
                    </div>
                </div>
                <div class="header__center"><a href="index.html">
                        <div class="logo"><img class="img" src="images/logo.png" alt=""></div>
                    </a></div>
                <div class="header__right"><a class="phone-header" href="tel:+7 (495) 232 90-07">+7 (495) 232 90-07</a>
                    <ul class="lang">
                        <li><a href="#">En</a></li>
                        <li><a href="#">Rus</a></li>
                    </ul>
                    <ul class="header-controls">
                        <li><a href="index.html"> <img src="images/home-icon.svg" alt=""></a></li>
                        <li><a class="search-control js-drop-click"> <img src="images/search-icon.svg" alt=""></a>
                            <div class="header-search">
                                <form>
                                    <input type="text" placeholder="Поиск">
                                    <button type="submit"><img src="images/search-icon.svg" alt=""></button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="menu-control"><span>Меню</span></div>
    <div class="menu">
        <ul>
            <li><a href="about.html">О компании</a></li>
            <li><a href="partners.html">Партнеры и клиенты</a></li>
            <li><a href="contact.html">Связь с нами</a></li>
            <li><a href="services.html">Услуги</a></li>
            <li><a href="news-main.html">Новости рынков от Икар</a></li>
            <li><a href="news.html">Лента новостей</a></li>
            <li><a href="#">События</a></li>
            <li><a href="#">Реклама и сотрудничество</a></li>
        </ul>
    </div>
    <div class="content">
