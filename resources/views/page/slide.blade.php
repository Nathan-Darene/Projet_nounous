<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="favicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fashion Slider</title>
  <script type="module" crossorigin src="{{asset('index.ff8f4572.js')}}"></script>
  <link rel="modulepreload" href="{{asset('js/vendor.688a9bfa.js')}}">
  <link rel="stylesheet" href="{/*{asset('css/index.fca86069.css')}}">
</head>

<body>
  <div id="app">
    <!-- Fashion slider container -->
    <div class="fashion-slider">
      <div class="swiper">
        <div class="swiper-wrapper">
          <!-- configure slide color with "data-slide-bg-color" attribute -->
          <div class="swiper-slide" data-slide-bg-color="#9FA051">
            <!-- slide title wrap -->
            <div class="fashion-slider-title" data-swiper-parallax="-130%">
              <!-- slide title text -->
              <div class="fashion-slider-title-text">Nike</div>
            </div>
            <!-- slide image wrap -->
            <div class="fashion-slider-scale">
              <!-- slide image -->
              <img src="img/nike.jpg">
            </div>
          </div>
          <!-- configure slide color with "data-slide-bg-color" attribute -->
          <div class="swiper-slide" data-slide-bg-color="#9B89C5">
            <!-- slide title wrap -->
            <div class="fashion-slider-title" data-swiper-parallax="-130%">
              <!-- slide title text -->
              <div class="fashion-slider-title-text">Puma</div>
            </div>
            <!-- slide image wrap -->
            <div class="fashion-slider-scale">
              <!-- slide image -->
              <img src="img/puma.jpg">
            </div>
          </div>
          <!-- configure slide color with "data-slide-bg-color" attribute -->
          <div class="swiper-slide" data-slide-bg-color="#D7A594">
            <!-- slide title wrap -->
            <div class="fashion-slider-title" data-swiper-parallax="-130%">
              <!-- slide title text -->
              <div class="fashion-slider-title-text">Yeeze</div>
            </div>
            <!-- slide image wrap -->
            <div class="fashion-slider-scale">
              <!-- slide image -->
              <img src="img/yeeze.jpg">
            </div>
          </div>
        </div>
        <!-- right/next navigation button -->
        <div class="fashion-slider-button-prev fashion-slider-button">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 350 160 90">
            <g class="fashion-slider-svg-wrap">
              <g class="fashion-slider-svg-circle-wrap">
                <circle cx="42" cy="42" r="40"></circle>
              </g>
              <path class="fashion-slider-svg-arrow" d="M.983,6.929,4.447,3.464.983,0,0,.983,2.482,3.464,0,5.946Z">
              </path>
              <path class="fashion-slider-svg-line" d="M80,0H0"></path>
            </g>
          </svg>
        </div>
        <!-- left/previous navigation button -->
        <div class="fashion-slider-button-next fashion-slider-button">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 350 160 90">
            <g class="fashion-slider-svg-wrap">
              <g class="fashion-slider-svg-circle-wrap">
                <circle cx="42" cy="42" r="40"></circle>
              </g>
              <path class="fashion-slider-svg-arrow" d="M.983,6.929,4.447,3.464.983,0,0,.983,2.482,3.464,0,5.946Z">
              </path>
              <path class="fashion-slider-svg-line" d="M80,0H0"></path>
            </g>
          </svg>
        </div>
      </div>
    </div>
  </div>

<!-- Cloudflare Pages Analytics --><script defer src="{{asset('https://static.cloudflareinsights.com/beacon.min.js')}}" data-cf-beacon='{"token": "5b8a4238551240709662b3d2e6eef8a1"}'></script><!-- Cloudflare Pages Analytics --></body>

</html>
