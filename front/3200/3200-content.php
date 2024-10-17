<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3200">
  <div class="custom-container container">
    <div class="heading">
      <h2>From Our Blog</h2>
      <p class="description">Our bundles were designed to conveniently package your tanning essentials while saving you money.</p>
    </div>
  </div>
  <!-- Slider main container -->
  <div class="swiper swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper custom-swiper">
      <div class="swiper-slide custom-swiper-slider">
        <div class="custom-post post">
          <div class="cover">
            <img src="/chuyendephattrienweb1_2024/front/3200/images/blog1.jpg" alt="err">
            <div class="tag">Hair & Body</div>
          </div>
          <div class="custom-title title">Tips & Procedure To Apply Luxury Beauty Cosmetic Cream</div>
          <ul class="info">
            <li>By <a href="#">g5plusacc</a></li>
            <li><a class="date" href="#">October 1, 2021</a></li>
          </ul>
        </div>
      </div>
      <div class="swiper-slide custom-swiper-slider">
        <div class="custom-post post">
          <div class="cover">
            <img src="/chuyendephattrienweb1_2024/front/3200/images/blog2.jpg" alt="err">
            <div class="tag">Tips</div>
          </div>
          <div class="custom-title title">The Best Way To Select Good High-End Cosmetic Products</div>
          <ul class="info">
            <li>By <a href="#">g5plusacc</a></li>
            <li><a class="date" href="#">October 1, 2021</a></li>
          </ul>
        </div>
      </div>
      <div class="swiper-slide custom-swiper-slider">
        <div class="custom-post post">
          <div class="cover">
            <img src="/chuyendephattrienweb1_2024/front/3200/images/blog3.jpg" alt="err">
            <div class="tag">Skin Care</div>
          </div>
          <div class="custom-title title">Lightweight Makeup To Enhance Your Natural Beauty</div>
          <ul class="info">
            <li>By <a href="#">g5plusacc</a></li>
            <li><a class="date" href="#">October 1, 2021</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination dot-navigation"></div>
  </div>
  
  <div id="btn">
    <a href="#">View All Posts</a>
  </div>
</div>


 