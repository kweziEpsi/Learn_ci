<?php 
    if (!isset($_SESSION['user_name'])) {
        redirect(base_url('user/login'));
}
?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Welcome To CI Online Tutorial - Learnership Type</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" name="back" href="<?php echo base_url('learnershiptype/list');?>"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8">
        <div class="form-group">
            <strong>Leanership Type:</strong>
            <?php echo $type->name; ?>
        </div>
    </div>
    <div class="col-xs-8 col-sm-8 col-md-8">
        <div class="form-group">
            <strong>Total Credits:</strong>
            <?php echo $type->credits; ?>
        </div>
    </div>
    <div class="col-xs-8 col-sm-8 col-md-8">
        <div class="form-group">
            <strong>Learnership SubType:</strong>
            <?php echo $sub->name; ?>
        </div>
    </div>
    <div class="col-xs-8 col-sm-8 col-md-8">
        <div class="form-group">
            <strong>Credits:</strong>
            <?php echo $sub->credits; ?>
        </div>
    </div>
</div>