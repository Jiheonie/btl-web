 <header>
    <div class="header__menu--phone">
       <i class="fa-solid fa-bars"></i>
    </div>
    <div class="header__logo">
       <a href="/">
          <div class="header__logo-img">
            <a href="/"><h4>Coolmate</h4></a>
          </div>
       </a>
    </div>
    <div class="header__menu">
       <ul class="header__menu-list">
          <li class="header__menu-item header__menu-item--focus">
             <a class="header__menu-item-link" href="#">Outlet</a>
          </li>
          <li class="header__menu-item">
             <a class="header__menu-item-link" href="#">
                Đồ lót định kỳ</a>
          </li>
          <li class="header__menu-item">
             <a class="header__menu-item-link" href="#">
                Sản phẩm</a>
          </li>
          <li class="header__menu-item">
             <a class="header__menu-item-link" href="#">
                In áo công ty</a>
          </li>
          <li class="header__menu-item">
             <a class="header__menu-item-link" href="./introduce.html">
                Về Coolmate</a>
          </li>
          <li class="header__menu-item">
             <a class="header__menu-item-link" href="#">
                Chọn Size</a>
          </li>
       </ul>
    </div>

    <!-- When user is logged in -->
    <?php if ($_SESSION["userId"]) : ?>
       <div class="header__actions">
          <div class="header__actions-item">
             <i class="headers_actions-item-icon fa-solid fa-magnifying-glass"></i>
          </div>
          <div class="header__actions-item">
             <i class="headers_actions-item-icon fa-solid fa-user"></i>
          </div>
          <div class="header__actions-item">
             <i class="headers_actions-item-icon fa-solid fa-bag-shopping"></i>
          </div>
          <div class="header__actions-item">
            <a href="logout.php" class="btn btn-primary">Logout</a>
          </div>
         <?php if ($_SESSION["role"] == 'Admin'): ?>
          <div class="header__actions-item">
            <a href="admin.php" class="btn btn-primary">Admin</a>
          </div>
         <?php endif; ?>
       </div>

       <!-- When user is not logged in -->
    <?php else: ?>
       <div class="header__actions">
          <div class="header__actions-item">
            <a href="login.php" class="btn btn-primary">Login</a>
          </div>
          <div class="header__actions-item">
            <a href="signup.php" class="btn btn-primary">Sign Up</a>
          </div>
          <div class="header__actions-item">
             <i class="headers_actions-item-icon fa-solid fa-magnifying-glass"></i>
          </div>
       </div>

    <?php endif; ?>


 </header>
