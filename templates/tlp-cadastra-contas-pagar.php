


<?php 

if(isset($_POST['enviado'])) {

$nomeconta = $_POST['nome_conta'];
$precoconta = $_POST['preco_conta'];
$dataconta = $_POST['data_conta'];
$categoriaconta = $_POST['categoria_conta'];

// Gera titulo 
$randtitle = rand(1,2000);
$randtitle = "Conta" . $randtitle;


$user_id = get_current_user_id();

  global $wpdb;

  // Capture original pre-sanitized array for passing into filters.
  $unsanitized_postarr = $postarr;

  

  $defaults = array(
      'post_author'           => $user_id,
      'post_title'            => $randtitle,
      'post_status'           => 'private',
      'post_type'             => 'contas_a_pagar',
  );

$id_post = wp_insert_post($defaults);

// FUNÇÃO DO ACF
// update_field($selector, $value, [$post_id]);
// O seletor é cada nome de cada campo listado na exibição do grupo no ACF

if($id_post){

update_field('Id_do_usuario', $user_id, $id_post);
update_field('Id_da_contapagar', $id_post, $id_post);
update_field('tipo_de_conta', $nomeconta, $id_post);
update_field('preco', $precoconta, $id_post);
update_field('data_do_pagto', $dataconta, $id_post);
// update_field('Id_do_usuário', $categoriaconta, $id_post);

$sucesso = "CONTA CRIADA COM SUCESSO";
echo "<div class='alert-success'>$sucesso</div>";

// foreach ($arr as &$value) {
//   $value = $value * 2;
// }
}


}

?>

<div class="container">
 <div class="row">
 <h1>Cadastrar Contas a Pagar</h1>
</div>

<div class="row">
<form action="" method="post">

<div class="form-group">
  <label for="">Nome da conta</label>
  <input type="text" name="nome_conta" class="form-control">
</div>

<div class="form-group">
  <label for="">Preço da conta</label>
  <input type="text" name="preco_conta" class="form-control">
  </div>

  <div class="form-group">
  <label for="">Data da conta</label>
  <input type="date" name="data_conta" class="form-control">
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
  <input type="submit" name="enviado" value="Cadastrar" class="btn btn-success success">
  </div>

</form>

</div>
</div>
      

         


