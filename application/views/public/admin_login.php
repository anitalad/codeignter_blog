<?php require_once('public_header.php'); ?>
<div class="container">
	<?php echo form_open('login/admin_login', ['id'=>'admin_login_farm']); ?>
	  <fieldset>
	    <legend>Admin Login</legend>
	    <div class="form-group">	    
	      <label for="exampleInputText1">User Name</label>
	      <?php echo form_input(['name'=>'username', 'class'=>'form-control', 'id'=>'exampleInputText1', 'place_holder'=>'Username']);?>	      
	    </div>
	    <div class="form-group">
	      <label for="exampleInputPassword1">Password</label>
	      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	    </div>    
	    </fieldset>
	    <?php 
	    	echo form_reset([ 'name'=>'reset', 'value'=>'Reset', 'class'=>'btn btn-primary']);
	    	echo form_submit([ 'name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-primary']); 
	    ?>
	 </fieldset>	
</div>
<?php require_once('public_footer.php'); ?>