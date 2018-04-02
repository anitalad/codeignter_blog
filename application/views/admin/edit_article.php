<?php require_once('admin_header.php'); ?>

<div class="container">

	<?php echo form_open("admin/store_article/{$articleData->id}/edit", ['id'=>'admin_add_article']); ?>
	 <fieldset>
	    <legend>Edit Article</legend>
	    <div class="form-group">	
	    <?php echo form_error('title'); ?>    
	      <label for="exampleInputText1">Title</label>
	      <?php echo form_input(['name'=>'title', 'class'=>'form-control', 'id'=>'exampleInputText1', 'placeholder'=>'Title','value'=>set_value('title', $articleData->title)]);?>	      
	    </div>
	    <div class="form-group">
	    	<?php echo form_error('body'); ?>  
	      <label for="exampleInputPassword1">Article Details</label>
	      <?php echo form_textarea(['name'=>'body', 'class'=>'form-control', 'id'=>'exampleInputBody1', 'placeholder'=>'Article Details', 'value'=>set_value('body', $articleData->body) ]);?>	 
	    </div>    
	    </fieldset>
	    <?php 
	    	echo form_reset([ 'name'=>'reset', 'value'=>'Reset', 'class'=>'btn btn-primary']);
	    	echo form_submit([ 'name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-primary']); 
	    ?>
	    
	 </fieldset>	
</div>
<?php require_once('admin_footer.php'); ?>