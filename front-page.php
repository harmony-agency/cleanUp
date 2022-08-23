<?php get_header(); ?>
<!-- slide -->
      <section id="slide">
        <?php 
        $sliders = get_field( "slider" );
        ?>
        <div class="swiper slideSwiper">
          <div class="swiper-wrapper">
            <?php foreach($sliders as $slider): ?>
            <div class="swiper-slide slider1">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/slider1CloudLeft.png"
                alt=""
                class="slider1CloudLeft desktop"
              />
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/slider1CloudRight.png"
                alt=""
                class="slider1CloudRight desktop"
              />
              <div class="container">
                <div class="content">
                  <h1><?php echo $slider['main-title'] ?></h1>
                  <p>
                  <?php echo $slider['description'] ?>
                  </p>
                  <a href="" class="btnCall"> <?php echo $slider['button-text'] ?></a>
                </div>
                <div class="picture">
                  <img src="<?php echo $slider['main-picture']['sizes']['large'] ?>" alt="" />
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination mobile"></div>
        </div>
      </section>

      <!-- product -->
      <section id="product">
        <div class="container">
          <h1 class="section-title">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud.png"
              class="productCloudTop mobile"
              alt=""
            />

            محصولات کلین آپ
          </h1>
          <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button
                class="nav-link active"
                id="box-tab"
                data-bs-toggle="pill"
                data-bs-target="#box"
                type="button"
                role="tab"
                aria-controls="box"
                aria-selected="false"
              >
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/boxImg.png" alt="" />

                <span class="box-cat">جعبه</span>
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="toilet-paper-tab"
                data-bs-toggle="pill"
                data-bs-target="#toilet-paper"
                type="button"
                role="tab"
                aria-controls="toilet-paper-"
                aria-selected="true"
              >
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/paperImg.png" alt="" />

                <span class="box-cat toilet-paper-">کاغذ توالت</span>
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="paper-towel-tab"
                data-bs-toggle="pill"
                data-bs-target="#paper-towel"
                type="button"
                role="tab"
                aria-controls="paper-towel"
                aria-selected="true"
              >
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/towel.png" alt="" />
                <span class="box-cat paper towel">حوله کاغذی</span>
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="economical-tab"
                data-bs-toggle="pill"
                data-bs-target="#economical"
                type="button"
                role="tab"
                aria-controls="economical"
                aria-selected="true"
              >
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/economicalImg.png" alt="" />
                <span class="box-cat economical">دستمال اقتصادی</span>
              </button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div
              class="tab-pane fade active show"
              id="box"
              role="tabpanel"
              aria-labelledby="box-tab"
            >
              <div class="swiper boxSwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="box">
                      <div class="imgBox">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product1.jpg" alt="" />
                      </div>
                      <div class="card-footer">
                        <span class="category">دکوراسیون</span>
                        <a href="" class="seeAll"
                          >مشاهده <i class="fas fa-angle-left"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="box">
                      <div class="imgBox">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product2.jpg" alt="" />
                      </div>
                      <div class="card-footer">
                        <span class="category">بافت</span>
                        <a href="" class="seeAll"
                          >مشاهده <i class="fas fa-angle-left"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="box">
                      <div class="imgBox">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product3.jpg" alt="" />
                      </div>
                      <div class="card-footer">
                        <span class="category">250 برگ</span>
                        <a href="" class="seeAll"
                          >مشاهده <i class="fas fa-angle-left"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="box">
                      <div class="imgBox">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product1.jpg" alt="" />
                      </div>
                      <div class="card-footer">
                        <span class="category">۱۵۰ برگ</span>
                        <a href="" class="seeAll"
                          >مشاهده <i class="fas fa-angle-left"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
              </div>
              <a href="" class="btnCall">همه محصولات</a>
            </div>
            <div
              class="tab-pane fade"
              id="toilet-paper"
              role="tabpanel"
              aria-labelledby="toilet-paper-tab"
            >
              <div class="swiper toiletPaperSwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="box">
                      <div class="imgBox">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product1.jpg" alt="" />
                      </div>
                      <div class="card-footer">
                        <span class="category">دکوراسیون</span>
                        <a href="" class="seeAll"
                          >مشاهده <i class="fas fa-angle-left"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="box">
                      <div class="imgBox">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product2.jpg" alt="" />
                      </div>
                      <div class="card-footer">
                        <span class="category">بافت</span>
                        <a href="" class="seeAll"
                          >مشاهده <i class="fas fa-angle-left"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="box">
                      <div class="imgBox">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product3.jpg" alt="" />
                      </div>
                      <div class="card-footer">
                        <span class="category">250 برگ</span>
                        <a href="" class="seeAll"
                          >مشاهده <i class="fas fa-angle-left"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="box">
                      <div class="imgBox">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product1.jpg" alt="" />
                      </div>
                      <div class="card-footer">
                        <span class="category">۱۵۰ برگ</span>
                        <a href="" class="seeAll"
                          >مشاهده <i class="fas fa-angle-left"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
              </div>
              <a href="" class="btnCall">همه محصولات</a>
            </div>
            <div
              class="tab-pane fade"
              id="paper-towel"
              role="tabpanel"
              aria-labelledby="paper-towel-tab"
            >
              <div class="swiper paperTowelSwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="box">
                      <div class="imgBox">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product1.jpg" alt="" />
                      </div>
                      <div class="card-footer">
                        <span class="category">دکوراسیون</span>
                        <a href="" class="seeAll"
                          >مشاهده <i class="fas fa-angle-left"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="box">
                      <div class="imgBox">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product2.jpg" alt="" />
                      </div>
                      <div class="card-footer">
                        <span class="category">بافت</span>
                        <a href="" class="seeAll"
                          >مشاهده <i class="fas fa-angle-left"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="box">
                      <div class="imgBox">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product3.jpg" alt="" />
                      </div>
                      <div class="card-footer">
                        <span class="category">250 برگ</span>
                        <a href="" class="seeAll"
                          >مشاهده <i class="fas fa-angle-left"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="box">
                      <div class="imgBox">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product1.jpg" alt="" />
                      </div>
                      <div class="card-footer">
                        <span class="category">۱۵۰ برگ</span>
                        <a href="" class="seeAll"
                          >مشاهده <i class="fas fa-angle-left"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
              </div>
              <a href="" class="btnCall">همه محصولات</a>
            </div>
            <div
              class="tab-pane fade"
              id="economical"
              role="tabpanel"
              aria-labelledby="economical-tab"
            >
              <div class="swiper economicalSwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="box">
                      <div class="imgBox">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product1.jpg" alt="" />
                      </div>
                      <div class="card-footer">
                        <span class="category">دکوراسیون</span>
                        <a href="" class="seeAll"
                          >مشاهده <i class="fas fa-angle-left"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="box">
                      <div class="imgBox">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product2.jpg" alt="" />
                      </div>
                      <div class="card-footer">
                        <span class="category">بافت</span>
                        <a href="" class="seeAll"
                          >مشاهده <i class="fas fa-angle-left"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="box">
                      <div class="imgBox">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product3.jpg" alt="" />
                      </div>
                      <div class="card-footer">
                        <span class="category">250 برگ</span>
                        <a href="" class="seeAll"
                          >مشاهده <i class="fas fa-angle-left"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="box">
                      <div class="imgBox">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product1.jpg" alt="" />
                      </div>
                      <div class="card-footer">
                        <span class="category">۱۵۰ برگ</span>
                        <a href="" class="seeAll"
                          >مشاهده <i class="fas fa-angle-left"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
              </div>
              <a href="" class="btnCall">همه محصولات</a>
            </div>
          </div>
        </div>
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud.png"
          class="productCloudBottom mobile"
          alt=""
        />
      </section>

      <!-- Design by Harmony Agency -->

      <section id="sectionCombine">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud.png" alt="" class="topCloud" />

        <!-- banner -->
        <section id="banner">
        <?php 
        $event_sliders = get_field( "slider_event" );
        ?>
          <h1 class="section-title">رویدادهای کلین آپ</h1>
          <div class="swiper bannerSwiper">
            <div class="swiper-wrapper">
            <?php foreach($event_sliders as $slider_event): ?>            
              <div class="swiper-slide">
                <div
                  class="content"
                  data-bs-toggle="modal"
                  data-bs-target="#modal1"
                >
                  <img src="<?php echo $slider_event['event-image']['url'] ?>" alt="" class="desktop" />

                  <img src="<?php echo $slider_event['event-imageMobile']['sizes']['large'] ?>" alt="" class="mobile" />


                  <div class="seeVideo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seeVideo.png" alt="" />
                    <p>تماشای ویدیو</p>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
            <div class="swiper-button-next">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/prev.png" alt="" />
            </div>
            <div class="swiper-button-prev">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/next.png" alt="" />
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </section>

        <!-- event -->
        <section id="event">
          <div class="container">
            <h1 class="section-title">اینستاگرام کلین آپ</h1>
            <div class="row">
              <div class="col-md-4">
                <div class="content">
                  <div class="eventBox eventBox1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/event1.jpg" alt="" />
                    <p>
                      لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،
                      و با استفاده از طراحان گرافیک است.
                    </p>
                    <i class="fa-brands fa-instagram"></i>
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                      alt=""
                      class="logoPost"
                    />
                    <div class="boxHover">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.png" alt="" />
                      <p>مارا در اینستاگرام دنبال کنید</p>
                      <div class="socialsBox">
                        <a href="#">
                          <i class="fa-brands fa-instagram"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="content">
                  <div class="eventBox eventBox2">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/event2.jpg"
                      alt=""
                      class="imagePost"
                    />
                    <p>
                      لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،
                      و با استفاده از طراحان گرافیک است.
                    </p>
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/logoText.png"
                      alt=""
                      class="logoPost"
                    />
                    <i class="fa-brands fa-instagram"></i>
                    <div class="boxHover">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.png" alt="" />
                      <p>مارا در اینستاگرام دنبال کنید</p>
                      <div class="socialsBox">
                        <a href="#">
                          <i class="fa-brands fa-instagram"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="content">
                  <div class="eventBox eventBox1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/event1.jpg" alt="" />
                    <p>
                      لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،
                      و با استفاده از طراحان گرافیک است.
                    </p>
                    <i class="fa-brands fa-instagram"></i>
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                      alt=""
                      class="logoPost"
                    />
                    <div class="boxHover">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.png" alt="" />
                      <p>مارا در اینستاگرام دنبال کنید</p>
                      <div class="socialsBox">
                        <a href="#">
                          <i class="fa-brands fa-instagram"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a href="" class="btnCall">صفحه اینستاگرام ما</a>
          </div>
        </section>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud.png" alt="" class="bottomCloud" />
      </section>

      <!-- Design by Harmony Agency -->

      <!-- about -->
      <section id="about">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.png" alt="" class="desktop" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutMobile.png" alt="" class="mobile" />
            </div>
            <div class="col-md-6">
              <h1>درباره برند کلین آپ و محصولاتش</h1>
              <p>
              <?php echo get_field( "aboutUs-text" ); ?>
              </p>
              <a href="" class="btnCall">درباره ما</a>
            </div>
          </div>
        </div>
      </section>

      
      <?php get_footer(); ?>