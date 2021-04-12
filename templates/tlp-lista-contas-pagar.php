
<!-- Example row of columns -->
<div class="row">
          <div class="col-md-12">


<?php

$obtem_user_id = get_current_user_id();


         $contas_pagar = array(
        'numberposts'      => -1,
        // 'category'         => 0,
        'meta_query' => array(
          array(
              'key'   => 'Id_do_usuario',
              'value' => $obtem_user_id,
          )
          ),
        'orderby'          => 'date',
        'order'            => 'DESC',
        // 'include'          => array(),
        // 'exclude'          => array(),
        // 'meta_key'         => '',
        // 'meta_value'       => '',
        'post_type'        => 'contas_a_pagar',
        'post_status'      => 'private'
        // 'suppress_filters' => true,
    );

    $pegaposts = get_posts($contas_pagar);

    // echo "<pre>";
    // var_dump($pegaposts);
    // echo "</pre>";

?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id usuário</th>
      <th scope="col">id Conta</th>
      <th scope="col">Típo</th>
      <th scope="col">Preço</th>
      <th scope="col">Data</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
<?php 
foreach ($pegaposts as $listagem) {
  // ID é padrão dos posts do WP  
  $id_listagem = $listagem -> ID;
  $id_conta = get_field('Id_do_usuario', $id_listagem);
  $id_conta = get_field('Id_da_contapagar', $id_listagem);
  $tipo_conta = get_field('tipo_de_conta', $id_listagem);
  $preco_conta = get_field('preco', $id_listagem);
  $data_conta = get_field('data_do_pagto', $id_listagem);

  $preco_conta = str_replace(",",".",$preco_conta);
  $preco_conta = (float)$preco_conta;
  $total_preco += $preco_conta;
?>
   <tr>
      <th scope="row"><?= $obtem_user_id ?></th>
      <td><?= $id_listagem ?></td>
      <td><?= $tipo_conta ?></td>
      <td><?= $preco_conta ?></td>
      <td><?= $data_conta ?></td>
      <td> 
      <p>
      <a class="btn btn-success btn-edt-exc" href="/contaspagar/?page=edit-cpagar&id_conta=<?= $id_conta ?>" role="button">Editar</a>
      <a class="btn btn-danger btn-edt-exc" href="/contaspagar/?page=exclui-conta&id_conta=<?= $id_conta ?>" role="button">Excluir</a>
      </p>
      </td>
    </tr>

  <?php 
}
?>
  </tbody>
  <tfoot class="thead-dark">
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">Típo</th>
      <th scope="col"><?=  $total_preco . " €" ?></th>
      <th scope="col"></th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
</table>






          </div>
        
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

         


