<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css"> -->
    <?php wp_head(); ?>
</head>

<body>
<div id="container">
        <header>
            <h1><?php echo get_the_title(); ?></h1>
            <nav>
                <!-- <ul>
                    <li><a href="#">Nav item 1</a></li>
                    <li><a href="#">Nav item 2</a></li>
                    <li><a href="#">Nav item 3</a></li>
                </ul> -->
                <?php
                    wp_nav_menu($args= array(
                        'theme_location' => 'primary'
                    ));
                ?>
            </nav>
        </header>