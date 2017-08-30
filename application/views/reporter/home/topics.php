<div class="panel card">
<div class="panel-body card-block text-center ">
<form class="form-inline my-2 my-lg-0" role="search" method="post" action="<?php echo base_url('news/search'); ?>">
                            <input class="form-control mr-sm-2" size="46px" type="text" placeholder="Berita apa yang ingin anda baca hari ini ?" name="keyword">
                            <button class="btn btn-primary my-2 my-sm-0" type="submit">Cari</button>
                        </form>
</div>
</div>
<div class="panel card">
	<div class="card-header">
		<h6>Topics</h6>
	</div>
	<div class="panel-body card-block ">
		<?php
		foreach($tags as $tag) {
		echo ' <a href="' . base_url('news/tag/' . $tag->idtag) . '" class="btn btn-outline-info btn-tags"">' . $tag->title . '</a> ';
		}
		
		?>
	</div>
</div>
<div class="panel card">
	<div class="card-header">
		<h6>Categories</h6>
	</div>
	<div class="panel-body card-block ">
		<?php
		$categories = get_categories();
		if($categories):
		foreach($categories as $category):
		?>
		
			<a class="btn btn-outline-info btn-tags" href="<?php echo base_url('news/category/' . $category->idcategory); ?>">
				<?php echo $category->title; ?>
			</a>
	
		<?php
		endforeach;
		endif;
				
		?>
	</div>
</div>