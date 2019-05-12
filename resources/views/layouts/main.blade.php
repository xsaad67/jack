<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- css: theme -->
    <link rel="stylesheet" href="/css/theme.minaead.css">
    @yield('css')
    <style>
        .custom-avatar{
            font-weight: 600;
            position: relative;
            display: inline-flex;
            color: #fff;
            border-radius: 50%;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body class="fixed-navbar">
    <div class="site">
        <header class="site-header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ya ya-bar"></i></button><a class="navbar-brand" href="https://yakuthemes.com/">Gameforest</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                                <div class="dropdown-menu"><a class="dropdown-item" href="home-blogs.html">Blogs</a><a class="dropdown-item" href="home-magazine.html">Magazine</a><a class="dropdown-item" href="index-2.html">Landing</a><a class="dropdown-item" href="home-games.html">Games</a><a class="dropdown-item" href="home-streamer.html">Streamer</a><a class="dropdown-item" href="home-videos.html">Videos</a></div>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="blog.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                                <div class="dropdown-menu"><a class="dropdown-item" href="blog.html">List</a><a class="dropdown-item" href="blog-sidebar.html">List Sidebar</a><a class="dropdown-item" href="blog-card.html">List Card</a><a class="dropdown-item" href="blog-medium.html">List Medium</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="blog-post.html">Single Post</a><a class="dropdown-item" href="blog-post-gallery.html">Gallery Post</a><a class="dropdown-item" href="blog-post-carousel.html">Carousel Post</a><a class="dropdown-item" href="blog-post-video.html">Video Post</a>
                                    <div class="dropdown"><a class="dropdown-item" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Comments</a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="blog-post-disqus.html">Disqus</a><a class="dropdown-item" href="blog-post-facebook.html">Facebook</a></div>
                                    </div>
                                </div>
                            </li>
                          
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="pages.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <div class="dropdown-menu">
                                    <div class="dropdown"><a class="dropdown-item" href="games.html">Games</a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="games.html">Games</a><a class="dropdown-item" href="game-post.html">Game Post</a></div>
                                    </div>
                                    <div class="dropdown"><a class="dropdown-item" href="#">Reviews</a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="reviews.html">Reviews</a><a class="dropdown-item" href="review-post.html">Review Post</a></div>
                                    </div>
                                    <div class="dropdown"><a class="dropdown-item" href="forums.html">Forums</a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="forums.html">Forums</a><a class="dropdown-item" href="forum-topic.html">Forum Topic</a><a class="dropdown-item" href="forum-post.html">Forum Post</a><a class="dropdown-item" href="forum-create.html">Forum Create</a></div>
                                    </div><a class="dropdown-item" href="gallery.html">Gallery</a>
                                    <div class="dropdown"><a class="dropdown-item" href="videos.html">Videos</a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="videos.html">Videos</a><a class="dropdown-item" href="video-post.html">Video Post</a></div>
                                    </div>
                                    <div class="dropdown"><a class="dropdown-item" href="#">User</a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="profile.html">Profile</a><a class="dropdown-item" href="profile-settings.html">Profile Settings</a>
                                            <div class="dropdown"><a class="dropdown-item" href="login.html">Login</a>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="login.html">Login 1</a><a class="dropdown-item" href="login-2.html">Login 2</a><a class="dropdown-item" href="login-3.html">Login 3</a></div>
                                            </div>
                                            <div class="dropdown"><a class="dropdown-item" href="register.html">Register</a>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="register.html">Register 1</a><a class="dropdown-item" href="register-2.html">Register 2</a></div>
                                            </div><a class="dropdown-item" href="lost-password.html">Lost Password</a></div>
                                    </div><a class="dropdown-item" href="blank-page.html">Blank Page</a><a class="dropdown-item" href="404.html">Error 404</a>
                                    <div class="dropdown"><a class="dropdown-item" href="#">Extra Pages</a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="faq.html">Faq</a><a class="dropdown-item" href="contact.html">Contact</a><a class="dropdown-item" href="pricing.html">Pricing</a><a class="dropdown-item" href="search.html">Search Results</a><a class="dropdown-item" href="maintenance.html">Maintenance</a><a class="dropdown-item" href="terms-of-service.html">Terms of Service</a></div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-lg"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Components</a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-promo">
                                        <svg height="100%" xmlns="http://www.w3.org/2000/svg" stroke="null">
                                            <g>
                                                <path stroke="#000" transform="rotate(-77.1923828125 -15.078857421875005,170.79100036621094)" d="m-428.125224,-8.22893l872.19957,0l-3.456666,298.309801c-711.65609,-186.952814 -478.74996,115.206646 -914.849745,50.456411l46.106841,-348.766212z" fill-opacity="null" stroke-opacity="null" stroke-width="0" fill="#2a2b2d" />
                                            </g>
                                        </svg><a class="btn btn-primary btn-lg btn-rounded btn-shadow" href="shop-product.html">View Game</a></div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-6 col-lg-3">
                                                <div class="dropdown-title">General</div><a class="dropdown-item" href="components-gameforest.html#typography"><i class="fas fa-font"></i> Typography</a><a class="dropdown-item" href="components-bootstrap.html#alerts"><i class="fas fa-bell"></i> Alerts</a><a class="dropdown-item" href="components-bootstrap.html#badges"><i class="fas fa-bookmark"></i> Badges</a><a class="dropdown-item" href="components-bootstrap.html#breadcrumb"><i class="fas fa-book"></i> Breadcrumb</a><a class="dropdown-item" href="components-bootstrap.html#columns"><i class="fas fa-ship"></i> Columns</a><a class="dropdown-item" href="components-bootstrap.html#tooltips"><i class="fas fa-mouse-pointer"></i> Tooltips</a><a class="dropdown-item" href="components-bootstrap.html#popovers"><i class="fas fa-database"></i> Popovers</a><a class="dropdown-item" href="components-gameforest.html#blog"><i class="fas fa-clipboard"></i> Blog</a><a class="dropdown-item" href="components-gameforest.html#comments"><i class="fas fa-comments"></i> Comments</a></div>
                                            <div class="col-6 col-lg-3">
                                                <div class="dropdown-title">Buttons &amp; Icons</div><a class="dropdown-item" href="components-bootstrap.html#buttons"><i class="fas fa-hand-pointer"></i> Buttons</a><a class="dropdown-item" href="components-bootstrap.html#dropdowns"><i class="fas fa-tint"></i> Dropdowns</a><a class="dropdown-item" href="components-gameforest.html#icons"><i class="fas fa-compass"></i> Icons</a><a class="dropdown-item" href="components-gameforest.html#social"><i class="fas fa-thumbs-up"></i> Social</a><a class="dropdown-item" href="components-bootstrap.html#navbar"><i class="fas fa-bars"></i> Navbar</a><a class="dropdown-item" href="components-bootstrap.html#pagination"><i class="fas fa-arrows-alt-h"></i> Pagination</a><a class="dropdown-item" href="components-bootstrap.html#modal"><i class="fas fa-folder"></i> Modal</a><a class="dropdown-item" href="components-gameforest.html#widgets"><i class="fas fa-th-large"></i> Widgets</a><a class="dropdown-item" href="components-gameforest.html#cover"><i class="fas fa-laptop"></i> Cover</a></div>
                                            <div class="col-6 col-lg-3">
                                                <div class="dropdown-title mt-4 mt-lg-0">Elements</div><a class="dropdown-item" href="components-bootstrap.html#cards"><i class="fas fa-sticky-note"></i> Cards</a><a class="dropdown-item" href="components-bootstrap.html#tables"><i class="fas fa-table"></i> Tables</a><a class="dropdown-item" href="components-gameforest.html#datatables"><i class="fas fa-list-alt"></i> DataTables</a><a class="dropdown-item" href="components-bootstrap.html#tabs"><i class="fas fa-th"></i> Tabs</a><a class="dropdown-item" href="components-gameforest.html#notification"><i class="fas fa-bullhorn"></i> Notification</a><a class="dropdown-item" href="components-bootstrap.html#progress"><i class="fas fa-bug"></i> Progress</a><a class="dropdown-item" href="components-gameforest.html#accordions"><i class="fas fa-th-list"></i> Accordions</a><a class="dropdown-item" href="components-gameforest.html#charts"><i class="fas fa-chart-area"></i> Charts</a><a class="dropdown-item" href="components-gameforest.html#carousel"><i class="fas fa-image"></i> Carousel</a></div>
                                            <div class="col-6 col-lg-3">
                                                <div class="dropdown-title mt-4 mt-lg-0">Forms &amp; Info</div><a class="dropdown-item" href="components-gameforest.html#embed"><i class="fas fa-play"></i> Embed</a><a class="dropdown-item" href="components-bootstrap.html#forms"><i class="fas fa-pencil-alt"></i> Forms</a><a class="dropdown-item" href="components-bootstrap.html#input-groups"><i class="fas fa-paper-plane"></i> Input Groups</a><a class="dropdown-item" href="components-gameforest.html#text-editor"><i class="fas fa-keyboard"></i> Text Editor</a><a class="dropdown-item" href="components-gameforest.html#lightbox"><i class="fas fa-folder-open"></i> Lightbox</a><a class="dropdown-item" href="components-gameforest.html#promo"><i class="fas fa-paperclip"></i> Promo</a><a class="dropdown-item" href="components-gameforest.html#avatars"><i class="fas fa-user"></i> Avatars</a><a class="dropdown-item" href="components-gameforest.html#datepicker"><i class="fas fa-calendar"></i> Datepicker</a><a class="dropdown-item" href="components-gameforest.html#background"><i class="fas fa-video"></i> Background</a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                                <div class="dropdown-menu"><a class="dropdown-item" href="shop.html">Products</a><a class="dropdown-item" href="shop-sidebar.html">Products Sidebar</a><a class="dropdown-item" href="shop-product.html">Single Product</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="shop-cart.html">Cart Overview</a><a class="dropdown-item" href="shop-checkout.html">Checkout</a></div>
                            </li>
                        </ul>
                    </div>
                    <!-- end .navbar-collapse -->
                    <form class="navbar-search" action="https://yakuthemes.com/preview/gameforest/search.html" method="post">
                        <div class="container">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search for games, posts..." aria-label="Search"><i class="ya ya-times search-close"></i></div>
                    </form>
                    <!-- end .navbar-search -->
                    <ul class="navbar-nav navbar-right flex-row d-flex align-items-center">
                        <li class="nav-item"><a class="nav-link" href="login.html"><span class="d-none d-md-inline-block">Login</span><span class="d-inline-block d-md-none"><i class="ya ya-user"></i></span></a></li>
                        <li class="nav-item dropdown dropdown-cart d-block"><a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ya ya-shopping-cart"></i><span class="badge badge-warning"></span></a>
                            <div class="dropdown-menu dropdown-menu-right bg-white">
                                <div class="dropdown-header mb-0"><i class="ya ya-shopping-cart"></i> Cart (3)</div>
                                <div class="dropdown-scrollable">
                                    <ul class="dropdown-list">
                                        <li class="dropdown-list-item">
                                            <div class="pl-2">
                                                <a class="font-weight-semibold" href="shop-product.html">Battlefield V</a>
                                                <div class="font-size-md text-muted">Quantity: 1</div>
                                                <div class="font-size-md font-weight-bold mt-1">$75.00</div>
                                            </div>
                                            <button type="button" class="btn btn-link cart-remove"><i class="ya ya-trash"></i></button>
                                        </li>
                                        <li class="dropdown-list-item">
                                            <div class="pl-2"><a class="font-weight-semibold" href="shop-product.html">God of War</a>
                                                <div class="font-size-md text-muted">Quantity: 1</div>
                                                <div class="font-size-md font-weight-bold text-danger mt-1">$49.35</div>
                                            </div>
                                            <button type="button" class="btn btn-link cart-remove"><i class="ya ya-trash"></i></button>
                                        </li>
                                        <li class="dropdown-list-item">
                                            <div class="pl-2"><a class="font-weight-semibold" href="shop-product.html">The Witcher 3: Wild Hunt</a>
                                                <div class="font-size-md text-muted">Quantity: 1</div>
                                                <div class="font-size-md font-weight-bold mt-1">$28.15</div>
                                            </div>
                                            <button type="button" class="btn btn-link cart-remove"><i class="ya ya-trash"></i></button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown-footer bg-lighten pt-0 pb-2 px-0">
                                    <div class="d-flex border-bottom mb-2 px-3 py-2">Total: <span class="ml-auto font-weight-bold text-danger">$149.55</span></div>
                                    <div class="d-flex px-3"><a class="btn btn-outline btn-sm" href="shop-cart.html">View Cart</a><a class="btn btn-primary btn-sm ml-auto" href="shop-checkout.html">Checkout</a></div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link toggle-search" href="#"><i class="ya ya-search"></i></a></li>
                    </ul>
                    <!-- end .navbar-nav -->
                </div>
            </nav>
        </header>
        <!-- end .site-header -->
        <div class="site-content" role="main">
           @yield('content')
          
        </div>
        <!-- end .site-content -->
        <footer class="site-footer bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-4 mb-md-0 pb-1 pb-md-0">
                        <div class="footer-title">About Gameforest</div>
                        <p>Gameforest is a Bootstrap Gaming theme what is built on the world's most popular front-end framework. Clean and well coded professional front-end files are included in your downloaded package.</p><a class="btn btn-outline-light mt-2" href="https://themeforest.net/item/gameforest-responsive-gaming-html-theme/5007730" target="_blank" role="button">Purchase theme</a></div>
                    <div class="col-md-4 mb-4 mb-md-0 pb-1 pb-md-0">
                        <div class="footer-title">Popular Categories</div>
                        <div class="footer-tags"><a href="#">Playstation 4</a><a href="#">Xbox One</a><a href="#">God of War</a><a href="#">Bioshock</a><a href="#">Uncharted 4</a><a href="#">Uplay</a><a href="#">Steam</a><a href="#">Wordpress</a><a href="#">Rachet</a><a href="#">Github</a></div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-title">Subscribe</div>
                        <p>Subscribe to our newsletter and get notification when new games are available.</p>
                        <form>
                            <div class="input-group mt-4">
                                <input type="text" class="form-control shadow-none border-0" placeholder="Email">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">Subscribe</button>
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox mt-3">
                                <input type="checkbox" class="custom-control-input" id="subscribe">
                                <label class="custom-control-label" for="subscribe">Subscribe me to newsletter</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container d-flex flex-column flex-md-row">
                    <div class="order-2 order-md-1">
                        <div class="footer-links d-none d-md-inline-block"><a href="#">About Gameforest</a><a href="#">Terms of Service</a><a href="docs.html" target="_blank">Documentation</a><a href="changelog.html">Changelog</a></div>
                        <p class="footer-copyright">&copy; 2019 <a href="https://themeforest.net/item/gameforest-responsive-gaming-html-theme/5007730" target="_blank">Gameforest</a>. Designed and built by <a href="https://yakuthemes.com/" target="_blank">yakuthemes</a>. All rights reserved.</p>
                    </div>
                    <div class="footer-social order-1 order-md-2 ml-md-auto text-center text-md-right"><span class="d-none d-sm-block mb-2">follow us on social media</span><a href="https://facebook.com/yakuthemes" target="_blank" data-toggle="tooltip" title="facebook"><i class="ya ya-facebook"></i></a><a href="https://twitter.com/yakuthemes" target="_blank" data-toggle="tooltip" title="twitter"><i class="ya ya-twitter"></i></a><a href="#" target="_blank" data-toggle="tooltip" title="instagram"><i class="ya ya-instagram"></i></a><a href="#" target="_blank" data-toggle="tooltip" title="discord"><i class="ya ya-discord"></i></a><a href="#" target="_blank" data-toggle="tooltip" title="youtube"><i class="ya ya-youtube"></i></a><a href="https://github.com/yakuthemes" target="_blank" data-toggle="tooltip" title="github"><i class="ya ya-github"></i></a><a href="#" target="_blank" data-toggle="tooltip" title="twitch"><i class="ya ya-twitch"></i></a></div>
                </div>
            </div>
        </footer>
        <!-- end .site-footer -->
    </div>
    <!-- end .site -->

    <!-- js: vendor -->
    <script src="/js/vendor.js"></script>
    <script src="/js/theme.minaead.js"></script>
    <script src="/plugins/parallax/parallax.min.js"></script>
    <script src="/plugins/easypiechart/jquery.easypiechart.min.js"></script>
    @yield('js')
   
</body>

</html>