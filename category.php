<html>
	<style>
	.categ-box{
		height:50%;
		}
			
	.categ-box img{
		height:90%;
		width:100%;
		border-radius:10%;
		
		}
		
	.categ-box center{
		background: #D4AC0D;
		height:10%;
		border-radius:10%;
		}	
	</style>
	
<?php 
include "connection.php";
include "header.php";

?>


<body>

<div class="container-lg">

<div class="row">

<?php
$categ_query="select * from categories";
$categ_obj=mysqli_query($conn,$categ_query);
while ($categ_data= mysqli_fetch_assoc($categ_obj)){

?>
<div class="col-4 categ-box ">
	<img src="loagma.png" alt="Category Img">
	<center><b><?=$categ_data['name']?></b></center>
	
</div>
<?php
}
?>
<div class="col-4 categ-box ">
	<img src="loagma.png" alt="Category Img">
	<center><b>Accessories</b></center>
	
</div>
<div class="col-4 categ-box ">
	<img src="loagma.png" alt="Category Img">
	<center><b>Eat</b></center>
	
</div>
<div class="col-4 categ-box ">
	<img src="loagma.png" alt="Category Img">
	<center><b>Clothing</b></center>
	
</div>
</div>

</div>

</body>

</html>
