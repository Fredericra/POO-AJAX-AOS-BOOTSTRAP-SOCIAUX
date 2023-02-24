<div class="w3-container">
	<br>
	
	<div class="w3-third w3-container" style="">
		<?php 
		$message=pdo()->prepare('SELECT * FROM admin INNER JOIN amis ON amis.pseudo=admin.pseudo WHERE amis.inter LIKE "%'.$pseudo.'%"');
		$message->execute();
		$mety=pdo()->prepare('SELECT * FROM amis INNER JOIN message ON amis.pseudo=message.pseudo WHERE message.inter LIKE "%'.$pseudo.'%" ORDER BY message.id DESC');
		$mety->execute();
		while($rejoint=$message->fetch())
		{

			$rejoindre=str_replace("&","", str_replace($pseudo,"",$rejoint['inter']));
			$rec=$rejoindre."&".$pseudo;
			$rec1=$pseudo."&".$rejoindre;
			$fetch=select($base1,"pseudo",$rejoindre);
			$fetch12=pdo()->prepare("SELECT * FROM message WHERE inter=? and pseudo=? ORDER BY id DESC");
			$fetch12->execute(array($rec,$rejoindre));
			$fetch1=$fetch12->fetch();
			$fetch22=pdo()->prepare("SELECT * FROM message WHERE inter=? ORDER BY id DESC");
			$fetch22->execute(array($rec1));
			$fetch2=$fetch22->fetch();
			?>
			<div class="row w3-card w3-padding w3-margin-top w3-round-xlarge">
				 <p id="a"></p>
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<img src="<?=$profil?>" class="w3-round-xlarge" id="<?=$fetch['img']?>" style="width: 50px;height: 50px">
						  <strong><?=$pseudo; ?></strong> 
						  <p><?=isset($fetch2['message'])?$fetch2['message']:'bojour, soyer bienvenue'; ?></p>
						  <button type="button" class="btn-close" data-bs-dismiss="alert" id="<?=isset($fetch2['id'])?$fetch2['id']:''; ?>" aria-label="Close"></button>
						  
					</div>

						

				<div class="col-md-2">
					<img src="<?=$fetch['img']?>" class="w3-round-xlarge" id="<?=$fetch['img']?>" style="width: 50px;height: 50px">
					
				</div>
				<div class="col-md-10">
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						  <strong><?=$rejoindre; ?></strong> 
						  <p><?=isset($fetch1['message'])?$fetch1['message']:'bojour, soyer bienvenue'; ?></p>
						  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						  <span id="retour"></span>
					</div>
				<script>
							window.addEventListener("click",function(e){
								valide=e.target.id;
								name=e.target.localName;
								$.ajax({
										url:"supprimer/supprimer.php",
										method:"post",
										data:{valide:valide},
										success:function(donne)
										{
											if(donne!="")
											{
												$("#a").html("<i class='fa fa-check'>supprimer message</span>");
											console.log(donne);
											}
											
										}

								});
							})
						</script>
				</div>
				<div class="col-md-1">
					<a href="index.php?page=message&&message=<?=$rejoindre;?>"><i class="fa fa-send"></i></a>
				</div>
				<div class="col-md-1">
					<i class="fa fa-thumbs-up"></i>
				</div>
				<div class="col-md-1">
					<i class="fa fa-thumbs-down"></i>
				</div>
				<div class="col-md-1">
					<i class="fa fa-share"></i>
				</div>

			</div>

			<?php
		}

		 ?>
	</div>
	<div class="w3-half w3-container" style="">
		<p class="text-primary" style="margin-left: 50%">
			<i class="fa fa-comments-o fa-5x"></i>
			<span class="fa-2x">Hello</span>
		</p>
		<?php
		if(isset($_GET['message']))
		{
			require "compte/envoyer.php" ;
		}
		 
		 ?>
	</div>
</div>
<br><br><br><br>