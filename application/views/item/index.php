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
          <th>Title</th>
          <th>Description</th>
          <th width="220px">Action</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($data as $item) { ?>      
      <tr>
          <td><?php echo $item->title; ?></td>
          <td><?php echo $item->description; ?></td>          
      <td>
            <a class="btn btn-info" href="<?php echo base_url('item/read-more/'.$item->id) ?>"><i class='fa fa-eye' style='font-size:24px'></i></a>
            <a class="btn btn-primary" href="<?php echo base_url('item/edit/'.$item->id) ?>"><i class='fas fa-edit' style='font-size:24px'></i></a>
            <?php 
                if (isset($_SESSION['user_name'])) { ?>
                    <a class="btn btn-danger" href="<?php echo base_url('item/delete/'.$item->id) ?>"><i class='fas fa-trash' style='font-size:24px'></i></a>
            <?php } ?>
            
      </td>     
      </tr>
      <?php } ?>
  </tbody>
</table>