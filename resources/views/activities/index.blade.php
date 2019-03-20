<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">

    <title>Activities</title>
  </head>
  <body ng-app="jtechMonster">
       <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>BOOTSTRAP SIDEBAR</h3>
            </div>                   
            <ul class="list-unstyled components"><!-- components is custom class -->
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">home1</a>
                        </li>
                        <li>
                            <a href="#">home2</a>
                        </li>
                        <li>
                            <a href="#">home3</a>
                        </li>
                    </ul> 
                </li>
                
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Page</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">page1</a>
                        </li>
                        <li>
                            <a href="#">page2</a>
                        </li>
                        <li>
                            <a href="#">page3</a>
                        </li>
                    </ul> 
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact Us</a>
                </li>
            </ul>
            
            <ul class="list-unstyled CTAs"><!-- CTAs is custom class -->
                <li>
                    <a href="#" class="download">Download code</a>
                </li>
                <li>
                    <a href="#" class="article">article</a>
                </li>
            </ul>
        </nav>
    
        <div class="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light nav-tech">
            
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fa fa-exchange"></i> <span></span>
                </button>

                <a style="padding: 5px 10px !important;" class="navbar-brand" href="#">
                    <img src="{{asset('images/yo_fansite2.png')}}" alt="">
                </a>
            
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Contact Us <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a style="display: block;" class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span> Features</span> <span class="dropdown-toggle toggle-fe"></span>
                        </a>
                        <div style="right: 0px !important; left: auto !important;" class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{asset('images/flower1.jpg')}}" alt="flower" class="img-fluid">
                                    <h4 style="color: orangered;">Flower 1</h4>
                                    <p>bootstrap is a very famework.</p>
                                </div>
                                <div class="col-md-3">
                                    <p><strong class="sub-menu-heading">Kids Items</strong></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                </div>
                                <div class="col-md-3">
                                    <p><strong class="sub-menu-heading">Kids Items</strong></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                </div>
                                <div class="col-md-3">
                                    <p><strong class="sub-menu-heading">Kids Items</strong></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                </div>
                            </div> 
                        </div>
                      </li>
                    <li class="nav-item dropdown">
                        <a style="display: block;" class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span> Pricing</span> <span class="dropdown-toggle toggle-fe"></span>
                        </a>
                        <div style="right: 0px !important; left: auto !important;" class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{asset('images/flower1.jpg')}}" alt="flower" class="img-fluid">
                                    <h4 style="color: orangered;">Flower 1</h4>
                                    <p>bootstrap is a very famework.</p>
                                </div>
                                <div class="col-md-3">
                                    <p><strong class="sub-menu-heading">Kids Items</strong></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                </div>
                                <div class="col-md-3">
                                    <p><strong class="sub-menu-heading">Kids Items</strong></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                </div>
                                <div class="col-md-3">
                                    <p><strong class="sub-menu-heading">Kids Items</strong></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                </div>
                            </div> 
                        </div>
                      </li>
                    <li class="nav-item dropdown">
                        <a style="display: block;" class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span> Dropdown</span> <span class="dropdown-toggle toggle-fe"></span>
                        </a>
                        <div style="right: 0px !important; left: auto !important;" class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{asset('images/flower1.jpg')}}" alt="flower" class="img-fluid">
                                    <h4 style="color: orangered;">Flower 1</h4>
                                    <p>bootstrap is a very famework.</p>
                                </div>
                                <div class="col-md-3">
                                    <p><strong class="sub-menu-heading">Kids Items</strong></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                </div>
                                <div class="col-md-3">
                                    <p><strong class="sub-menu-heading">Kids Items</strong></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                </div>
                                <div class="col-md-3">
                                    <p><strong class="sub-menu-heading">Kids Items</strong></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                    <p><a href="#">Item Number1</a></p>
                                </div>
                            </div> 
                        </div>
                      </li>
                    </ul>
                </div>
            </nav>
        
        
        
            <div class="modifyx">
                    <div class="heading-tech"> 
                        <h5> nemo.</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit dolor sit amet consectetur adipisicing elit. Quo et earum debitis maxime molestiae. Repellat possimus temporibus odit autem quas.</p>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <article class="post-item">
                                    <div class="post-item-image">
                                        <a href="post.html">
                                            <img src="{{asset('images/Post_Image_1.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-item-body">
                                        <div class="padding-10">
                                            <h2><a href="post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas, blanditiis impedit repellat harum, eaque saepe aspernatur quo magnam obcaecati dolor! Deleniti quod repellendus non iste architecto, voluptate excepturi velit.</p>
                                        </div>
                
                                        <div class="post-meta padding-10 clearfix">
                                            <div class="pull-left">
                                                <ul class="post-meta-group">
                                                    <li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
                                                    <li><i class="fa fa-clock-o"></i><time> February 12, 2016</time></li>
                                                    <li><i class="fa fa-tags"></i><a href="#"> Blog</a></li>
                                                    <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                                                </ul>
                                            </div>
                                            <div class="pull-right">
                                                <a href="post.html">Continue Reading &raquo;</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="post-item">
                                    <div class="post-item-image">
                                        <a href="post.html">
                                            <img src="{{asset('images/Post_Image_2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-item-body">
                                        <div class="padding-10">
                                            <h2><a href="post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas, blanditiis impedit repellat harum, eaque saepe aspernatur quo magnam obcaecati dolor! Deleniti quod repellendus non iste architecto, voluptate excepturi velit.</p>
                                        </div>
                
                                        <div class="post-meta padding-10 clearfix">
                                            <div class="pull-left">
                                                <ul class="post-meta-group">
                                                    <li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
                                                    <li><i class="fa fa-clock-o"></i><time> February 12, 2016</time></li>
                                                    <li><i class="fa fa-tags"></i><a href="#"> Blog</a></li>
                                                    <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                                                </ul>
                                            </div>
                                            <div class="pull-right">
                                                <a href="post.html">Continue Reading &raquo;</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="post-item">
                                    <div class="post-item-image">
                                        <a href="post.html">
                                            <img src="{{asset('images/Post_Image_3.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-item-body">
                                        <div class="padding-10">
                                            <h2><a href="post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit, consectetur adipisicing elit</a></h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas, blanditiis impedit repellat harum, eaque saepe aspernatur quo magnam obcaecati dolor! Deleniti quod repellendus non iste architecto, voluptate excepturi velit.</p>
                                        </div>
                
                                        <div class="post-meta padding-10 clearfix">
                                            <div class="pull-left">
                                                <ul class="post-meta-group">
                                                    <li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
                                                    <li><i class="fa fa-clock-o"></i><time> February 12, 2016</time></li>
                                                    <li><i class="fa fa-tags"></i><a href="#"> Vue Js</a>, <a href="#"> Laravel</a></li>
                                                    <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                                                </ul>
                                            </div>
                                            <div class="pull-right">
                                                <a href="post.html">Continue Reading &raquo;</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                
                                <nav>
                                  <ul class="pager">
                                    <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Newer</a></li>
                                    <li class="next"><a href="#">Older <span aria-hidden="true">&rarr;</span></a></li>
                                  </ul>
                                </nav>
                            </div>
                            <div class="col-md-4">
                                <aside class="right-sidebar">
                                    <div class="search-widget">
                                        <div class="input-group">
                                          <input type="text" class="form-control input-lg" placeholder="Search for...">
                                          <span class="input-group-btn">
                                            <button class="btn btn-lg btn-default" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                          </span>
                                        </div><!-- /input-group -->
                                    </div>
                
                                    <div class="widget">
                                        <div class="widget-heading">
                                            <h4>Categories</h4>
                                        </div>
                                        <div class="widget-body">
                                            <ul class="categories">
                                                <li>
                                                    <a href="#"><i class="fa fa-angle-right"></i> Web Development</a>
                                                    <span class="badge pull-right">10</span>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-angle-right"></i> Web Design</a>
                                                    <span class="badge pull-right">10</span>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-angle-right"></i> General</a>
                                                    <span class="badge pull-right">10</span>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-angle-right"></i> DIY</a>
                                                    <span class="badge pull-right">10</span>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-angle-right"></i> Facebook Development</a>
                                                    <span class="badge pull-right">10</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                
                                    <div class="widget">
                                        <div class="widget-heading">
                                            <h4>Popular Posts</h4>
                                        </div>
                                        <div class="widget-body">
                                            <ul class="popular-posts">
                                                <li>
                                                    <div class="post-image">
                                                        <a href="#">
                                                            <img src="{{asset('images/Post_Image_5_thumb.jpg')}}" />
                                                        </a>
                                                    </div>
                                                    <div class="post-body">
                                                        <h6><a href="#">Blog Post #5</a></h6>
                                                        <div class="post-meta">
                                                            <span>36 minutes ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="post-image">
                                                        <a href="#">
                                                            <img src="{{asset('images/Post_Image_4_thumb.jpg')}}" />
                                                        </a>
                                                    </div>
                                                    <div class="post-body">
                                                        <h6><a href="#">Blog Post #4</a></h6>
                                                        <div class="post-meta">
                                                            <span>36 minutes ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="post-image">
                                                        <a href="#">
                                                            <img src="{{asset('images/Post_Image_3_thumb.jpg')}}" />
                                                        </a>
                                                    </div>
                                                    <div class="post-body">
                                                        <h6><a href="#">Blog Post #3</a></h6>
                                                        <div class="post-meta">
                                                            <span>36 minutes ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                
                                    <div class="widget">
                                        <div class="widget-heading">
                                            <h4>Tags</h4>
                                        </div>
                                        <div class="widget-body">
                                            <ul class="tags">
                                                <li><a href="#">PHP</a></li>
                                                <li><a href="#">Codeigniter</a></li>
                                                <li><a href="#">Yii</a></li>
                                                <li><a href="#">Laravel</a></li>
                                                <li><a href="#">Ruby on Rails</a></li>
                                                <li><a href="#">jQuery</a></li>
                                                <li><a href="#">Vue Js</a></li>
                                                <li><a href="#">React Js</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                    <div class="line"></div> 
                    <footer>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="copyright">&copy; 2016 Edo Masaru</p>
                                </div>
                                <div class="col-md-4">
                                    <nav>
                                        <ul class="social-icons">
                                            <li><a href="#" class="i fa fa-facebook"></a></li>
                                            <li><a href="#" class="i fa fa-twitter"></a></li>
                                            <li><a href="#" class="i fa fa-google-plus"></a></li>
                                            <li><a href="#" class="i fa fa-github"></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </footer> 
            </div> 
        </div> 
   </div>

        <!-- menu or login -->

        <div style="margin-bottom: 50px;" class="col-md-12">
            <ui-view></ui-view>
        </div>

    <!-- footer -->

    <footer>
        <div class="footer-main">
            <p>© Computer Center, Faculty of Computing and Technology, University of Kelaniya</p>
        </div>
    </footer>                                                                                                                                                                                                                                                                                     
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!--AngularJs CDN-->

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/1.0.3/angular-ui-router.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/checklist-model/0.11.0/checklist-model.min.js"></script>


    <!--app.js-->
    <script src="{{asset('app/app.js')}}"></script>



    <!--Controllers-->
    <script src="{{asset('app/controllers/activityOneCtrl.js')}}"></script>

    <script>
        $(document).ready(function(){
            $('#sidebarCollapse').on('click',function(){
                $('#sidebar').toggleClass('active');
            });
        }); 
    </script> 
  </body>
</html>