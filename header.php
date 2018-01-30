<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php the_title(); ?></title>
    <!--Favicon -->
    <?php if (get_field('favicon')): ?>
        <link rel="icon" href="<?php the_field('favicon'); ?>" sizes="32x32">
    <?php endif; ?>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>
</head>

<body>