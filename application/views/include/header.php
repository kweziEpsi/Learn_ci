<!DOCTYPE html>
<html>
<head>
    <title>Learn_CI 3 Basic Tutorial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Learn_CI</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/">Home</a></li>
      <li><a name="items" href="<?php echo base_url('item/list') ?>">Products</a></li>
      <li><a href="<?php echo base_url('site/about-info') ?>">About Us</a></li>
      <li><a href="<?php echo base_url('site/contact-us') ?>">Contact Us</a></li>  
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <?php 
      if (!isset($_SESSION['user_name'])) { ?>
        <li><a name="signup" href="<?php echo base_url('user/signup'); ?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a name="signin" href="<?php echo base_url('user/signin'); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <?php } else{ ?>
        <li><a name="profile" href="<?php echo base_url('user/profile'); ?>"><span class="glyphicon glyphicon-user"></span> <?php echo $this->session->userdata('user_name'); ?></a></li>
        <li><a name="logout" href="<?php echo base_url('user/logout'); ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    <?php } ?>
      </ul>
  </div>
</nav>
  
<div class="container">