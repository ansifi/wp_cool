<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo( 'name' ); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav class="navbar">
  <div class="container">
    <h1 class="logo"><?php bloginfo( 'name' ); ?></h1>
    <ul class="nav-links">
      <li><a href="#hero">Home</a></li>
      <li><a href="#why-us">Why Us</a></li>
      <li><a href="#who-is-it-for">Who Is It For</a></li>
      <li><a href="#what-we-offer">What We Offer</a></li>
      <li><a href="#testimonials">Testimonials</a></li>
      <li><a href="#faq">FAQ</a></li>
    </ul>
    <a href="#get-started" class="btn btn-blue">Get Started</a>
  </div>
</nav>
