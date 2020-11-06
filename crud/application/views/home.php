
<?php include('header.php'); ?>
<link rel="stylesheet" type="text/css"  href="<?php echo base_url("resources/css/header.css"); ?>"/>
<div class="container">
    <?php if($error = $this->session->flashdata('response'));  ?>
        <div class="alert alert-dismissible alert-success">
            <?php echo $error; ?>
        </div>

     
  <div class="row">
    <div class="col-lg-12">
      <?php echo anchor("home/create",'Create',['class'=>'btn btn-primary']); ?>
    </div>
    
  </div>

<div class="bs-component">
<table class="table table-striped table-hover " >
  <thead>
      <tr>
         <th>CustomerName</th>
         <th>Phone</th>
         <th>Address</thth>
         <th>City</th>
         <th>OrderDetails</th>
         <th>Operations</th>
    </tr>
  </thead>
  <tbody>
     <?php if(count($records)): ?> 
    <?php foreach ($records as $record): ?> 
      
    <tr>
      <td><?php echo $record->customername; ?></td>
      <td><?php echo $record->phone; ?></td>
      <td><?php echo $record->address; ?></td>
      <td><?php echo $record->city; ?></td>
      <td><?php echo $record->order; ?></td>
      <td><?php echo anchor("home/edit/{$record->id}",'Update',['class'=>'btn btn-success']); ?></td>
      <td><?php echo anchor("home/delete/{$record->id}",'Delete',['class'=>'btn btn-danger']); ?></td>
    </tr>
       <?php endforeach; ?>
         <?php else: ?>
            <tr>No Records Found!</tr>
         <?php endif; ?> 
  
  </tbody>
</table> 
</div>
</div>
<?php include('footer.php'); ?>