<!DOCTYPE html>
<html lang="en">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://  maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <style type="text/css">
        header {
                margin-bottom: 30px;
                border-top: 10px solid #0275d8;
        }

        body {
                background: #e6e6e6;
        }

        .panel {
                margin-bottom: 15px;
                background-color: #fff;
                border-radius: 4px;
        }

        .panel-body {
                padding: 15px;
        }

        .card-title {
                padding-top: 15px;
        }

        .card-text {
                margin-bottom: 15px;
        }

        .btn-tags {
                border-radius: 15px;
                padding: 4px 10px;
                margin-bottom: 15px;
        }

        .sidebar-menu {
                margin-bottom: 15px;
        }

        .sidebar-menu .active {
                border-left: 10px solid #036ac3;
                border-color: #036ac3;
        }

        .sidebar {
                background: none;
                border: none;
                margin-bottom: 15px;
                padding-bottom: 15px;
                border-bottom: 1px solid #bfbfbf;
                border-radius: 0px;
        }

        .sidebar h6 {
                font-weight: bolder;
        }

        .boxed-nav {
                background: #fff;
                border-radius: 4px;
                padding: 15px;
                /*margin-top: 10px; */
                box-shadow: 0 2px 4px rgba(0, 0, 0, .1);
        }

        .overlay {
                position: absolute;
                top: 0;
                right: 0;
                left: 0;
                bottom: 0;
                margin: auto;
                color: #fff;
                background-image: -webkit-linear-gradient(top, transparent, #000);
                background-image: linear-gradient(180deg, transparent 0, #000);
                background-repeat: repeat-x;
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#00000000", endColorstr="#FF000000", GradientType=0);
        }

        .thumb.pict,
        .thumb.video {
                display: block;
                position: relative;
        }
        .thumb.full-pict{
              height: 280px;
        }

        .bg-cover {
                background-size: cover;
                background-position: 50%;
                background-repeat: no-repeat;
        }

        </style>
</head>

<body>
        <header>
                <div class="container">
                        <nav class="navbar navbar-toggleable-md navbar-light bg-faded boxed-nav">
                                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                </button>
                                <a class="navbar-brand" href="#">
            <img src="https://v4-alpha.getbootstrap.com/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            Bootstrap
          </a>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">

                                        <?php
                                        $categories = get_categories();
                                        if($categories):
                                            foreach($categories as $category):
                                        ?>
                                                <li class="nav-item">
                                                    <a href="<?php echo base_url('news/category/' . $category->idcategory); ?>">
                                                        <?php echo $category->title; ?>
                                                    </a>
                                                </li>
                                        <?php
                                            endforeach;
                                        endif;
                                        ?>  

                                             <!--
                                                <li class="nav-item active">
                                                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                                </li>
                                                <li class="nav-item">
                                                        <a class="nav-link" href="#">Link</a>
                                                </li>
                                              -->

                                        </ul>
                                        <form class="form-inline my-2 my-lg-0">
                                                <input class="form-control mr-sm-2" size="15px" type="text" placeholder="Search">
                                                <button class="btn btn-primary my-2 my-sm-0" type="submit">Cari</button>
                                        </form>
                                </div>
                        </nav>
                </div>
        </header>
        <div class="container">
                <div class="row">
                        <div class="col-sm-3">
                                <div class="list-group sidebar-menu">
                                        <a href="#" class="list-group-item list-group-item-action active">Editorial</a>
                                        <a href="#" class="list-group-item list-group-item-action disabled">Rekomendasi</a>
                                        <a href="#" class="list-group-item list-group-item-action">Topics</a>
                                        <a href="#" class="list-group-item list-group-item-action ">Trending</a>
                                </div>
                                <div class="card">
                                        <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d7b8707a1%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d7b8707a1%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22118.09375%22%20y%3D%2296.9984375%22%3E318x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                                        <div class="card-block">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-6">


    <div class="panel card">
      <div class="row ">
        <div class="col-md-4">
            <img src="https://placeholdit.imgix.net/~text?txtsize=38&txt=400%C3%97400&w=400&h=400" class="w-100">
          </div>
          <div class="col-md-8">
            <div class="card-block px-3">
         
              <p class="card-text"> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                
            </div>
          </div>

        </div>
      </div>

                                <div class="panel">
                                        <div id=" carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner" role="listbox">
                                                        <div class="carousel-item active">
                                                                <img class="d-block img-fluid" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d7b94eb13%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d7b94eb13%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.9375%22%20y%3D%22217.6625%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                                <img class="d-block img-fluid" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d7b94eb17%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d7b94eb17%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.34375%22%20y%3D%22217.6625%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Second slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                                <img class="d-block img-fluid" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d7b94eb1a%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d7b94eb1a%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22277.0234375%22%20y%3D%22217.6625%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Third slide">
                                                        </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
                                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
                                        </div>
                                </div>
                                <div class="panel card">
                                        <div class="card-block bg-primary text-white">
                                                This is some text within a <strong>card block</strong>.
                                        </div>
                                </div>

                                <div class="panel card">
                                        <div class="card-img text-center">
                                                <div class="thumb pict full-pict bg-cover" style="background-image: url(&quot;http://wegodesign.net/mzine-html-template/pic/blog-list/item-3.jpg&quot;);">
                                                        <div class="overlay"></div>
                                                        
                                                                <div class="panel-body text-white" style="padding-top: 175px; position: relative;">
                                                                        <h3>Teknik Industri</h3><span><i class="icon-user"></i>53</span> <span class="pull-right"><span class="color-inverse">Follow topic <a class="btn-link" href="#"><span class="circle-icon circle-icon-xs bg-brand-primary"><i class="icon-add"></i></span></a>
                                                                        </span>
                                                                        </span>
                                                                </div>
                                                     
                                                </div>
                                        </div>
                                </div>
                                  <!-- tampil posting dimulai -->
                                  <?php $this->load->view($view, $data); ?>
                                  <!-- end tampil posting -->
                                  
                                <div class="panel card">
                                        <div class="card-header">
                                                <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d7b61a9e0%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d7b61a9e0%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.171875%22%20y%3D%2242.1640625%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="img-fluid rounded-circle float-left" width="35px" style=" margin-right: 10px;" dalt="...">
                                                <h6 style="margin-top: 0px; margin-bottom: 0px; ">Kumparan</h6>
                                                <small class="text-muted">Rabu 26 Juli 2017 - 03:13</small>
                                        </div>
                                        <div class="panel-body card-block ">
                                                <img class="img-fluid" src="https://gimg.kumpar.com/kumpar/image/upload/q_auto,f_jpg,fl_lossy,c_fill,g_face,w_640,ar_16:9/kwzplecywtawp7amn6ru.jpg" alt="Card image cap">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-outline-info btn-tags">Beasiswa</a>
                                        </div>
                                        <div class="card-footer">
                                                <div class="row text-center">
                                                        <div class="col-sm-4">Sukai</div>
                                                        <div class="col-sm-4">Komentar</div>
                                                        <div class="col-sm-4">Share</div>
                                                </div>
                                        </div>
                                </div>
                                <div class="panel card">
                                        <div class="card-header">
                                                <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d7b61a9e0%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d7b61a9e0%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.171875%22%20y%3D%2242.1640625%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="img-fluid rounded-circle float-left" width="35px" style=" margin-right: 10px;" dalt="...">
                                                <h6 style="margin-top: 0px; margin-bottom: 0px; ">Kumparan</h6>
                                                <small class="text-muted">Rabu 26 Juli 2017 - 03:13</small>
                                        </div>
                                        <div class="panel-body card-block ">
                                                <img class="img-fluid" src="https://gimg.kumpar.com/kumpar/image/upload/q_auto,f_jpg,fl_lossy,c_fill,g_face,w_640,ar_16:9/kwzplecywtawp7amn6ru.jpg" alt="Card image cap">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-outline-info btn-tags">Beasiswa</a>
                                        </div>
                                        <div class="card-footer">
                                                <div class="row text-center">
                                                        <div class="col-sm-4">Sukai</div>
                                                        <div class="col-sm-4">Komentar</div>
                                                        <div class="col-sm-4">Share</div>
                                                </div>
                                        </div>
                                </div>
                                <div class=" panel card card-inverse" style="background-color: #333; border-color: #333;">
                                        <div class="card-block">
                                                <h3 class="card-title">Special title treatment</h3>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                </div>
                                <div class="panel card">
                                        <div class="card-header">
                                                <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d7b61a9e0%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d7b61a9e0%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.171875%22%20y%3D%2242.1640625%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="img-fluid rounded-circle float-left" width="35px" style=" margin-right: 10px;" dalt="...">
                                                <h6 style="margin-top: 0px; margin-bottom: 0px; ">Kumparan</h6>
                                                <small class="text-muted">Rabu 26 Juli 2017 - 03:13</small>
                                                <div class="float-right">
                                                        <button class="btn btn-default">Follow</button>
                                                </div>
                                        </div>
                                        <div class="panel-body card-block ">
                                                <img class="img-fluid" src="https://gimg.kumpar.com/kumpar/image/upload/q_auto,f_jpg,fl_lossy,c_fill,g_face,w_640,ar_16:9/kwzplecywtawp7amn6ru.jpg" alt="Card image cap">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-outline-info btn-tags">Beasiswa</a>
                                        </div>
                                        <div class="card-footer">
                                                <div class="row text-center">
                                                        <div class="col-sm-4">Sukai</div>
                                                        <div class="col-sm-4">Komentar</div>
                                                        <div class="col-sm-4">Share</div>
                                                </div>
                                        </div>
                                </div>
                                <div class="panel card">
                                        <div class="card-header">
                                                <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d7b61a9e0%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d7b61a9e0%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.171875%22%20y%3D%2242.1640625%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" class="img-fluid rounded-circle float-left" width="35px" style=" margin-right: 10px;" dalt="...">
                                                <h6 style="margin-top: 0px; margin-bottom: 0px; ">Kumparan</h6>
                                                <small class="text-muted">Rabu 26 Juli 2017 - 03:13</small>
                                        </div>
                                        <div class="panel-body card-block ">
                                                <img class="img-fluid" src="https://gimg.kumpar.com/kumpar/image/upload/q_auto,f_jpg,fl_lossy,c_fill,g_face,w_640,ar_16:9/kwzplecywtawp7amn6ru.jpg" alt="Card image cap">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-outline-info btn-tags">Beasiswa</a>
                                        </div>
                                        <div class="card-footer">
                                                <div class="row text-center">
                                                        <div class="col-sm-4">Sukai</div>
                                                        <div class="col-sm-4">Komentar</div>
                                                        <div class="col-sm-4">Share</div>
                                                </div>
                                        </div>
                                </div>
                                
                        </div>
                        <div class="col-sm-3">
                                <div class="panel card">
                                        <div class="card-block text-center">
                                                <a href="">Login/Sign Up</a>
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
                        </div>
                </div>
        </div>
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>

</html>