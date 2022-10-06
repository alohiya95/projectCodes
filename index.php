<?php
session_start();

?>
<html>

<style>

.a{
border-radius: 20px;
height:430px;
background-color: #D4AC0D;
width: 300px;
margin: 50px 550px;

}

.logo{
margin: 1px 1px;
}


.input_form{
margin:35px;
}
</style>
<div class='logo'>
<img style="border-radius: 20px; height:200px; width:200px; margin:0px 595px ;" src="loagma.png">
</div>

<div class="a">
<br><br><br>
<p style=" margin: 30px; font-size:25px" >Log in to Registered ID</p>

<div class="input_form">

<form name="ToLogin" id="" method="POST" action="LoggedIn.php">

<label>Username:</label></label><input type="text" placeholder="Enter your username" id="" name="username" required><br><br>
<label>Password:</label></label><input type="password" placeholder="Enter your password" id="" name="password" required><br><br>
<input type="submit" name="submit" value="submit">
<a style="margin:10px;" href="registration.php"> Create ID</a><br>




</div>
</div> 

</html>