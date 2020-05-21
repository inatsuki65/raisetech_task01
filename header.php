<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="WordPress theme development static data for beginners">
    <meta name="keywords" content="WordPress, Theme, development">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/common/ico/favicon.ico">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/scss/app.css">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="header">
      <h1 class="header_ttl">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <span class="header__ttl__sub"> Hamburger </span>
        </a>
      </h1>
      <form action="cgi-bin/abc.cgi" method="post">
        <input type="search">
        <input type="submit" value="検索">
      </form>
    </header>
