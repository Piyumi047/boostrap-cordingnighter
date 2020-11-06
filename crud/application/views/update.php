<?php include('header.php'); ?>

    
  	<?php echo form_open("home/update/{$record->id}",['class'=>'form-horizontal']); ?>
  	
  	<div class="container"> 
  	<fieldset>
 
    <legend>Update customer</legend>

     <div class="row">
     	<div class="col-lg-6">
     		 <div class="form-group">
               <label for="inputEmail" class="col-lg-2 control-label">Customer_Name</label>
                  <div class="col-lg-10">
                      <?php echo form_input(['name'=>'customername','class'=>'form-control','placeholder'=>'Customer_Name','value'=>set_value('customername',$record->customername)]); ?>
                  </div>
             </div>
                  <div class="col-lg-6">
     		         <?php echo form_error('customername'); ?>
                 </div>
        </div>
     </div>


     <div class="row">
     	<div class="col-lg-6">
     		 <div class="form-group">
               <label for="inputEmail" class="col-lg-2 control-label">Phone</label>
                  <div class="col-lg-10">
                      <?php echo form_input(['name'=>'phone','class'=>'form-control','placeholder'=>'Phone','value'=>set_value('phone',$record->phone)]); ?>
                  </div>
             </div>
                  <div class="col-lg-6">
     		         <?php echo form_error('phone'); ?>
                 </div>
        </div>
     </div>



      <div class="row">
     	<div class="col-lg-6">
     		 <div class="form-group">
               <label for="inputEmail" class="col-lg-2 control-label">Address</label>
                  <div class="col-lg-10">
                      <?php echo form_input(['name'=>'address','class'=>'form-control','placeholder'=>'Address','value'=>set_value('address',$record->address)]); ?>
                  </div>
             </div>
                  <div class="col-lg-6">
     		          <?php echo form_error('address'); ?>
                 </div>
        </div>
     </div>

     <div class="row">
     	<div class="col-lg-6">
     		 <div class="form-group">
               <label for="inputEmail" class="col-lg-2 control-label">City</label>
                  <div class="col-lg-10">
                      <?php echo form_input(['name'=>'city','class'=>'form-control','placeholder'=>'City','value'=>set_value('city',$record->city)]); ?>
                  </div>
             </div>
                  <div class="col-lg-6">
     		            <?php echo form_error('city'); ?>
                 </div>
        </div>
     </div>


     <div class="row">
     	<div class="col-lg-6">
     		 <div class="form-group">
               <label for="inputEmail" class="col-lg-2 control-label">Order_Details</label>
                  <div class="col-lg-10">
                      <?php echo form_input(['name'=>'order','class'=>'form-control','placeholder'=>'Order_Details','value'=>set_value('order',$record->order)]); ?>
                  </div>
             </div>
                  <div class="col-lg-6">
     		             <?php echo form_error('order'); ?>
                 </div>
        </div>
     </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <?php echo form_reset(['value'=>'Reset','class'=>'btn btn-default']); ?>
        <?php echo form_submit(['value'=>'Save','class'=>'btn btn-primary']); ?>
      </div>
    </div>
  </fieldset>
  <?php echo form_close(); ?>
   
<?php include('footer.php'); ?>