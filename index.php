<?php include("header.php") ?>
        <section class="hotel">
            <div class="container">
                <div class="hotel-info">
                    <div class="hotel-info__text">
                        <div class="hotel-wrapper">
                            <div class="stars">
                                <img src="img/star.svg" alt="star" />
                                <img src="img/star.svg" alt="star" />
                                <img src="img/star.svg" alt="star" />
                                <img src="img/star.svg" alt="star" />
                                <img src="img/star.svg" alt="star" />
                            </div>
                            <h1 class="hotel-name hotel-info__name">
                                GRAND HILTON HOTEL
                            </h1>
                            <span class="offer hotel-info__offer"
                                >Flash Offer</span
                            >
                        </div>
                        <!-- /.hotel-wrapper -->
                        <p class="hotel-descreption">
                            Half-Board/ All Inclusive + Complimentary Activities
                            + Child Stays Free
                        </p>
                    </div>
                    <div class="rating hotel-info__rating" data-toggle="modal" data-href="#rating-modal">
                        <span class="rating__text">User Rattings</span>
                        <span class="rating__counter">4.5/5</span>
                    </div>
                </div>
                <!-- /.hotel-info -->
                <div class="hotel-grid">
                    <!-- Slider main container -->
                    <div class="swiper-container hotel-slider hotel__slider">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide hotel-slider__item">
                                <img
                                    class="hotel-slider__image"
                                    src="img/Slide-1.jpg"
                                    alt="slide"
                                />
                            </div>
                            <div class="swiper-slide hotel-slider__item">
                                <img
                                    class="hotel-slider__image"
                                    src="img/Slide-2.jpg"
                                    alt="slide"
                                />
                            </div>
                            <div class="swiper-slide hotel-slider__item">
                                <img
                                    class="hotel-slider__image"
                                    src="img/Slide-3.jpg"
                                    alt="slide"
                                />
                            </div>
                            <div class="swiper-slide hotel-slider__item">
                                <img
                                    class="hotel-slider__image"
                                    src="img/Slide-4.jpg"
                                    alt="slide"
                                />
                            </div>
                            <div class="swiper-slide hotel-slider__item">
                                <img
                                    class="hotel-slider__image"
                                    src="img/Slide-5.jpg"
                                    alt="slide"
                                />
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <button
                            class="hotel-slider__button hotel-slider__button_prev"
                        ></button>
                        <button
                            class="hotel-slider__button hotel-slider__button_next"
                        ></button>
                    </div>
                    <!-- /.swiper-container -->
                    <div class="hotel-right">
                        <div class="booking">
                            <div class="booking__info">
                                <div class="booking__price">
                                    <span class="booking__start"
                                        >price starts as</span
                                    >
                                    <strong class="booking__pricetag"
                                        >$ 8,500</strong
                                    >
                                    <span class="booking__per-room"
                                        >per room / night</span
                                    >
                                </div>
                                <div class="booking__room">
                                    <div class="booking__text">
                                        <img
                                            src="img/user.svg"
                                            alt="user icon"
                                            class="booking__icon"
                                        />
                                        <span class="booking__description"
                                            >2 x Guests
                                        </span>
                                    </div>
                                    <div class="booking__text">
                                        <img
                                            src="img/home.svg"
                                            alt="home icon"
                                            class="booking__icon"
                                        />
                                        <span class="booking__description"
                                            >1 x Room
                                        </span>
                                    </div>
                                </div>
                                <!-- /.booking__room -->
                            </div>
                            <!-- /.booking-info -->
                            <div class="booking__call-center">
                                <span class="booking__heading"
                                    >Quick Booking</span
                                >
                                <a class="booking__number" href="tel:12100"
                                    ><img
                                        src="img/phone-call.svg"
                                        alt="phone-call icon"
                                    />
                                    <span class="booking__num">12100</span>
                                </a>
                            </div>
                            <!-- /.call-center -->
                            <button data-toggle="modal" data-href="#booking-modal" class="button booking__button">
                                View Other Options
                            </button>
                        </div>
                        <!-- /.booking -->
                        <div class="map-wrapper">
                            <div class="map" id="map"></div>
                        </div>
                        <!-- /.map -->
                    </div>
                    <!-- /.hotel-right -->
                </div>
                <!-- /.hotel-grid -->
            </div>
            <!-- /.container -->
        </section>
        <section class="newsletter">
            <div
                class="parallax-window"
                data-parallax="scroll"
                data-image-src="./img/newsletter-bg.jpg"
            ></div>
            <div class="newsletter-wrapper">
                <h2 class="newsletter-title newsletter__title">
                    subscribe to our
                    <span class="newsletter-title__strong">Newsletter</span>
                </h2>
                <!-- /.newsletter-title -->
                <form action="send.php" method="POST" class="subscribe newsletter__subscribe">
                    <input
                        type="text"
                        name="email"
                        class="subscribe__input"
                        placeholder="Your email address"
                    />
                    <button class="subscribe__button">
                        Send
                    </button>
                </form>
                <!-- /.subscribe -->
            </div>
            <!-- /.newsletter-wrapper -->
        </section>
        <!-- /.newsletter -->
        <section class="reviews">
            <div class="container">
                <h2 class="reviews__title">What people thinks about us</h2>
                <div class="swiper-container reviews-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="reviews-slider__item">
                                <div class="reviews-slider__profile">
                                    <img
                                        src="img/reviews-avatar-1.jpg"
                                        alt="Photo: Megan Fox"
                                        class="reviews-slider__avatar"
                                    />
                                    <h3 class="reviews-slider__username">
                                        Megan Fox
                                    </h3>
                                    <span class="reviews-slider__date"
                                        >Stayed 18 Nov, 2019</span
                                    >
                                    <div class="reviews-slider__rating">
                                        <img src="img/star.svg" alt="star" />
                                        <img src="img/star.svg" alt="star" />
                                        <img src="img/star.svg" alt="star" />
                                        <img src="img/star.svg" alt="star" />
                                        <img src="img/star.svg" alt="star" />
                                    </div>
                                </div>
                                <!-- /.reviews-slider__profile -->
                                <p class="reviews-slider__text">
                                    It was very nice hotel with cleanliness.
                                    Staff behavior was good and polite. They
                                    welcome us very well. Issue was only that
                                    Lift was not in working and we were allotted
                                    to 3rd floor and amenities articles were in
                                    corner of gallery which were giving bad
                                    feeling. Breakfast was good and support of
                                    the staff was also very nice. Location is
                                    not good as per atmosphere, it is very
                                    nearby most of the popular places but self
                                    location in a narrow street is not good.
                                    Overall it was a good experience and could
                                    recommend.
                                </p>
                            </div>
                            <!-- /.reviews-slider__item -->
                        </div>
                        <!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="reviews-slider__item">
                                <div class="reviews-slider__profile">
                                    <img
                                        src="img/reviews-avatar-2.jpg"
                                        alt="Photo: Lucas Middleton"
                                        class="reviews-slider__avatar"
                                    />
                                    <h3 class="reviews-slider__username">
                                        Lucas Middleton
                                    </h3>
                                    <span class="reviews-slider__date"
                                        >Stayed 12 sep, 2019</span
                                    >
                                    <div class="reviews-slider__rating">
                                        <img src="img/star.svg" alt="star" />
                                        <img src="img/star.svg" alt="star" />
                                        <img src="img/star.svg" alt="star" />
                                        <img src="img/star.svg" alt="star" />
                                    </div>
                                </div>
                                <!-- /.reviews-slider__profile -->
                                <p class="reviews-slider__text">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Aliquam voluptatibus quos
                                    magnam asperiores perspiciatis, obcaecati
                                    perferendis esse tenetur nostrum? Adipisci,
                                    sint. Quaerat incidunt dolore eos suscipit,
                                    magni perspiciatis blanditiis. Magni in
                                    doloribus molestias ex voluptas ipsa,
                                    repudiandae animi eius nesciunt, nemo
                                    asperiores, illum omnis deserunt! Maxime
                                    consequatur veniam fuga nihil.
                                </p>
                            </div>
                            <!-- /.reviews-slider__item -->
                        </div>
                        <!-- /.swiper-slide -->
                        <!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="reviews-slider__item">
                                <div class="reviews-slider__profile">
                                    <img
                                        src="img/reviews-avatar-3.jpg"
                                        alt="Photo: Simon Wilkerson"
                                        class="reviews-slider__avatar"
                                    />
                                    <h3 class="reviews-slider__username">
                                        Simon Wilkerson
                                    </h3>
                                    <span class="reviews-slider__date"
                                        >Stayed 4 jun, 2017</span
                                    >
                                    <div class="reviews-slider__rating">
                                        <img src="img/star.svg" alt="star" />
                                        <img src="img/star.svg" alt="star" />
                                    </div>
                                </div>
                                <!-- /.reviews-slider__profile -->
                                <p class="reviews-slider__text">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Repellendus fugiat rem ad
                                    ipsum aliquam ipsa consectetur sapiente
                                    minima blanditiis totam quaerat omnis
                                    dolorum nostrum ullam provident consequatur,
                                    aperiam nisi atque nihil sed fuga placeat,
                                    esse at soluta. Rem quia dicta beatae id
                                    iure quaerat? Ullam officiis distinctio sint
                                    consectetur expedita?
                                </p>
                            </div>
                            <!-- /.reviews-slider__item -->
                        </div>
                        <!-- /.swiper-slide -->
                        <!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="reviews-slider__item">
                                <div class="reviews-slider__profile">
                                    <img
                                        src="img/reviews-avatar-4.jpg"
                                        alt="Photo: Miles Woodward"
                                        class="reviews-slider__avatar"
                                    />
                                    <h3 class="reviews-slider__username">
                                        Miles Woodward
                                    </h3>
                                    <span class="reviews-slider__date"
                                        >Stayed 29 feb, 2020</span
                                    >
                                    <div class="reviews-slider__rating">
                                        <img src="img/star.svg" alt="star" />
                                        <img src="img/star.svg" alt="star" />
                                        <img src="img/star.svg" alt="star" />
                                        <img src="img/star.svg" alt="star" />
                                        <img src="img/star.svg" alt="star" />
                                    </div>
                                </div>
                                <!-- /.reviews-slider__profile -->
                                <p class="reviews-slider__text">
                                    Lorem, ipsum dolor sit amet consectetur
                                    adipisicing elit. Eaque, magni saepe!
                                    Repudiandae distinctio deleniti quibusdam
                                    inventore reiciendis eum ipsa rerum, labore
                                    dolores eius corrupti est quos esse ab
                                    aspernatur, vitae iusto, voluptatem earum!
                                    Voluptatibus fuga suscipit accusantium
                                    tempora doloremque libero a, itaque et
                                    dolores aliquam. Dicta itaque ut id sed.
                                </p>
                            </div>
                            <!-- /.reviews-slider__item -->
                        </div>
                        <!-- /.swiper-slide -->
                        <!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="reviews-slider__item">
                                <div class="reviews-slider__profile">
                                    <img
                                        src="img/reviews-avatar-5.jpg"
                                        alt="Photo: Lara Li"
                                        class="reviews-slider__avatar"
                                    />
                                    <h3 class="reviews-slider__username">
                                        Lara Li
                                    </h3>
                                    <span class="reviews-slider__date"
                                        >Stayed 21 jun, 2019</span
                                    >
                                    <div class="reviews-slider__rating">
                                        <img src="img/star.svg" alt="star" />
                                        <img src="img/star.svg" alt="star" />
                                        <img src="img/star.svg" alt="star" />
                                        <img src="img/star.svg" alt="star" />
                                        <img src="img/star.svg" alt="star" />
                                    </div>
                                </div>
                                <!-- /.reviews-slider__profile -->
                                <p class="reviews-slider__text">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Minima veniam debitis
                                    aspernatur dolores, nulla nisi dolor minus
                                    voluptatum officiis fuga. Molestiae dolores
                                    aut nam nesciunt, magni quis quidem ullam ex
                                    voluptate nemo iure ea, temporibus itaque
                                    velit eum fuga corporis. Molestias autem
                                    mollitia sed! Facere eius neque quisquam
                                    repellendus enim molestias fugiat assumenda.
                                    Iure, eligendi dignissimos cum molestias qui
                                    eos, officia nemo officiis veritatis
                                    sapiente voluptas quibusdam architecto
                                    tenetur fugit perferendis. Sunt aperiam
                                    eaque illum saepe in totam quis fugit hic
                                    praesentium repellendus voluptates quae
                                    mollitia eveniet, nobis reprehenderit ipsum
                                    sint iure officia voluptatum nostrum quos
                                    maiores? Suscipit, hic qui eaque ipsum
                                    praesentium, minima ad provident, inventore
                                    atque recusandae repellat! Saepe veniam et
                                    quidem, itaque odit eveniet hic, blanditiis
                                    nulla unde rem voluptatum ut facere dolor
                                    deleniti voluptatem earum. Distinctio
                                    voluptate cum consequuntur odio pariatur,
                                    doloribus esse vero tempora molestias
                                    delectus ullam. Assumenda ab temporibus
                                    nobis eaque porro asperiores praesentium rem
                                    veritatis. Nesciunt ipsam ea hic natus
                                    officia nemo eius, enim nihil excepturi
                                    recusandae quia corporis? Molestiae officia
                                    ipsa illo aperiam sit inventore amet
                                    asperiores, provident aliquid possimus nisi
                                    laudantium recusandae rerum doloremque?
                                    Veritatis sequi repellendus quis tenetur
                                    odit id minus incidunt alias sed impedit
                                    velit, veniam recusandae magni, beatae ad
                                    odio eius dolorum quisquam! Nobis itaque
                                    saepe eum? Vero sed explicabo recusandae
                                    quia, eum temporibus laborum numquam? Nulla
                                    placeat corporis autem velit quibusdam iste
                                    dolore saepe, odit sunt possimus itaque
                                    quisquam tempora quis voluptas fugit officia
                                    hic reprehenderit cumque magnam molestias
                                    quaerat. Quam, quasi reiciendis? Odio, atque
                                    ipsum sint reprehenderit praesentium porro
                                    eos fuga est sit dicta quas iusto architecto
                                    possimus voluptatum eius nostrum. Maiores
                                    error consequuntur veniam! Incidunt, rem?
                                    Rem, dignissimos distinctio quam omnis culpa
                                    veniam molestias reprehenderit nulla cumque
                                    asperiores debitis nemo nihil, illo harum
                                    voluptate odit quibusdam quis quod
                                    voluptatibus illum placeat, suscipit enim
                                    totam! Placeat animi iusto officiis
                                    eligendi, reprehenderit autem qui ipsa ad
                                    nihil saepe in sunt, voluptates itaque
                                    adipisci ullam ab vero explicabo repellat
                                    nemo beatae. Repudiandae accusantium vero
                                    qui, voluptates voluptatem perferendis? Quae
                                    obcaecati labore officiis rerum facere sit
                                    nam incidunt veritatis beatae quaerat eius
                                    perferendis, unde iure magni cum minus
                                    officia iusto quibusdam corporis at. Aperiam
                                    nihil reiciendis quia omnis, labore quae
                                    eligendi quos ratione sunt non accusamus
                                    optio sequi dignissimos voluptatem quas
                                    dolore itaque obcaecati tempore blanditiis
                                    voluptatum doloremque alias. Esse aliquam
                                    debitis tenetur, quidem saepe maxime,
                                    excepturi quia quam possimus, ipsa expedita
                                    ex optio ipsam cum beatae! Culpa eligendi
                                    doloribus temporibus ratione! Officia totam
                                    voluptate neque accusantium a. Quo veritatis
                                    rem voluptatum dolores non, voluptate magnam
                                    officiis enim est quas, quod quisquam
                                    repellendus, veniam commodi sit facilis
                                    dolorem aliquam nihil perferendis esse amet
                                    dolore voluptates et? Veritatis a
                                    voluptatibus odit, repellat ad atque quo
                                    expedita nam dolorum voluptatem aliquam
                                    harum obcaecati cum, officiis quaerat
                                    deleniti suscipit quibusdam nihil beatae?
                                    Odio atque, facere commodi, soluta optio,
                                    animi voluptas omnis quo suscipit eaque
                                    corrupti sint. Aliquid, harum sequi! Nam
                                    quibusdam ipsum quis corrupti dolore dolores
                                    mollitia veritatis quod nemo voluptatibus
                                    perspiciatis similique animi neque, autem id
                                    sunt excepturi magni et distinctio.Lorem
                                    ipsum dolor sit amet, consectetur
                                    adipisicing elit. Possimus tempora
                                    temporibus accusantium perferendis
                                    necessitatibus ipsam unde, earum ratione
                                    assumenda beatae, veniam voluptatibus
                                    voluptas laboriosam nemo. Eum architecto
                                    veniam temporibus maxime a ea quibusdam,
                                    praesentium neque deleniti possimus nisi
                                    harum porro cupiditate fuga quas unde
                                    reprehenderit quis totam ipsa placeat
                                    tempore?
                                </p>
                            </div>
                            <!-- /.reviews-slider__item -->
                        </div>
                        <!-- /.swiper-slide -->
                    </div>
                    <!-- /.swiper-wrapper -->
                    <button
                        class="reviews-slider__button reviews-slider__button_prev"
                    ></button>
                    <button
                        class="reviews-slider__button reviews-slider__button_next"
                    ></button>
                </div>
                <!-- /.reviews-slider -->
            </div>
        </section>
        <section class="activities">
            <div class="container">
                <h2 class="activities__title">Other activities</h2>
                <div class="activities-wrapper">
                    <div class="card activities__card">
                        <img
                            src="img/activity-1.jpg"
                            alt="The curious corner 
                        of chamarel"
                            class="card__image"
                        />
                        <h3 class="card__title">
                            The curious corner of chamarel
                        </h3>
                        <button class="card__button">Book Now</button>
                    </div>
                    <!-- /.card -->
                    <div class="card activities__card">
                        <img
                            src="img/activity-2.jpg"
                            alt="Gymkhana club golf
                        course"
                            class="card__image"
                        />
                        <h3 class="card__title">Gymkhana club golf course</h3>
                        <button class="card__button">Book Now</button>
                    </div>
                    <!-- /.card -->
                    <div class="card activities__card">
                        <img
                            src="img/activity-3.jpg"
                            alt="Tamarind falls hiking
                        trip - full da"
                            class="card__image"
                        />
                        <h3 class="card__title">
                            Tamarind falls hiking trip - full day
                        </h3>
                        <button class="card__button">Book Now</button>
                    </div>
                    <!-- /.card -->
                    <div class="card activities__card">
                        <img
                            src="img/activity-4.jpg"
                            alt="The blue marine discovery
                        quest"
                            class="card__image"
                        />
                        <h3 class="card__title">
                            The blue marine discovery quest
                        </h3>
                        <button class="card__button">Book Now</button>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.activities-wrapper -->
            </div>
        </section>
        <?php include("footer.php") ?>
        