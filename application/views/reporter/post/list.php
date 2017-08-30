



	
	<?php if($data['posts'] && !empty($data['posts'])): ?>


		<div class="card panel">
		
	<div class="card-block ">
			My Post (?) Statistic (?) Publish (?) Draf (?) Comment (?)
		</div>

</div>

		<div class="row">
            
	<!-- memulai -->
	<?php foreach($data['posts'] as $post): ?>
	
	<div class="col-sm-6 ">
	<div class="panel card">
		<div class="card-header">
			
			<?php
							$author = get_user_profile($post->iduser);
							echo (
							$author->gravatar_email ?
								'<img src="' . get_gravatar($author->gravatar_email, 16) . '" class="img-fluid rounded-circle float-left" width="35px" style=" margin-right: 10px;" title="' . ($author->display_name ? $author->display_name : $author->first_name . ' ' . substr($author->last_name, 0, 1)) . '" /> '
								: '<i class="fa fa-fw fa-user"></i> '
			);?>
			<h6 style="margin-top: 0px; margin-bottom: 0px; ">
			<?php echo ($author ? $author->display_name : $author->first_name. substr($author->last_name, 0, 1));
			?>
			</h6>
			
			<small class="text-muted"><?php echo date('d M, Y h:i a', strtotime($post->add_date)); echo " (".$post->view." Viewer)";?> </small>
		</div>
		
		<div class="panel-body card-block">
			<img class="img-fluid" src="<?php echo assets_url('uploads/' . $post->image); ?>" alt="<?php echo $post->title; ?>">

			<a class="post-title" href=""><h4 class="card-title"><?php echo $post->title; ?></h4></a>
			<p class="card-text"><?php echo substr(strip_tags($post->body), 0, 50); ?>...</p>
			<a href="#" class="btn btn-outline-info btn-tags"><?php echo (($category = get_category($post->idpost)) ? $category[0]->title : ''); ?></a>
		</div>
		<div class="card-footer">
			<div class="row text-center">
				<div class="col-sm-4"><a href="<?php echo base_url('news/detail/' . $post->idpost); ?>">Baca</a></div>
				
				<div class="col-sm-4">Edit</div>
				<div class="col-sm-4"><a href="<?php echo base_url('post/delete/' . $post->idpost); ?>">Hapus</a></div>
			</div>
		</div>
	</div>
	</div>
	
	<?php endforeach; ?>
	</div>
	<?php else: ?>

		<div class="panel card ">
<div class="col-sm-12 ">
<div class="card-block  text-center">
<img src="https://i.pinimg.com/originals/ce/ea/80/ceea8028dbc1e63e16010b748b443dcd.gif" class="img-fluid text-center">
<h4> No posts found.</h4> <a href="<?php echo base_url('post/add'); ?>">Add your first post</a> now. 
	</div>
	<?php endif; ?>
	</div>
	</div>

