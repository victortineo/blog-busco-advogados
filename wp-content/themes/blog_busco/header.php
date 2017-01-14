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
  <meta name="author" content="Busco Advogados" />
  <meta name="contact" content="contato@buscoadvogados.com.br" />
  <meta name="google-site-verification" content="HUJJQNVAyZDn2ghFd2dLp_RzHYS_HvlGqDouAZwWpyo" />

  <title><?php wp_title('-', true, 'right'); bloginfo() ?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/dist/assets/css/main.css">
  </head>

  <body>
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://madknow.com.br/busco/public/">
        <img alt="Brand" src="http://madknow.com.br/busco/public/images/busco-advogados.png">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navigation">
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://madknow.com.br/busco/public/">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="http://madknow.com.br/busco/public/quem-somos">Quem somos</a></li>
        <li><a href="http://madknow.com.br/busco/public/como-funciona">Como funciona</a></li>
        <li><a href="http://madknow.com.br/busco/public/advogados">Busque um advogado</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://madknow.com.br/busco/public/casos/cadastro">Casos</a></li>
            <li><a href="http://madknow.com.br/busco/public/advogados/cadastro">Advogados</a></li>
          </ul>
        </li>
        <li><a href="http://madknow.com.br/busco/blog">Blog</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- HERO -->
<!-- FUNDO + LOGO  + test-->
<div class="container-fluid hero text-center">
  <img class="sr-only" src="http://madknow.com.br/busco/public/images/busco-advogados.png" alt="">
</div>
<!-- HERO CONTENT -->
<div class="container-fluid hero-content">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <h2><p>Conteúdos que abordam experiência na prática e tendências do mercado de advocacia.</p></h2>
      </div>
    </div>
  </div>
</div>