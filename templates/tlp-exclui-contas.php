
<!-- Example row of columns -->
<div class="row">
          <div class="col-md-12">
<!-- ACIMA NÃO MEXE    -->

<?php $obtem_conta_id = $_GET['id_conta']; 


if(isset( $_POST['sim'] )) {

// ROTINA DE EXCLUSÃO -->

wp_delete_post($obtem_conta_id);


?>
<div class="alert alert-success" role="alert">
  <h3>O REGISTRO FOI APAGADO!</h3>  
  <p>
      <a class="btn btn-success btn-edt-exc" href="/contaspagar" role="button">Voltar ao início</a>
 </p> 
</div>

<?php } else {  ?>

<div class="alert alert-danger" role="alert">
  <h3>VOCÊ TEM CERTEZA QUE DESEJA EXCLUIR ESSE REGISTRO?</h3> 
  <p>
     <form action="" method="post">
     <input type="hidden" name="$obtem_conta_id">
     <input type="submit" value="Sim" name="sim" class="btn btn-success success">
     <input type="submit" value="Não" name="nao" class="btn btn-danger danger">
     </form>
  </p>    
</div>
<?php }  ?>

<!-- ABAIXO NÃO MEXE    -->
          </div>
        </div>
        <hr>
      </div> <!-- /container -->
    </main>

        