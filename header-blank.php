<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">


<?php wp_head(); ?>



<style type="text/css">

.logo-dimensao img{
    height: 175px;
    width: 300px;
    float: left; 
    margin: 0 10px 20px 0;
}

.ajuste-jumbotron {
  background-color: #5b0fb1;
  margin-top: 40px;
}

.cor-txt-jumbo{
  color: white;
  margin-top: 30px  ;
}

.fundo-site{
  background: #e4e4e4;
}

.espacamento {
  height: 100px; 
}

/* LOGIN Container */
/* .tp-login-container {
    position: relative;
    background: #fff;
    padding: 30px;
    max-width: 500px;
} */


.area-login {
    background: #fff;
    margin: 10% auto;
    height: 400px;
    padding: 30px;
    max-width: 400px;
    box-sizing: border-box;
}

/* Os labels */
.area-login label {
    display: block;
}
/* Inputs de texto */
.tarea-login input[type="text"],
.area-login input[type="password"] {
    width: 300px;
    padding: 5px;
    border: 2px solid #ccc;
    border-radius: 5px;
    font-size: 24px;
}
.area-login input[type="text"]:focus,
.area-login input[type="password"]:focus {
    border: 2px solid #19b5fe;
    box-shadow: 0 0 5px #9fe0fe;
}
/* Botão de enviar */
.area-login input[type="submit"] {
    border: none;
    background: #19b5fe;
    color: #fff;
    text-transform: uppercase;
    box-shadow: 0 3px 0 #1c79a5;
    padding: 10px 25px;
}

.area-login input[type="submit"]:hover {
    background: #f5b812;
    box-shadow: 0 3px 0 #12516f;
}
.area-login input[type="submit"]:active {
    top: 3px;
    box-shadow: none;
}

.area-login h1{
    color: black;
    font-size: 27px;
}

/* style para os links logout e contas pagar */
.distancia-um {
margin-left: 100px;
}

.distancia-dois {
margin-left: 100px;
}

.btn-edt-exc {
  margin: 0 10px 0 10px;
}


.area-cadastrar {
  background: #fff;
    margin: 10% auto;
    height: 400px;
    padding: 30px;
    max-width: 400px;
    box-sizing: border-box;
}

</style>
<?php 

if(is_user_logged_in()) {

$link_ativo = "enable";
$pages_ativas = "ativo";

} else {

  $link_ativo = "disabled";
}

?>

</head>

<body <?php body_class('fundo-site'); ?>>

<!-- AQUI COMEÇA O NAV BAR   -->

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="https://spotsite.eu/">spotsite.eu  |</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/contaspagar">Home <span class="sr-only">(current)</span></a>
          </li>

          <!-- SE ESTIVER LOGADO APARECE MENU GESTÃO ATIVADO   -->
       
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?= $link_ativo ?> distancia-dois" href="/contaspagar" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contas a Pagar</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="/contaspagar/?page=listar-contas-pagar">Listar</a>
              <a class="dropdown-item" href="/contaspagar/?page=cadastrar-contas-pagar">Cadastrar</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?= $link_ativo ?>" href="/contaspagar" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contas a Receber</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="/contaspagar/?page=listar-contas-receber">Listar</a>
              <a class="dropdown-item" href="/contaspagar/?page=cadastrar-contas-receber">Cadastrar</a>
            </div>
          </li>
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?= $link_ativo ?>" href="/contaspagar" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="/contaspagar/?page=listar-categorias">Listar</a>
              <a class="dropdown-item" href="/contaspagar/?page=cadastrar-categorias">Cadastrar</a>
            </div>
          </li>
          <li class="nav-item">
        <a class="nav-link distancia-um <?= $link_ativo ?>" href="#">Logout</a>
          </li>
        </ul>
       <!--  <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Palavra-chave" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form> -->
      </div>
    </nav>

<!-- INICIO DO MAIN E JUMBOTRON -->

    <main role="main">

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron ajuste-jumbotron">
  <div class="container">
    <li class="logo-dimensao">
      <ul>
      <?php 


$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

if ( has_custom_logo() ) {
    echo '<img src="' . $image[0]  . '" class="image-fluid">';
} else {
    echo '<h1>' . get_bloginfo( 'name' ) . '</h1>';
    echo '<p class="lead">' . get_bloginfo( 'description' ) . '</p>';
}

?>
      </ul>
    </li>
    <p class="cor-txt-jumbo">This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron.</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Outros produtos &raquo;</a></p>
  </div>
</div>

<!-- FIM DO JUMBOTRON E INICIO DOS REDIRECTS PARA LOGADO OU LOGIN   -->

<div class="container"> 

<?php

$cadastro = '';
$cadastro = $_GET['cadastro'];

if( $pages_ativas !== "ativo" ) {


// FECHA VERIFICAÇÃO DOS LINKS DA NAV MENU 

if($cadastro == "ok") {

get_template_part( 'templates/tlp-page-cadastro-user' );

echo "VOCE ESTÁ NA PAGINA CADASTRO";

} else {

get_template_part( 'templates/tlp_page_login' );
}
} else {
  get_template_part( 'templates/tlp_page_logado' );
}
?> 


