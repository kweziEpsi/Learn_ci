<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Welcome To CI Online Tutorial - Learnership Type List</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" name="add" href="<?php echo base_url('learnershiptype/create');?>"><i class="fa fa-plus-square" style="font-size:24px"></i></a>
        </div>
    </div>
</div>


<table class="table table-bordered table-hover">
  <thead>
      <tr>
        <th></th>
        <th>Name</th>
        <th>Credits</th>
        <th width="220px">Action</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($types as $type) { ?>      
      <tr>
        <td width=auto;><?php echo $type->id; ?></td>
        <td width=auto;><?php echo $type->name; ?></td>
        <td><?php echo $type->credits; ?></td>          
        <td>
            <center><a class="btn btn-info" name="read" href="<?php echo base_url('learnershiptype/read-more/'.$type->id) ?>"><i class='fa fa-eye' style='font-size:24px'></i></a>
            <a class="btn btn-primary" name="edit" href="<?php echo base_url('learnershiptype/edit/'.$type->id) ?>"><i class='fas fa-edit' style='font-size:24px'></i></a>
            <?php 
                if (isset($_SESSION['user_name'])) { ?>
                    <a name="delete" class="btn btn-danger" href="<?php echo base_url('learnershiptype/delete/'.$type->id) ?>"><i class='fas fa-trash' style='font-size:24px'></i></a></center>
            <?php } ?>    
        </td>     
      </tr>
      <?php } ?>
  </tbody>
</table>

<p><?php echo $links; ?></p>