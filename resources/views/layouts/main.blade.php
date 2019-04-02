<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="@yield('author',env('APP_NAME'))">

    <title>@yield('title')</title>
    <link rel="icon" href="/assets/img/brand/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800">
    <link rel="stylesheet" href="/assets/vendor/%40fortawesome/fontawesome-pro/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/theme.min.css">
    
    @yield('css')
    <style>
        .bg-top{
            background-color: #143354;
        }
        .tp-author{
            color:#fff; padding-left:10px;
        }
        .tp-author:hover{
            color:#fff;
        }
    </style>

</head>

<body>

    <header id="header-main">
        
      

        <nav class="navbar navbar-main navbar-expand-lg navbar-sticky navbar-transparent navbar-dark bg-dark" id="navbar-main">
            <div class="container">
                <a class="navbar-brand mr-lg-5" href="../index.html">
                    <img alt="Image placeholder" src="/assets/img/brand/white.png" style="height: 50px;">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar-main-collapse">
                    <ul class="navbar-nav align-items-lg-center">
                        <li class="nav-item ">
                            <a class="nav-link" href="../index.html">Overview</a>
                        </li>
                        <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-arrow p-0">
    <ul class="list-group list-group-flush">
        <li>
            <a href="sections.html" class="list-group-item list-group-item-action" role="button">
                <div class="media d-flex align-items-center">
                    <figure style="width: 50px;">
                        <img alt="Image placeholder" src="assets/img/icons/essential/detailed/Apps.svg" class="svg-inject img-fluid" style="height: 50px;">
                    </figure>
                    <div class="media-body ml-3">
                        <h6 class="mb-1">Explore all sections</h6>
                        <p class="mb-0">Awesome section examples for any scenario.</p>
                    </div>
                </div>
            </a>
        </li>
    </ul>
    <div class="dropdown-menu-links rounded-bottom delimiter-top p-4">
        <div class="row">
            <div class="col-sm-4">
                <a href="sections.html#headers" class="dropdown-item">Headers</a>
                <a href="sections.html#footers" class="dropdown-item">Footers</a>
                <a href="sections.html#blog" class="dropdown-item">Blog</a>
                <a href="sections.html#call-to-action" class="dropdown-item">Call to action</a>
                <a href="sections.html#clients" class="dropdown-item">Clients</a>
                <a href="sections.html#collapse" class="dropdown-item">Collapse</a>
            </div>
            <div class="col-sm-4">
                <a href="sections.html#covers" class="dropdown-item">Covers</a>
                <a href="sections.html#features" class="dropdown-item">Features</a>
                <a href="sections.html#milestone" class="dropdown-item">Milestone</a>
                <a href="sections.html#pricing" class="dropdown-item">Pricing</a>
                <a href="sections.html#projects" class="dropdown-item">Projects</a>
                <a href="sections.html#subscribe" class="dropdown-item">Subscribe</a>
            </div>
            <div class="col-sm-4">
                <a href="sections.html#swiper" class="dropdown-item">Swiper</a>
                <a href="sections.html#tables" class="dropdown-item">Tables</a>
                <a href="sections.html#team" class="dropdown-item">Team</a>
                <a href="sections.html#testimonials" class="dropdown-item">Testimonials</a>
                <a href="sections.html#video" class="dropdown-item">Video</a>
            </div>
        </div>
    </div>
    <div class="delimiter-top py-3 px-4">
        <span class="badge badge-soft-success">Yaass!</span>
        <p class="mt-2 mb-0">
            Explore, switch, customize any component, section or page and make your website rich its full potential.
        </p>
    </div>
</div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../docs/alerts.html" role="button">Components</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../docs/introduction.html" target="_blank">Docs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../docs/changelog.html" target="_blank">Changelog</a>
                        </li>
                        <li class="nav-item mr-0">
                            <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="nav-link d-lg-none">Purchase now</a>
                            <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="btn btn-sm btn-white btn-circle btn-icon d-none d-lg-inline-flex">
                                <span class="btn-inner--icon"><i class="far fa-shopping-cart"></i></span>
                                <span class="btn-inner--text">Purchase now</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
          <div id="navbar-top-main" class="navbar-top navbar-dark bg-top">
            <div class="container">
                <div class="navbar-nav align-items-center">

                    <div class="mx-auto">

                       @foreach(range('A','Z') as $char)
                        <a href="/author/{{strtolower($char)}}" title="Search Author starting from {{$char}}" class="tp-author">{{$char}}</a>
                       @endforeach
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>


    <footer class="footer footer-dark bg-gradient-primary">
        <div class="container">
            <div class="row pt-md">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <a href="../index.html">
                        <img src="/assets/img/brand/white.png" alt="Footer logo" style="height: 70px;">
                    </a>
                    <p class="text-sm">A unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</p>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
                    <h6 class="heading mb-3">Account</h6>
                    <ul class="list-unstyled">
                        <li><a href="account-profile.html">Profile</a>
                        </li>
                        <li><a href="account-settings.html">Settings</a>
                        </li>
                        <li><a href="account-billing.html">Billing</a>
                        </li>
                        <li><a href="account-notifications.html">Notifications</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                    <h6 class="heading mb-3">About</h6>
                    <ul class="list-unstyled text-small">
                        <li><a href="#">Services</a>
                        </li>
                        <li><a href="#">Contact</a>
                        </li>
                        <li><a href="#">Careers</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-4 mb-5 mb-lg-0">
                    <h6 class="heading mb-3">Company</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Terms</a>
                        </li>
                        <li><a href="#">Privacy</a>
                        </li>
                        <li><a href="#">Support</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top">
                <div class="col-md-6">
                    <div class="copyright text-sm font-weight-bold text-center text-md-left">
                        &copy; 2018 <a href="https://webpixels.io/" class="font-weight-bold" target="_blank">Webpixels</a>. All rights reserved.
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="https://dribbble.com/webpixels" target="_blank">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="https://instagram.com/webpixelsofficial" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/webpixels" target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://facebook.com/webpixels" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <script src="/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/in-view/dist/in-view.min.js"></script>
    
    @yield('plugins')
    <script src="/assets/js/theme.min.js"></script>
    @yield('js')
    
</body>

</html>
