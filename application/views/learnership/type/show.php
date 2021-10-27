<?php 
    if (!isset($_SESSION['user_name'])) {
        redirect(base_url('user/login'));
}
?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Welcome To CI Online Tutorial - Show Item</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" name="back" href="<?php echo base_url('learnershiptype/list');?>"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <?php echo $type->name; ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Credits:</strong>
            <?php echo $type->credits; ?>
        </div>
    </div>
</div>