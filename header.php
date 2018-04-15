<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title>Treely - <?php wp_title("",true); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
     		<link href='https://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <nav class="navbar is-black is-fixed-top">
      <div class="navbar-brand">
        <a class="navbar-item logo-invert" href="http://treely-app.arcadia-hewins.com/">
          <img src="http://treely-app.arcadia-hewins.com/wp-content/uploads/2018/03/logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
        </a>
        <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

      <div id="navbarExampleTransparentExample" class="navbar-menu">
      <div class="navbar-end">
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link" href="">
            Favorites
          </a>
          <div class="navbar-dropdown is-boxed">
            <a class="navbar-item dropdown-navbar-item" href="http://treely-app.arcadia-hewins.com/calendar/">
              Past Calendars
            </a>
            <a class="navbar-item dropdown-navbar-item" href="http://localhost:8888/factoryHardcore/company-overview/">
              Foods
            </a>
            <a class="navbar-item dropdown-navbar-item" href="https://bulma.io/documentation/columns/basics/">
              Recipes
            </a>
          </div>
        </div>
      </div>
        <a class="navbar-item" href="http://treely-app.arcadia-hewins.com/calendar/">
          Calendar
        </a>
        <a class="navbar-item" href="https://bulma.io/">
          Menu
        </a>
        <a class="navbar-item" href="https://bulma.io/">
          Search
        </a>
      </div>
      </div>
      </nav>
