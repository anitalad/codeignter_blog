<?php require_once('admin_header.php'); ?>

<div class="container">
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
					<a href="" class="btn btn-primary">Edit</a>
					<a href="" class="btn btn-danger">Delete</a>
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