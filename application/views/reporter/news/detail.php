<div class="row">

<div class="col-sm-1" style=" padding-right: 0px;">

	<div class="panel card wrapi">
		<div class="card-block" style="padding: 15px;">
			<img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15dbcb9bd24%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15dbcb9bd24%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.171875%22%20y%3D%2242.1640625%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="..." class="img-fluid rounded">
			<img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15dbcb9bd24%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15dbcb9bd24%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.171875%22%20y%3D%2242.1640625%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="..." class="img-fluid rounded" style=" padding-top: 15px;">
			<img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15dbcb9bd24%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15dbcb9bd24%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.171875%22%20y%3D%2242.1640625%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="..." class="img-fluid rounded" style=" padding-top: 15px;">
		</div>
		
	</div>
	
</div>
<div class="col-sm-11" >
	
	<!-- tampil posting dimulai -->
	<div class="panel card">
		<div class="card-header">
			<a class="post-title" href="<?php echo base_url('news/detail/' . $news->idpost); ?>"><h4 class="card-title detail-title"><?php echo $data['news']->title; ?></h4></a>

		</div>
		
		<img class="card-img-top img-fluid" src="<?php echo assets_url('uploads/' . $data['news']->image); ?>" alt="<?php echo $data['news']->title; ?>">
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
			<a href="#" class="btn btn-info btn-tags btn-ikut">+ Follow &nbsp;</a>
		</div>
		<div class="panel-body card-block ">
			
			
			<p class="card-text post-detail"><?php echo nl2br($data['news']->body); ?></p>
		</div>
		<div class="card-footer">
			<?php
			if($tags = get_tags($data['news']->idpost)) {
				
				
				foreach($tags as $tag) {
echo ' <a href="' . base_url('news/tag/' . $tag->idtag) . '" class="btn btn-outline-info btn-tags"">' . $tag->title . '</a> ';
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
											<h3 class="detail-title">
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
	<!-- end tampil posting -->
	
	<div class="panel card">
		<div class="card-header">
		<H6>Baca Lainnya</H6>
		</div>
		</div>

		<div class="panel card">
		<div class="card-header">
		<H6>Rekomendasi</H6>
		</div>
		</div>

</div>

</div>

<div class="row">
<div class="col-sm-4">
<div class="panel card">
		<div class="card-header">
		<H6>One</H6>
		</div>
		</div>
</div>
<div class="col-sm-4">
<div class="panel card">
		<div class="card-header">
		<H6>Two</H6>
		</div>
		</div>
</div>
<div class="col-sm-4">
<div class="panel card">
		<div class="card-header">
		<H6>Three</H6>
		</div>
		</div>
</div>
</div>

