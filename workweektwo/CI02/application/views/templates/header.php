<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
}

/*hover 滑過*/
li a:hover {  
    background-color: #111111;
}
</style>
</head>
<body>

<ul>
  <li><a href="<?php echo base_url() . 'Home';  ?>">Home</a></li>
  <li><a href="<?php echo base_url() . 'Home';  ?>">About</a></li>
  <li><a href="<?php echo base_url() . 'Home';  ?>">Contact</a></li>
  <li style="float:right; "><a href="<?php echo base_url() . 'Home';  ?>">order</a></li>
  <li style="float:right; "><a href="<?php echo base_url() . 'Home/signin';  ?>">signin</a></li>
  <li style="float:right; "><a href="<?php echo base_url() . 'Home';  ?>">signup</a></li>
</ul>

<div class="container">