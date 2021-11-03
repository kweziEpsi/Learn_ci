<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="col-md-8 pull-left">
            <h2>Welcome To CI Online Tutorial - Items List</h2>
        </div>
        <div class="col-md-4 pull-right">
            <a class="btn btn-success" name="add" href="<?php echo base_url('item/create') ?>"><i class="fa fa-plus-square" style="font-size:24px"></i></a>
        </div>
    </div>
</div>
<div class="row">
        <div class="col-xs-12 col-sm-12 md-10 offset-md-2 well">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>Title</th>
                        <th>Description</th>
                        <th width="220px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $item) { ?>      
                    <tr>
                        <td width=auto;><?php echo $item->id; ?></td>
                        <td width=auto;><?php echo $item->title; ?></td>
                        <td><?php echo $item->description; ?></td>          
                        <td>
                            <center><a class="btn btn-info" name="read" href="<?php echo base_url('item/read-more/'.$item->id) ?>"><i class='fa fa-eye' style='font-size:24px'></i></a>
                            <a class="btn btn-primary" name="edit" href="<?php echo base_url('item/edit/'.$item->id) ?>"><i class='fas fa-edit' style='font-size:24px'></i></a>
                            <?php 
                                if (isset($_SESSION['user_name'])) { ?>
                                    <a name="delete" class="btn btn-danger" href="<?php echo base_url('item/delete/'.$item->id) ?>"><i class='fas fa-trash' style='font-size:24px'></i></a></center>
                            <?php } ?>    
                        </td>     
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <ul class="pagination pagination-lg"><li><a href=""><?php echo $links; ?></a></li></ul>
        </div>
</div>
