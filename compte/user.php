<br><br>	
<div class="w3-container">
	<div class=""><h1 class="text-center">Tous les membre	</h1>	</div>
</div>
<?php 	

	$personne=pdo()->prepare('SELECT * FROM admin ORDER BY id DESC');
	$personne->execute();
			function metys($select,$mety,$pseudo)
		{
			
			if($pseudo==$mety['pseudo'])
			{
				echo "<i id='moi' class='fa fa-bookmark fa-2x w3-margin-top text-danger'></i>";
			}
			elseif($select) {
				echo "<i id='message=$mety[pseudo]@page=message' class='fa fa-comment fa-2x w3-margin-top text-primary'></i>";
			}
			elseif(!$select)
			{
				echo "<i id='$pseudo&$mety[pseudo]' class='fa fa-user-plus fa-2x w3-margin-top text-success'></i>";
			}
		}
	while ($mety=$personne->fetch()) {
		$amis=$pseudo."&".$mety['pseudo'];
		$amis1=$mety['pseudo']."&".$pseudo;
		$do=isset($amis)?$amis:$amis1;
		$select1=select($base3,"inter",$amis);
		$select2=select($base3,"inter",$amis1);
		$select=$select1?$select1:$select2;


					 ?>
					 <br>	
						<div class="w3-container w3-card-12">
			 			<div class="row">
				 		<div class="col-md-2"><img src="<?=$mety['img'] ?>" class="w3-round" style="width: 75px;height: 65px"></div>
				 		<div class="col-md-4"><p style="cursor: pointer;" class="text-primary"><?=$mety['pseudo'] ?></p><p class="text-primary"><?=$mety['mail'] ?></p></div>
				 		<div class="col-md-4"></div>
				 		<div class="col-md-2" style="cursor: pointer;"><?php metys($select,$mety,$pseudo); ?></div>
				 		</div>
				 		</div>
					<?php 
					}


 ?>
