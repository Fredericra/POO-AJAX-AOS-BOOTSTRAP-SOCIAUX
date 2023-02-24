<br>	
<?php
$madefa=$pseudo."&".$_GET['message'];
$retour=select($base1,"pseudo",$_GET['message']);
 ?>

 <div class="container-fluid">
 	<div class="col-md-4">
 		 <span class="text-primary">envoyer <i class="fa fa-send"></i></span> <span class="text-primary">@ <?=$_GET['message']?></span>
 	</div>
 	<div class="col-md-5">
 		<img src="<?=$retour['img'];?>" class="w3-round-xlarge" style="width: 200px;height: 100px" id="<?=$retour['img'];?>">
 	</div>
 </div>
 <br>	
<div class="container-fluid">

	<div class="row">
		<div class="" id="recept"></div>
		<div class="col-md-10" id="text1"></div>
	</div>
		<div class="row">

		<div class="col-md-2" id="envoye"></div>
		<div class="col-md-10" id="text"></div>
	</div>
</div>
<div class="container-fluid" id="<?=$madefa;?>">
		<form method="post" id="envoyer" style="margin-left: 25%">
			<input type="text" id="value" class="form-control" name="" style="height: 180px"><br>	
			<input type="submit"  class="btn btn-primary btn-block" value="envoyer" name="">
		</form>
</div>

<script type="">
		$("#envoyer").submit(async function(e)
		{
			e.preventDefault();
			id=e.target.parentElement.id;
			value=$("#value").val();
			$.ajax({
				url:"message/message.php",
				method:"post",
				data:{donne:id,value:value},
				dataType:"json",
				success:function(tous)
				{
					if(tous!="")
					{
						$("#recept").html("<img class='w3-round-xlarge' style='width:50px;height:50px' src="+tous[3].img+">");
						$("#text1").html("<span class='w3-tag w3-round-xlarge w3-blue'>"+tous[3].pseudo+"</span>"+"<p class='alert alert-primary'>"+tous[1].message+"</p>")
						$("#map1").show(2000).append();
						$("#envoye").html("<img class='w3-round-xlarge' style='width:50px;height:50px' src="+tous[0].img+">");
						$("#text").append("<span class='w3-tag w3-round-xlarge'>"+tous[0].pseudo+"</span>"+": <p class='alert alert-primary'>"+tous[2]+"</p>")
						
						console.log(tous);
					}
					
				}
			})
		})

</script>