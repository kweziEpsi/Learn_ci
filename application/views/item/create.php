<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Welcome To CI Online Tutorial - Add New Item</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('item/list');?>"> Back</a>
        </div>
    </div>
</div>

<div class="col-sm-8">
    <form method="post" action="<?php echo base_url('item/save');?>">
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
                    <input type="text" name="title" class="form-control"placeholder="Enter title" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <textarea name="description" class="form-control"placeholder="Enter description" required></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>