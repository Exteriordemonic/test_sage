<header class="header">
  <div class="container">
    <div class="row">
      <a class="col-2" href="<?php echo e(home_url('/')); ?>">
        <img class="header__logo" src=<?php echo e(get_theme_mod( 'upload_logo' )); ?> alt="logo">
      </a>
      <div class="header__nav-wrapper col-10">
        <nav>
          <?php if(has_nav_menu('primary_navigation')): ?>
            <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'header__menu']); ?>

          <?php endif; ?>
        </nav>
        <ul class="social-media">
          <?php if(get_theme_mod( 'sm_facebook' )): ?>
          <li>
            <a class="social-media__link" href=" <?php echo e(get_theme_mod( 'sm_facebook' )); ?> ">
              <span class="social-media__icon fab fa-facebook"></span>
            </a>
          </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
</header>
