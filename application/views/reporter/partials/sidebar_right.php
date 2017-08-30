<?php if(is_logged_in()) { ?>

<div class="sticky">
<div class="wrap">
<div class="list-group sidebar-menu">
	<a href="http://localhost/sehari/account" class="list-group-item list-group-item-action <?php if (current_url() == base_url('account')){ echo "active";}?>">Profile</a>
	<a href="http://localhost/sehari/post" class="list-group-item list-group-item-action <?php if (current_url() == base_url('post')){ echo "active";}?>">My Story</a>
	<a href="http://localhost/sehari//account/logout" class="list-group-item list-group-item-action">Logout</a>
	  <!-- echo "<a href='".base_url()."/account/logout'><button class='btn btn-primary my-2 my-sm-0' type='submit'>Logout</button></a>"; -->
</div>
<div class="card copyright">
<div class="card-block ">
<a href="<?php echo base_url('page/getting-started')?>">Getting started</a>  | <a href="">Privacy</a> | <a href="">Help</a> | <a href="">About</a>
</div>
</div>
<?php if (current_url() == base_url('account')){ ?> 
<div class="card">
    <img class="card-img-top" src="<?php echo get_gravatar(isset($data['profile']->gravatar_email)?$data['profile']->gravatar_email:$data['user']->email); ?>" alt="Card image cap">
    <div class="card-block">
        <h4 class="card-title text-center"><?php echo (isset($data['profile']->display_name)?$data['profile']->display_name:''); ?></h4>
    </div>
</div>

<?php }?>
</div>
</div>
<?php }else{ ?>
        



            <div class="panel card">
                <div class="card-block text-center">
                    <a href="http://localhost/sehari/account/login" class="btn btn-primary btn-outline-info">Login</a>
                    <a href="http://localhost/sehari/account/signup" class="btn btn-primary">Sign Up</a>
                </div>
            </div>
            <div class="card sidebar">
                <h6 class="text-uppercase">who to follow</h6>
                <div class="media">
                    <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d7b61a9e0%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d7b61a9e0%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.171875%22%20y%3D%2242.1640625%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="d-flex align-self-center mr-3 rounded-circle " width="35px" style=" margin-right: 10px;" dalt="...">
                    <div class="media-body">
                        <p class="mt-0">Center-aligned media</p>
                    </div>
                </div>
                <div class="media">
                    <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d7b61a9e0%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d7b61a9e0%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.171875%22%20y%3D%2242.1640625%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="d-flex align-self-center mr-3 rounded-circle " width="35px" style=" margin-right: 10px;" dalt="...">
                    <div class="media-body">
                        <p class="mt-0">Center-aligned media</p>
                    </div>
                </div>
                <div class="media">
                    <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d7b61a9e0%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d7b61a9e0%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.171875%22%20y%3D%2242.1640625%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="d-flex align-self-center mr-3 rounded-circle " width="35px" style=" margin-right: 10px;" dalt="...">
                    <div class="media-body">
                        <p class="mt-0">Center-aligned media</p>
                    </div>
                </div>
                <div class="media">
                    <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d7b61a9e0%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d7b61a9e0%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.171875%22%20y%3D%2242.1640625%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="d-flex align-self-center mr-3 rounded-circle " width="35px" style=" margin-right: 10px;" dalt="...">
                    <div class="media-body">
                        <p class="mt-0">Center-aligned media</p>
                    </div>
                </div>
            </div>
            <div class="card sidebar">
                <h6 class="text-uppercase">Editor's Pick</h6>
                <div class="media">
                    <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d7b61a9e0%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d7b61a9e0%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.171875%22%20y%3D%2242.1640625%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="d-flex align-self-center mr-3 rounded-circle " width="35px" style=" margin-right: 10px;" dalt="...">
                    <div class="media-body">
                        <p class="mt-0">Center-aligned media</p>
                    </div>
                </div>
                <div class="media">
                    <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d7b61a9e0%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d7b61a9e0%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.171875%22%20y%3D%2242.1640625%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="d-flex align-self-center mr-3 rounded-circle " width="35px" style=" margin-right: 10px;" dalt="...">
                    <div class="media-body">
                        <p class="mt-0">Center-aligned media</p>
                    </div>
                </div>
                <div class="media">
                    <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d7b61a9e0%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d7b61a9e0%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.171875%22%20y%3D%2242.1640625%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="d-flex align-self-center mr-3 rounded-circle " width="35px" style=" margin-right: 10px;" dalt="...">
                    <div class="media-body">
                        <p class="mt-0">Center-aligned media</p>
                    </div>
                </div>
                <div class="media">
                    <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d7b61a9e0%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d7b61a9e0%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.171875%22%20y%3D%2242.1640625%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="d-flex align-self-center mr-3 rounded-circle " width="35px" style=" margin-right: 10px;" dalt="...">
                    <div class="media-body">
                        <p class="mt-0">Center-aligned media</p>
                    </div>
                </div>
            </div>
            <div class="card sidebar">
                <h6 class="text-uppercase">top comments</h6>
                <div class="media">
                    <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d7b61a9e0%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d7b61a9e0%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.171875%22%20y%3D%2242.1640625%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="d-flex align-self-center mr-3 rounded-circle " width="35px" style=" margin-right: 10px;" dalt="...">
                    <div class="media-body">
                        <p class="mt-0">Center-aligned media</p>
                    </div>
                </div>
                <div class="media">
                    <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d7b61a9e0%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d7b61a9e0%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.171875%22%20y%3D%2242.1640625%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="d-flex align-self-center mr-3 rounded-circle " width="35px" style=" margin-right: 10px;" dalt="...">
                    <div class="media-body">
                        <p class="mt-0">Center-aligned media</p>
                    </div>
                </div>
                <div class="media">
                    <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d7b61a9e0%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d7b61a9e0%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.171875%22%20y%3D%2242.1640625%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="d-flex align-self-center mr-3 rounded-circle " width="35px" style=" margin-right: 10px;" dalt="...">
                    <div class="media-body">
                        <p class="mt-0">Center-aligned media</p>
                    </div>
                </div>
                <div class="media">
                    <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d7b61a9e0%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d7b61a9e0%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.171875%22%20y%3D%2242.1640625%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="d-flex align-self-center mr-3 rounded-circle " width="35px" style=" margin-right: 10px;" dalt="...">
                    <div class="media-body">
                        <p class="mt-0">Center-aligned media</p>
                    </div>
                </div>
            </div>
   

        <div class="card">
	
	<div class="card-block">
		<?php
$posts = get_posts(5);
if($posts):
    foreach($posts as $post):
?>
<ul class="recent">
    <li>
        <i class="fa fa-fw fa-newspaper-o"></i>
        <a href="<?php echo base_url('news/detail/' . $post->idpost); ?>">
            <?php echo $post->title; ?>
        </a>
    </li>
</ul>
<?php
    endforeach;
endif;
?>
	</div>
</div>
  

<?php } ?>


