<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Welcome To CI Online Tutorial - Items List</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('item/create') ?>"><i class="fa fa-plus-square" style="font-size:24px"></i></a>
        </div>
    </div>
</div>


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
   <?php foreach ($data as $item) { ?>      
        <tr>
            <td><?php echo $item->id; ?></td>
            <td><?php echo $item->title; ?></td>
            <td><?php echo $item->description; ?></td>          
            <td>
                <form method="DELETE" action="<?php echo base_url('item/delete/'.$item->id);?>">
                <a name="read" class="btn btn-info" href="<?php echo base_url('item/read-more/'.$item->id) ?>"><i class='fa fa-eye' style='font-size:24px'></i></a>
                <a name="edit" class="btn btn-primary" href="<?php echo base_url('item/edit/'.$item->id) ?>"><i class='fas fa-edit' style='font-size:24px'></i></a>
                <button name="delete" type="submit" class="btn btn-danger"><i class="fa fa-trash" style="font-size:24px"></i></button>
                </form>
            </td>     
        </tr>
      <?php } ?>
  </tbody>


</table>