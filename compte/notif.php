<br><br><br>	
<div class="w3-container">
	<div class="w3-half w3-container">
		<div class="w3-card w3-padding">
		<h2 class="text-center">votre publication</h2>
		<h4>il y a <?=$isa?> <span class="text-primary">publication</span></h4>
		</div>
	</div>
	<div class="w3-half w3-container">
		<div class="w3-card w3-padding">
		<h2 class="text-center">Publication notifs</h2>
		<h4>il y a <?=$isa1?> <span class="text-primary">publication</span></h4>
		</div>
	</div>
</div>
<br>
<div class="w3-container">
	<h1 class="text-primary text-center">supprimer publication</h1>
	<?php 
	$zz=$pro['pseudo'];
	$supprimer=pdo()->query("SELECT * FROM admin  INNER JOIN produit ON  produit.pseudo=admin.pseudo WHERE admin.pseudo='$zz'");
	$ff=$supprimer->fetch();
	$rest=$supprimer->rowCount();
	$image1=new image($ff);
	if($rest===1)
	{
		echo image_pub($image1,$ff);
	}elseif($rest>1)
	{
		While($ff=$supprimer->fetch()) {
		echo image_pub($image1,$ff);
	}
	}
	
	
	

	 ?>
</div>