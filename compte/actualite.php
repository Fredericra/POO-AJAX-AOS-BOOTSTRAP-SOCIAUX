<br><br>	
<?php 




  $relation = pdo()->query("SELECT* FROM admin INNER JOIN produit ON admin.pseudo=produit.pseudo");
        $select = $relation->fetch();
$image=new photo($select);
if(isset($select))
{
	while($select=$relation->fetch())
	 {
		echo image_pub($image,$select);
	}
}
 ?>