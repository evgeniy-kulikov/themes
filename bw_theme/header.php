<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/style.css"> -->
    <title>Stepik_WP</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="container">
            <nav class="menu__desktop">
                <ul class="menu">
                    <li class="menu__item active"><a href="<? get_home_url(  ); ?>">Home</a></li>
                    <li class="menu__item"><a href="#about">About Us</a></li>
                    <li class="menu__item"><a href="#team">Team</a></li>
                    <!-- <li class="menu__item"><a href="#"><img src="img/logo.png" alt="" class="logo"></a></li> -->
                    <li class="menu__item"><?php  the_custom_logo(  ); ?></li>
                    <li class="menu__item"><a href="#provide">Services</a></li>
                    <li class="menu__item"><a href="#">Blog</a></li>
                    <li class="menu__item"><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>
            <nav class="menu__mobile">
                <div class="menu__inner">
                    <!-- <a href="#"><img src="img/logo.png" alt="" class="logo"></a> -->
                    <?php  the_custom_logo(  ); ?>
                    <div class="menu__burger"><span>toggle menu</span></div>
                </div>
                <ul class="menu">         
                    <li class="menu__item active"><a href="<? get_home_url(  ); ?>">Home</a></li>
                    <li class="menu__item"><a href="#about">About Us</a></li>
                    <li class="menu__item"><a href="#team">Team</a></li>
                    <li class="menu__item"><a href="#provide">Services</a></li>
                    <li class="menu__item"><a href="#">Blog</a></li>
                    <li class="menu__item"><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>
            <div class="header__content">
                <h1 class="header__title">We build it with passion</h1>
                <p class="header__text">Just to be clear, we do this for fun not for you, just kidding.</p>
                <a href="" class="header__button">READ MORE</a>
            </div>
        </div>
    </header> 
    