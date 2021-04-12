
  <!-- Example row of columns -->
  <div class="row">
          <div class="col-md-6">
            <!-- <h2>Fazer o login</h2> -->
            
<div class="area-login">          


<?php 

if(isset($_POST['enviado'])) {

$recebenome = $_POST['nome'];
$recebeemail = $_POST['email'];
$recebesenha = $_POST['senha'];

// outra opção para senha:   
// $recebesenha = wp_generate_password();

// Cadastrar o usuário abaixo 

  $userdata = array(
    'ID'                    => 0,    //(int) User ID. If supplied, the user will be updated.
    'user_pass'             => $recebesenha,   //(string) The plain-text user password.
    'user_login'            => $recebenome,   //(string) The user's login username.
    'user_nicename'         => $recebenome,   //(string) The URL-friendly user name.
    'user_url'              => '',   //(string) The user URL.
    'user_email'            => $recebeemail,   //(string) The user email address.
    'display_name'          => $recebenome,   //(string) The user's display name. Default is the user's username.
    'nickname'              => $recebenome,   //(string) The user's nickname. Default is the user's username.
    'first_name'            => $recebenome,   //(string) The user's first name. For new users, will be used to build the first part of the user's display name if $display_name is not specified.
    'role'                  => 'author',   //(string) User's role.
    
);

$usersuccess = wp_insert_user($userdata);

if($usersuccess) {
  ?>

<h1> Cadastrou-se </h1>
<br><br>
<p><a class="btn btn-secondary" href="/contaspagar" role="button">Página de login</a></p>

<?php 

// ENVIA EMAIL PARA O CADASTRADO 

// $to = $recebeemail;
// $subject = 'Conta WP Criada';
// $body = 'A sua conta foi criada no Wordpress';
// $headers = array('Content-Type: text/html; charset=UTF-8');
 
// wp_mail( $to, $subject, $body, $headers );


} else {
  echo "<pre><b>OPSS! Ocorreu algum erro, tente cadastrar-se novamente.</b></pre>";
}


}

else {

  // Form de cadastro abaixo 
?>

<h1> Cadastrar-se </h1>
<form action="" method="post">
  <label for="">Nome</label>
  <input type="text" name="nome">
  <label for="">Email</label>
  <input type="text" name="email">
  <label for="">Crie a senha</label>
  <input type="text" name="senha"><br> <br> 
  <input type="submit" name="enviado" value="Cadastrar">
</form>




</div><!-- Fecha o area-login   -->



<div class="espacamento"></div>

</div> <!-- Fecha o col-md-6   -->

          <div class="col-md-6">
            <h2>Já é cadastrado?</h2>
            <p>Clique no botão e vá para painel de login.</p>
            
            <p><a class="btn btn-secondary" href="/contaspagar" role="button">Acesso ao login</a></p>

            <div class="espacamento"></div>

          </div>

        <hr>
</div>
<?php 
}  
?>
      </div> <!-- /container -->

    </main>


<!-- <div style="height: 70px;"> <b>LOGADO</b> </div> -->


