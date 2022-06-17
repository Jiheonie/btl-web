<?php
session_start();

require_once "./includes/header.php";
require_once "./includes/helpers.php";
?>
<link rel="stylesheet" href="./style.css">


<body>
  <!-- HEADER -->
  <?php include './includes/nav.php' ?>

  <!-- HERO SECTION -->
  <div class="hero">
    <div class="hero-btns">
      <div class="hero-btn">
        Miễn phí vận chuyển cho
        <br>
        đơn hàng trên 200K
      </div>
      <div class="hero-btn">
        Miễn phí vận chuyển cho
        <br>
        đơn hàng trên 200K
      </div>
      <div class="hero-btn">
        Miễn phí vận chuyển cho
        <br>
        đơn hàng trên 200K
      </div>
    </div>
  </div>

  <!-- PRODUCT SECTION -->
  <div class="product">
    <h3 class="product__title">Cần Phải Có</h3>
    <div class="product__menu">
      <div class="product__menu-list">
        <div data-index="0" class="product__menu-item">Flashsale</div>
        <div data-index="1" class="product__menu-item">Mặc hàng ngày</div>
        <div data-index="2" class="product__menu-item">Mặc thể thao</div>
        <div data-index="3" class="product__menu-item">Quần lót nam</div>
      </div>
      <div class="product__menu-progress">
        <div class="product__menu-progress-section" style="background-color: red;"></div>
        <div class="product__menu-progress-section"></div>
        <div class="product__menu-progress-section"></div>
        <div class="product__menu-progress-section"></div>
      </div>
    </div>
    <div class="product__cards">
      <div class="product__card">
        <div class="product__card-top">
          <img class="product__card-img" src="./images/product-1.jpg" alt="">
          <div class="product__card-btn">
            <a href="#">Mua ngay</a>
          </div>
        </div>
        <h3 class="product__card-name">
          <a href="#">FLASH SALE - Quần Short nam mặc nhà Excool</a>
        </h3>
        <div class="product__card-price">
          <span class="product__card-price-item--new">84.000đ</span>
          <del class="product__card-price-item--old">64.000đ</>
        </div>
      </div>
      <div class="product__card">
        <div class="product__card-top">
          <img class="product__card-img" src="./images/product-1.jpg" alt="">
          <div class="product__card-btn">
            <a href="#">Mua ngay</a>
          </div>
        </div>
        <h3 class="product__card-name">
          <a href="#">FLASH SALE - Quần Short nam mặc nhà Excool</a>
        </h3>
        <div class="product__card-price">
          <span class="product__card-price-item--new">84.000đ</span>
          <del class="product__card-price-item--old">64.000đ</>
        </div>
      </div>
      <div class="product__card">
        <div class="product__card-top">
          <img class="product__card-img" src="./images/product-1.jpg" alt="">
          <div class="product__card-btn">
            <a href="#">Mua ngay</a>
          </div>
        </div>
        <h3 class="product__card-name">
          <a href="#">FLASH SALE - Quần Short nam mặc nhà Excool</a>
        </h3>
        <div class="product__card-price">
          <span class="product__card-price-item--new">84.000đ</span>
          <del class="product__card-price-item--old">64.000đ</>
        </div>
      </div>
      <div class="product__card">
        <div class="product__card-top">
          <img class="product__card-img" src="./images/product-1.jpg" alt="">
          <div class="product__card-btn">
            <a href="#">Mua ngay</a>
          </div>
        </div>
        <h3 class="product__card-name">
          <a href="#">FLASH SALE - Quần Short nam mặc nhà Excool</a>
        </h3>
        <div class="product__card-price">
          <span class="product__card-price-item--new">84.000đ</span>
          <del class="product__card-price-item--old">64.000đ</>
        </div>
      </div>
    </div>
  </div>

  <!-- BANNER SECTION -->
  <div class="banner">
    <div class="banner__content">
      <h3 class="banner__content-title">Dòng sản phẩm công nghệ EXCOOL</h3>
      <p class="banner__content-info">Công nghệ Việt cho người Việt</p>
      <div class="banner__content-btn">
        <a href="#">Tìm hiểu thêm</a>
      </div>
    </div>
    <div class="banner__img"></div>
  </div>

  <!-- COLLECTION SECTION -->
  <div class="collection">
    <h2 class="collection__title">Coolmate Basics</h2>
    <div class="collection__cards">
      <img src="./images/col1.png" alt="" class="collection__card">
      <img src="./images/col2.png" alt="" class="collection__card">
      <img src="./images/col3.png" alt="" class="collection__card">
      <img src="./images/col4.png" alt="" class="collection__card">
      <img src="./images/col5.png" alt="" class="collection__card">
    </div>
    <div class="collection__info">
      <p class="collection__info-text">Dòng sản phảm mặc cơ bản <a href="#">chất lượng tốt</a> và <a href="#">giá rẻ</a> của Coolmate
      </p>
      <div class="btn btn--primary">Trải nghiệm</div>
    </div>
  </div>

  <!-- FOOTER SECTION -->
  <?php include './includes/footer.php' ?>

  <script src="app.js"></script>
  <!-- add cmt -->
</body>

</html>
