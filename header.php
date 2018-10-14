<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body>
<div id="container">
        <header>
            <h1>Welcome to the teashop!</h1>
            <nav>
                <?php
                    wp_nav_menu($args= array(
                        'theme_location' => 'primary'
                    ));
                ?>
            </nav>
        </header>