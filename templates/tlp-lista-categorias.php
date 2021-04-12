
  <!-- Example row of columns -->
  <div class="row">
          <div class="col-md-6">
            <!-- <h2>Fazer o login</h2> -->
            
            <div class="area-login">

<!-- ESSA PAGINA RECEBE OS page LINKS contas-pagar, receber e categorias -->

<?php 

$recebePage = $_GET['page'];

switch ($recebePage) {
  case "listar-contas-pagar" :
get_template_part( 'tlp-lista-contas-pagar' );
  break;
  case "cadastrar-contas-pagar" :
get_template_part( 'tlp-cadastra-contas-pagar' );
  break;
  case "listar-contas-receber" :
get_template_part( 'tlp-lista-contas-receber' );
  break;
  case "cadastrar-contas-receber" :
get_template_part( 'tlp-cadastra-contas-receber' );
  break;
  case "listar-categorias" :
get_template_part( 'tlp-lista-categorias' );
  break;
  case "cadastrar-categorias" :
get_template_part( 'cadastra-categorias' );
  break;

}
?>
</div>


            <div class="espacamento"></div>

          </div>
          <div class="col-md-6">
            <h2>Não cadastrou-se ainda?</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>

            <div class="espacamento"></div>

          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>





<!-- <div style="height: 70px;"> <b>LOGADO</b> </div> -->


