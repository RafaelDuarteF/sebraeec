<?php
	session_start();
	include("conexao.php");
	$y = $l + 1;
   $vi = 0;
   while($y > 1){
      $y--;
      $vi++;
      $conImgPost = "SELECT PATH FROM ASSOCIADO WHERE cpf = '". $cpfAssocPost[$y] ."'";
      $consultaImgPost = $mysqli->query($conImgPost) or die ($mysqli->error);
      while($imgPost = $consultaImgPost->fetch_array()){
         $img = $imgPost['PATH'];
      }
 ?>
   <script src="jQuery/jquery-3.6.0.min.js"></script>
   <script>cam = false;</script>
 	<img src="<?php echo $img; ?>" id="imgPost">
    <p id="nomePost"><b>
    	<?php echo $nomeAssocPost[$y]; ?> 
    </b></p>
    <p id='mensagemPar'>
		<?php echo $mensagem[$y]; ?>
    </p>
     <p id='dataPost'>
		<?php echo str_replace('-', '/', date('d-m-Y', strtotime($dataPost[$y]))); ?>
    </p>
    <?php
      if(isset($_SESSION['cpfAssoc'])){
         if($_SESSION['cpfAssoc'] == $cpfAssocPost[$y]){
         ?>
         <div class="delPost" id="delPost<?php echo $y; ?>" onclick="deletarPost(this.id)">Deletar postagem</div>
         <form class="formDelPost" action="deletarPost.php" method="POST" id="formDelPost">
            <input type="hidden" type="text" value="<?php echo $codPost[$y]; ?>" name="codPostDel">
         </form>
         <?php
         }
      }
      
    ?>
    <p class="abrComent" id="abrComentId<?php echo $vi; ?>" onclick="getId(this.id)"><b>Comentários</b></p><br>
    <?php
      $x = $u + 1;
      while($x > 0){
         $x--;
         if($codPost[$y] == $cod_post[$x]){
            $conImgCom = "SELECT PATH FROM ASSOCIADO WHERE cpf = '". $cpfComent[$x] ."'";
            $consultaImgCom = $mysqli->query($conImgCom) or die ($mysqli->error);
            while($imgCom = $consultaImgCom->fetch_array()){
               $img = $imgCom['PATH'];
            }
      ?>
      <div class="comentarios comentariosId<?php echo $vi; ?>">
         <img src="<?php echo $img; ?>" id="imgComent">
         <p id="nomeComent"><?php echo $nomeAssocComent[$x]; ?></p>
         <p id="mensagemComent"><?php echo $comentario[$x]; ?></p>
         <p id="dataComent"><?php echo str_replace('-', '/', date('d-m-Y', strtotime($dataComent[$x]))); ?></p>
         <?php
            if(isset($_SESSION['cpfAssoc'])){
               if($_SESSION['cpfAssoc'] == $cpfComent[$x]){
         ?>
         <div class="delComent" id="delComent<?php echo $x; ?>" onclick="deletarComentario(this.id)">Deletar comentário</div>
            <form class="formDelPost" action="deletarComent.php" method="POST" id="formDelComent">
               <input type="hidden" type="text" value="<?php echo $cod_coment[$x]; ?>" name="codComentDel">
            </form>
         <?php
               }
            }
         ?>
    <br>
    </div>
<?php
         }
      }
      ?>
      <form method="POST" action="envComentario.php" class="formComent formComentId<?php echo $vi; ?>">
         <input type="text" name="coment<?php echo $y; ?>" class="coment" id="coment" placeholder="Comentar" maxlength="700"><br>
         <input type="submit" name="enviarComent" id="enviarComent" value="Enviar">
         <br><br>
      </form>
      <br>
<?php
   }
?>
<script>
   function getId(clicked){ 
      if(cam == false){
         kol = clicked.substr(-1); 
         coment = $(".comentariosId" + kol); coment.show();
         form = $(".formComentId" + kol); form.show();
         cam = true;
      }
      else{
         kol = clicked.substr(-1); 
         coment = $(".comentariosId" + kol); coment.hide();
         form = $(".formComentId" + kol); form.hide();
         cam = false;
      }
   }
   function deletarPost(id){
      swal({
         title: "Deseja apagar essa postagem?",
         text: "Deseja apagar sua postagem? Essa ação não poderá ser desfeita.",
         icon: "warning",
         buttons: ['Não', 'Sim'],
         dangerMode: false,
         })
         .then((willEnv) => {
         if (willEnv) 
            document.getElementById("formDelPost", id.substr(-1)).submit();
      }); 
   }
   function deletarComentario(idC){
      swal({
         title: "Deseja apagar esse comentário?",
         text: "Deseja apagar seu comentário? Essa ação não poderá ser desfeita.",
         icon: "warning",
         buttons: ['Não', 'Sim'],
         dangerMode: false,
         })
         .then((willEnv) => {
         if (willEnv) 
            document.getElementById("formDelComent", idC.substr(-1)).submit();
      }); 
   }
</script>