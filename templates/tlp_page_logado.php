
  <!-- Example row of columns -->
  <div class="row">
          <div class="col-md-12">
            <!-- <h2>Fazer o login</h2> -->
            

<!-- ESSA PAGINA RECEBE OS page LINKS contas-pagar, receber e categorias -->

<?php 

$recebePage = '';
$recebePage = $_GET['page'];

// echo "Você está na página: $recebePage";

switch ($recebePage) {
  case 'listar-contas-pagar' :
// get_template( 'tlp-lista-contas-pagar' );
  include( get_template_directory() . '/templates/tlp-lista-contas-pagar.php' );
  break;
  case "cadastrar-contas-pagar" :
  include( get_template_directory() . '/templates/tlp-cadastra-contas-pagar.php' );
  break;
  case "listar-contas-receber" :
  include( get_template_directory() . '/templates/tlp-lista-contas-receber.php' );
  break;
  case "cadastrar-contas-receber" :
  include( get_template_directory() . '/templates/tlp-cadastra-contas-receber.php' );
  break;
  case "listar-categorias" :
  include( get_template_directory() . '/templates/tlp-lista-categorias.php' );
  break;
  case "cadastrar-categorias" :
  include( get_template_directory() . '/templates/cadastra-categorias.php' );
  break;
  case "edit-cpagar" :
  include( get_template_directory() . '/templates/tlp-edit-contas-pagar.php' );
  break;
  case "edit-creceber" :
  include( get_template_directory() . '/templates/tlp-edit-contas-receber.php' );
  break;
  case "exclui-conta" :
  include( get_template_directory() . '/templates/tlp-exclui-contas.php' );
  break;
  default:
  echo "--------PAGINA LOGADO----------";

}
?>



            <!-- <div class="espacamento"></div> -->

          </div>
        
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

