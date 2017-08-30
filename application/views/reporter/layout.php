<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo (isset($data['title']) ? $data['title'] : "UPUNEWS") ?></title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <link href="http://potensi-utama.ac.id/templates/gtweb/favicon.ico" rel="shortcut icon" type="image/x-icon" />

    
    <!-- buat tag -->
    <link rel="stylesheet" type="text/css" href="http://phppot.com/demo/bootstrap-tags-input-with-autocomplete/bootstrap-tagsinput.css">
    <!-- buat tag -->
    <link rel="stylesheet" type="text/css" href="http://phppot.com/demo/bootstrap-tags-input-with-autocomplete/typeahead.css">
     <style>
   
    .twitter-typeahead { display:initial !important; }
    .bootstrap-tagsinput {line-height:40px;display:block !important;}
    .bootstrap-tagsinput .tag {background:#09F;padding:5px;border-radius:4px;}
    .tt-hint {top:2px !important;}
    .tt-input{vertical-align:baseline !important;}
    .typeahead { border: 1px solid #CCCCCC;border-radius: 4px;padding: 8px 12px;width: 300px;font-size:1.5em;}
    .tt-menu { width:300px; }
    span.twitter-typeahead .tt-suggestion {padding: 10px 20px;  border-bottom:#CCC 1px solid;cursor:pointer;}
    span.twitter-typeahead .tt-suggestion:last-child { border-bottom:0px; }
    .demo-label {font-size:1.5em;color: #686868;font-weight: 500;}
    .bgcolor {max-width: 440px;height: 200px;background-color: #c3e8cb;padding: 40px 70px;border-radius:4px;margin:20px 0px;}
    
    </style>


        <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro');
        @import url('https://fonts.googleapis.com/css?family=Oswald');
        header {
        margin-bottom: 30px;
        border-top: 10px solid #0275d8;
        position: fixed;
        width: 100%;
        z-index:999;
        }
        main{
        padding-top: 130px;
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
        a .post-title {
        color: #404040;
        text-decoration: none;
        }
        .post-title a:focus, a:hover{
        color: #bfbfbf;
        text-decoration: none;
        }
        .post-detail{
        font-family: Source Sans Pro,sans-serif;
        font-size: 18px;
        line-height:1.5;
        color: #404040;
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
        border-top-right-radius: 0px;
        border-top-left-radius: 0px;
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
        .card-img-top{
        border-radius: 0px;
        }
        .detail-title{
        font-size: 32px;
        font-weight : 500px;
        font-family:Oswald,sans-serif;
        }
        a .detail-title{
        color: #404040;
        }
        .btn-ikut{
        float: right;
        margin-top: -10px;
        margin-bottom: 0px;
        }
        .logo {
        font-size: 36px;
        font-family: Impact;
        position: relative;
        }
        .navbar-light .navbar-brand, .navbar-light .navbar-toggler {
        color: #fff;
        }
        .logoh{
        background-color: #0275d8;
        padding-left: 15px;
        margin-right: 15px;
        }
        .logoh:before{
        content: "";
    float: right;
    position: absolute;
    top: 35%;
    left: 15%;
    width: 0;
    height: 0;
    border-top: 10px solid transparent;
    border-left: 15px solid #0275d8;
    border-bottom: 10px solid transparent;

    }   
        .bolder{
        font-weight: bolder;
        }
        .nomargin{
        margin: 0px;
        }
        .boxed-nav{
        -ms-transition:     all 0.3s ease-out;
        -moz-transition:    all 0.3s ease-out;
        -webkit-transition: all 0.3s ease-out;
        -o-transition:      all 0.3s ease-out;
        transition:         all 0.3s ease-out;
        }
        .boxed-nav.shrink{
        padding :0px;
        padding-right: 18px;
        }
       
        .scroll-line{
        position: fixed;
        height: 10px;
        top: 0;
        background: #0063b8;
        width: 0%;
        z-index: 9999;
        }

        .heads-up {
  transform: translateY(-6rem);
  transform: translate3d(0,-6rem,0);
}

.wrap {
  -moz-transition: -moz-transform 1s ease-out;
  -o-transition: -o-transform 1s ease-out;
  -webkit-transition: -webkit-transform 1s ease-out;
  transition: transform 1s ease-out;
}
.wrapi {
  -moz-transition: -moz-transform 1s ease-out;
  -o-transition: -o-transform 1s ease-out;
  -webkit-transition: -webkit-transform 1s ease-out;
  transition: transform 1s ease-out;
}
.navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover{
    color: rgb(7, 86, 155);
}

.copyright {
    font-size:12px;
    text-align: center;
    color: #444;
}
.copyright a{
    text-decoration: none;
    color: #444;
}
        </style>
    </head>
    <body>
        <header>
            <div class="scroll-line"></div>
            <div class="container">
                <nav class="navbar navbar-toggleable-md navbar-light bg-faded boxed-nav  ">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="logoh">
                        <a class="navbar-brand logo" href="http://localhost/sehari/"><!-- <img src="https://v4-alpha.getbootstrap.com/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt=""> -->UPUNEWS</a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <?php
                            $categories = get_categories();
                            if($categories):
                            foreach($categories as $category):
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('news/category/' . $category->idcategory); ?>">
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
                        <?php
                        if(is_logged_in()) {
                        ?>
                        <a href="<?php echo base_url('post/add'); ?>">
                            <button class="btn btn-primary my-2 my-sm-0" type="submit">Write a Story</button>
                        </a>
                        
                        <?php
                        }else{
                        ?>
                        <form class="form-inline my-2 my-lg-0" role="search" method="post" action="<?php echo base_url('news/search'); ?>">
                            <input class="form-control mr-sm-2" size="13px" type="text" placeholder="Search" name="keyword">
                            <button class="btn btn-primary my-2 my-sm-0" type="submit">Cari</button>
                        </form>

                    
                     
                        <?php
                        }
                        ?>
                        
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    
                    <?php
                    // jika sidebar tidak aktif
                    if(isset($data['sidebar']) && $data['sidebar'] == FALSE): ?>
                    <div class="col-md-12">
                        <?php $this->load->view($data['template_name'] . '/partials/alerts', $data); ?>
                        <?php $this->load->view($view, $data); ?>
                    </div>
                    
                    <?php
                    // jika sidebar kiri tidak aktif
                    elseif(isset($data['sidebar_left']) && $data['sidebar_left'] == FALSE): ?>
                    <div class="col-md-9">
                        <?php $this->load->view($data['template_name'] . '/partials/alerts', $data); ?>
                        <?php $this->load->view($view, $data); ?>
                    </div>
                    <div class="col-md-3">
                        <?php $this->load->view($data['template_name'] . '/partials/sidebar_right', $data); ?>
                    </div>
                    
                    <?php
                    //jika sidebar kanan tidak aktif
                    elseif(isset($data['sidebar_right']) && $data['sidebar_right'] == FALSE): ?>
                    <div class="col-md-3">
                        <?php $this->load->view($data['template_name'] . '/partials/sidebar_left', $data); ?>
                    </div>
                    <div class="col-md-9">
                        <?php $this->load->view($data['template_name'] . '/partials/alerts', $data); ?>
                        <?php $this->load->view($view, $data); ?>
                    </div>
                    <?php else: ?>
                    <div class="col-md-3">
                        <?php $this->load->view($data['template_name'] . '/partials/sidebar_left', $data); ?>
                    </div>
                    <div class="col-md-6">
                        <?php $this->load->view($data['template_name'] . '/partials/alerts', $data); ?>
                        <?php $this->load->view($view, $data); ?>
                    </div>
                    <div class="col-md-3">
                        <?php $this->load->view($data['template_name'] . '/partials/sidebar_right', $data); ?>
                    </div>
                    
                    <?php endif; ?>
                    
                    
                    
                </div>
            </div>
        </main>
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
            

        <!-- buat tag -->
        <script type="text/javascript" src="http://phppot.com/demo/bootstrap-tags-input-with-autocomplete/bootstrap-tagsinput.js"></script>
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.10.4/typeahead.bundle.min.js"></script>



        

        <script type="text/javascript">

        $(function(){
        var shrinkHeader = 50;
        $(window).scroll(function() {
        var scroll = getCurrentScroll();
        if ( scroll >= shrinkHeader ) {
        $('.boxed-nav').addClass('shrink');
        }
        else {
        $('.boxed-nav').removeClass('shrink');
        }
        });
        function getCurrentScroll() {
        return window.pageYOffset || document.documentElement.scrollTop;
        }
        });


        //capture scroll any percentage
        $(window).scroll(function(){
        var wintop = $(window).scrollTop(), docheight =
        
        $(document).height(), winheight = $(window).height();
        var scrolled = (wintop/(docheight-winheight))*100;
        
        $('.scroll-line').css('width', (scrolled + '%'));
        });


        </script>

        <script type="text/javascript">
            /*
* HeadsUp 1.5.6
* @author Kyle Foster (@hkfoster)
* @license MIT
*/
;(function( window, document, undefined ) {

  'use strict';

  // Extend function
  function extend( a, b ) {
    for( var key in b ) {
      if( b.hasOwnProperty( key ) ) {
        a[ key ] = b[ key ];
      }
    }
    return a;
  }

  // Throttle function (https://bit.ly/1eJxOqL)
  function throttle( fn, threshhold, scope ) {
    threshhold || ( threshhold = 250 );
    var previous, deferTimer;
    return function () {
      var context = scope || this,
          current = Date.now(),
          args    = arguments;
      if ( previous && current < previous + threshhold ) {
        clearTimeout( deferTimer );
        deferTimer = setTimeout( function () {
        previous   = current;
        fn.apply( context, args );
        }, threshhold );
      } else {
        previous = current;
        fn.apply( context, args );
      }
    };
  }

  // Class management functions
  function classReg( className ) {
    return new RegExp( '(^|\\s+)' + className + '(\\s+|$)' );
  }

  function hasClass( el, cl ) {
    return classReg( cl ).test( el.className );
  }

  function addClass( el, cl ) {
    if ( !hasClass( el, cl ) ) {
      el.className = el.className + ' ' + cl;
    }
  }

  function removeClass( el, cl ) {
    el.className = el.className.replace( classReg( cl ), ' ' );
  }

  // Main function definition
  function headsUp( selector, options ) {
    this.selector = document.querySelector( selector );
    this.options  = extend( this.defaults, options );
    this.init();
  }

  // Overridable defaults
  headsUp.prototype = {
    defaults : {
      delay       : 300,
      sensitivity : 20
    },

    // Init function
    init : function( selector ) {

      var self         = this,
          options      = self.options,
          selector     = self.selector,
          oldScrollY   = 0, 
          winHeight;

      // Resize handler function
      function resizeHandler() {
        winHeight = window.innerHeight;
        return winHeight;
      }

      // Scroll handler function
      function scrollHandler() {

        // Scoped variables
        var newScrollY = window.pageYOffset,
            docHeight  = document.body.scrollHeight,
            pastDelay  = newScrollY > options.delay,
            goingDown  = newScrollY > oldScrollY,
            fastEnough = newScrollY < oldScrollY - options.sensitivity,
            rockBottom = newScrollY < 0 || newScrollY + winHeight >= docHeight;

        // Where the magic happens
        if ( pastDelay && goingDown ) {
          addClass( selector, 'heads-up' );
        } else if ( !goingDown && fastEnough && !rockBottom || !pastDelay ) {
          removeClass( selector, 'heads-up' );
        }

        // Keep on keeping on
        oldScrollY = newScrollY;
      }

      // Attach listeners
      if ( selector ) {
        
        // Trigger initial resize
        resizeHandler();

        // Resize function listener
        window.addEventListener( 'resize', throttle( resizeHandler ), false );

        // Scroll function listener
        window.addEventListener( 'scroll', throttle( scrollHandler, 100 ), false );
      }
    }
  };

  window.headsUp = headsUp;

})( window, document );

// Instantiate HeadsUp
//new headsUp( 'nav' );



        </script>

        <script type="text/javascript">
            $(function(){ 
 
 var formTop = $('.sticky').offset().top;
 
  $(window).scroll(function(){ 
   
    var windowTop = $(window).scrollTop(); 
    var formWidth = $('.sticky').width();
    var fluidVal = ( formWidth/$(window).width() ) * 100;
   
    if (formTop < windowTop) {
      $('.wrap').css({ 
        position: 'fixed', 
        top: 70,
        width: fluidVal + "%",
        transform: "translateY(25px)"
      });
      $('.wrapi').css({ 
        position: 'fixed', 
        top: 70,
        width:  "4.2%",
        transform: "translateY(25px)"
      });
    } else {
      $('.wrap').css({
        position: 'static',
        width: '100%',
         transform: "translateY(0px)"
      });
      $('.wrapi').css({
        position: 'static',
        width: '100%',
         transform: "translateY(0px)"
      });
    }

  }); 
});

        </script>

     
    </body>
</html>