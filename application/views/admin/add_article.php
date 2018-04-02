<?php require_once('admin_header.php'); ?>

<div class="container">
	<?php if($error = $this->session->flashdata('feedback')) { ?>
		<div class="alert alert-dismissible alert-warning">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <h4 class="alert-heading">Warning!</h4>
		  <p class="mb-0"><?php echo $error; ?></p>
		</div>
	<?php } ?>
	<?php echo form_open('admin/store_article', ['id'=>'admin_add_article']); ?>
	<?php echo form_hidden('user_id', $this->session->userdata('user_id')); ?>
	  <fieldset>
	    <legend>Add Article</legend>
	    <div class="form-group">	
	    <?php echo form_error('title'); ?>    
	      <label for="exampleInputText1">Title</label>
	      <?php echo form_input(['name'=>'title', 'class'=>'form-control', 'id'=>'exampleInputText1', 'placeholder'=>'Title','value'=>set_value('title')]);?>	      
	    </div>
	    <div class="form-group">
	    	<?php echo form_error('body'); ?>  
	      <label for="exampleInputPassword1">Article Details</label>
	      <?php echo form_textarea(['name'=>'body', 'class'=>'form-control', 'id'=>'exampleInputBody1', 'placeholder'=>'Article Details']);?>	 
	    </div>    
	    </fieldset>
	    <?php 
	    	echo form_reset([ 'name'=>'reset', 'value'=>'Reset', 'class'=>'btn btn-primary']);
	    	echo form_submit([ 'name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-primary']); 
	    ?>
	    
	 </fieldset>	
</div>
<?php require_once('admin_footer.php'); ?>