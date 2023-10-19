<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="mailru-domain" content="HrbHmZHwZjNGRKIE" />
    <title>Daily Podcast</title>
    <?php wp_head(); ?>
</head>
<body>
    <main>
        <header>
            <div class="container">
                <div class="header">
                    <a href="index.html" class="header-logo">
                        <img src="<?php echo PODKAST_IMG_DIR ?>/logo.svg" alt="Logo">
                    </a>
                    <?php 
                        wp_nav_menu( [
                            'menu' => 'Main Menu',
                            'container'       => 'nav',
                            'menu_class'      => 'header__nav',
                        ] );
                    ?>
                    <button class="btn-primary">Subscribe</button>
                </div>
            </div>
        </header>