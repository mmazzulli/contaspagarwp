
<!-- Example row of columns -->
<div class="row">
          <div class="col-md-12">


<?php

$obtem_conta_id = $_GET['id_conta'];

$obtem_user_id = get_current_user_id();

// ---------------------------------------------

// ROTINA DE ATUALIZAÇÃO   

if(isset($_POST['enviado'])) {

  $nomeconta = $_POST['nome_conta'];
  $precoconta = $_POST['preco_conta'];
  $dataconta = $_POST['data_conta'];
  $categoriaconta = $_POST['categoria_conta'];
  
  // Gera titulo 
  // $randtitle = rand(1,2000);
  // $randtitle = "Conta" . $randtitle;
  

// Update post 37
$contas_pagar = array(
  'ID'           => $obtem_conta_id,
  // 'post_title'   => 'This is the post title.',
  // 'post_content' => 'This is the updated content.',
);

// Update the post into the database
wp_update_post( $contas_pagar );

update_field('tipo_de_conta', $nomeconta, $obtem_conta_id);
update_field('preco', $precoconta, $obtem_conta_id);
update_field('data_do_pagto', $dataconta, $obtem_conta_id);
// update_field('Id_do_usuário', $categoriaconta, $obtem_conta_id);

$sucesso = "CONTA ATUALIZADA COM SUCESSO";
echo "<div class='alert-success'>$sucesso</div>";


}
// -----------------------------------------
// ABAIXO PEGA REFERENCIA PARA EXIBIR NO FORM  

$obtem_post = get_post($obtem_conta_id);

    // echo "<pre>";
    // var_dump($pegaposts);
    // echo "</pre>";

  $id_user = get_field('Id_do_usuario', $obtem_conta_id);
  $id_conta = get_field('Id_da_contapagar', $obtem_conta_id);
  $tipo_conta = get_field('tipo_de_conta', $obtem_conta_id);
  $preco_conta = get_field('preco', $obtem_conta_id);
  $data_conta = get_field('data_do_pagto', $obtem_conta_id);


?>
 <div class="container">
 <div class="row">
 <h1>Editar Contas a Pagar</h1>
 <h3>ID do usuário: <strong><?= $obtem_user_id ?></strong></h3>
 <h3>ID da Conta: <strong><?= $obtem_conta_id  ?></strong></h3>
</div>

<div class="row">

<form action="" method="post">

<div class="form-group">
  <label for="">Nome da conta</label>
  <input type="text" name="nome_conta" class="form-control" value="<?= $tipo_conta ?>">
</div>

<div class="form-group">
  <label for="">Preço da conta</label>
  <input type="text" name="preco_conta" class="form-control" value="<?= $preco_conta ?>">
  </div>

  <div class="form-group">
  <label for="">Data da conta</label>
  <input type="text" name="data_conta" class="form-control" value="<?= $data_conta ?>">
  </div>

  <div class="form-group">
  <label for="">categoria da conta</label>
  <select name="categoria_conta" id="" class="form-control">
  <option value="1">Conta de Água</option>
  <option value="2">Conta de Luz</option>
  <option value="3">Conta de Gás</option>
  </select>
  </div>

  <div class="form-group">
  <input type="submit" name="enviado" value="Atualizar" class="btn btn-success success">
  </div>

</form>

</div>
</div>


          </div>
        
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

         


