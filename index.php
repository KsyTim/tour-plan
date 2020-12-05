<?php include('header.php') ?>
<section class="booking">
  <div class="wrapper">
    <div class="booking-item hotel-container">
      <div class="hotel-container-item about-hotel">
        <div class="about-hotel-item hotel-description">
          <div class="about-hotel-item hotel-rate">
            <img
              src="img/Star.svg"
              alt="Hotel Rates: 5 stars"
              class="rates-pic"
            />
            <img
              src="img/Star.svg"
              alt="Hotel Rates: 5 stars"
              class="rates-pic"
            />
            <img
              src="img/Star.svg"
              alt="Hotel Rates: 5 stars"
              class="rates-pic"
            />
            <img
              src="img/Star.svg"
              alt="Hotel Rates: 5 stars"
              class="rates-pic"
            />
            <img
              src="img/Star.svg"
              alt="Hotel Rates: 5 stars"
              class="rates-pic"
            />
          </div>
          <!-- /.about-hotel-item hotel-rate -->
          <h2 class="hotel-name">grand hilton hotel</h2>
          <a href="index.php" class="button hotel-advt">Flash Offer</a>
        </div>
        <!-- /.about-hotel-item hotel-description -->
        <div class="about-hotel-item amenities">
          Half-Board/ All Inclusive + Complimentary Activities&nbsp;+
          Child&nbsp;Stays&nbsp;Free
        </div>
        <!-- /.about-hotel-item amenities -->
      </div>
      <!-- /.hotel-container-item .about-hotel -->
      <a href="https://www.booking.com/hotel/cn/hilton-sanya-resort-spa.ru.html?label=gen173nr-1FCAEoggI46AdIM1gEaMIBiAEBmAEhuAEXyAEP2AEB6AEB-AELiAIBqAIDuALJ2a7-BcACAdICJGFlZGVlY2JkLTM4ODItNGU3Ni04ZDlhLWY2YTQ4NTY5ZjBiMdgCBuACAQ;sid=aea3f3437fe0cf24830dd0a75165359a;dest_id=-1924026;dest_type=city;dist=0;from_beach_non_key_ufi_sr=1;group_adults=2;group_children=0;hapos=1;hpos=1;no_rooms=1;room1=A%2CA;sb_price_type=total;sr_order=popularity;srepoch=1607183575;srpvid=db056fab5fb302bf;type=total;ucfs=1&#hotelTmpl" target="_blank" class="hotel-container-item user-ratings button">
        <span class="user-ratings-item">User Ratings</span>
        <span class="user-ratings-item">4.5/<small>5</small></span>
      </a>
      <!-- /.hotel-container-item .user-ratings -->
    </div>
    <!-- /.booking-item hotel-container -->
    <div class="booking-item book-hotel">
      <div class="book-hotel-item hotel-slider swiper-container">
        <!-- If we need navigation buttons -->
        <button class="hotel-slider-prev"></button>
        <button class="hotel-slider-next"></button>
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide hotel-slider-item">
            <img
              src="./img/hotel-slider-img-01.svg"
              class="hotel-pic"
              alt="Hotel Photo: Slide"
            />
          </div>
          <div class="swiper-slide hotel-slider-item">
            <img
              src="./img/hotel-slider-img-02.png"
              class="hotel-pic"
              alt="Hotel Photo: Slide"
            />
          </div>
          <div class="swiper-slide hotel-slider-item">
            <img
              src="./img/hotel-slider-img-03.jpg"
              class="hotel-pic"
              alt="Hotel Photo: Slide"
            />
          </div>
        </div>
      </div>
      <!-- /.book-hotel-item slider -->
      <div class="book-hotel-item about-booking">
        <div class="about-booking-item book-info">
          <div class="book-info-item price">
            <div class="price-main">
              <span class="price-main-item price-start">price starts as</span>
              <span class="price-main-item price-cost">$ 8,500</span>
              <span class="price-main-item price-end">per room / night</span>
            </div>
            <!-- /.price-main -->
            <div class="price-conditions">
              <div class="price-conditions-item guests">
                <img
                  src="./img/guest-icon.svg"
                  alt="Icon: Guests amount"
                  class="guests-icon"
                />
                <span class="guests-info">2 x Guests</span>
              </div>
              <!-- /.price-conditions-item guests -->
              <div class="price-conditions-item rooms">
                <img
                  src="./img/room-icon.svg"
                  alt="Icon: Rooms amount"
                  class="rooms-icon"
                />
                <span class="rooms-info">1 x Room</span>
              </div>
              <!-- /.price-conditions-item rooms -->
            </div>
            <!-- /.price-conditions -->
          </div>
          <!-- /.book-info-item price -->
          <div class="book-info-item quick-way">
            <div class="quick-way-item">
              <span class="title">Quick Booking</span>
            </div>
            <!-- /.quick-way-item -->
            <div class="quick-way-item">
              <img
                src="./img/phone-call.svg"
                alt="Icon: Book a room by calling"
                class="call-icon"
              />
              <a href="tel:12100" class="call-info">12100</a>
            </div>
            <!-- /.quick-way-item -->
          </div>
          <!-- /.book-info-item quick-way -->
          <button
            data-toggle="modal"
            class="button book-info-item button-book-info"
          >
            View Other Options
          </button>
        </div>
        <!-- /.about-booking-item -->
        <div id="map" class="about-booking-item map">
          <!-- Google Maps -->
          <!-- <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d196633.02593789363!2d109.63429622953358!3d18.21957085699653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x315ab6e7bfc4c943%3A0x22f9a008cc972a18!2sHilton%20Sanya%20Yalong%20Bay%20Resort%20%26%20Spa!5e0!3m2!1sru!2sru!4v1606243684757!5m2!1sru!2sru"
                width="100%"
                height="213"
                frameborder="0"
                style="border: 0"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"
                class="map-item"
        ></iframe> -->
        </div>
        <!-- /.about-booking-item -->
      </div>
      <!-- /.book-hotel-item about-booking -->
    </div>
    <!-- /.booking-item book-hotel -->
  </div>
  <!-- /.wrapper -->
</section>
<!-- /.booking -->

<section class="packages">
  <div class="wrapper">
    <h2 class="packages-title">other packages</h2>
    <div class="packages-card-container">
      <div class="packages-card hotel-haven">
        <a href="index.php" class="button hotel-advt card-hotel-advt">Flash Offer</a>
        <img
          src="./img/card-haven.jpg"
          alt="Hotel: Blue Haven"
          class="card-hotel-pic"
        />
        <div class="package-card-info">
          <div class="card-hotel-rate">
            <img
              src="img/Star.svg"
              alt="Hotel Rates: 5 stars"
              class="card-rates-pic"
            />
            <img
              src="img/Star.svg"
              alt="Hotel Rates: 5 stars"
              class="card-rates-pic"
            />
            <img
              src="img/Star.svg"
              alt="Hotel Rates: 5 stars"
              class="card-rates-pic"
            />
            <img
              src="img/Star.svg"
              alt="Hotel Rates: 5 stars"
              class="card-rates-pic"
            />
            <img
              src="img/Star.svg"
              alt="Hotel Rates: 5 stars"
              class="card-rates-pic"
            />
          </div>
          <!-- /.card-hotel-rate -->
          <h3 class="card-hotel-name">Hotel Blue Haven</h3>
          <p class="card-hotel-description">
            Aute quis duis excepteur excepteur ipsum cat eiusmod consectetur
            enim laborum magna llit. Ipsum est fugiat velit ea llamco do esse ut
            in veniam sun in onsequat. Aute quis duis epteur excepteur ipsum
            occaecat eiusmod nsectetur enim laborum magna mollit. Ipsum est
            fugiat velit ea ullamco do
          </p>
          <div class="package-conditions">
            <div class="package-conditions-item location">
              <img
                src="./img/location-icon.svg"
                alt="Icon: Location"
                class="package-conditions-icon"
              />
              <a href="https://goo.gl/maps/e8deWpPPBuMu4c4s9" target="_blank" class="package-conditions-info">1749 Wheeler Ridge Delaware</a>
            </div>
            <!-- /.package-conditions-item location -->
            <div class="package-conditions-item guests">
              <img
                src="./img/guest-icon.svg"
                alt="Icon: Guests amount"
                class="package-conditions-icon"
              />
              <span class="package-conditions-info">2 x Guests</span>
            </div>
            <!-- /.package-conditions-item guests -->
            <div class="package-conditions-item rooms">
              <img
                src="./img/room-icon.svg"
                alt="Icon: Rooms amount"
                class="package-conditions-icon"
              />
              <span class="package-conditions-info">1 x Room</span>
            </div>
            <!-- /.package-conditions-item rooms -->
          </div>
          <!-- /.package-conditions -->
          <div class="package-booking">
            <div class="booking-price">
              <span class="price-old">$ 10,500</span>
              <span class="price-new">$ 8,500</span>
            </div>
            <!-- /.booking-price -->
            <button data-toggle="modal" class="button booking-button">Book Now</button>
          </div>
          <!-- /.package-booking -->
        </div>
        <!-- /.package-card-info -->
      </div>
      <!-- /.packeges-card hotel-haven -->
      <div class="packages-card hotel-mare">
        <img
          src="./img/card-mare.jpg"
          alt="Hotel: LUX* Belle Mare"
          class="card-hotel-pic"
        />
        <a href="index.php" class="button hotel-advt card-hotel-advt">Flash Offer</a>
        <div class="package-card-info">
          <h3 class="card-hotel-name">LUX* Belle Mare</h3>
          <div class="package-conditions">
            <div class="package-conditions-item location">
              <img
                src="./img/location-icon.svg"
                alt="Icon: Location"
                class="package-conditions-icon"
              />
              <a href="https://goo.gl/maps/e8deWpPPBuMu4c4s9" target="_blank" class="package-conditions-info"
                >1749 Wheeler Ridge Delaware</a
              >
            </div>
            <!-- /.package-conditions-item location -->
            <div class="package-conditions-item guests">
              <img
                src="./img/guest-icon.svg"
                alt="Icon: Guests amount"
                class="package-conditions-icon"
              />
              <span class="package-conditions-info">2 x Guests</span>
            </div>
            <!-- /.package-conditions-item guests -->
            <div class="package-conditions-item rooms">
              <img
                src="./img/room-icon.svg"
                alt="Icon: Rooms amount"
                class="package-conditions-icon"
              />
              <span class="package-conditions-info">1 x Room</span>
            </div>
            <!-- /.package-conditions-item rooms -->
          </div>
          <!-- /.package-conditions -->
          <div class="package-booking">
            <div class="booking-price">
              <span class="price-old">$ 8,500</span>
              <span class="price-new">$ 3,000</span>
            </div>
            <!-- /.booking-price -->
            <button data-toggle="modal" class="button booking-button">Book Now</button>
          </div>
          <!-- /.package-booking -->
        </div>
        <!-- /.package-card-info -->
      </div>
      <!-- /.packeges-card hotel-mare -->
      <div class="packages-card hotel-palace">
        <img
          src="./img/card-palace.jpg"
          alt="Hotel: White Palace"
          class="card-hotel-pic"
        />
        <a  href="index.php" class="button hotel-advt card-hotel-advt">Flash Offer</a>
        <div class="package-card-info">
          <h3 class="card-hotel-name">White Palace</h3>
          <div class="package-conditions">
            <div class="package-conditions-item location">
              <img
                src="./img/location-icon.svg"
                alt="Icon: Location"
                class="package-conditions-icon"
              />
              <a href="https://goo.gl/maps/e8deWpPPBuMu4c4s9" target="_blank" class="package-conditions-info"
                >1749 Wheeler Ridge Delaware</a
              >
            </div>
            <!-- /.package-conditions-item location -->
            <div class="package-conditions-item guests">
              <img
                src="./img/guest-icon.svg"
                alt="Icon: Guests amount"
                class="package-conditions-icon"
              />
              <span class="package-conditions-info">2 x Guests</span>
            </div>
            <!-- /.package-conditions-item guests -->
            <div class="package-conditions-item rooms">
              <img
                src="./img/room-icon.svg"
                alt="Icon: Rooms amount"
                class="package-conditions-icon"
              />
              <span class="package-conditions-info">1 x Room</span>
            </div>
            <!-- /.package-conditions-item rooms -->
          </div>
          <!-- /.package-conditions -->
          <div class="package-booking">
            <div class="booking-price">
              <span class="price-old">$ 10,500</span>
              <span class="price-new">$ 9,500</span>
            </div>
            <!-- /.booking-price -->
            <button data-toggle="modal" class="button booking-button">Book Now</button>
          </div>
          <!-- /.package-booking -->
        </div>
        <!-- /.package-card-info -->
      </div>
      <!-- /.packeges-card hotel-palace-->
      <div class="packages-card hotel-place">
        <img
          src="./img/card-place.jpg"
          alt="Hotel: Luxury Place"
          class="card-hotel-pic"
        />
        <a href="index.php" class="button hotel-advt card-hotel-advt">Flash Offer</a>
        <div class="package-card-info">
          <h3 class="card-hotel-name">Luxury Place</h3>
          <div class="package-conditions">
            <div class="package-conditions-item location">
              <img
                src="./img/location-icon.svg"
                alt="Icon: Location"
                class="package-conditions-icon"
              />
              <a href="https://goo.gl/maps/e8deWpPPBuMu4c4s9" target="_blank" class="package-conditions-info"
                >1749 Wheeler Ridge Delaware</a
              >
            </div>
            <!-- /.package-conditions-item location -->
            <div class="package-conditions-item guests">
              <img
                src="./img/guest-icon.svg"
                alt="Icon: Guests amount"
                class="package-conditions-icon"
              />
              <span class="package-conditions-info">2 x Guests</span>
            </div>
            <!-- /.package-conditions-item guests -->
            <div class="package-conditions-item rooms">
              <img
                src="./img/room-icon.svg"
                alt="Icon: Rooms amount"
                class="package-conditions-icon"
              />
              <span class="package-conditions-info">1 x Room</span>
            </div>
            <!-- /.package-conditions-item rooms -->
          </div>
          <!-- /.package-conditions -->
          <div class="package-booking">
            <div class="booking-price">
              <span class="price-old">$ 4,500</span>
              <span class="price-new">$ 2,500</span>
            </div>
            <!-- /.booking-price -->
            <button data-toggle="modal" class="button booking-button">Book Now</button>
          </div>
          <!-- /.package-booking -->
        </div>
        <!-- /.package-card-info -->
      </div>
      <!-- /.packeges-card hotel-place-->
      <div class="packages-card hotel-star">
        <img
          src="./img/card-star.jpg"
          alt="Hotel: Five Star"
          class="card-hotel-pic"
        />
        <a href="index.php" class="button hotel-advt card-hotel-advt">Flash Offer</a>
        <div class="package-card-info">
          <h3 class="card-hotel-name">Hotel Five Star</h3>
          <div class="package-conditions">
            <div class="package-conditions-item location">
              <img
                src="./img/location-icon.svg"
                alt="Icon: Location"
                class="package-conditions-icon"
              />
              <a href="https://goo.gl/maps/e8deWpPPBuMu4c4s9" target="_blank" class="package-conditions-info"
                >1749 Wheeler Ridge Delaware</a
              >
            </div>
            <!-- /.package-conditions-item location -->
            <div class="package-conditions-item guests">
              <img
                src="./img/guest-icon.svg"
                alt="Icon: Guests amount"
                class="package-conditions-icon"
              />
              <span class="package-conditions-info">2 x Guests</span>
            </div>
            <!-- /.package-conditions-item guests -->
            <div class="package-conditions-item rooms">
              <img
                src="./img/room-icon.svg"
                alt="Icon: Rooms amount"
                class="package-conditions-icon"
              />
              <span class="package-conditions-info">1 x Room</span>
            </div>
            <!-- /.package-conditions-item rooms -->
          </div>
          <!-- /.package-conditions -->
          <div class="package-booking">
            <div class="booking-price">
              <span class="price-old">$ 6,500</span>
              <span class="price-new">$ 3,500</span>
            </div>
            <!-- /.booking-price -->
            <button data-toggle="modal" class="button booking-button">Book Now</button>
          </div>
          <!-- /.package-booking -->
        </div>
        <!-- /.package-card-info -->
      </div>
      <!-- /.packeges-card hotel-star-->
    </div>
    <!-- /.packages-card-container -->
  </div>
  <!-- /.wrapper -->
</section>
<!-- /.packages -->

<section
  class="newsletter"
  data-parallax="scroll"
  data-image-src="./img/newsletter-bg.jpg"
>
  <div class="newsletter-bg">
    <div class="wrapper newsletter-container">
      <div class="newsletter-info">
        <span class="info-text">subscribe to our</span>
        <h2 class="info-title">newsletter</h2>
      </div>
      <!-- /.newsletter-info -->
      <form action="send.php" method="POST" class="newsletter-form">
        <input
          type="text"
          placeholder="Your email address"
          name="subscription-input"
          id="newsletter-input"
        />
        <button
          class="button newsletter-button"
          type="submit"
          value="subscribe"
          name="action"
        >
          Send
        </button>
      </form>
    </div>
    <!-- /.wrapper -->
  </div>
  <!-- /.newsletter-bg -->
</section>
<!-- /.newsletter -->
<section class="reviews">
  <div class="wrapper">
    <h2 class="reviews-item reviews-title">What people think about&nbsp;us</h2>
    <div class="reviews-item swiper-container reviews-slider">
      <button class="reviews-slide-prev"></button>
      <button class="reviews-slide-next"></button>
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="reviews-slider-item">
            <div class="user-profile">
              <img
                src="./img/user-photo-01.jpg"
                alt="Photo: Megan Fox"
                class="user-profile-photo"
              />
              <h3 class="user-profile-name">Megan Fox</h3>
              <span class="user-profile-visitdate">Stayed 18 Nov, 2019</span>
              <div class="user-profile-rate">
                <img
                  src="img/Star.svg"
                  alt="User Rates: Megan Fox"
                  class="rates-pic"
                />
                <img
                  src="img/Star.svg"
                  alt="User Rates: Megan Fox"
                  class="rates-pic"
                />
                <img
                  src="img/Star.svg"
                  alt="User Rates: Megan Fox"
                  class="rates-pic"
                />
                <img
                  src="img/Star.svg"
                  alt="User Rates: Megan Fox"
                  class="rates-pic"
                />
                <img
                  src="img/Star.svg"
                  alt="User Rates: Megan Fox"
                  class="rates-pic"
                />
              </div>
              <!-- /.user-profile-rate -->
            </div>
            <!-- /.user-profile-->
            <p class="user-review">
              It was very nice hotel with cleanliness. Staff behavior was good
              and polite. They welcome us very well. Issue was only that Lift
              was not in working and we were allotted to 3rd floor and amenities
              articles were in corner of gallery which were giving bad feeling.
              Breakfast was good and support of the staff was also very nice.
              Location is not good as per atmosphere, it is very nearby most of
              the popular places but self location in a narrow street is not
              good. Overall it was a good experience and could recommend.
            </p>
          </div>
          <!-- /.reviews-slider-item -->
        </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide">
          <div class="reviews-slider-item">
            <div class="user-profile">
              <img
                src="./img/user-photo-02.jpg"
                alt="Photo: Kate Brown"
                class="user-profile-photo"
              />
              <h3 class="user-profile-name">Kate Brown</h3>
              <span class="user-profile-visitdate">Stayed 25 Aug, 2015</span>
              <div class="user-profile-rate">
                <img
                  src="img/Star.svg"
                  alt="User Rates: Kate Brown"
                  class="rates-pic"
                />
                <img
                  src="img/Star.svg"
                  alt="User Rates: Kate Brown"
                  class="rates-pic"
                />
                <img
                  src="img/Star.svg"
                  alt="User Rates: Kate Brown"
                  class="rates-pic"
                />
                <img
                  src="img/Star.svg"
                  alt="User Rates: Kate Brown"
                  class="rates-pic"
                />
              </div>
              <!-- /.user-profile-rate -->
            </div>
            <!-- /.user-profile-->
            <p class="user-review">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis
              non excepturi dolore error odio laudantium odit sequi beatae
              assumenda exercitationem! Adipisci maiores labore nam incidunt,
              molestiae sunt iste assumenda quae? Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Aut necessitatibus maiores commodi
              qui natus repellat distinctio sunt perspiciatis enim possimus cum,
              nemo modi placeat hic dignissimos cupiditate animi explicabo unde?
            </p>
          </div>
          <!-- /.reviews-slider-item -->
        </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide">
          <div class="reviews-slider-item">
            <div class="user-profile">
              <img
                src="./img/user-photo-03.jpg"
                alt="Photo: Kim Jung Su"
                class="user-profile-photo"
              />
              <h3 class="user-profile-name">Kim Jung Su</h3>
              <span class="user-profile-visitdate">Stayed 05 Apr, 2020</span>
              <div class="user-profile-rate">
                <img
                  src="img/Star.svg"
                  alt="User Rates: Kim Jung Su"
                  class="rates-pic"
                />
                <img
                  src="img/Star.svg"
                  alt="User Rates: Kim Jung Su"
                  class="rates-pic"
                />
                <img
                  src="img/Star.svg"
                  alt="User Rates: Kim Jung Su"
                  class="rates-pic"
                />
                <img
                  src="img/Star.svg"
                  alt="User Rates: Kim Jung Su"
                  class="rates-pic"
                />
                <img
                  src="img/Star.svg"
                  alt="User Rates: Kim Jung Su"
                  class="rates-pic"
                />
              </div>
              <!-- /.user-profile-rate -->
            </div>
            <!-- /.user-profile-->
            <p class="user-review">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis
              non excepturi dolore error odio laudantium odit sequi beatae
              assumenda exercitationem! Adipisci maiores labore nam incidunt,
              molestiae sunt iste assumenda quae? Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Aut necessitatibus maiores commodi
              qui natus repellat distinctio sunt perspiciatis enim possimus cum,
              nemo modi placeat hic dignissimos cupiditate animi explicabo unde?
            </p>
          </div>
          <!-- /.reviews-slider-item -->
        </div>
        <!-- /.swiper-slide -->
      </div>
      <!-- /.swiper-wrapper -->
    </div>
    <!-- /.reviews-item swiper-container reviews-slider -->
  </div>
  <!-- /.wrapper -->
</section>
<!-- /.reviews -->
<section class="activities">
  <div class="wrapper">
    <h2 class="activities-item activities-title">other activities</h2>
    <div class="activities-item activities-container">
      <div class="activities-container-item card">
        <img
          src="./img/activities-bg-01.jpg"
          alt="The curious corner of chamarel"
          class="card-bg"
        />
        <div class="card-info">
          <h3 class="card-title">The curious corner of&nbsp;chamarel</h3>
          <button data-toggle="modal" class="card-button">Book Now</button>
        </div>
        <!-- /.card-info -->
      </div>
      <!-- /.activities-container-item card -->
      <div class="activities-container-item card">
        <img
          src="./img/activities-bg-02.jpg"
          alt="Gymkhana club golf course"
          class="card-bg"
        />
        <div class="card-info">
          <h3 class="card-title">Gymkhana club golf course</h3>
          <button data-toggle="modal" class="card-button">Book Now</button>
        </div>
        <!-- /.card-info -->
      </div>
      <!-- /.activities-container-item card -->
      <div class="activities-container-item card">
        <img
          src="./img/activities-bg-03.jpg"
          alt="Tamarind falls hiking trip - full da"
          class="card-bg"
        />
        <div class="card-info">
          <h3 class="card-title">
            Tamarind falls hiking trip&nbsp;-&nbsp;full&nbsp;day
          </h3>
          <button data-toggle="modal" class="card-button">Book Now</button>
        </div>
        <!-- /.card-info -->
      </div>
      <!-- /.activities-container-item card -->
      <div class="activities-container-item card">
        <img
          src="./img/activities-bg-04.jpg"
          alt="The blue marine discovery quest"
          class="card-bg"
        />
        <div class="card-info">
          <h3 class="card-title">The blue marine discovery quest</h3>
          <button data-toggle="modal" class="card-button">Book Now</button>
        </div>
        <!-- /.card-info -->
      </div>
      <!-- /.activities-container-item card -->
    </div>
    <!-- /.activities-item activities-container -->
  </div>
  <!-- /.wrapper -->
</section>
<!-- /.activities -->

<?php include('footer.php') ?>
