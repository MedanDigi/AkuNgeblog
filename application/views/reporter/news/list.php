
<div class="panel card">
	<div class="card-img text-center">
		<div class="thumb pict full-pict bg-cover" style="background-image: url(&quot;http://wegodesign.net/mzine-html-template/pic/blog-list/item-3.jpg&quot;); height:195px; ">
			<div class="overlay"></div>
			
			<div class="panel-body text-white" style="padding-top: 70px; position: relative;">
				
				<?php 
					if(!empty($category)){
					echo "<h3/>".ucwords($category->title)."</h3>";
					echo $category->description;
					}
					if(!empty($tag)){
					echo "<h3/> Tag : ".ucwords($tag->title)."</h3>";
					}
				?>

				
	</div>
	
</div>
</div>
</div>


<!-- tampil posting dimulai -->
<?php foreach($data['news'] as $news): ?>
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

<small class="text-muted"><?php echo date('d M, Y h:i a', strtotime($news->add_date)); ?></small>
</div>
<div class="panel-body card-block ">
<img class="img-fluid" src="<?php echo assets_url('uploads/' . $news->image); ?>" alt="<?php echo $news->title; ?>">
<a class="post-title" href="<?php echo base_url('news/detail/' . $news->idpost); ?>"><h4 class="card-title"><?php echo $news->title; ?></h4></a>
<p class="card-text"><?php echo substr(strip_tags($news->body), 0, 94); ?>...</p>
<?php
if($tags = get_tags($news->idpost)) {


foreach($tags as $tag) {
echo ' <a href="' . base_url('news/tag/' . $tag->idtag) . '" class="btn btn-outline-info btn-tags"">' . $tag->title . '</a> ';
}

}
?>
</div>
<div class="card-footer">
<div class="row text-center">
	<div class="col-sm-4">Sukai</div>
	<div class="col-sm-4">Komentar</div>
	<div class="col-sm-4">Share</div>
</div>
</div>
</div>
<?php endforeach; ?>
<!-- end tampil posting -->