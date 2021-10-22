<span style="background-color:red;">
  <div class="container">
      <div class="row">
          <div class="col-md-4 col-md-offset-4">
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">Sign In</h3>
                  </div>
                  <div class="panel-body">
                    <?php
                        $success_msg= $this->session->flashdata('success_msg');
                        $error_msg= $this->session->flashdata('error_msg');
                        if($success_msg){
                        ?>
                        <div class="alert alert-success">
                        <?php echo $success_msg; ?>
                        </div>
                        <?php
                    }
                    if($error_msg){
                    ?>
                        <div class="alert alert-danger">
                            <?php echo $error_msg; ?>
                        </div>
                    <?php
                    }
                    ?>
                <form method="post" action="<?php echo base_url('user/login'); ?>">
                    <div class="form-group">
                        <input class="form-control" placeholder="Please enter E-mail" name="user_email" type="email" autofocus required>
                        <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Enter Password" name="user_password" type="password" required>
                        <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                    </div>
                    <div class="form-group">
                        <center><button class="btn btn-lg btn-success" type="submit" value="login" name="login"><span class="glyphicon glyphicon-log-in"></span></button>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('user/signup'); ?>">Register</a></center>
                    </div>
                </form>
                </div>
              </div>
          </div>
      </div>
  </div>
</span>

