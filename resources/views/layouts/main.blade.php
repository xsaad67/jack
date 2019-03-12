<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description')">
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
    <link href="/assets/css/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="preload" as="font" href="/assets/fonts/Inter-UI-upright.var.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="/assets/fonts/Inter-UI.var.woff2" type="font/woff2" crossorigin="anonymous">

    @yield('css')
  </head>
  


  <body data-smooth-scroll-offset="73">
    
    @include('layouts.nav')
    
      @yield('content')   

    @include('layouts.footer')

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
    <script type="text/javascript" src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>

   


    <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
    {{-- <script type="text/javascript" src="//unpkg.com/aos%402.3.4/dist/aos.js"></script> --}}
    <!-- Clipboard (copies content from browser into OS clipboard) -->
    {{-- <script type="text/javascript" src="//unpkg.com/clipboard%402.0.4/dist/clipboard.min.js"></script> --}}
    <!-- Fancybox (handles image and video lightbox and galleries) -->
    {{-- <script type="text/javascript" src="//unpkg.com/%40fancyapps/fancybox%403.5.6/dist/jquery.fancybox.min.js"></script> --}}
    <!-- Flickity (handles touch enabled carousels and sliders) -->
    {{-- <script type="text/javascript" src="//unpkg.com/flickity%402.2.0/dist/flickity.pkgd.min.js"></script> --}}
    <!-- Ion rangeSlider (flexible and pretty range slider elements) -->
    {{-- <script type="text/javascript" src="//unpkg.com/ion-rangeslider%402.3.0/js/ion.rangeSlider.js"></script> --}}
    <!-- Isotope (masonry layouts and filtering) -->
    {{-- <script type="text/javascript" src="//unpkg.com/isotope-layout%403.0.6/dist/isotope.pkgd.min.js"></script> --}}
    <!-- jarallax (parallax effect and video backgrounds) -->
    {{-- <script type="text/javascript" src="//unpkg.com/jarallax%401.10.7/dist/jarallax.min.js"></script> --}}
    {{-- <script type="text/javascript" src="//unpkg.com/jarallax%401.10.7/dist/jarallax-video.min.js"></script> --}}
    {{-- <script type="text/javascript" src="//unpkg.com/jarallax%401.10.7/dist/jarallax-element.min.js"></script> --}}
    <!-- jQuery Countdown (displays countdown text to a specified date) -->
    {{-- <script type="text/javascript" src="//unpkg.com/jquery-countdown%402.2.0/dist/jquery.countdown.min.js"></script> --}}
    <!-- Plyr (unified player for Video, Audio, Vimeo and Youtube) -->
    {{-- <script type="text/javascript" src="//unpkg.com/plyr%403.5.2/dist/plyr.polyfilled.min.js"></script> --}}
    <!-- Prism (displays formatted code boxes) -->
    {{-- <script type="text/javascript" src="//unpkg.com/prismjs%401.15.0/prism.js"></script> --}}
    <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
    {{-- <script type="text/javascript" src="//unpkg.com/scrollmonitor%401.2.4/scrollMonitor.js"></script> --}}
    <!-- Smooth scroll (animation to links in-page)-->
    {{-- <script type="text/javascript" src="//unpkg.com/smooth-scroll%4015.0.0/dist/smooth-scroll.polyfills.min.js"></script> --}}
    <!-- TwitterFetcher (displays a feed of tweets from a specified account)-->
    {{-- <script type="text/javascript" src="//unpkg.com/twitter-fetcher%4018.0.2/js/twitterFetcher_min.js"></script> --}}
    <!-- Typed text (animated typing effect)-->
    {{-- <script type="text/javascript" src="//unpkg.com/typed.js%402.0.10/lib/typed.min.js"></script> --}}
    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="/assets/js/theme.js"></script>

    @yield('js')

  </body>

</html>
