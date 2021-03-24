<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12" style="background:pink; height:150px">
<center> <h1> MY CAKESHOP </h1></center>
<center><h4>Free Home Delivery</h4></center>
</div>
</div>


<div class="row">
<div class="col-md-3" style="background:lightcyan; height:600px;">
<table class="table">
<tr><td><a href=""> Home </a></td></tr>
<tr><td><a href="">Contact us</a></td></tr>
<tr><td><a href="bake.php?flavour=Pineapple"> Pineapple </a></td></tr>
<tr><td><a href="bake.php?flavour=chocolate"> Chocolate </a></td></tr>
<tr><td><a href="bake.php?flavour=truffle"> Truffle </a></td></tr>
<tr><td><a href="bake.php?flavour=red velvet"> Red velvet </a></td></tr>
<tr><td><a href=""> Message from the baker </a></td></tr>
</table>
</div>
<div class="col-md-9" style="background:lavender; height:600px;">

<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'bakery');
$id=$_REQUEST['flavour'];
echo "<br>Product is =  $id";
?>
</div>
</div>

