<?php require_once('admin_header.php'); ?>

<div class="container">
	<?php 
	if($error = $this->session->flashdata('feedback')) {
		$feedbackClass = $this->session->flashdata('feedback_class'); ?>
		<div class="alert alert-dismissible <?= $feedbackClass; ?>">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <p class="mb-0"><?php echo $error; ?></p>
		</div>
	<?php } ?>
	<!--ref="<?= base_url('admin/add_article');?>" class="btn btn-primary pull-right">Add Article</a>-->
	<?php echo anchor('admin/add_article', 'Add Article',['class'=>'btn btn-primary']); ?>
	<table>
		<thead>
			<th>Sr. No</th>
			<th>Title</th>
			<th>Action</th>
		</thead>
		<tbody>
			<?php if( count( $article_list ) ): ?>
				<?php foreach( $article_list as $article ): ?>
			<tr>
				<td><?=$article->id;?></td>
				<td><?=$article->title;?></td>
				<td>
					<a href="<?php echo base_url('admin/edit_article/'.$article->id.'');?>" class="btn btn-primary">Edit</a>
				</td>
				<td>
					
					<?php 
						echo form_open('admin/delete_article');
						echo form_hidden('article_id',$article->id);
						echo form_submit(['name'=>'delete','value'=>'Delete','class'=>'btn btn-danger']);
						echo form_close();
					?>
					
				</td>
			</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td>No articles found</td>
				</tr>
			<?php endif; ?>
		</tbody>
		
	</table>
</div>
<?php require_once('admin_footer.php'); ?>