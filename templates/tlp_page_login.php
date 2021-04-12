
  <!-- Example row of columns -->
  <div class="row">
          <div class="col-md-6">
            <!-- <h2>Fazer o login</h2> -->
            
            <div class="area-login">

<h1> Fazer o Login </h1>

<?php
// Dados do formulário de login
$argumentos_login = array(
    'echo'           => true,
    'redirect'       => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
    // 'redirect'       => get_home_url(), 
    'form_id'        => 'tp-login-form',
    'label_username' => __( 'Usuário' ),
    'label_password' => __( 'Senha' ),
    'label_remember' => __( 'Lembrar-me' ),
    'label_log_in'   => __( 'Login' ),
    'id_username'    => 'tp-user-login',
    'id_password'    => 'tp-user-pass',
    'id_remember'    => 'tp-remember-me',
    'id_submit'      => 'tp-submit-btn',
    'remember'       => true,
    'value_username' => null,
    'value_remember' => false,
);
    wp_login_form( $argumentos_login );



 ?>

</div>


            <div class="espacamento"></div>

          </div>
          <div class="col-md-6">
            <h2>Não cadastrou-se ainda?</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            
    <?php $home_url = home_url(); ?>
            
            <p><a class="btn btn-secondary" href="?cadastro=ok" role="button">Cadastrar-se &raquo;</a></p>

            <div class="espacamento"></div>

          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>


<!-- <div style="height: 70px;"> <b>LOGADO</b> </div> -->


