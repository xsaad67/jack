<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

    <meta charset="utf-8">
    <title>Leap Bootstrap Theme and HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A corporate Bootstrap theme by Medium Rare">
    <style>
      @keyframes hideLoader{
            0%{ width: 100%; height: 100%; }
            100%{ width: 0; height: 0; }
        }
        body > div.loader{
                position: fixed;
                background: white;
                width: 100%;
                height: 100%;
                z-index: 1071;
                opacity: 0;
                transition: opacity .5s ease;
                overflow: hidden;
                pointer-events: none;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            body:not(.loaded) > div.loader{
                opacity: 1;
            }
            body:not(.loaded){
                overflow: hidden;
            }
        body.loaded > div.loader{
            animation: hideLoader .5s linear .5s forwards;
        }

        /* Typing Animation */
    .loading-animation {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      animation: typing 1s linear infinite alternate;
      position: relative;
      left: -12px;
    }

    @keyframes typing {
      0% {
        background-color: rgba(100,100,100, 1);
        box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),
          24px 0px 0px 0px rgba(100,100,100, 0.2);
      }

      25% {
        background-color: rgba(100,100,100, 0.4);
        box-shadow: 12px 0px 0px 0px rgba(100,100,100, 2),
          24px 0px 0px 0px rgba(100,100,100, 0.2);
      }

      75% {
        background-color: rgba(100,100,100, 0.4);
        box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),
          24px 0px 0px 0px rgba(100,100,100, 1);
      }
    }
    </style>
    <script type="text/javascript">
      window.addEventListener("load", function () {
        document.querySelector('body').classList.add('loaded');
      });
    </script>
    <link href="/assets/css/theme-saas.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="preload" as="font" href="/assets/fonts/Inter-UI-upright.var.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="/assets/fonts/Inter-UI.var.woff2" type="font/woff2" crossorigin="anonymous">
  </head>

  <body>
    <div class="loader">
      <div class="loading-animation"></div>
    </div>
    <div class="alert text-center bg-primary-3 text-light alert-dismissible fade show rounded-0 mb-0 pr-3" role="alert">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-auto d-flex flex-column flex-md-row align-items-center">
            <span class="badge bg-primary-2 text-light mr-md-2 mb-2 mb-md-0">35% Off</span>
            <span>Use code <strong>35SITEWIDE</strong> at checkout. Offer ends in
              <span class="font-weight-bold text-nowrap" data-date-format="%-D days %-H hours" data-countdown-date="2019/03/12"></span>
            </span>
            <a href="https://themes.getbootstrap.com/product/leap-multipurpose-bootstrap-theme/" class="ml-md-2 mt-2 mt-md-0 btn btn-sm btn-white">Purchase</a>
          </div>
        </div>
      </div>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <svg class="icon bg-white" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M16.2426 6.34311L6.34309 16.2426C5.95257 16.6331 5.95257 17.2663 6.34309 17.6568C6.73362 18.0473 7.36678 18.0473 7.75731 17.6568L17.6568 7.75732C18.0473 7.36679 18.0473 6.73363 17.6568 6.34311C17.2663 5.95258 16.6331 5.95258 16.2426 6.34311Z"
          fill="#212529" />
          <path d="M17.6568 16.2426L7.75734 6.34309C7.36681 5.95257 6.73365 5.95257 6.34313 6.34309C5.9526 6.73362 5.9526 7.36678 6.34313 7.75731L16.2426 17.6568C16.6331 18.0473 17.2663 18.0473 17.6568 17.6568C18.0474 17.2663 18.0474 16.6331 17.6568 16.2426Z" fill="#212529"
          />
        </svg>

      </button>
    </div>

    <div class="navbar-container ">
      <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white" data-sticky="top">
        <div class="container">
          <div class="col flex-fill px-0 d-flex justify-content-between">
            <a class="navbar-brand mr-0 fade-page" href="index-2.html">
              <img src="/assets/img/logo.svg" alt="Leap">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
              <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 17C3 17.5523 3.44772 18 4 18H20C20.5523 18 21 17.5523 21 17V17C21 16.4477 20.5523 16 20 16H4C3.44772 16 3 16.4477 3 17V17ZM3 12C3 12.5523 3.44772 13 4 13H20C20.5523 13 21 12.5523 21 12V12C21 11.4477 20.5523 11 20 11H4C3.44772 11 3 11.4477 3 12V12ZM4 6C3.44772 6 3 6.44772 3 7V7C3 7.55228 3.44772 8 4 8H20C20.5523 8 21 7.55228 21 7V7C21 6.44772 20.5523 6 20 6H4Z"
                fill="#212529" />
              </svg>

            </button>
          </div>
          <div class="collapse navbar-collapse col px-0 px-lg-2 flex-fill">
            <div class="py-2 py-lg-0">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">Demos</a>
                  <div class="dropdown-menu row">
                    <div class="col-auto" data-dropdown-content>
                      <div class="card card-sm card-body shadow-sm"><a href="home-course.html" class="dropdown-item fade-page">Course</a><a href="home-cryptocurrency.html" class="dropdown-item fade-page">Cryptocurrency</a><a href="home-desktop-app.html" class="dropdown-item fade-page">Desktop App</a>
                        <a
                        href="home-event.html" class="dropdown-item fade-page">Event</a><a href="home-mobile-app.html" class="dropdown-item fade-page">Mobile App</a><a href="home-portfolio.html" class="dropdown-item fade-page">Portfolio</a><a href="home-saas.html" class="dropdown-item fade-page">SaaS</a>
                          <a
                          href="home-saas-trend.html" class="dropdown-item fade-page">SaaS - Trend</a><a href="home-software-library.html" class="dropdown-item fade-page">Software Library</a>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">Pages</a>
                  <div class="dropdown-menu row">
                    <div class="col-auto" data-dropdown-content>
                      <div class="card card-sm card-body shadow-sm"><a href="about-company.html" class="dropdown-item fade-page">About Company</a>
                        <div class="dropdown">
                          <a href="#" class="dropdown-item dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">
                            <span>Careers</span>
                            <svg class="icon bg-dark opacity-20" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.4444 8.41358C14.7776 8.2281 15.1875 8.46907 15.1875 8.85048V15.1495C15.1875 15.5309 14.7776 15.7719 14.4444 15.5864L8.78505 12.4369C8.44258 12.2463 8.44258 11.7537 8.78505 11.5631L14.4444 8.41358Z" fill="#212529" />
                            </svg>

                          </a>
                          <div class="dropdown-menu row">
                            <div class="col-auto" data-dropdown-content>
                              <div class="card card-sm card-body shadow"><a href="careers.html" class="dropdown-item fade-page">Careers</a><a href="career-single.html" class="dropdown-item fade-page">Career Single</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="dropdown">
                          <a href="#" class="dropdown-item dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">
                            <span>Contact</span>
                            <svg class="icon bg-dark opacity-20" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.4444 8.41358C14.7776 8.2281 15.1875 8.46907 15.1875 8.85048V15.1495C15.1875 15.5309 14.7776 15.7719 14.4444 15.5864L8.78505 12.4369C8.44258 12.2463 8.44258 11.7537 8.78505 11.5631L14.4444 8.41358Z" fill="#212529" />
                            </svg>

                          </a>
                          <div class="dropdown-menu row">
                            <div class="col-auto" data-dropdown-content>
                              <div class="card card-sm card-body shadow"><a href="contact.html" class="dropdown-item fade-page">Contact</a><a href="contact-multiple-locations.html" class="dropdown-item fade-page">Contact - Multiple Locations</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="dropdown">
                          <a href="#" class="dropdown-item dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">
                            <span>Customers</span>
                            <svg class="icon bg-dark opacity-20" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.4444 8.41358C14.7776 8.2281 15.1875 8.46907 15.1875 8.85048V15.1495C15.1875 15.5309 14.7776 15.7719 14.4444 15.5864L8.78505 12.4369C8.44258 12.2463 8.44258 11.7537 8.78505 11.5631L14.4444 8.41358Z" fill="#212529" />
                            </svg>

                          </a>
                          <div class="dropdown-menu row">
                            <div class="col-auto" data-dropdown-content>
                              <div class="card card-sm card-body shadow"><a href="customer-stories.html" class="dropdown-item fade-page">Customer Stories</a><a href="customer-story.html" class="dropdown-item fade-page">Customer Story</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="dropdown">
                          <a href="#" class="dropdown-item dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">
                            <span>Knowledgebase</span>
                            <svg class="icon bg-dark opacity-20" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.4444 8.41358C14.7776 8.2281 15.1875 8.46907 15.1875 8.85048V15.1495C15.1875 15.5309 14.7776 15.7719 14.4444 15.5864L8.78505 12.4369C8.44258 12.2463 8.44258 11.7537 8.78505 11.5631L14.4444 8.41358Z" fill="#212529" />
                            </svg>

                          </a>
                          <div class="dropdown-menu row">
                            <div class="col-auto" data-dropdown-content>
                              <div class="card card-sm card-body shadow"><a href="knowledgebase.html" class="dropdown-item fade-page">Knowledgebase</a><a href="knowledgebase-category.html" class="dropdown-item fade-page">Knowledgebase Category</a><a href="knowledgebase-article.html" class="dropdown-item fade-page">Knowledgebase Article</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="dropdown">
                          <a href="#" class="dropdown-item dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">
                            <span>Pricing</span>
                            <svg class="icon bg-dark opacity-20" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.4444 8.41358C14.7776 8.2281 15.1875 8.46907 15.1875 8.85048V15.1495C15.1875 15.5309 14.7776 15.7719 14.4444 15.5864L8.78505 12.4369C8.44258 12.2463 8.44258 11.7537 8.78505 11.5631L14.4444 8.41358Z" fill="#212529" />
                            </svg>

                          </a>
                          <div class="dropdown-menu row">
                            <div class="col-auto" data-dropdown-content>
                              <div class="card card-sm card-body shadow"><a href="pricing-plans.html" class="dropdown-item fade-page">Pricing Plans</a><a href="pricing-plans-table.html" class="dropdown-item fade-page">Pricing Plans Table</a><a href="pricing-slider.html" class="dropdown-item fade-page">Pricing Slider</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="dropdown">
                          <a href="#" class="dropdown-item dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">
                            <span>Utility</span>
                            <svg class="icon bg-dark opacity-20" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.4444 8.41358C14.7776 8.2281 15.1875 8.46907 15.1875 8.85048V15.1495C15.1875 15.5309 14.7776 15.7719 14.4444 15.5864L8.78505 12.4369C8.44258 12.2463 8.44258 11.7537 8.78505 11.5631L14.4444 8.41358Z" fill="#212529" />
                            </svg>

                          </a>
                          <div class="dropdown-menu row">
                            <div class="col-auto" data-dropdown-content>
                              <div class="card card-sm card-body shadow"><a href="404.html" class="dropdown-item fade-page">404</a><a href="utility-coming-soon-subscribe.html" class="dropdown-item fade-page">Coming Soon - Subscribe</a><a href="utility-coming-soon.html" class="dropdown-item fade-page">Coming Soon</a>
                                <a
                                href="utility-confirmation-download.html" class="dropdown-item fade-page">Confirmation - Download</a><a href="utility-confirmation-subscription.html" class="dropdown-item fade-page">Confirmation - Subscription</a><a href="utility-legal.html" class="dropdown-item fade-page">Legal</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="dropdown">
                          <a href="#" class="dropdown-item dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">
                            <span>Account</span>
                            <svg class="icon bg-dark opacity-20" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.4444 8.41358C14.7776 8.2281 15.1875 8.46907 15.1875 8.85048V15.1495C15.1875 15.5309 14.7776 15.7719 14.4444 15.5864L8.78505 12.4369C8.44258 12.2463 8.44258 11.7537 8.78505 11.5631L14.4444 8.41358Z" fill="#212529" />
                            </svg>

                          </a>
                          <div class="dropdown-menu row">
                            <div class="col-auto" data-dropdown-content>
                              <div class="card card-sm card-body shadow"><a href="account-sign-in.html" class="dropdown-item fade-page">Sign In</a><a href="account-sign-up.html" class="dropdown-item fade-page">Sign Up</a><a href="account-sign-up-image.html" class="dropdown-item fade-page">Sign Up Image</a>
                                <a
                                href="account-forgot-password.html" class="dropdown-item fade-page">Forgot Password</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">Blog</a>
                  <div class="dropdown-menu row">
                    <div class="col-auto" data-dropdown-content>
                      <div class="card card-sm card-body shadow-sm">
                        <div class="dropdown">
                          <a href="#" class="dropdown-item dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">
                            <span>Blog Layouts</span>
                            <svg class="icon bg-dark opacity-20" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.4444 8.41358C14.7776 8.2281 15.1875 8.46907 15.1875 8.85048V15.1495C15.1875 15.5309 14.7776 15.7719 14.4444 15.5864L8.78505 12.4369C8.44258 12.2463 8.44258 11.7537 8.78505 11.5631L14.4444 8.41358Z" fill="#212529" />
                            </svg>

                          </a>
                          <div class="dropdown-menu row">
                            <div class="col-auto" data-dropdown-content>
                              <div class="card card-sm card-body shadow"><a href="blog-cards.html" class="dropdown-item fade-page">Blog Cards</a><a href="blog-masonry.html" class="dropdown-item fade-page">Blog Masonry</a><a href="blog-sidebar.html" class="dropdown-item fade-page">Blog Sidebar</a>
                                <a
                                href="blog-magazine.html" class="dropdown-item fade-page">Blog Magazine</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="dropdown">
                          <a href="#" class="dropdown-item dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">
                            <span>Article Layouts</span>
                            <svg class="icon bg-dark opacity-20" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.4444 8.41358C14.7776 8.2281 15.1875 8.46907 15.1875 8.85048V15.1495C15.1875 15.5309 14.7776 15.7719 14.4444 15.5864L8.78505 12.4369C8.44258 12.2463 8.44258 11.7537 8.78505 11.5631L14.4444 8.41358Z" fill="#212529" />
                            </svg>

                          </a>
                          <div class="dropdown-menu row">
                            <div class="col-auto" data-dropdown-content>
                              <div class="card card-sm card-body shadow"><a href="blog-article.html" class="dropdown-item fade-page">Article Basic</a><a href="blog-article-video.html" class="dropdown-item fade-page">Article Video</a><a href="blog-article-image-header.html" class="dropdown-item fade-page">Article Image Header</a>
                                <a
                                href="blog-article-image-header-parallax.html" class="dropdown-item fade-page">Article Image Parallax</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">Portfolio</a>
                  <div class="dropdown-menu row">
                    <div class="col-auto" data-dropdown-content>
                      <div class="card card-sm card-body shadow-sm">
                        <div class="dropdown">
                          <a href="#" class="dropdown-item dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">
                            <span>Grid Layouts</span>
                            <svg class="icon bg-dark opacity-20" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.4444 8.41358C14.7776 8.2281 15.1875 8.46907 15.1875 8.85048V15.1495C15.1875 15.5309 14.7776 15.7719 14.4444 15.5864L8.78505 12.4369C8.44258 12.2463 8.44258 11.7537 8.78505 11.5631L14.4444 8.41358Z" fill="#212529" />
                            </svg>

                          </a>
                          <div class="dropdown-menu row">
                            <div class="col-auto" data-dropdown-content>
                              <div class="card card-sm card-body shadow"><a href="portfolio-2-columns.html" class="dropdown-item fade-page">2 Columns</a><a href="portfolio-3-columns.html" class="dropdown-item fade-page">3 Columns</a><a href="portfolio-4-columns.html" class="dropdown-item fade-page">4 Columns</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="dropdown">
                          <a href="#" class="dropdown-item dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">
                            <span>Project Layouts</span>
                            <svg class="icon bg-dark opacity-20" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.4444 8.41358C14.7776 8.2281 15.1875 8.46907 15.1875 8.85048V15.1495C15.1875 15.5309 14.7776 15.7719 14.4444 15.5864L8.78505 12.4369C8.44258 12.2463 8.44258 11.7537 8.78505 11.5631L14.4444 8.41358Z" fill="#212529" />
                            </svg>

                          </a>
                          <div class="dropdown-menu row">
                            <div class="col-auto" data-dropdown-content>
                              <div class="card card-sm card-body shadow"><a href="portfolio-case-study.html" class="dropdown-item fade-page">Case Study</a><a href="portfolio-single-sidebar.html" class="dropdown-item fade-page">Sidebar</a><a href="portfolio-single-slider.html" class="dropdown-item fade-page">Slider</a>
                                <a
                                href="portfolio-single-parallax.html" class="dropdown-item fade-page">Parallax</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">Elements</a>
                  <div class="dropdown-menu bg-primary-3 text-light border-bottom">
                    <div class="container py-4" data-dropdown-content>
                      <div class="row">
                        <div class="col-lg col-md-4 mb-3 mb-lg-0">
                          <h5>Base</h5>
                          <div><a class="dropdown-item fade-page" href="elements-grid.html">Grid</a><a class="dropdown-item fade-page" href="elements-forms.html">Forms</a><a class="dropdown-item fade-page" href="elements-tables.html">Tables</a><a class="dropdown-item fade-page"
                            href="elements-typography.html">Typography</a>
                          </div>
                        </div>
                        <div class="col-lg col-md-4 mb-3 mb-lg-0">
                          <h5>General</h5>
                          <div><a class="dropdown-item fade-page" href="elements-alerts.html">Alerts</a><a class="dropdown-item fade-page" href="elements-avatars.html">Avatars</a><a class="dropdown-item fade-page" href="elements-badges.html">Badges</a><a class="dropdown-item fade-page"
                            href="elements-breadcrumbs.html">Breadcrumbs</a><a class="dropdown-item fade-page" href="elements-buttons.html">Buttons</a><a class="dropdown-item fade-page" href="elements-cards.html">Cards</a><a class="dropdown-item fade-page"
                            href="elements-dropdowns-bootstrap.html">Dropdowns Bootstrap</a><a class="dropdown-item fade-page" href="elements-dropdowns-grid.html">Dropdowns Grid</a><a class="dropdown-item fade-page" href="elements-footers.html">Footers</a>
                            <a
                            class="dropdown-item fade-page" href="elements-navbars.html">Navigation</a><a class="dropdown-item fade-page" href="elements-tooltips.html">Tooltips</a><a class="dropdown-item fade-page" href="elements-widgets.html">Widgets</a>
                          </div>
                        </div>
                        <div class="col-lg col-md-4 mb-3 mb-lg-0">
                          <h5>Graphic</h5>
                          <div><a class="dropdown-item fade-page" href="elements-decorations.html">Decorations</a><a class="dropdown-item fade-page" href="elements-dividers.html">Dividers</a><a class="dropdown-item fade-page" href="elements-icons.html">Icons</a>
                            <a
                            class="dropdown-item fade-page" href="elements-icons-reference.html">Icons Reference</a><a class="dropdown-item fade-page" href="elements-processes.html">Processes</a><a class="dropdown-item fade-page" href="elements-progress.html">Progress</a><a class="dropdown-item fade-page" href="elements-pricing.html">Pricing</a>
                          </div>
                        </div>
                        <div class="col-lg col-md-4 mb-3 mb-lg-0">
                          <h5>Media</h5>
                          <div><a class="dropdown-item fade-page" href="elements-fancybox.html">Fancybox</a><a class="dropdown-item fade-page" href="elements-isotope.html">Isotope</a><a class="dropdown-item fade-page" href="elements-maps.html">Maps</a><a class="dropdown-item fade-page"
                            href="elements-flickity.html">Slider Flickity</a><a class="dropdown-item fade-page" href="elements-twitter.html">Twitter Feeds</a><a class="dropdown-item fade-page" href="elements-video-players.html">Video Players</a><a class="dropdown-item fade-page"
                            href="elements-video-backgrounds.html">Video Backgrounds</a>
                          </div>
                        </div>
                        <div class="col-lg col-md-4 mb-3 mb-lg-0">
                          <h5>Interactive</h5>
                          <div><a class="dropdown-item fade-page" href="elements-animations.html">Animations</a><a class="dropdown-item fade-page" href="elements-accordions.html">Accordion</a><a class="dropdown-item fade-page" href="elements-counters.html">Counters</a>
                            <a
                            class="dropdown-item fade-page" href="elements-countdown.html">Countdown</a><a class="dropdown-item fade-page" href="elements-modals.html">Modals</a><a class="dropdown-item fade-page" href="elements-navs.html">Tabs (Nav)</a><a class="dropdown-item fade-page" href="elements-typed-text.html">Typed Text</a>
                              <a
                              class="dropdown-item fade-page" href="elements-parallax.html">Parallax</a><a class="dropdown-item fade-page" href="elements-popovers.html">Popovers</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">Support</a>
                  <div class="dropdown-menu row">
                    <div class="col-auto px-0" data-dropdown-content>
                      <div class="bg-white rounded border shadow-lg o-hidden">
                        <div class="p-3">
                          <h6 class="mb-0">Product Support</h6>
                        </div>
                        <div class="list-group list-group-flush">
                          <a href="documentation/index.html" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-3">
                            <svg class="icon icon-md" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <title>Icon For Selected-file</title>
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" opacity="0"></polygon>
                                <path d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                <path d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z"
                                fill="#000000" fill-rule="nonzero"></path>
                              </g>
                            </svg>
                            <div class="text-body ml-3">
                              <span>Documentation</span>
                              <div class="text-small text-muted">Get all the information you need</div>
                            </div>
                          </a>
                          <a href="https://themes.zendesk.com/hc/en-us/articles/360000006291-How-do-I-get-help-with-the-theme-I-purchased-" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-3">
                            <svg class="icon icon-md" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <title>Icon For Chat#4</title>
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect opacity="0" x="0" y="0" width="24" height="24"></rect>
                                <path d="M21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L5,18 C3.34314575,18 2,16.6568542 2,15 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 Z M6.16794971,10.5547002 C7.67758127,12.8191475 9.64566871,14 12,14 C14.3543313,14 16.3224187,12.8191475 17.8320503,10.5547002 C18.1384028,10.0951715 18.0142289,9.47430216 17.5547002,9.16794971 C17.0951715,8.86159725 16.4743022,8.98577112 16.1679497,9.4452998 C15.0109146,11.1808525 13.6456687,12 12,12 C10.3543313,12 8.9890854,11.1808525 7.83205029,9.4452998 C7.52569784,8.98577112 6.90482849,8.86159725 6.4452998,9.16794971 C5.98577112,9.47430216 5.86159725,10.0951715 6.16794971,10.5547002 Z"
                                fill="#000000"></path>
                              </g>
                            </svg>
                            <div class="text-body ml-3">
                              <span>Looking for answers?</span>
                              <div class="text-small text-muted">Get support</div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="collapse navbar-collapse justify-content-end col flex-fill px-0"><a href="https://themes.getbootstrap.com/product/leap-multipurpose-bootstrap-theme/" class="btn btn-primary ml-lg-3">Purchase Now</a>

          </div>
        </div>
      </nav>
    </div>

    <section class="has-divider">
      <div class="container">
        <div class="row align-items-center justify-content-between o-hidden">
          <div class="col-md-6 order-sm-2 mb-5 mb-sm-0" data-aos="fade-left">
            <img src="/assets/img/saas-3.svg" alt="Image">
          </div>
          <div class="col-md-6 pr-xl-5 order-sm-1">
            <h1 class="display-4">Build it with Leap</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            <form class="d-sm-flex mb-2 mt-4">
              <input type="email" class="form-control form-control-lg mr-sm-2 mb-2 mb-sm-0" placeholder="you@yoursite.com">
              <button class="btn btn-lg btn-primary" type="submit">Get Started</button>
            </form>
            <span class="text-small text-muted">Already using Leap? <a href="#">Sign In</a>
            </span>
          </div>
        </div>
      </div>
      <div class="divider">
        <svg class="bg-primary-alt" width="100%" height="100%" version="1.1" viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none">
          <path d="M0,0 C6.83050094,50 15.1638343,75 25,75 C41.4957514,75 62.4956597,0 81.2456597,0 C93.7456597,0 99.9971065,0 100,0 L100,100 L0,100" fill="#ffffff"></path>
        </svg>
      </div>
    </section>
    <section class="bg-primary-alt">
      <div class="container">
        <div class="row mb-4">
          <div class="col">
            <h2 class="h1">Multiple layouts for your SaaS</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card card-body">
              <div class="icon-round mb-3 mb-md-4 bg-primary">
                <svg class="icon bg-primary" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>Icon For Chat-check</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect opacity="0" x="0" y="0" width="24" height="24"></rect>
                    <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z"
                    fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                    <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z"
                    fill="#000000"></path>
                  </g>
                </svg>
              </div>
              <h4>Communication</h4>
              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
              </p>
              <a href="#">Learn More</a>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card card-body">
              <div class="icon-round mb-3 mb-md-4 bg-primary">
                <svg class="icon bg-primary" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>Icon For Wallet#3</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect opacity="0" x="0" y="0" width="24" height="24"></rect>
                    <path d="M4,4 L20,4 C21.1045695,4 22,4.8954305 22,6 L22,18 C22,19.1045695 21.1045695,20 20,20 L4,20 C2.8954305,20 2,19.1045695 2,18 L2,6 C2,4.8954305 2.8954305,4 4,4 Z" fill="#000000" opacity="0.3"></path>
                    <path d="M18.5,11 L5.5,11 C4.67157288,11 4,11.6715729 4,12.5 L4,13 L8.58578644,13 C8.85100293,13 9.10535684,13.1053568 9.29289322,13.2928932 L10.2928932,14.2928932 C10.7456461,14.7456461 11.3597108,15 12,15 C12.6402892,15 13.2543539,14.7456461 13.7071068,14.2928932 L14.7071068,13.2928932 C14.8946432,13.1053568 15.1489971,13 15.4142136,13 L20,13 L20,12.5 C20,11.6715729 19.3284271,11 18.5,11 Z"
                    fill="#000000"></path>
                    <path d="M5.5,6 C4.67157288,6 4,6.67157288 4,7.5 L4,8 L20,8 L20,7.5 C20,6.67157288 19.3284271,6 18.5,6 L5.5,6 Z" fill="#000000"></path>
                  </g>
                </svg>
              </div>
              <h4>Payments</h4>
              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
              </p>
              <a href="#">Learn More</a>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card card-body">
              <div class="icon-round mb-3 mb-md-4 bg-primary">
                <svg class="icon bg-primary" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>Icon For Sushi</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect opacity="0" x="0" y="0" width="24" height="24"></rect>
                    <path d="M7,17 C9.28100068,17 11,15.9686004 11,15 C11,14.0313996 9.28100068,13 7,13 C4.71899932,13 3,14.0313996 3,15 C3,15.9686004 4.71899932,17 7,17 Z M11.5,21.3092376 C10.6896396,22.3100893 8.97910086,23 7,23 C4.23857625,23 2,21.6568542 2,20 C2,17.2642141 2,15.5975474 2,15 C2,13.3431458 4.23857625,12 7,12 C8.97910086,12 10.6896396,12.6899107 11.5,13.6907624 C12.3103604,12.6899107 14.0208991,12 16,12 C18.7614237,12 21,13.3431458 21,15 C21,15.3356863 21,17.0023529 21,20 C21,21.6568542 18.7614237,23 16,23 C14.0208991,23 12.3103604,22.3100893 11.5,21.3092376 Z M16,17 C18.2810007,17 20,15.9686004 20,15 C20,14.0313996 18.2810007,13 16,13 C13.7189993,13 12,14.0313996 12,15 C12,15.9686004 13.7189993,17 16,17 Z"
                    fill="#000000" fill-rule="nonzero"></path>
                    <path d="M19.6608485,2.02106698 C19.8359854,2.52970126 19.5656323,3.08400728 19.056998,3.25914411 C19.0489211,3.2619252 19.040808,3.26459992 19.0326607,3.26716758 L2.33565766,8.52933019 C2.07027996,8.61296559 1.78658327,8.46994761 1.6959956,8.20686191 C1.60540793,7.94377622 1.74091331,7.65641538 2.00152489,7.55893815 L18.3986537,1.42587734 C18.9025046,1.23742064 19.4637309,1.49309823 19.6521876,1.99694922 C19.6551802,2.00495015 19.6580674,2.01299009 19.6608485,2.02106698 Z M20.9715106,6.55164469 C21.0649233,7.08141428 20.7111861,7.58660332 20.1814165,7.68001599 C20.173004,7.68149934 20.1645723,7.68287196 20.1561237,7.68413349 L2.84150489,10.2695234 C2.56631096,10.3106149 2.30848,10.1249778 2.26016328,9.85096006 C2.21184657,9.57694235 2.39063678,9.31431712 2.6632886,9.25880863 L19.8179636,5.76633204 C20.3450925,5.65901521 20.8594123,5.99934012 20.9667291,6.52646899 C20.9684333,6.53483956 20.9700272,6.54323218 20.9715106,6.55164469 Z M16,16 C15.1715729,16 14.5,15.5522847 14.5,15 C14.5,14.4477153 15.1715729,14 16,14 C16.8284271,14 17.5,14.4477153 17.5,15 C17.5,15.5522847 16.8284271,16 16,16 Z M7,16 C6.17157288,16 5.5,15.5522847 5.5,15 C5.5,14.4477153 6.17157288,14 7,14 C7.82842712,14 8.5,14.4477153 8.5,15 C8.5,15.5522847 7.82842712,16 7,16 Z"
                    fill="#000000" opacity="0.3"></path>
                  </g>
                </svg>
              </div>
              <h4>Sushi</h4>
              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
              </p>
              <a href="#">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-xl-8 col-lg-9">
            <h2 class="display-4 mx-xl-6">Build it from the ground up.</h2>
            <p class="lead">
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.
            </p>
          </div>
        </div>
        <div class="row justify-content-center mb-5">
          <div class="col-xl-11">
            <ul class="nav justify-content-center" role="tablist">
              <li class="nav-item mx-1">
                <a class="nav-link active" href="#saas-tab-1" data-toggle="tab" role="tab" aria-controls="saas-tab-1" aria-selected="true">
                  <div class="icon-round icon-round-sm bg-primary">
                    <svg class="icon bg-primary" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <title>Icon For Box#2</title>
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect opacity="0" x="0" y="0" width="24" height="24"></rect>
                        <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z"
                        fill="#000000"></path>
                        <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z"
                        fill="#000000" opacity="0.3"></path>
                      </g>
                    </svg>
                  </div>
                  Custom Dashboard
                </a>
              </li>
              <li class="nav-item mx-1">
                <a class="nav-link" href="#saas-tab-2" data-toggle="tab" role="tab" aria-controls="saas-tab-2" aria-selected="false">
                  <div class="icon-round icon-round-sm bg-primary">
                    <svg class="icon bg-primary" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <title>Icon For Chart-pie</title>
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect opacity="0" x="0" y="0" width="24" height="24"></rect>
                        <path d="M4.00246329,12.2004927 L13,14 L13,4.06189375 C16.9463116,4.55399184 20,7.92038235 20,12 C20,16.418278 16.418278,20 12,20 C7.64874861,20 4.10886412,16.5261253 4.00246329,12.2004927 Z" fill="#000000" opacity="0.3"></path>
                        <path d="M3.0603968,10.0120794 C3.54712466,6.05992157 6.91622084,3 11,3 L11,11.6 L3.0603968,10.0120794 Z" fill="#000000"></path>
                      </g>
                    </svg>
                  </div>
                  Smart Analytics
                </a>
              </li>
              <li class="nav-item mx-1">
                <a class="nav-link" href="#saas-tab-3" data-toggle="tab" role="tab" aria-controls="saas-tab-3" aria-selected="false">
                  <div class="icon-round icon-round-sm bg-primary">
                    <svg class="icon bg-primary" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <title>Icon For Saturation</title>
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect opacity="0" x="0" y="0" width="24" height="24"></rect>
                        <path d="M7,14 C7,16.7614237 9.23857625,19 12,19 C14.7614237,19 17,16.7614237 17,14 C17,12.3742163 15.3702913,9.86852817 12,6.69922982 C8.62970872,9.86852817 7,12.3742163 7,14 Z M12,21 C8.13400675,21 5,17.8659932 5,14 C5,11.4226712 7.33333333,8.08933783 12,4 C16.6666667,8.08933783 19,11.4226712 19,14 C19,17.8659932 15.8659932,21 12,21 Z"
                        fill="#000000" fill-rule="nonzero"></path>
                        <path d="M12,4 C16.6666667,8.08933783 19,11.4226712 19,14 C19,17.8659932 15.8659932,21 12,21 L12,4 Z" fill="#000000"></path>
                      </g>
                    </svg>
                  </div>
                  Dark Mode
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-11" data-aos="fade-up">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="saas-tab-1" role="tabpanel" aria-labelledby="saas-tab-1">
                <div class="popover-image">
                  <div class="popover-hotspot bg-primary-2" style="top: 25%; left: 10%;" data-toggle="popover" title="Hotspot title" data-content="And here's some amazing content. It's very engaging. Right?"></div>
                  <div class="popover-hotspot bg-primary-2" style="top: 10%; left: 90%;" data-toggle="popover" title="Hotspot title" data-content="And here's some amazing content. It's very engaging. Right?"></div>
                  <div class="popover-hotspot bg-primary-2" style="top: 90%; left: 20%;" data-toggle="popover" title="Hotspot title" data-content="And here's some more amazing content. It's very engaging. Right?"></div>
                  <img src="/assets/img/saas-1.jpg" alt="Image" class="rounded border shadow-lg">
                </div>
              </div>
              <div class="tab-pane fade" id="saas-tab-2" role="tabpanel" aria-labelledby="saas-tab-2">
                <div class="popover-image">
                  <div class="popover-hotspot bg-primary-2" style="top: 25%; left: 90%;" data-toggle="popover" title="Hotspot title" data-content="And here's some amazing content. It's very engaging. Right?"></div>
                  <div class="popover-hotspot bg-primary-2" style="top: 90%; left: 10%;" data-toggle="popover" title="Hotspot title" data-content="And here's some amazing content. It's very engaging. Right?"></div>
                  <div class="popover-hotspot bg-primary-2" style="top: 30%; left: 60%;" data-toggle="popover" title="Hotspot title" data-content="And here's some more amazing content. It's very engaging. Right?"></div>
                  <img src="/assets/img/saas-2.jpg" alt="Image" class="rounded border shadow-lg">
                </div>
              </div>
              <div class="tab-pane fade" id="saas-tab-3" role="tabpanel" aria-labelledby="saas-tab-3">
                <div class="popover-image">
                  <div class="popover-hotspot bg-primary-2" style="top: 2%; left: 2%;" data-toggle="popover" title="Hotspot title" data-content="And here's some amazing content. It's very engaging. Right?"></div>
                  <div class="popover-hotspot bg-primary-2" style="top: 35%; left: 95%;" data-toggle="popover" title="Hotspot title" data-content="And here's some amazing content. It's very engaging. Right?"></div>
                  <div class="popover-hotspot bg-primary-2" style="top: 90%; left: 50%;" data-toggle="popover" title="Hotspot title" data-content="And here's some more amazing content. It's very engaging. Right?"></div>
                  <img src="/assets/img/saas-3.jpg" alt="Image" class="rounded border shadow-lg">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-primary-alt">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-xl-5 col-lg-6" data-aos="fade-right">
            <div class="row justify-content-center">
              <div class="col-md-8 col-lg mb-4 mb-lg-0">
                <img src="/assets/img/saas-2.svg" alt="Image">
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="h1">Fits into your workflow</h3>
            <p class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
            <div class="row mt-5 o-hidden">
              <div class="col-sm-6" data-aos="fade-left" data-aos-delay="100">
                <a href="#" class="card card-sm card-body flex-row align-items-center hover-shadow-3d">
                  <svg class="" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M43.6487 0H4.35131C1.94813 0 0 1.94813 0 4.35131V43.6487C0 46.0519 1.94813 48 4.35131 48H43.6487C46.0519 48 48 46.0519 48 43.6487V4.35131C48 1.94813 46.0519 0 43.6487 0Z" fill="#DC395F" />
                    <path d="M16.0416 15.1022C17.6372 15.1022 18.9739 13.8516 18.9739 12.2124C18.9739 10.5744 17.6372 9.32401 16.0416 9.32401C14.446 9.32401 13.1096 10.5744 13.1096 12.2124C13.1096 13.8514 14.446 15.1022 16.0416 15.1022ZM9.96171 30.5747C9.7894 31.3078 9.70296 32.0994 9.70296 32.7452C9.70296 35.2898 11.0828 36.9789 14.0151 36.9789C16.447 36.9789 18.4185 35.5348 19.8381 33.2029L18.9713 36.6816H23.8003L26.5603 25.6118C27.2503 22.809 28.587 21.3542 30.6139 21.3542C32.2093 21.3542 33.201 22.3464 33.201 23.9844C33.201 24.459 33.1579 24.9759 32.9854 25.5368L31.5623 30.6249C31.3466 31.3581 31.2608 32.0916 31.2608 32.781C31.2608 35.1966 32.6833 36.9634 35.6588 36.9634C38.203 36.9634 40.2295 35.3256 41.3507 31.4014L39.4536 30.669C38.5048 33.2979 37.6855 33.7733 37.0386 33.7733C36.3917 33.7733 36.0467 33.3424 36.0467 32.4804C36.0467 32.0923 36.1333 31.6616 36.2623 31.143L37.6425 26.1859C37.9873 25.0219 38.1169 23.9897 38.1169 23.0413C38.1169 19.3329 35.8744 17.3976 33.1579 17.3976C30.6139 17.3976 28.0264 19.6924 26.733 22.1076L27.6814 17.7726H20.3081L19.2731 21.5908H22.723L20.5986 30.0958C18.9304 33.8042 15.8661 33.8644 15.4815 33.7783C14.85 33.6358 14.4461 33.396 14.4461 32.5755C14.4461 32.1021 14.5324 31.422 14.748 30.6021L17.9824 17.7726H9.78939L8.75439 21.5908H12.1607L9.96189 30.5747"
                    fill="white" />
                  </svg>

                  <div class="ml-3">
                    <h5 class="mb-0">Invision</h5>
                    <span>Creative Tools</span>
                  </div>
                </a>
              </div>
              <div class="col-sm-6" data-aos="fade-left" data-aos-delay="200">
                <a href="#" class="card card-sm card-body flex-row align-items-center hover-shadow-3d">
                  <svg class="" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 4L0 11.723L12 19.3324L24 11.723L12 4ZM36 4L24 11.723L36 19.3324L48 11.723L36 4ZM0 27.0554L12 34.7784L24 27.0554L12 19.3324L0 27.0554ZM36 19.3324L24 27.0554L36 34.7784L48 27.0554L36 19.3324ZM12 37.277L24 45L36 37.277L24 29.6676L12 37.277Z"
                    fill="#0069FB" />
                  </svg>

                  <div class="ml-3">
                    <h5 class="mb-0">Dropbox</h5>
                    <span>Productivity</span>
                  </div>
                </a>
              </div>
              <div class="col-sm-6" data-aos="fade-left" data-aos-delay="300">
                <a href="#" class="card card-sm card-body flex-row align-items-center hover-shadow-3d">
                  <svg class="" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30.2369 5.58619C29.5985 3.62093 27.4877 2.5455 25.5227 3.18423C23.5575 3.82263 22.482 5.93346 23.1208 7.89839L32.7948 37.6628C33.4591 39.4988 35.4423 40.5304 37.346 39.9826C39.3318 39.411 40.5421 37.3019 39.9085 35.3518L30.2369 5.58619Z" fill="#DFA22F"
                    />
                    <path d="M15.2471 10.4567C14.6083 8.49165 12.4977 7.41621 10.5327 8.05462C8.56729 8.69318 7.49168 10.8038 8.13058 12.7691L17.8048 42.5337C18.4689 44.3695 20.4523 45.4013 22.356 44.853C24.3416 44.2817 25.5519 42.1727 24.9183 40.2222L15.2471 10.4567Z" fill="#3CB187"
                    />
                    <path d="M42.4139 30.2372C44.3792 29.5988 45.4543 27.4883 44.8159 25.5229C44.1775 23.5579 42.0666 22.4823 40.1017 23.1209L10.3372 32.7952C8.50124 33.4592 7.46962 35.4424 8.01743 37.3461C8.58904 39.3317 10.6981 40.5422 12.6482 39.9086L42.4139 30.2374"
                    fill="#CE1E5B" />
                    <path d="M16.5407 38.6439L23.6546 36.3325L21.3429 29.2179L14.2285 31.5302L16.5407 38.644" fill="#392538" />
                    <path d="M31.5306 33.7732C34.2201 32.8996 36.7199 32.0873 38.6446 31.4618L36.3326 24.3459L29.2183 26.6582L31.5306 33.7732Z" fill="#BB242A" />
                    <path d="M37.5434 15.2472C39.5084 14.6088 40.5839 12.4982 39.9455 10.5328C39.3071 8.56782 37.1963 7.49239 35.231 8.13079L5.4663 17.8053C3.63052 18.469 2.59873 20.4523 3.14704 22.356C3.71832 24.3414 5.82735 25.5519 7.77784 24.9183L37.5434 15.2471" fill="#72C5CD"
                    />
                    <path d="M11.6688 23.6543C13.6062 23.0247 16.104 22.213 18.7838 21.3426C17.9102 18.6527 17.0979 16.153 16.4724 14.2279L9.35645 16.5406L11.6688 23.6543Z" fill="#248C73" />
                    <path d="M26.6586 18.7839L33.7739 16.4718C33.0032 14.0998 32.2325 11.7278 31.4617 9.35587L24.3462 11.6686L26.6586 18.7839Z" fill="#62803A" />
                  </svg>

                  <div class="ml-3">
                    <h5 class="mb-0">Slack</h5>
                    <span>Communication</span>
                  </div>
                </a>
              </div>
              <div class="col-sm-6" data-aos="fade-left" data-aos-delay="400">
                <a href="#" class="card card-sm card-body flex-row align-items-center hover-shadow-3d">
                  <svg class="" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M43.3125 0H4.6875C2.09867 0 0 2.09867 0 4.6875V43.3125C0 45.9013 2.09867 48 4.6875 48H43.3125C45.9013 48 48 45.9013 48 43.3125V4.6875C48 2.09867 45.9013 0 43.3125 0Z" fill="#0091E6" />
                    <path d="M39.51 6.24002H29.37C28.1274 6.24002 27.12 7.24738 27.12 8.49002V24.99C27.12 26.2327 28.1274 27.24 29.37 27.24H39.51C40.7526 27.24 41.76 26.2327 41.76 24.99V8.49002C41.76 7.24738 40.7526 6.24002 39.51 6.24002Z" fill="white" />
                    <path d="M18.63 6.24002H8.48999C7.24735 6.24002 6.23999 7.24738 6.23999 8.49002V36.99C6.23999 38.2327 7.24735 39.24 8.48999 39.24H18.63C19.8726 39.24 20.88 38.2327 20.88 36.99V8.49002C20.88 7.24738 19.8726 6.24002 18.63 6.24002Z" fill="white" />
                  </svg>

                  <div class="ml-3">
                    <h5 class="mb-0">Trello</h5>
                    <span>Productivity</span>
                  </div>
                </a>
              </div>
            </div>
            <a href="#" class="hover-arrow">View all Integrations</a>
          </div>
        </div>
      </div>
    </section>
    <section class="has-divider bg-primary-alt">
      <div class="container pt-5">
        <div class="row justify-content-between align-items-center o-hidden">
          <div class="col-md-6 col-lg-5">
            <div class="d-flex mb-4" data-aos="fade-up" data-aos-delay="500">
              <div class="process-circle bg-primary"></div>
              <div class="ml-3">
                <h5>1. Purchase a license</h5>
                <p>
                  Voluptatem accusantium doloremque laudantium, totam rem aperiam.
                </p>
              </div>
            </div>
            <div class="d-flex mb-4" data-aos="fade-up" data-aos-delay="1000">
              <div class="process-circle bg-primary"></div>
              <div class="ml-3">
                <h5>2. Build stunning sites</h5>
                <p>
                  Voluptatem accusantium doloremque laudantium, totam rem aperiam.
                </p>
              </div>
            </div>
            <div class="d-flex mb-4" data-aos="fade-up" data-aos-delay="1500">
              <div class="process-circle bg-primary"></div>
              <div class="ml-3">
                <h5>3. Deploy and make money</h5>
                <p>
                  Voluptatem accusantium doloremque laudantium, totam rem aperiam.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <img src="/assets/img/saas-4.svg" alt="Image">
          </div>
        </div>
      </div>
      <div class="divider">
        <svg width="100%" height="100%" version="1.1" viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none">
          <path d="M0,0 C6.83050094,50 15.1638343,75 25,75 C41.4957514,75 62.4956597,0 81.2456597,0 C93.7456597,0 99.9971065,0 100,0 L100,100 L0,100" fill="#ffffff"></path>
        </svg>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-xl-8 col-lg-9">
            <h2 class="display-4 mx-xl-6">How we stack up</h2>
            <p class="lead">
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.
            </p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-10" data-aos="fade-up">
            <table class="table pricing-table pricing-table-competitors">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col" class="bg-primary-alt">
                    <img src="/assets/img/logo.svg" alt="Image">
                  </th>
                  <th scope="col">
                    <img src="/assets/img/dropbox.svg" alt="Image">
                  </th>
                  <th scope="col">
                    <img src="/assets/img/invision.svg" alt="Image">
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    <span class="h6 mb-0 d-block">Integrations</span>
                    <span class="text-small text-muted"></span>
                  </th>
                  <td class="bg-primary-alt">
                    <div class="icon-round icon-round-xs bg-success">
                      <svg class="icon bg-light" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.1206 5.4111C18.5021 4.92016 19.1753 4.86046 19.6241 5.27776C20.073 5.69506 20.1276 6.43133 19.746 6.92227L10.6794 18.5889C10.2919 19.0876 9.60523 19.1401 9.15801 18.7053L4.35802 14.0386C3.91772 13.6106 3.87806 12.8732 4.26944 12.3916C4.66082 11.91 5.33503 11.8666 5.77533 12.2947L9.76023 16.1689L18.1206 5.4111Z"
                        fill="#212529" />
                      </svg>

                    </div>
                  </td>
                  <td>
                    <div class="icon-round icon-round-xs bg-primary-3-alt">
                      <svg class="icon bg-primary-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.1206 5.4111C18.5021 4.92016 19.1753 4.86046 19.6241 5.27776C20.073 5.69506 20.1276 6.43133 19.746 6.92227L10.6794 18.5889C10.2919 19.0876 9.60523 19.1401 9.15801 18.7053L4.35802 14.0386C3.91772 13.6106 3.87806 12.8732 4.26944 12.3916C4.66082 11.91 5.33503 11.8666 5.77533 12.2947L9.76023 16.1689L18.1206 5.4111Z"
                        fill="#212529" />
                      </svg>

                    </div>
                  </td>
                  <td>
                    <div class="icon-round icon-round-xs bg-primary-3-alt">
                      <svg class="icon bg-primary-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.1206 5.4111C18.5021 4.92016 19.1753 4.86046 19.6241 5.27776C20.073 5.69506 20.1276 6.43133 19.746 6.92227L10.6794 18.5889C10.2919 19.0876 9.60523 19.1401 9.15801 18.7053L4.35802 14.0386C3.91772 13.6106 3.87806 12.8732 4.26944 12.3916C4.66082 11.91 5.33503 11.8666 5.77533 12.2947L9.76023 16.1689L18.1206 5.4111Z"
                        fill="#212529" />
                      </svg>

                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <span class="h6 mb-0 d-block">Segmentation</span>
                    <span class="text-small text-muted"></span>
                  </th>
                  <td class="bg-primary-alt">
                    <div class="icon-round icon-round-xs bg-success">
                      <svg class="icon bg-light" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.1206 5.4111C18.5021 4.92016 19.1753 4.86046 19.6241 5.27776C20.073 5.69506 20.1276 6.43133 19.746 6.92227L10.6794 18.5889C10.2919 19.0876 9.60523 19.1401 9.15801 18.7053L4.35802 14.0386C3.91772 13.6106 3.87806 12.8732 4.26944 12.3916C4.66082 11.91 5.33503 11.8666 5.77533 12.2947L9.76023 16.1689L18.1206 5.4111Z"
                        fill="#212529" />
                      </svg>

                    </div>
                  </td>
                  <td>
                    <div class="icon-round icon-round-xs bg-primary-3-alt">
                      <svg class="icon bg-primary-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.1206 5.4111C18.5021 4.92016 19.1753 4.86046 19.6241 5.27776C20.073 5.69506 20.1276 6.43133 19.746 6.92227L10.6794 18.5889C10.2919 19.0876 9.60523 19.1401 9.15801 18.7053L4.35802 14.0386C3.91772 13.6106 3.87806 12.8732 4.26944 12.3916C4.66082 11.91 5.33503 11.8666 5.77533 12.2947L9.76023 16.1689L18.1206 5.4111Z"
                        fill="#212529" />
                      </svg>

                    </div>
                  </td>
                  <td>
                    <div class="icon-round icon-round-xs bg-primary-3-alt">
                      <svg class="icon bg-primary-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.1206 5.4111C18.5021 4.92016 19.1753 4.86046 19.6241 5.27776C20.073 5.69506 20.1276 6.43133 19.746 6.92227L10.6794 18.5889C10.2919 19.0876 9.60523 19.1401 9.15801 18.7053L4.35802 14.0386C3.91772 13.6106 3.87806 12.8732 4.26944 12.3916C4.66082 11.91 5.33503 11.8666 5.77533 12.2947L9.76023 16.1689L18.1206 5.4111Z"
                        fill="#212529" />
                      </svg>

                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <span class="h6 mb-0 d-block">White Labelling</span>
                    <span class="text-small text-muted"></span>
                  </th>
                  <td class="bg-primary-alt">
                    <div class="icon-round icon-round-xs bg-success">
                      <svg class="icon bg-light" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.1206 5.4111C18.5021 4.92016 19.1753 4.86046 19.6241 5.27776C20.073 5.69506 20.1276 6.43133 19.746 6.92227L10.6794 18.5889C10.2919 19.0876 9.60523 19.1401 9.15801 18.7053L4.35802 14.0386C3.91772 13.6106 3.87806 12.8732 4.26944 12.3916C4.66082 11.91 5.33503 11.8666 5.77533 12.2947L9.76023 16.1689L18.1206 5.4111Z"
                        fill="#212529" />
                      </svg>

                    </div>
                  </td>
                  <td>
                    <div class="icon-round icon-round-xs bg-primary-3-alt">
                      <svg class="icon bg-primary-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.1206 5.4111C18.5021 4.92016 19.1753 4.86046 19.6241 5.27776C20.073 5.69506 20.1276 6.43133 19.746 6.92227L10.6794 18.5889C10.2919 19.0876 9.60523 19.1401 9.15801 18.7053L4.35802 14.0386C3.91772 13.6106 3.87806 12.8732 4.26944 12.3916C4.66082 11.91 5.33503 11.8666 5.77533 12.2947L9.76023 16.1689L18.1206 5.4111Z"
                        fill="#212529" />
                      </svg>

                    </div>
                  </td>
                  <td>
                    <div class="icon-round icon-round-xs bg-primary-3-alt">
                      <svg class="icon bg-primary-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.1206 5.4111C18.5021 4.92016 19.1753 4.86046 19.6241 5.27776C20.073 5.69506 20.1276 6.43133 19.746 6.92227L10.6794 18.5889C10.2919 19.0876 9.60523 19.1401 9.15801 18.7053L4.35802 14.0386C3.91772 13.6106 3.87806 12.8732 4.26944 12.3916C4.66082 11.91 5.33503 11.8666 5.77533 12.2947L9.76023 16.1689L18.1206 5.4111Z"
                        fill="#212529" />
                      </svg>

                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <span class="h6 mb-0 d-block">Document Signing</span>
                    <span class="text-small text-muted"></span>
                  </th>
                  <td class="bg-primary-alt">
                    <div class="icon-round icon-round-xs bg-success">
                      <svg class="icon bg-light" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.1206 5.4111C18.5021 4.92016 19.1753 4.86046 19.6241 5.27776C20.073 5.69506 20.1276 6.43133 19.746 6.92227L10.6794 18.5889C10.2919 19.0876 9.60523 19.1401 9.15801 18.7053L4.35802 14.0386C3.91772 13.6106 3.87806 12.8732 4.26944 12.3916C4.66082 11.91 5.33503 11.8666 5.77533 12.2947L9.76023 16.1689L18.1206 5.4111Z"
                        fill="#212529" />
                      </svg>

                    </div>
                  </td>
                  <td>
                    <div class="icon-round icon-round-xs bg-primary-3-alt">
                      <svg class="icon bg-primary-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.1206 5.4111C18.5021 4.92016 19.1753 4.86046 19.6241 5.27776C20.073 5.69506 20.1276 6.43133 19.746 6.92227L10.6794 18.5889C10.2919 19.0876 9.60523 19.1401 9.15801 18.7053L4.35802 14.0386C3.91772 13.6106 3.87806 12.8732 4.26944 12.3916C4.66082 11.91 5.33503 11.8666 5.77533 12.2947L9.76023 16.1689L18.1206 5.4111Z"
                        fill="#212529" />
                      </svg>

                    </div>
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">
                    <span class="h6 mb-0 d-block">Personalised Support</span>
                    <span class="text-small text-muted"></span>
                  </th>
                  <td class="bg-primary-alt">
                    <div class="icon-round icon-round-xs bg-success">
                      <svg class="icon bg-light" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.1206 5.4111C18.5021 4.92016 19.1753 4.86046 19.6241 5.27776C20.073 5.69506 20.1276 6.43133 19.746 6.92227L10.6794 18.5889C10.2919 19.0876 9.60523 19.1401 9.15801 18.7053L4.35802 14.0386C3.91772 13.6106 3.87806 12.8732 4.26944 12.3916C4.66082 11.91 5.33503 11.8666 5.77533 12.2947L9.76023 16.1689L18.1206 5.4111Z"
                        fill="#212529" />
                      </svg>

                    </div>
                  </td>
                  <td></td>
                  <td>
                    <div class="icon-round icon-round-xs bg-primary-3-alt">
                      <svg class="icon bg-primary-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.1206 5.4111C18.5021 4.92016 19.1753 4.86046 19.6241 5.27776C20.073 5.69506 20.1276 6.43133 19.746 6.92227L10.6794 18.5889C10.2919 19.0876 9.60523 19.1401 9.15801 18.7053L4.35802 14.0386C3.91772 13.6106 3.87806 12.8732 4.26944 12.3916C4.66082 11.91 5.33503 11.8666 5.77533 12.2947L9.76023 16.1689L18.1206 5.4111Z"
                        fill="#212529" />
                      </svg>

                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <span class="h6 mb-0 d-block">Storage</span>
                    <span class="text-small text-muted"></span>
                  </th>
                  <td class="bg-primary-alt">
                    <div class="icon-round icon-round-xs bg-success">
                      <svg class="icon bg-light" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.1206 5.4111C18.5021 4.92016 19.1753 4.86046 19.6241 5.27776C20.073 5.69506 20.1276 6.43133 19.746 6.92227L10.6794 18.5889C10.2919 19.0876 9.60523 19.1401 9.15801 18.7053L4.35802 14.0386C3.91772 13.6106 3.87806 12.8732 4.26944 12.3916C4.66082 11.91 5.33503 11.8666 5.77533 12.2947L9.76023 16.1689L18.1206 5.4111Z"
                        fill="#212529" />
                      </svg>

                    </div>
                  </td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">
                    <span class="h6 mb-0 d-block">Funnels</span>
                    <span class="text-small text-muted"></span>
                  </th>
                  <td class="bg-primary-alt">
                    <div class="icon-round icon-round-xs bg-success">
                      <svg class="icon bg-light" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.1206 5.4111C18.5021 4.92016 19.1753 4.86046 19.6241 5.27776C20.073 5.69506 20.1276 6.43133 19.746 6.92227L10.6794 18.5889C10.2919 19.0876 9.60523 19.1401 9.15801 18.7053L4.35802 14.0386C3.91772 13.6106 3.87806 12.8732 4.26944 12.3916C4.66082 11.91 5.33503 11.8666 5.77533 12.2947L9.76023 16.1689L18.1206 5.4111Z"
                        fill="#212529" />
                      </svg>

                    </div>
                  </td>
                  <td>
                    <div class="icon-round icon-round-xs bg-primary-3-alt">
                      <svg class="icon bg-primary-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.1206 5.4111C18.5021 4.92016 19.1753 4.86046 19.6241 5.27776C20.073 5.69506 20.1276 6.43133 19.746 6.92227L10.6794 18.5889C10.2919 19.0876 9.60523 19.1401 9.15801 18.7053L4.35802 14.0386C3.91772 13.6106 3.87806 12.8732 4.26944 12.3916C4.66082 11.91 5.33503 11.8666 5.77533 12.2947L9.76023 16.1689L18.1206 5.4111Z"
                        fill="#212529" />
                      </svg>

                    </div>
                  </td>
                  <td></td>
                </tr>
              </tbody>
            </table>
            <div class="text-right">
              <a href="#" class="hover-arrow">Explore all features</a>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mt-6">
          <div class="col-xl-7 col-lg-8 col-md-10">
            <div data-flickity='{ "imagesLoaded": true, "wrapAround": true }'>
              <div class="carousel-cell mx-md-4">
                <div class="card card-body flex-row py-4">
                  <img src="/assets/img/avatars/male-2.jpg" alt="Avatar" class="avatar avatar-lg">
                  <div class="ml-3">
                    <h4>
                      &ldquo;The team were only too happy to help me getting started.&rdquo;
                    </h4>
                    <div class="avatar-author d-block">
                      <h6>Anil Kumar</h6>
                      <span>Designer</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-cell mx-md-4">
                <div class="card card-body flex-row py-4">
                  <img src="/assets/img/avatars/male-1.jpg" alt="Avatar" class="avatar avatar-lg">
                  <div class="ml-3">
                    <h4>
                      &ldquo;Once again, my expectations have been surpassed – Bravo!&rdquo;
                    </h4>
                    <div class="avatar-author d-block">
                      <h6>Benjamin Cameronr</h6>
                      <span>Designer</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-cell mx-md-4">
                <div class="card card-body flex-row py-4">
                  <img src="/assets/img/avatars/female-4.jpg" alt="Avatar" class="avatar avatar-lg">
                  <div class="ml-3">
                    <h4>
                      &ldquo;What usually takes at least 2 or 3 weeks was reduced to 4 days.&rdquo;
                    </h4>
                    <div class="avatar-author d-block">
                      <h6>Annabelle Porter</h6>
                      <span>Designer</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="p-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-7 col-md-8 mb-lg-n7 layer-2">
            <img src="/assets/img/saas-1.svg" alt="Image" data-aos="fade-up">
          </div>
        </div>
      </div>
    </section>
    <section class="bg-primary text-light has-divider">
      <div class="divider flip-y">
        <svg width="100%" height="100%" version="1.1" viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none">
          <path d="M0,0 C6.83050094,50 15.1638343,75 25,75 C41.4957514,75 62.4956597,0 81.2456597,0 C93.7456597,0 99.9971065,0 100,0 L100,100 L0,100" fill="#ffffff"></path>
        </svg>
      </div>
      <div class="container">
        <div class="row justify-content-center mb-0 mb-md-3">
          <div class="col-xl-6 col-lg-8 col-md-10 text-center">
            <h3 class="h1">Power your team with Leap</h3>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-xl-6 col-lg-7 col-md-9">
            <form class="d-md-flex mb-3 justify-content-center">
              <input type="email" class="mx-1 mb-2 mb-md-0 form-control form-control-lg" placeholder="Email Address">
              <button class="mx-1 btn btn-primary-3 btn-lg" type="submit">Get Started</button>
            </form>
            <div class="text-small text-muted mx-xl-6">
              Add some helper text here to explain the fine print details of your product or service.
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="pb-4 bg-primary-3 text-light" id="footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col">
            <div class="card card-body border-0 o-hidden mb-0 bg-primary text-light">
              <div class="position-relative d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="h3 text-center mb-md-0">Start building beautiful websites</div>
                <a href="#" class="btn btn-lg btn-white">
      Purchase Now
    </a>
              </div>
              <div class="decoration layer-0">
                <svg class="bg-primary-2" width="338" height="277" viewBox="0 0 338 277" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M136.018 0.775024C143.338 0.998024 150.311 2.86002 157.217 4.90402C161.951 6.30502 166.533 8.21602 171.238 9.72702C177.683 11.799 184.205 13.642 190.654 15.704C198.047 18.067 205.496 20.302 212.734 23.077C219.181 25.549 225.818 26.16 232.576 26.624C242.613 27.313 252.408 29.541 262.14 31.958C267.613 33.318 273.015 35.013 278.376 36.777C286.159 39.338 292.769 43.771 298.435 49.705C300.869 52.253 303.482 54.662 306.224 56.875C310.91 60.658 314.185 65.568 317.597 70.391C317.999 70.957 318.31 71.699 318.861 72.031C323.925 75.085 326.72 80.024 329.47 84.928C331.605 88.738 333.45 92.72 335.236 96.711C335.974 98.361 336.533 100.215 336.629 102.006C336.979 108.465 337.936 114.881 337.352 121.411C336.889 126.604 336.916 131.868 337.11 137.086C337.676 152.284 335.641 167.235 333.401 182.2C331.815 192.802 330.878 203.502 329.278 214.101C328.417 219.807 327.28 225.578 325.321 230.976C323.759 235.279 321.196 239.409 318.317 243.006C311.585 251.42 303.104 257.68 292.893 261.414C288.381 263.064 283.952 265.016 279.332 266.275C273.076 267.98 266.711 269.338 260.33 270.509C250.605 272.292 240.844 273.878 231.07 275.381C220.672 276.98 210.306 277.306 199.939 274.719C194.33 273.32 188.527 272.723 182.869 271.504C166.828 268.049 151.043 263.651 135.754 257.669C130.918 255.776 126.25 253.478 122.199 249.956C118.49 246.731 113.928 244.469 110.316 241.155C103.357 234.766 96.6579 228.074 90.1249 221.245C84.3729 215.231 79.0449 208.814 73.4259 202.671C71.6229 200.7 69.3989 199.121 67.5219 197.212C61.8789 191.478 56.3579 185.624 50.6959 179.909C48.0139 177.202 45.0629 174.763 42.3439 172.091C39.7309 169.523 37.2799 166.791 34.7229 164.164C30.1899 159.507 25.8419 154.642 21.0319 150.288C14.4459 144.325 9.29194 137.288 4.85794 129.733C1.90494 124.702 0.404932 119.126 0.994932 113.109C1.35393 109.453 1.56894 105.873 3.02594 102.364C4.82294 98.043 7.59594 94.544 11.0199 91.581C16.4609 86.871 22.0179 82.28 27.7129 77.881C34.4159 72.703 41.2719 67.718 48.1519 62.774C53.0819 59.232 58.3649 56.157 63.1269 52.411C72.1059 45.348 81.2339 38.467 89.4079 30.405C96.0349 23.868 102.898 17.54 110.002 11.527C115.279 7.06004 121.135 3.23104 128.049 1.65704C130.639 1.07104 133.357 1.05302 136.018 0.775024ZM19.8459 102.8C15.5139 101.001 13.7579 101.522 12.1429 105.364C13.5239 105.867 14.8829 106.363 16.5709 106.978C16.7739 105.683 16.8949 104.912 16.9929 104.287C17.9989 103.763 18.9229 103.281 19.8479 102.799C21.2859 101.622 23.0749 100.717 23.4099 98.469C20.4119 98.883 20.4119 98.883 19.8459 102.8ZM118.352 15.815C117.153 17.925 116.342 19.402 117.231 21.328C119.746 19.487 119.773 19.382 118.352 15.815ZM36.2909 86.69C35.4119 88.799 34.8089 90.248 34.0939 91.961C37.8889 90.785 37.8889 90.785 36.2909 86.69ZM129.395 162.873C128.641 162.383 128.006 161.799 127.858 161.903C127.292 162.306 126.881 162.927 126.413 163.468C126.843 163.712 127.337 164.224 127.684 164.138C128.211 164.009 128.639 163.465 129.395 162.873ZM137.797 163.645C137.248 164.305 136.658 164.709 136.697 165.036C136.763 165.591 137.228 166.097 137.525 166.623C137.986 166.255 138.761 165.928 138.818 165.505C138.881 165.033 138.287 164.477 137.797 163.645ZM137.221 207.492C137.242 207.855 137.264 208.219 137.285 208.582C138.129 208.456 138.973 208.33 139.816 208.205C139.787 207.967 139.757 207.73 139.73 207.492C138.895 207.492 138.057 207.492 137.221 207.492ZM110.674 30.56C110.768 30.297 110.862 30.035 110.957 29.772C110.123 29.451 109.291 29.13 108.457 28.809C108.357 29.097 108.256 29.386 108.154 29.674C108.994 29.969 109.834 30.265 110.674 30.56ZM116.773 160.416C116.58 160.891 116.285 161.258 116.357 161.528C116.435 161.827 116.851 162.037 117.121 162.285C117.336 161.902 117.652 161.535 117.713 161.129C117.736 160.968 117.193 160.722 116.773 160.416ZM124.658 162.574C123.793 162.347 123.324 162.142 122.863 162.152C122.707 162.156 122.562 162.708 122.414 163.009C122.768 163.15 123.127 163.408 123.473 163.392C123.754 163.381 124.02 163.036 124.658 162.574ZM133.973 165.672C133.819 165.484 133.664 165.297 133.51 165.11C133.348 165.387 133.151 165.654 133.059 165.954C133.039 166.011 133.434 166.196 133.637 166.322C133.748 166.105 133.861 165.89 133.973 165.672ZM115.15 24.039C114.955 23.876 114.759 23.714 114.566 23.552C114.468 23.778 114.254 24.034 114.302 24.223C114.353 24.418 114.656 24.549 114.849 24.708C114.949 24.486 115.051 24.263 115.15 24.039Z"
                  fill="black" />
                </svg>

              </div>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-6 col-lg-3 col-xl-2">
            <h5>Navigate</h5>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a href="#" class="nav-link">Demos</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Pages</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Blog</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Portfolio</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Elements</a>
              </li>
            </ul>
          </div>
          <div class="col-6 col-lg">
            <h5>Contact</h5>
            <ul class="list-unstyled">
              <li class="mb-3 d-flex">
                <svg class="icon" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>Icon For Marker#1</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect opacity="0" x="0" y="0" width="24" height="24"></rect>
                    <path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z"
                    fill="#000000" fill-rule="nonzero"></path>
                  </g>
                </svg>
                <div class="ml-3">
                  <span>348 Greenpoint Avenue
                    <br />Brooklyn, NY</span>
                </div>
              </li>
              <li class="mb-3 d-flex">
                <svg class="icon" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>Icon For Call#1</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect opacity="0" x="0" y="0" width="24" height="24"></rect>
                    <path d="M11.914857,14.1427403 L14.1188827,11.9387145 C14.7276032,11.329994 14.8785122,10.4000511 14.4935235,9.63007378 L14.3686433,9.38031323 C13.9836546,8.61033591 14.1345636,7.680393 14.7432841,7.07167248 L17.4760882,4.33886839 C17.6713503,4.14360624 17.9879328,4.14360624 18.183195,4.33886839 C18.2211956,4.37686904 18.2528214,4.42074752 18.2768552,4.46881498 L19.3808309,6.67676638 C20.2253855,8.3658756 19.8943345,10.4059034 18.5589765,11.7412615 L12.560151,17.740087 C11.1066115,19.1936265 8.95659008,19.7011777 7.00646221,19.0511351 L4.5919826,18.2463085 C4.33001094,18.1589846 4.18843095,17.8758246 4.27575484,17.613853 C4.30030124,17.5402138 4.34165566,17.4733009 4.39654309,17.4184135 L7.04781491,14.7671417 C7.65653544,14.1584211 8.58647835,14.0075122 9.35645567,14.3925008 L9.60621621,14.5173811 C10.3761935,14.9023698 11.3061364,14.7514608 11.914857,14.1427403 Z"
                    fill="#000000"></path>
                  </g>
                </svg>
                <div class="ml-3">
                  <span>+61 3928 3324</span>
                  <span class="d-block text-muted text-small">Mon - Fri 9am - 5pm</span>
                </div>
              </li>
              <li class="mb-3 d-flex">
                <svg class="icon" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>Icon For Mail</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect opacity="0" x="0" y="0" width="24" height="24"></rect>
                    <path d="M5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                    fill="#000000"></path>
                  </g>
                </svg>
                <div class="ml-3">
                  <a href="#">hello@company.io</a>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-lg-5 col-xl-4 mt-3 mt-lg-0">
            <h5>Subscribe</h5>
            <p>The latest Leap news, articles, and resources, sent straight to your inbox every month.</p>
            <form action="https://mailform.mediumra.re/leap/mailchimp.php" data-form-email novalidate>
              <div class="form-row">
                <div class="col-12">
                  <input type="email" class="form-control mb-2" placeholder="Email Address" name="email" required>
                </div>
                <div class="col-12">
                  <div class="d-none alert alert-success" role="alert" data-success-message>
                    Thanks, a member of our team will be in touch shortly.
                  </div>
                  <div class="d-none alert alert-danger" role="alert" data-error-message>
                    Please fill all fields correctly.
                  </div>
                  <div data-recaptcha data-sitekey="6Lemz4gUAAAAAElq4ZHFBzI7j8QUiYMn9I0mzQWG" data-size="invisible" data-badge="bottomleft">
                  </div>
                  <button type="submit" class="btn btn-primary btn-loading btn-block" data-loading-text="Sending">
                    <svg class="icon" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <title>Icon For Loading</title>
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g>
                          <polygon points="0 0 24 0 24 24 0 24" opacity="0"></polygon>
                        </g>
                        <path d="M12,4 L12,6 C8.6862915,6 6,8.6862915 6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,10.9603196 17.7360885,9.96126435 17.2402578,9.07513926 L18.9856052,8.09853149 C19.6473536,9.28117708 20,10.6161442 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 C4,7.581722 7.581722,4 12,4 Z"
                        fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 12.000000) scale(-1, 1) translate(-12.000000, -12.000000) "></path>
                      </g>
                    </svg>
                    <span>Subscribe</span>
                  </button>
                </div>
              </div>
            </form>
            <small class="text-muted form-text">We’ll never share your details. See our <a href="#">Privacy Policy</a>
            </small>

          </div>
        </div>
        <div class="row justify-content-center mb-2">
          <div class="col-auto">
            <ul class="nav">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <svg class="icon undefined" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <title>Instagram icon</title>
                    <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                    />
                  </svg>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <svg class="icon undefined" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <title>Twitter icon</title>
                    <path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"
                    />
                  </svg>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <svg class="icon undefined" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <title>YouTube icon</title>
                    <path class="a" d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"
                    />
                  </svg>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <svg class="icon undefined" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <title>Medium icon</title>
                    <path d="M0 0v24h24V0H0zm19.938 5.686L18.651 6.92a.376.376 0 0 0-.143.362v9.067a.376.376 0 0 0 .143.361l1.257 1.234v.271h-6.322v-.27l1.302-1.265c.128-.128.128-.165.128-.36V8.99l-3.62 9.195h-.49L6.69 8.99v6.163a.85.85 0 0 0 .233.707l1.694 2.054v.271H3.815v-.27L5.51 15.86a.82.82 0 0 0 .218-.707V8.027a.624.624 0 0 0-.203-.527L4.019 5.686v-.27h4.674l3.613 7.923 3.176-7.924h4.456v.271z"
                    />
                  </svg>

                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <svg class="icon undefined" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <title>Facebook icon</title>
                    <path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.689v-3.621h3.129V8.41c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63H16.56V24h6.115c.733 0 1.325-.592 1.325-1.324V1.324C24 .593 23.408 0 22.676 0"
                    />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col col-md-auto text-center">
            <small class="text-muted">&copy;2019 This page is protected by reCAPTCHA and is subject to the Google <a href="https://www.google.com/policies/privacy/">Privacy Policy</a> and <a href="https://policies.google.com/terms">Terms of Service.</a>
            </small>
          </div>
        </div>
      </div>
    </footer>
    <a href="#" class="btn back-to-top btn-primary btn-round" data-smooth-scroll data-aos="fade-up" data-aos-anchor="section:last-of-type" data-aos-mirror="true" data-aos-once="false">
      <svg class="icon" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>Icon For Arrow-up</title>
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <polygon points="0 0 24 0 24 24 0 24" opacity="0"></polygon>
          <rect fill="#000000" x="11" y="5" width="2" height="14" rx="1"></rect>
          <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
          fill="#000000" fill-rule="nonzero"></path>
        </g>
      </svg>
    </a>
    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="../code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script type="text/javascript" src="../cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- 
             This appears in the demo only.  This script ensures our demo countdowns are always showing a date in the future 
             by altering the date before the countdown is initialized 
        -->
    <script type="text/javascript">
      (($) => {
            var now             = new Date;
            var day             = 864e5;
            var weeksToAdd      = 2;
            var tenWeeksFromNow = new Date(+now + day * 7 * weeksToAdd).toISOString().slice(0,10).replace(/\-/g, 'index.html');
            $('[data-countdown-date].add-countdown-time').attr('data-countdown-date', tenWeeksFromNow);
          })(jQuery);
    </script>

    <!-- Optional Vendor Scripts (Remove the plugin script if current page does not use that feature) -->

    <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
    <script type="text/javascript" src="../unpkg.com/aos%402.3.4/dist/aos.js"></script>
    <!-- Clipboard (copies content from browser into OS clipboard) -->
    <script type="text/javascript" src="../unpkg.com/clipboard%402.0.4/dist/clipboard.min.js"></script>
    <!-- Fancybox (handles image and video lightbox and galleries) -->
    <script type="text/javascript" src="../unpkg.com/%40fancyapps/fancybox%403.5.6/dist/jquery.fancybox.min.js"></script>
    <!-- Flickity (handles touch enabled carousels and sliders) -->
    <script type="text/javascript" src="../unpkg.com/flickity%402.2.0/dist/flickity.pkgd.min.js"></script>
    <!-- Ion rangeSlider (flexible and pretty range slider elements) -->
    <script type="text/javascript" src="../unpkg.com/ion-rangeslider%402.3.0/js/ion.rangeSlider.js"></script>
    <!-- Isotope (masonry layouts and filtering) -->
    <script type="text/javascript" src="../unpkg.com/isotope-layout%403.0.6/dist/isotope.pkgd.min.js"></script>
    <!-- jarallax (parallax effect and video backgrounds) -->
    <script type="text/javascript" src="../unpkg.com/jarallax%401.10.7/dist/jarallax.min.js"></script>
    <script type="text/javascript" src="../unpkg.com/jarallax%401.10.7/dist/jarallax-video.min.js"></script>
    <script type="text/javascript" src="../unpkg.com/jarallax%401.10.7/dist/jarallax-element.min.js"></script>
    <!-- jQuery Countdown (displays countdown text to a specified date) -->
    <script type="text/javascript" src="../unpkg.com/jquery-countdown%402.2.0/dist/jquery.countdown.min.js"></script>
    <!-- Plyr (unified player for Video, Audio, Vimeo and Youtube) -->
    <script type="text/javascript" src="../unpkg.com/plyr%403.5.2/dist/plyr.polyfilled.min.js"></script>
    <!-- Prism (displays formatted code boxes) -->
    <script type="text/javascript" src="../unpkg.com/prismjs%401.15.0/prism.js"></script>
    <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
    <script type="text/javascript" src="../unpkg.com/scrollmonitor%401.2.4/scrollMonitor.js"></script>
    <!-- Smooth scroll (animation to links in-page)-->
    <script type="text/javascript" src="../unpkg.com/smooth-scroll%4015.0.0/dist/smooth-scroll.polyfills.min.js"></script>
    <!-- TwitterFetcher (displays a feed of tweets from a specified account)-->
    <script type="text/javascript" src="../unpkg.com/twitter-fetcher%4018.0.2/js/twitterFetcher_min.js"></script>
    <!-- Typed text (animated typing effect)-->
    <script type="text/javascript" src="../unpkg.com/typed.js%402.0.10/lib/typed.min.js"></script>
    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="/assets/js/theme.js"></script>

    <script type="text/javascript">
      // This script appears only in the demo - it disables forms with no action attribute to prevent 
      // navigating away from the page.
      jQuery("form:not([action])").on('submit', function(){return false;});
    </script>

  </body>


<!-- Mirrored from leap.mediumra.re/home-saas.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Mar 2019 06:08:31 GMT -->
</html>
