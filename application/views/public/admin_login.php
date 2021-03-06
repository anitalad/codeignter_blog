<?php require_once('public_header.php'); ?>
<div class="container">
	<?php if($error = $this->session->flashdata('login_failed')) { ?>
	<div class="alert alert-dismissible alert-warning">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <h4 class="alert-heading">Warning!</h4>
	  <p class="mb-0"><?php echo $error; ?></p>
	</div>
	<?php } ?>
	<?php echo form_open('login/admin_login', ['id'=>'admin_login_farm']); ?>
	  <fieldset>
	    <legend>Admin Login</legend>
	    <div class="form-group">	
	    <?php echo form_error('username'); ?>    
	      <label for="exampleInputText1">User Name</label>
	      <?php echo form_input(['name'=>'username', 'class'=>'form-control', 'id'=>'exampleInputText1', 'placeholder'=>'Username','value'=>set_value('username')]);?>	      
	    </div>
	    <div class="form-group">
	    	<?php echo form_error('password'); ?>  
	      <label for="exampleInputPassword1">Password</label>
	      <?php echo form_password(['name'=>'password', 'class'=>'form-control', 'id'=>'exampleInputPassword1', 'placeholder'=>'Password']);?>	 
	    </div>    
	    </fieldset>
	    <?php 
	    	echo form_reset([ 'name'=>'reset', 'value'=>'Reset', 'class'=>'btn btn-primary']);
	    	echo form_submit([ 'name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-primary']); 
	    ?>
	    
	 </fieldset>	
</div>
<?php require_once('public_footer.php'); ?>