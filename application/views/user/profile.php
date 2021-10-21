<?php 
    if (!isset($_SESSION['user_name'])) {
        redirect(base_url('user/login'));
}
?>

<div class="jumbotron">
  <div class="container text-center">
    <h1><?php echo $this->session->userdata('user_name'); ?>'s Portfolio</h1>      
    <p>Welcome To CI Online Tutorial Portfolio Page</p>
  </div>
</div>

<div class="container-fluid bg-3 text-center">    
  <h3>Personal Details</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p><strong>Name:</strong> <?php echo $this->session->userdata('user_name'); ?></p>
    </div>
    <div class="col-sm-4"> 
    <p><strong>Email:</strong> <?php echo $this->session->userdata('user_email'); ?></p>
    </div>
    <div class="col-sm-4"> 
    <p><strong>Mobile:</strong> <?php echo $this->session->userdata('user_mobile'); ?></p>
    </div>
  </div>
</div>
