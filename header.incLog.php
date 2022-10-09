<header>
	<div id="abrir-menu">
		<img src="img/menu.png?<?php echo rand(1, 1000);?>">
	</div>
	<img id="logo-nomeLog" src="img/logoH.png?<?php echo rand(0, 6);?>">
	<div id="user">
		<?php
			if($_SESSION['logAssoc'] == true){
				?>
				<img id="user_img" src="<?php echo $_SESSION['pathAssoc']; ?>">
				<?php
			}
			else{
				?>
				<img id="user_img" src="<?php echo $_SESSION['pathClie']; ?>">
				<?php
			}

		?>
	</div>
</header> <!-- Header e seus elementos contidos. -->
