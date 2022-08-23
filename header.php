

<html lang="fa">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="icon" href="assets/images/favicon.png" />
    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>
    <!-- Design by Harmony Agency -->
    <div class="wrapper">
      <!-- header sticky -->
      <header>
        <div class="container">
            <?php
            $logo = get_field( "Logo", 'option' );
            ?>
          <nav class="mobileNav mobile">
            <i class="fa-solid fa-bars"></i>
            <a class="navbar-brand" href="#">

              <img src="<?php echo $logo['sizes']['medium'] ?>"  loading="lazy" />
            </a>
          </nav>
          <!-- navbar -->
          <nav class="navbar desktop">
            <div class="container">
            <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>
              <!-- <div class="navItems">
                <a href="#" class="active">خانه</a>
                <a href="#" data-toggle="collapse" data-target="#products"
                  >محصولات</a
                >
                <a href="#">بلاگ</a>
                <a href="#">درباره ما</a>
                <a href="#">تماس با ما</a>
                <a href="#">باشگاه مشتریان</a>
              </div> -->
              <a class="navbar-brand" href="#">
                <img src="<?php echo $logo['sizes']['medium'] ?>" loading="lazy" />
              </a>
            </div>
          </nav>
        </div>
      </header>