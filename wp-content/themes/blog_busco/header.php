<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
  <meta name="description" content="<?php if ( is_single() ) {
      single_post_title('', true); echo " - "; bloginfo('description');
  } else {
      bloginfo('name'); echo " - "; bloginfo('description');
  }
  ?>" />
  <meta name="keywords" content="fazer meu site, fazer um site, site responsivo, criar site, fazer site, desenvolvimento de sites, quero fazer um site, como montar um site, webdesign, site, website, desenvolvimento, html, wordpress, frontend, front-end, criação de site, landing page, blog, one page site, ux, user experience, seo, wireframe, layout mobile, marketing digital, lead, leads, geração de leads, links patrocinados, adwords, landing page, inbound, blog, one page site, ux, user experience, seo, wireframe, layout mobile, app, desenvolvimento de app" />
  <meta name="author" content="Intrust WEB" />
  <meta name="contact" content="contato@intrustweb.com.br" />
  <meta name="google-site-verification" content="HUJJQNVAyZDn2ghFd2dLp_RzHYS_HvlGqDouAZwWpyo" />

  <title><?php wp_title('-', true, 'right'); bloginfo() ?></title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/bower_components/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/bower_components/owl.carousel/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/bower_components/animate.css/animate.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/dist/assets/font/icomoon/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/dist/assets/font/icomoon/icomoon/style.css">
  
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/dist/assets/css/main.css">
  </head>