<div class="panel card">
	<div class="card-header">
		
		<?php
						$author = get_user_profile($news->iduser);
						echo (
						$author->gravatar_email ?
							'<img src="' . get_gravatar($author->gravatar_email, 16) . '" class="img-fluid rounded-circle float-left" width="35px" style=" margin-right: 10px;" title="' . ($author->display_name ? $author->display_name : $author->first_name . ' ' . substr($author->last_name, 0, 1)) . '" /> '
							: '<i class="fa fa-fw fa-user"></i> '
		);?>
		<h6 style="margin-top: 0px; margin-bottom: 0px; ">
		<?php echo ($author ? $author->display_name : $author->first_name. substr($author->last_name, 0, 1));
		?>
		</h6>
		
		<small class="text-muted"><?php echo date('d M, Y h:i a', strtotime($data['news']->add_date)); ?></small>
	</div>
	<div class="panel-body card-block ">
		<img class="img-fluid" src="<?php echo assets_url('uploads/' . $data['news']->image); ?>" alt="<?php echo $data['news']->title; ?>">
		<a class="post-title" href="<?php echo base_url('news/detail/' . $news->idpost); ?>"><h4 class="card-title"><?php echo $data['news']->title; ?></h4></a>
		<p class="card-text"><?php echo nl2br($data['news']->body); ?></p>

	</div>
	<div class="card-footer">
		<?php
		if($tags = get_tags($data['news']->idpost)) {
			
			echo 'Terms: ';
			foreach($tags as $tag) {
				echo ' <a href="#" class="btn btn-outline-info btn-tags"' . base_url('news/tag/' . $tag->idtag) . '">' . $tag->title . '</a> ';
			}
			
		}
		?>
		
	</div>
	<!--
		<div class="card-footer">
				<div class="row text-center">
						<div class="col-sm-4">Sukai</div>
						<div class="col-sm-4">Komentar</div>
						<div class="col-sm-4">Share</div>
				</div>
		</div>
	-->
</div>
<!--
<div class="row">
		<div class="col-md-12">
				<h3>
		<?php echo $data['news']->title; ?>
		</h3>
		<img src="<?php echo assets_url('uploads/' . $data['news']->image); ?>" class="img-responsive news-image" alt="<?php echo $data['news']->title; ?>" />
		<p class="author-info alert alert-warning">
			<?php
			echo (
				$data['author']->gravatar_email ?
					'<img src="' . get_gravatar($data['author']->gravatar_email, 16) . '" class="gravatar" title="' . ($data['author']->display_name ? $data['author']->display_name : $data['author']->first_name . ' ' . substr($data['author']->last_name, 0, 1)) . '" /> '
					: '<i class="fa fa-fw fa-user"></i> '
			)
			. ($data['author']->display_name ? $data['author']->display_name : $data['author']->first_name . ' ' . substr($data['author']->last_name, 0, 1));
			?>
			<i class="fa fa-fw fa-calendar-o"></i> <?php echo date('d M, Y h:i a', strtotime($data['news']->add_date)); ?>
			<?php
			echo (
				($category = get_category($data['news']->idpost)) ?
					'<i class="fa fa-fw fa-filter"></i> <a href="' . base_url('news/category/' . $category[0]->idcategory) . '">' . $category[0]->title . '</a>'
					: ''
			);
			?>
		</p>
		<div class="news-detail">
			<?php echo nl2br($data['news']->body); ?>
		</div>
		<?php
		if($tags = get_tags($data['news']->idpost)) {
			echo '<div class="tags">';
				echo 'Terms: ';
				foreach($tags as $tag) {
					echo ' <i class="fa fa-fw fa-link"></i> <a href="' . base_url('news/tag/' . $tag->idtag) . '">' . $tag->title . '</a> ';
				}
			echo '</div>';
		}
		?>
		<?php if(!isset($data['pdf']) || $data['pdf'] == FALSE): ?>
		<div class="pdf">
			<i class="fa fa-fw fa-file-pdf-o"></i> <a href="<?php echo base_url('news/pdf/' . $data['news']->idpost); ?>">Download PDF</a>
		</div>
		<?php endif; ?>
	</div>
</div>
-->