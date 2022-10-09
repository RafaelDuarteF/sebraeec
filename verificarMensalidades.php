
<?php
	session_start();
	date_default_timezone_set('America/Sao_Paulo');
	include 'conexao.php';
	$t = 1;
	$v = $e + 1;
	$mensalidadeVigente = false;
	while($v > 1){
		$v--;	
		if($_SESSION['cpfAssoc'] == $cpfAssocMen[$v] && $mensalidadeVigente == false){
			if(date('Y-m-d') >= $dataMen[$v]){
            	if(intval(substr($dataMen[$e], -5, 2)) < 12){ 
                    $mesNew = "".intval(substr($dataMen[$v], -5)) + 1;
                    $anoNew = date('Y');
                }
                else{
                    $mesNew = '01';
                    $anoNew = "20".intval(date('Y') + 1);
                }
				if($_SESSION['tipoAssoc'] == 'Dependente'){
					$valNewMen = 59.99;
				}
				else if($_SESSION['tipoAssoc'] == 'Responsável'){
					$valNewMen = 89.99;
				}
				else if($_SESSION['tipoAssoc'] == 'Patrocinador'){
					$valNewMen = 109.99;
				}
                $numberRandom = substr(time(), -6);
                $newMens =  $anoNew . "-"."0". $mesNew . "-" . substr($dataMen[$v], -2);
			   	$codInsertMen = "INSERT INTO mensalidade VALUES('".$numberRandom."', $valNewMen, '".$newMens."', '".$cpfAssocMen[$v]."', 'pendente')";
                $conMen = $mysqli->query($codInsertMen) or die ($mysqli->error);
			    $_SESSION['mensalidade-vigente'] = $newMens;
			    $mensalidadeVigente = true;
			}
			else{
				$_SESSION['mensalidade-vigente'] = $dataMen[$v];
				$mensalidadeVigente = true;
			}
		}
		else{
			if($_SESSION['cpfAssoc'] == $cpfAssocMen[$v]){
				$mens[$t] = $dataMen[$v];
				$t++;
			}
		}
	}
	?> <br> <?php
	$quantMen = 0;
    $pMen = $e + 1;
	$priMen  = true;
	?>
    <div id = "priMen"> <?php 
	while($pMen > 1 && $priMen == true){
    	$pMen--;
    	if($_SESSION['cpfAssoc'] == $cpfAssocMen[$pMen] && $situacao[$pMen] != 'pago'){
	    	?> <b> <?php echo "Mensalidade Nº ".$numMen[$pMen] ?></b> <br><br> <?php
			echo "CPF: ".$cpfAssocMen[$pMen]; ?> <br> <?php
			echo "Número de mensalidade: ".$numMen[$pMen]; ?> <br> <?php
			echo "Valor: ".$valor[$pMen]; ?> <br> <?php
			echo "Data de vencimento: ". str_replace('-', '/', date('d-m-Y', strtotime($dataMen[$pMen]))); ?> <br> <?php
			echo "Situação: ".ucfirst($situacao[$pMen])?> <br><br><br><?php
			$quantMen++;
			$priMen = false;
		}
    }
	?>
	</div>
	<p id="viewMoreMen">Mostrar Mais</p>
	<div id="restMen"> <?php
	while($pMen > 1){
    	$pMen--;
    	if($_SESSION['cpfAssoc'] == $cpfAssocMen[$pMen] && $situacao[$pMen] != 'pago'){
	    	?> <b> <?php echo "Mensalidade Nº ".$numMen[$pMen] ?></b> <br><br> <?php
			echo "CPF: ".$cpfAssocMen[$pMen]; ?> <br> <?php
			echo "Número de mensalidade: ".$numMen[$pMen]; ?> <br> <?php
			echo "Valor: ".$valor[$pMen]; ?> <br> <?php
			echo "Data de vencimento: ". str_replace('-', '/', date('d-m-Y', strtotime($dataMen[$pMen]))); ?> <br> <?php
			echo "Situação: ".ucfirst($situacao[$pMen])?> <br><br><br><?php
			$quantMen++;
		}
    }
	?>
		<p id="showLess">Mostrar menos</p>
	</div>
	<?php
    if($quantMen == 0){
		?><div id = "notMen"> <?php
    	echo "Não há mensalidades em seu nome!";
		
	?>
	</div>
	<?php
	}
    else{
        $_SESSION['PagUltMen'] = true;
		if($quantMen == 1){
?>
	<div class="buttonPags">
		<button class="pagar" id="btnUnica">Pagar</button>
	</div>
	<script>
		document.getElementById("btnUnica").addEventListener('click', () => {
			location.assign("pagarMensalidade.php");
		}); 	
</script>
	<br><br><br>
<br>
<br>
<?php 
		} 
		else{
			?>
			<div class="buttonsPags">
				<button class="pagar" id="btnAnt">Pagar Antiga</button>
				<button class="pagar" id="btnAll">Pagar Todas</button>
			</div>
			<script>
				document.getElementById("btnAnt").addEventListener('click', () => {
					location.assign("pagarMensalidade.php");
				}); 
				document.getElementById("btnAll").addEventListener('click', () => {
					location.assign("pagarTodMensalidades.php");
				});
			</script>
			<br><br><br><br>
			<?php
		}
	}
?>
<?php 
	if($quantMen == 1){
	?>
	<script>
		mMais = $("#viewMoreMen"); mMais.hide();
		mMenos = $("#showLess"); mMenos.hide();
	</script>
	<?php
	}
	else if($quantMen == 0){
	?>
	<script>
		mMais = $("#viewMoreMen"); mMais.hide();
		mMenos = $("#showLess"); mMenos.hide();
		btnUn = $("#btnUnica"); btnUn.hide();
	</script>
	<?php
	}
?>