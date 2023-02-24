<br>	<br>
<?php 
$style=str_replace(" ","_", $pseudo)."profile/";
$nom=str_replace(" ","_",$pseudo)."profile";
$style1=str_replace(" ","_", $pseudo)."couverture/";
$nom1=str_replace(" ","_",$pseudo)."couverture";
if(file_exists($nom1))
{
  $explo1=scandir($nom1);
}
if(file_exists($nom))
{
$file=opendir($nom);
$explo=scandir($nom);	
}



 ?>	
 <div class="w3-container">
 	<div class="w3-third w3-container">
 		<div class="w3-display">
 			<img src="<?=$profil;?>" style="width: 100%" class="w3-round">
 		</div>
 	</div>
 	<div class=" w3-container w3-twothird">
 		<h4 style="" class="text-center"><i class="fa fa-user"></i><span class="text-primary"> @ <?=$pseudo?></span></h4>
 		<h4 style="" class="text-center"><i class="fa fa-bank"></i> <?=$pro["nom_stand"] ?></h4>
 		<h4 style="" class="text-center"><i class="fa fa-envelope"><span class="text-primary"> <?=$mail?></i></span></h4>
 	</div>
 </div>
<br>	
   <div class="w3-container w3-card w3-padding" style="padding: 15px">
   	<h1 class="text-center">Gallerie profile</h1>
   	<?php 

   		if(file_exists($nom) && count($explo)>0)
   		{
   			?>
   			<div class="w3-third w3-container w3-margin-bottom" style="display:<?=isset($explo[2])?'block':'none' ?>">
 				<img src="<?=$style.$explo[2]?>" id="<?=$style.$explo[2]?>" style="width: 100%;height: 220px">
 			</div>
 			<div class="w3-third w3-container w3-margin-bottom" style="display:<?=isset($explo[3])?'block':'none' ?>">
 				<img src="<?=$style.$explo[3]?>" id="<?=$style.$explo[3]?>" style="width: 100%;height: 220px">
 			</div>
 			<div class="w3-third w3-container w3-margin-bottom" style="display:<?=isset($explo[4])?'block':'none' ?>">
 				<img src="<?=$style.$explo[4]?>" id="<?=$style.$explo[4]?>" style="width: 100%;height: 220px">
 			</div>
 			<div class="w3-third w3-container w3-margin-bottom" style="display:<?=isset($explo[5])?'block':'none' ?>">
 				<img src="<?=$style.$explo[5]?>" id="<?=$style.$explo[5]?>" style="width: 100%;height: 220px">
 			</div>
 			<div class="w3-third w3-container w3-margin-bottom" style="display:<?=isset($explo[6])?'block':'none' ?>">
 				<img src="<?=$style.$explo[6]?>" id="<?=$style.$explo[6]?>" style="width: 100%;height: 220px">
 			</div>
 			<div class="w3-third w3-container w3-margin-bottom" style="display:<?=isset($explo[7])?'block':'none' ?>">
 				<img src="<?=$style.$explo[7]?>" id="<?=$style.$explo[7]?>" style="width: 100%;height: 220px">
 			</div>
 			<div class="w3-third w3-container w3-margin-bottom" style="display:<?=isset($explo[8])?'block':'none' ?>">
 				<img src="<?=$style.$explo[8]?>" id="<?=$style.$explo[8]?>" style="width: 100%;height: 220px">
 			</div>





   			<?php 
   			
   		}

   	?>
 	

 </div>
 <br><br>
    <div class="w3-container w3-card w3-padding" style="padding: 15px">
      <h1 class="text-center">Gallerie couverture</h1>
      <?php 

         if(file_exists($nom1) && count($explo1)>0)
         {
            ?>
            <div class="w3-third w3-container w3-margin-bottom" style="display:<?=isset($explo1[2])?'block':'none' ?>">
            <img src="<?=$style1.$explo1[2]?>" id="<?=$style1.$explo1[2]?>" style="width: 100%;height: 220px">
         </div>
         <div class="w3-third w3-container w3-margin-bottom" style="display:<?=isset($explo1[3])?'block':'none' ?>">
            <img src="<?=$style1.$explo1[3]?>" id="<?=$style1.$explo1[3]?>" style="width: 100%;height: 220px">
         </div>
         <div class="w3-third w3-container w3-margin-bottom" style="display:<?=isset($explo1[4])?'block':'none' ?>">
            <img src="<?=$style1.$explo1[4]?>" id="<?=$style1.$explo1[4]?>" style="width: 100%;height: 220px">
         </div>
         <div class="w3-third w3-container w3-margin-bottom" style="display:<?=isset($explo1[5])?'block':'none' ?>">
            <img src="<?=$style1.$explo1[5]?>" id="<?=$style1.$explo1[5]?>" style="width: 100%;height: 220px">
         </div>
         <div class="w3-third w3-container w3-margin-bottom" style="display:<?=isset($explo1[6])?'block':'none' ?>">
            <img src="<?=$style1.$explo1[6]?>" id="<?=$style1.$explo1[6]?>" style="width: 100%;height: 220px">
         </div>
         <div class="w3-third w3-container w3-margin-bottom" style="display:<?=isset($explo1[7])?'block':'none' ?>">
            <img src="<?=$style1.$explo1[7]?>" id="<?=$style1.$explo1[7]?>" style="width: 100%;height: 220px">
         </div>
         <div class="w3-third w3-container w3-margin-bottom" style="display:<?=isset($explo1[8])?'block':'none' ?>">
            <img src="<?=$style1.$explo1[8]?>" id="<?=$style1.$explo1[8]?>" style="width: 100%;height: 220px">
         </div>





            <?php 
            
         }

      ?>
   
 </div>

