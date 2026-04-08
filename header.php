<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body >

<!-- Общий блок с фоном (header + hero) -->
  <div class="header-wrapper">

<!-- Фоновое изображение и оверлей -->
    <div class="header-bg">
      <img class="header-bg__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg" alt="Coffee background">
      <div class="header-bg__overlay"></div>
    </div>

    <!-- Шапка -->
    <header class="header">
      <div class="container">
      <?php get_template_part('template-parts/components/logo', null, [
        'size' => 'sm',
        'className' => 'header__logo'
    ]); ?>
      <?php get_template_part('template-parts/components/navigation'); ?>
      </div>
    </header>

    <!-- Hero секция -->
      <?php get_template_part('template-parts/sections/hero') ?>

  </div> <!-- end header-wrapper -->