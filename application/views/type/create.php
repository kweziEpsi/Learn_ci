<?php 
    if (!isset($_SESSION['user_name'])) {
        redirect(base_url('user/login'));
}
?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Welcome To CI Online Tutorial - Add New Learnership Type</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('learnershiptype/list');?>"> Back</a>
        </div>
    </div>
</div>

<div class="col-sm-8">
    <form method="post" action="<?php echo base_url('learnershiptype/save');?>">
        <?php
            if ($this->session->flashdata('errors')){
                echo '<div class="alert alert-danger">';
                echo $this->session->flashdata('errors');
                echo "</div>";
            }
        ?>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" name="name" class="form-control"placeholder="Leanership type name" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="number" name="credits" class="form-control"placeholder="Credit score" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>