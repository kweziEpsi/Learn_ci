<span style="background-color:red;">
  <div class="container">
      <div class="row">
          <div class="col-md-4 col-md-offset-4">
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">Sign Up</h3>
                  </div>
                  <div class="panel-body">

                <?php
                    if ($this->session->flashdata('errors')){
                        echo '<div class="alert alert-danger">';
                        echo $this->session->flashdata('errors');
                        echo "</div>";
                    }
                ?>

                      <form role="form" method="post" action="<?php echo base_url('user/register'); ?>">
                          <fieldset>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Please enter Name" name="user_name" type="text" autofocus required>
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Please enter E-mail" name="user_email" type="email" autofocus required>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Enter Password" name="user_password" type="password"  required>
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Enter 10 diMobile No" name="user_mobile" type="number" required>
                              </div>
                              <center>
                                <button class="btn btn-lg btn-success" type="submit" value="Register" name="register"><span class="glyphicon glyphicon-log-in"></span></button>
                              </center>

                          </fieldset>
                      </form>
                      <center><b>Already registered ?</b> <br></b><a href="<?php echo base_url('user/signin'); ?>"> Please Login</a></center>
                  </div>
              </div>
          </div>
      </div>
  </div>
</span>
