<!DOCTYPE html>
<html lang="en" class="has-navbar-fixed-top">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/assets/img/favicon.png">
  <title>
    <?php
      if ( is_tag() ) {
        single_tag_title("Archive for tag &quot;"); echo '&quot;';
      } elseif ( is_archive() ) {
        echo wp_title(''); echo ' Archive';
      } elseif ( is_search() ) {
        echo 'Search &quot;' . wp_specialchars($s) . '&quot;';
      } elseif ( !is_404() && (is_single() || is_page()) ) {
        echo wp_title('');
      } elseif ( is_404() ) {
        echo '404 Not Found';
      }

      if ($paged > 1) {
        echo 'Page ' . $paged;
      }

      if ( is_home() ) {
        bloginfo('name');
      } else {
        echo ' &bull; '; bloginfo('name');
      }
    ?>
  </title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <nav class="navbar is-dark is-fixed-top">
      <div class="container">
        <div class="navbar-brand">
          <a href="<?php bloginfo('url'); ?>" class="navbar-item navbar-logo">
            <img src="<?php assets_path('img/logo_white.svg')?>" alt="logo">
          </a>

          <?php if ( has_nav_menu( 'main-menu' ) ) { ?>
            <span class="navbar-burger burger nav-trigger">
              <span></span>
              <span></span>
              <span></span>
            </span>

            <div class="navbar-menu">
              <?php
                wp_nav_menu(
                  array (
                    'theme_location' => 'main-menu',
                    'container' => null,
                    'items_wrap' => '<div class="navbar-start">%3$s</div>'
                  )
                );
              ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </nav>
  </header>

  <main>
