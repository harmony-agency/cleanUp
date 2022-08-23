<?php get_header(); ?>

<?php $term = get_queried_object(); ?>
      <section id="categoryBanner">
        <div class="container">
          <div class="content">
            <div class="row">
              <div class="col-md-6">
                <p class="title">محصولات</p>
                <h1 class="categoryTitle"> 
                    <?php echo  get_field( "category_title", $term ); ?>
                </h1>
                <div class="categoryCaption">
                    <?php echo get_field( "category_description", $term ); ?>
                </div>
              </div>
              <div class="col-md-6">
              
                <?php $category_picture = get_field( "category_picture", $term ); ?>
              <img src="<?php echo $category_picture['sizes']['large'] ?>" alt="" />
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="main">
        <div class="container">
          <div class="title">
            <?php echo get_field( "category_slider_title", $term ); ?>
          </div>
          <?php $args = array(
               'taxonomy' => 'health-product',
               'orderby' => 'name',
               'order'   => 'ASC'
           );

          $cats = get_categories($args);
          foreach($cats as $cat) : ?>
          <div class="categories">
            <div class="col-4 intro">
              <div class="introBg"></div>
              <p class="titleName">کلکسیون</p>
              <h2 class="name">
                <?php echo $cat->name; ?>
              </h2>
              <p class="subName">
              <?php get_field('sheet_number'); ?>
              برگ</p>
              <div class="categoryFooter">
                <span class="number"> <?php echo $cat->category_count; ?>
                  
                محصول</span>
                <div class="swiper-button-next" id="next1">
                  <img src="./assets/images/prev.png" alt="" />
                </div>
                <div class="swiper-button-prev" id="prev1">
                  <img src="./assets/images/next.png" alt="" />
                </div>
              </div>
            </div>
            <?php get_template_part("loop-templates/contentCard", "product", array(
        'cat_slug'   => $cat->slug
    )); ?>

          </div>
          <?php endforeach ?>
        </div>
      </section>

      <?php get_footer(); ?>
    