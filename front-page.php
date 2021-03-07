<?php  get_header(); ?>

<section class="heroSection">
  <div class="container">
    <div class="slider">
      <div class="content-img">
        <ul>
          <li>
            <p>Increases Bone Density</p>
          </li>
          <li>
            <p>Improves Focus</p>
          </li>
          <li>
            <p>Regulates mood</p>
          </li>
          <li>
            <p>Improves cognition</p>
          </li>
          <li>
            <p>Ensures nutrient assimilation</p>
          </li>
        </ul>
        <h2>
          KIDS <br />
          BLEND
        </h2>
      </div>
      <div class="imgSlider">
        <div class="swiper-container" id="heroSlider">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><img src=<?php echo vedway_dir_imgs()."can.png" ?> alt="" /></div>
            <div class="swiper-slide"><img src=<?php echo vedway_dir_imgs()."can.png" ?> alt="" /></div>
            <div class="swiper-slide"><img src=<?php echo vedway_dir_imgs()."can.png" ?> alt="" /></div>
          </div>
        </div>

        <div class="sliderNav">
          <span onClick="swiper_hero.slidePrev()"><i class="fas fa-arrow-circle-left"></i></span>
          <span onClick="swiper_hero.slideNext()"><i class="fas fa-arrow-circle-right"></i></span>
        </div>
      </div>
    </div>
    <div class="heroContent">
      <div class="inner">
        <h1>Your Ayurvedic <br> Journey Awaits!</h1>
        <p>
          Enter the age-old world of Ayurveda <br />
          in the modern era. Feel free to choose a <br />
          product that suits you best to get Vedic <br />
          nutrition on the go.
        </p>
        <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn">Shop Collection Now</a>
      </div>
    </div>
  </div>
</section>

<section class="convenience">
  <div class="container">
    <div class="left" data-aos="fade-right" data-aos-duration="500" data-aos-offset="150">
      <h2 class="header">
        <span>Convenience</span> <br />
        By your side
      </h2>
      <div class="carry">
        <div class="box">
          <h3>Convenient To Carry</h3>
          <p>
            Let’s just say our sachets are pocket-friendly in more ways than
            one! All you need are baggy pockets or a free pocket in your
            bag.
          </p>
        </div>
        <img src=<?php echo vedway_dir_imgs()."wImg.png" ?> alt="" srcset="" />
      </div>
    </div>
    <div class="right" data-aos="fade-left" data-aos-duration="500" data-aos-offset="150">
      <div class="make">
        <div class="box">
          <h3>Convenient To Make</h3>
          <p>
            We understand the daily rush in this modern lifestyle, hence we
            bring Ayurvedic nourishment in just a few shakes.
          </p>
        </div>
        <img src=<?php echo vedway_dir_imgs()."wImg.png" ?> alt="" srcset="" />
      </div>

      <div class="consumption">
        <div class="box">
          <h3>Convenient For Consumption</h3>
          <p>
            Time is never of the essence when you can enjoy this Ayurvedic
            Mix at any time of the day.
          </p>
        </div>
        <img src=<?php echo vedway_dir_imgs()."kidimg.png" ?> alt="" srcset="" />
      </div>
    </div>
  </div>
</section>

<section class="balancing" data-aos="fade-up" data-aos-duration="500" data-aos-offset="150">
  <div class="container">
    <img id="balimgone" src=<?php echo vedway_dir_imgs()."element-left.svg" ?> alt="" srcset="" />
    <div class="inner">
      <h2>
        Begin the <br />
        <strong>Balancing Act </strong>
      </h2>
    </div>
    <img id="balimgtwo" src=<?php echo vedway_dir_imgs()."element-right.svg" ?> alt="" srcset="" />
  </div>
</section>

<section class="atmosphere" data-aos="fade-zoom-in" data-aos-duration="1000" data-aos-easing="ease-in-back"
  data-aos-delay="0" data-aos-offset="150">
  <div class="container">

    <div class="illustration">

      <div class="atmosTop">
        <div class="atmosTopInner">
          <img src="<?php echo vedway_dir_imgs()."atmosphere-section/atmosTopBg.png" ?>" alt="" width="20%" />
          <img id="atmosTopFg" src="<?php echo vedway_dir_imgs()."atmosphere-section/atmosTopFg.png" ?>" alt=""
            width="20%" />
        </div>
      </div>

      <div class="atmosBottom">
        <div class="atmosBottomInner">
        <img id="bg" src="<?php echo vedway_dir_imgs()."atmosphere-section/atmosBottomBg.png" ?>" alt=""
            width="20%" />
          <img id="md" src="<?php echo vedway_dir_imgs()."atmosphere-section/atmosBottomMid.png" ?>" width="496.408" height="415.446" alt=""
            width="20%" />
          <div class="icons">
            <span onclick="atmosGoto(0)">
              <img src="<?php echo vedway_dir_imgs()."atmosphere-section/icons/one.png" ?>" alt="" width="20%" />
            </span>

            <span onclick="atmosGoto(1)">
              <img src="<?php echo vedway_dir_imgs()."atmosphere-section/icons/two.png" ?>" alt="" width="20%" />
            </span>

            <span onclick="atmosGoto(2)">
              <img src="<?php echo vedway_dir_imgs()."atmosphere-section/icons/three.png" ?>" alt="" width="20%" />
            </span>

            <span onclick="atmosGoto(3)">
              <img src="<?php echo vedway_dir_imgs()."atmosphere-section/icons/four.png" ?>" alt="" width="20%" />
            </span>

            <span onclick="atmosGoto(4)">
              <img src="<?php echo vedway_dir_imgs()."atmosphere-section/icons/five.png" ?>" alt="" width="20%" />
            </span>
          </div>
        </div>
      </div>

    </div>
    <div class="content">
      <div>
        <h2 class="header">
          <span> Vedic</span> <br />
          ‘Atmosphere’
        </h2>
      </div>
      <div class="inner">
        <div class="slider">
          <div class="swiper-container" id="atmosSlider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <h3>ETHER One</h3>
                <p>
                  tion ullamcorper suscipit lobortis nisl ut aliquip
                </p>
                <p>
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                  nonummy nibh euismod tincidunt ut laoreet dolore magna
                </p>
              </div>

              <div class="swiper-slide">
                <h3>ETHER two</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                  nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                  erat vol
                </p>
                
              </div>

              <div class="swiper-slide">
                <h3>ETHER three</h3>
                <p>
                  
                  erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                  tation ullamcorper suscipit lobortis nisl ut aliquip
                </p>
                <p>
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                  nonummy nibh euismod tincidunt ut laoreet dolore magna
                </p>
              </div>

              <div class="swiper-slide">
                <h3>ETHER Four</h3>
                
                <p>
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                  nonummy nibh euismod tincidunt ut laoreet dolore magna
                </p>
              </div>

              <div class="swiper-slide">
                <h3>ETHER Five</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                  nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                  erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                  tation ullamcorper suscipit lobortis nisl ut aliquip
                </p>
                <p>
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                  nonummy nibh euismod tincidunt ut laoreet dolore magna
                </p>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="madeWithLove" data-aos="fade-zoom-in" data-aos-duration="500" data-aos-easing="ease-in-back"
  data-aos-delay="0" data-aos-offset="150">
  <div class="container">
    <div class="text" data-aos="fade-right" data-aos-delay="1000">
      <h2 class="header">
        <span>Made </span><br />
        With Love
      </h2>
    </div>
    <ul data-aos="fade-left" data-aos-delay="1000">
      <li>
        <div class="icon">
          <img src=<?php echo vedway_dir_imgs()."made-with-love/veg.svg" ?> alt="100% veg icon" srcset="" />
        </div>
        <p>100%<br> veg</p>
      </li>

      <li>
        <div class="icon">
          <img src=<?php echo vedway_dir_imgs()."made-with-love/safety.svg" ?> alt="100% veg icon" srcset="" />
        </div>
        <p>Purity <br>& Safety</p>
      </li>

      <li>
        <div class="icon">
          <img src=<?php echo vedway_dir_imgs()."made-with-love/sideeffect.svg" ?> alt="100% veg icon" srcset="" />
        </div>
        <p>No Side <br> Effects</p>
      </li>

      <li>
        <div class="icon">
          <img id="Proven" src=<?php echo vedway_dir_imgs()."made-with-love/proven.svg" ?> alt="100% veg icon"
            srcset="" />
        </div>
        <p>Clinically <br>Proven</p>
      </li>

      <li>
        <div class="icon">
          <img src=<?php echo vedway_dir_imgs()."made-with-love/gluten.svg" ?> alt="100% veg icon" srcset="" />

        </div>
        <p>Gluten<br> Free</p>

      </li>
    </ul>
  </div>
</section>

<section class="heart">
  <div class="container">
    <div class="content" data-aos="fade-right" data-aos-duration="500" data-aos-offset="150">
      <h2 class="header">
        <span>Heart</span> <br />
        Of Herbs
      </h2>
      <h3>JESHTHAMAD</h3>
      <ul>
        <li>Improves Skin Texture</li>
        <li>Regulates Hormones</li>
        <li>Keeps Respiratory Tract Healthy</li>
      </ul>
    </div>
    <div class="slider" data-aos="fade-left" data-aos-duration="500" data-aos-offset="150">

      <div class="sliderInner">
        <div class="swiper-container" id="heartSlider">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><img src=<?php echo vedway_dir_imgs()."placeholder.png" ?> alt="" /></div>
            <div class="swiper-slide"><img src=<?php echo vedway_dir_imgs()."placeholder.png" ?> alt="" /></div>
            <div class="swiper-slide"><img src=<?php echo vedway_dir_imgs()."placeholder.png" ?> alt="" /></div>
          </div>
        </div>
      </div>
      <div class="sliderNav">
        <span onClick="swiper_heart.slidePrev()"><i class="fas fa-arrow-circle-left"></i></span>
        <span onClick="swiper_heart.slideNext()"><i class="fas fa-arrow-circle-right"></i></span>
      </div>
    </div>
  </div>
</section>

<section class="testimonial">
  <div class="container" data-aos="fade-up" data-aos-duration="500" data-aos-offset="150">
    <div class="slider">
      <div class="sliderInner">
        <div class="swiper-container" id="testimonialSlider">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <div class="slide">
                <div class="card">
                  <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                    magna
                  </p>
                </div>
                <div class="details">
                  <img src=<?php echo vedway_dir_imgs()."profile.jpg"?> alt="" />
                  <h4>Jhon Doe</h4>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="slide">
                <div class="card">
                  <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                    magna
                  </p>
                </div>
                <div class="details">
                  <img src=<?php echo vedway_dir_imgs()."profile.jpg"?> alt="" />
                  <h4>Jhon Doe</h4>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="slide">
                <div class="card">
                  <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                    magna
                  </p>
                </div>
                <div class="details">
                  <img src=<?php echo vedway_dir_imgs()."profile.jpg"?> alt="" />
                  <h4>Jhon Doe</h4>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="slide">
                <div class="card">
                  <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                    magna
                  </p>
                </div>
                <div class="details">
                  <img src=<?php echo vedway_dir_imgs()."profile.jpg"?> alt="" />
                  <h4>Jhon Doe</h4>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="head">
      <h2 class="header">
        <span>What Modern </span> <br />
        Yogi’s Are <br />
        Saying
      </h2>
    </div>
  </div>

</section>


<?php get_footer(); ?>