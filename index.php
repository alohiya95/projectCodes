
<html>
<head>


<style>
	
.full-size-banner{
	width:100%;
	height: 60%;
	}
	
		
.full{
		color:pink;
		margin-left:0%;
		margin-right:0%;
		} 
.carousel-inner img{
	height:350px;
	
	}
	
.container-lg{
	margin-top:2%;
	}
.banner-notification{
	
	background:lightgrey;
	height:8%;
	font-size:250%;
	font-family: georgia;
	}
	
<!-- .products {
	margin-top: 5%;
	}
	-->

.products img{
	border-radius:5%;
	margin-top:5%;
	margin-bottom:10%;
	height:60%;
	width:90%;
	}
	
.products .col-3{
	 border:solid lightgrey 1px;
	}

</style>


</head>



<body>
	

<!-- start of header-->
<?php 
include "header.php";
?>
<!-- end of header-->


<!--start of banner-->

<div class="container-lg">


	<div class="row">

	
		<div class="col-lg-8">
			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.pexels.com/photos/573130/pexels-photo-573130.jpeg?cs=srgb&dl=pexels-zulian-yuliansyah-573130.jpg&fm=jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1614851099175-e5b30eb6f696?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8YmFubmVyfGVufDB8fDB8fA%3D%3D&w=1000&q=80" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1506765515384-028b60a970df?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YmFubmVyfGVufDB8fDB8fA%3D%3D&w=1000&q=80" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
		</div>


	

	<div class="col-lg-4">
	<img src="https://c8.alamy.com/comp/T3374K/checkered-seamless-pattern-with-alternating-parallelogram-optical-illusion-contrasty-monochrome-background-T3374K.jpg" style="width:85%;">
	</div>
	</div>
</div>
<!--end of banner-->

<!-- start of notification text-->

<div class="container-lg banner-notification">
	<center>These are the top offers from today! Check them out below!</center>
</div>
<!-- end of notification text-->


<!-- Start of products grid-->
<!--start first row of products-->
<div class= "row container-lg  products" style="margin-left:5% ; margin-top:2%;">
	<?php 
	include "connection.php";
	$query="select * from fruits";
	$my_obj=mysqli_query($conn,$query);
	 
	while ($prod_data= mysqli_fetch_assoc($my_obj)){
	
	?>
<div class="col-3">
<img src="../loagma/product_images/<?=$prod_data['image']?>">
<center><?=$prod_data['name']?> | <?=$prod_data['price']?></center>
<center>
	<form>
		<select name="">
			<option value="">Select</option>
			<option value=""><?=$prod_data['unit'] ?></option>
			
		</select><br><br>
		<input type="button" class="btn btn-warning" name="add" value="Add"> 
	</form>
</center>
</div>
<?php
}
?>
</div>
<!--end first row of products-->

<!--Start second row of products-->
<div class= "row container-lg  products" style="margin-left:5% ; margin-top:2%;">
<div class="col">
<img src="loagma.png">
<center>Apple | $5.2</center>
<center>
	<form>
		<select name="">
			<option value="">Select</option>
			<option value="">A</option>
			<option value="">B</option>
			<option value="">C</option>
			<option value="">D</option>
		</select><br><br>
		<input type="button" class="btn btn-warning" name="add" value="Add"> 
	</form>
</center>
</div>
<div class="col">
<img src="loagma.png">
<center>Apple | $5.2</center>
<center>
	<form>
		<select name="">
			<option value="">Select</option>
			<option value="">A</option>
			<option value="">B</option>
			<option value="">C</option>
			<option value="">D</option>
		</select> <br><br>
		<input type="button" class="btn btn-warning" name="add" value="Add"> 
	</form>
</center>
</div>
<div class="col">
<img src="loagma.png">
<center>Apple | $5.2</center>
<center>
	<form>
		<select name="">
			<option value="">Select</option>
			<option value="">A</option>
			<option value="">B</option>
			<option value="">C</option>
			<option value="">D</option>
		</select> <br><br>
		<input type="button" class="btn btn-warning" name="add" value="Add"> 
	</form>
</center>
</div>
<div class="col">
<img src="loagma.png">
<center>Apple | $5.2</center>
<center>
	<form>
		<select name="">
			<option value="">Select</option>
			<option value="">A</option>
			<option value="">B</option>
			<option value="">C</option>
			<option value="">D</option>
			
		</select> <br><br>
		<input type="button" class="btn btn-warning" name="add" value="Add"> 
	</form>
</center>
</div>
</div>
<!--end second row of products-->

<!-- end of products grid-->

<div class="container-lg">
<img src="https://img.freepik.com/free-vector/realistic-diwali-diya-banner-with-text-space_1017-33944.jpg?w=2000" class="full-size-banner">
</div>

<!--Start third row of products-->
<div class= "row container-lg  products" style="margin-left:5% ; margin-top:2%;">
<div class="col">
<img src="loagma.png">
<center>Apple | $5.2</center>
<center>
	<form>
		<select name="">
			<option value="">Select</option>
			<option value="">A</option>
			<option value="">B</option>
			<option value="">C</option>
			<option value="">D</option>
		</select><br><br>
		<input type="button" class="btn btn-warning" name="add" value="Add"> 
	</form>
</center>
</div>
<div class="col">
<img src="loagma.png">
<center>Apple | $5.2</center>
<center>
	<form>
		<select name="">
			<option value="">Select</option>
			<option value="">A</option>
			<option value="">B</option>
			<option value="">C</option>
			<option value="">D</option>
		</select> <br><br>
		<input type="button" class="btn btn-warning" name="add" value="Add"> 
	</form>
</center>
</div>
<div class="col">
<img src="loagma.png">
<center>Apple | $5.2</center>
<center>
	<form>
		<select name="">
			<option value="">Select</option>
			<option value="">A</option>
			<option value="">B</option>
			<option value="">C</option>
			<option value="">D</option>
		</select> <br><br>
		<input type="button" class="btn btn-warning" name="add" value="Add"> 
	</form>
</center>
</div>
<div class="col">
<img src="loagma.png">
<center>Apple | $5.2</center>
<center>
	<form>
		<select name="">
			<option value="">Select</option>
			<option value="">A</option>
			<option value="">B</option>
			<option value="">C</option>
			<option value="">D</option>
			
		</select> <br><br>
		<input type="button" class="btn btn-warning" name="add" value="Add"> 
	</form>
</center>
</div>
</div>
<!--end third row of products-->

</body>
<div class="container-fluid">
<?php 
include "footer.php";
?>
</div>
</html>
