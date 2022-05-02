<!-- Swiper-->
<section class="section swiper-container swiper-slider swiper-classic bg-gray-2" data-loop="true" data-autoplay="4000" data-simulate-touch="false" data-slide-effect="fade">
  <div class="swiper-wrapper">
    @for ($i = 0; $i < 3; $i++)       
    <div class="swiper-slide" data-slide-bg="images/slider-1-slide-3-1920x671.jpg">
      <div class="container">
        <div class="row">
          <div class="col-xl-5">
            <div class="swiper-slide-caption">
              <h1 data-caption-animate="fadeInUp" data-caption-delay="100">{{ ($posts->count() >= 3) ? $posts[$i]->title : ''}}</h1>
              <h4 data-caption-animate="fadeInUp" data-caption-delay="200">for soccer news, updates, <br class="d-none d-xl-block"> and game results</h4><a class="button button-primary" data-caption-animate="fadeInUp" data-caption-delay="300" href="{{ '/Blog/'.$posts[$i]->slug }}">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endfor
  </div>
  <div class="swiper-button swiper-button-prev"></div>
  <div class="swiper-button swiper-button-next"></div>
  <div class="swiper-pagination"></div>
</section>