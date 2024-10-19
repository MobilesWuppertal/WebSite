<?php
/**
 * Header template
 *
 * @package WordPress
 * @subpackage wp-blank
 * @since wp-blank 1.0
 * @date 2015-05-10
 * @edit 2019-10-24 Arne Kamola <arne@arne.xyz>
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <meta charset="<?php bloginfo('charset'); ?>">

  <title><?php wp_title($sep = '›', $display = true, $seplocation = 'right'); bloginfo('name'); ?><?php if ( is_front_page() ) { echo ' &#8226; '; bloginfo('description'); } ?></title>

  <meta name="viewport" content="width=device-width, user-scalable=yes">

  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="all">

  <link rel="shortcut icon" type="image/x-icon" href="<?php echo home_url('/'); ?>favicon.ico">

  <link href="<?php echo get_template_directory_uri(); ?>/assets/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">

  <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('atom_url'); ?>">

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

  <p id="jumper"><a href="#content">[ <?php _e('Jump to content', 'wpblank'); ?> ]</a></p>

  <header>
    <div class="gradient"></div>
    <div class="left logo">
      <h1><?php if ( !is_front_page() || is_paged() ): ?><a href="<?php echo home_url(); ?>"><?php endif; ?>
        <svg height="96" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 100" xml:space="preserve">
          <defs>
          <radialGradient id="grad1" gradientTransform="translate(-0.87 -0.14) scale(2, 2)">
              <stop offset="0%" stop-color="#47f504"/>
              <stop offset="25%" stop-color="#47f504"/>
              <stop offset="50%" stop-color="#ff2170"/>
              <stop offset="74%" stop-color="#ff2170"/>
              <stop offset="100%" stop-color="#ff81f1"/>
            </radialGradient>
          </defs>
          <path d="M 40.572 6.4706 C 46.746 0.5882 50.274 0 55.566 0 C 62.622 0 69.678 2.3529 72.324 13.2353 C 81.732 4.7059 92.022 1.1765 101.724 1.1765 C 125.832 1.1765 143.472 20.5882 143.472 43.2353 C 143.472 67.3529 123.48 84.7059 101.43 84.7059 C 91.14 84.7059 79.086 80.2941 69.972 70 L 59.094 100 L 44.688 100 L 36.456 76.7647 L 27.93 100 L 13.818 100 L 0 57.6471 L 14.7 57.6471 L 21.168 83.5294 L 21.756 83.5294 L 29.106 57.6471 L 43.806 57.6471 L 52.038 83.8235 L 58.212 57.6471 L 76.734 57.6471 C 83.202 68.5294 93.492 72.0588 102.018 72.0588 C 117.6 72.0588 131.124 58.8235 131.124 42.9412 C 131.124 26.7647 117.306 13.8235 101.724 13.8235 C 87.612 13.8235 72.912 24.4118 72.912 42.9412 L 58.212 42.9412 L 58.212 19.1176 C 57.624 15 54.978 12.0588 51.156 12.0588 C 44.1 12.0588 43.512 19.4118 43.512 22.9412 L 43.512 42.9412 L 29.106 42.9412 L 29.106 18.5294 C 27.636 14.4118 26.166 12.0588 22.344 12.0588 C 17.052 12.0588 14.406 16.7647 14.406 20.8824 L 14.406 42.9412 L 0 42.9412 L 0 0 L 13.818 0 C 13.818 1.4706 13.818 3.5294 14.112 5 C 18.816 0.2941 22.344 0 26.754 0 C 31.164 0 36.456 0.5882 40.572 6.4706 Z" fill="url(#grad1)" />
        </svg>
        <?php if ( !is_front_page() || is_paged() ): ?></a><?php endif; ?>
      </h1>
    </div>

    <div class="main-menu right">
      <?php /*
        We use a `label` element with the `for` attribute
        with the same value as  our label `id` attribute
      */ ?>
      <label id="hamburger-menu" for="hamburger-input">
        <input type="checkbox" id="hamburger-input" class="burger-shower" />
        <span class="menu"><span class="hamburger"></span></span>

        <?php if ( has_nav_menu('primary') ): ?>
          <?php wp_nav_menu( array(
            'container' => 'nav',
            'container_id' => 'sidebar-menu',
            'menu_class' => 'primary-menu',
            'theme_location' => 'primary',
          )); ?>
        <?php endif; ?>
      </label>
    </div>

  </header>
