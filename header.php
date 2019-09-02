<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta <?php bloginfo( 'charset' ); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<!-- Page: Home -->
<body <?php body_class(); ?> >
        
    <!-- Layout: Header -->
    <header class="header">
        <!-- Component: Logo -->
        <h1 class="logo"><?php bloginfo( 'name' ); ?></h1>
        <!-- Component: Menu -->
        <nav class="menu">
            <ul class="menu__list">
                <li class="menu__list__item"><a href="#" class="menu__list__item__link"><i class="fa fa-facebook"></i></a></li>
                <li class="menu__list__item"><a href="#" class="menu__list__item__link"><i class="fa fa-twitter"></i></a></li>
                <li class="menu__list__item"><a href="#" class="menu__list__item__link"><i class="fa fa-instagram"></i></a></li>
                <li class="menu__list__item"><a href="#" class="menu__list__item__link"><i class="fa fa-github"></i></a></li>
            </ul>
        </nav>
        <div class="header__actions">
            <button class="header__actions__action openOverlay" href="#"><i class="fa fa-bars"></i></button>
        </div>
    </header>