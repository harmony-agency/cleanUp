<?php

$get_category = new WP_Query([

      "post_type" => "health-products",
      "status" => "published",
      "posts_per_page" => 6,
      "tax_query" => [
        [
          "taxonomy" => "health-product",
          "field" => "slug",
          "terms" => $args['cat_slug']
        ],
      ],

      ]
    );

       if ($get_category->have_posts()): ?>

        <div class="swiper categorySwiper">
              <div class="swiper-wrapper">

      <?php while ($get_category->have_posts()):
      $get_category->the_post();  
      ?>
      <div class="swiper-slide">
                  <div class="box">
                    <div class="imgBox">
                    <?php the_post_thumbnail("medium_large"); ?>
                                      </div>
                    <div class="card-footer">
                      <span class="category"><?php the_title(); ?></span>
                      <a href="<?php the_permalink(); ?>" class="seeAll"
                        >مشاهده <i class="fas fa-angle-left"></i
                      ></a>
                    </div>
                  </div>
                </div>
      
      <?php   
           endwhile;
           ?>
                         </div>
</div>
<?php
          endif;
           ?>


