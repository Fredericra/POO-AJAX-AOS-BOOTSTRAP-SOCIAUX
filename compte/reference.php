<div class="w3-container">
	<div class="w3-half w3-container">
		



	</div>
	<div class="w3-half w3-container">
		<p class="fa-2x text-primary text-center">Echangement <i class="fa fa-exchange fa-2x"></i></p>
		<?php 
			$tour=select($base2,"pseudo",$pro['pseudo']);
			$tour1=select($base1,"pseudo",$pro['pseudo']);
			$reference=input_text($form,"ajouter","Numero access");
			$reference1=input_password($form,"ajouter1","votre mots de pass");
			$reference2=input_text($form,"ajouter2","code banquaire transfere");
			$reference3=input_text($form,"ajouter3","reference ajouter sur compte");
			$reference4=submit_primary($form,"acceder");
			echo post($form,$reference.$reference1.$reference2.$reference3.$reference4);
			$value=value($form,"ajouter");
			if($tour['code']===$value)
			{
				$mpd=password_verify(value($form,"ajouter1") ,$tour1["mdp"]);
				if($mpd)
				{
					if(preg_match("/^[0-9]+$/", value($form,"ajouter3")))
					{
						$argent=value($form,"ajouter3");
					update($base2,"argent='$argent'","pseudo",$pro['pseudo']);
				}else{
					echo toast($toast,"somme non accepter");
				}
					
				}else
				{
					echo toast($toast,"transaction occupée");
				}
				
			}else
			{
				echo toast($toast,"transaction card non accepter");
			}


			 ?>
	</div>
</div>
