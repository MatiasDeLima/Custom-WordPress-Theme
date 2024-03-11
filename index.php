<?php
get_header();
?>

<?php
// Header Component
get_template_part('template-parts/header');
?>

<!-- <?php
    $args = array(
        'category_name' => 'testemonials', // Substitua 'nome-da-categoria' pelo slug da categoria desejada
        'posts_per_page' => -1 // Para mostrar todos os posts da categoria, defina como -1
    );
    
    $custom_query = new WP_Query($args);
    
    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) :
            $custom_query->the_post();
            get_template_part('template-parts/post/content');
        endwhile;
    endif;
    
    // Restaurar a consulta original do WordPress
    wp_reset_postdata();

    // if(have_posts()) :
    //     while(have_posts()) :
    //         the_post();
    //         get_template_part('template-parts/post/content');
    //     endwhile;
    // endif;
?> -->

<main class="main" id="main">
    <section class="hero">
        <div class="hero__bg"></div>

        <div class="hero__container container grid">
            <div class="hero__data">
                <h1 class="hero__title">
                    Learn <br><span class="orange__text-color">Japanese</span> Fast<br> with Youtube<br> <span
                        class="orange__text-color">Immersion.</span>
                </h1>

                <p class="hero__description">
                    The fun and sustainable way to learn Japanese by watching your
                    favorite Youtubers, TV shows, animes, music, games. Designed for
                    effortlessly acquiring new vocabulary and grammar.
                </p>

                <button href="#" class="button button-flex">
                    <a href="#" class="text">Start 7-days for free trial</a>

                    <div class="button__icon">
                        <i class="ri-arrow-right-up-line"></i>
                    </div>
                </button>
            </div>

            <div class="hero__image">
                <!-- BG Circle -->
                <div class="hero__bg-circle"></div>

                <!-- Geometrys -->
                <div class="geometry green-geometry geometry-1"></div>
                <div class="geometry yellow-geometry geometry-2"></div>
                <div class="geometry orange-geometry geometry-3"></div>
                <div class="geometry orange-geometry geometry-4"></div>
                <div class="geometry green-geometry geometry-5"></div>

                <!-- Rate Component -->
                <div class="rate__component">
                    <div class="rate__user">
                        <div class="rate__user-img">
                            <img src="<?= get_template_directory_uri() . '/assets/images/rate-img-6.png' ?>" alt="">
                        </div>

                        <div class="rate__user-data">
                            <p class="rate__user-title">10k+</p>
                            <span class="rate__user-categorie">Online Studants</span>
                        </div>
                    </div>

                    <div class="rate__users">
                        <img src="<?= get_template_directory_uri() . '/assets/images/rate-img-1.png' ?>" alt=""
                            class="rate__users-img">
                        <img src="<?= get_template_directory_uri() . '/assets/images/rate-img-2.png' ?>" alt=""
                            class="rate__users-img">
                        <img src="<?= get_template_directory_uri() . '/assets/images/rate-img-3.png' ?>" alt=""
                            class="rate__users-img">
                        <img src="<?= get_template_directory_uri() . '/assets/images/rate-img-4.png' ?>" alt=""
                            class="rate__users-img">
                        <img src="<?= get_template_directory_uri() . '/assets/images/rate-img-5.png' ?>" alt=""
                            class="rate__users-img">
                    </div>
                </div>

                <!-- Language Icon -->
                <div class="language__icon">
                    <div class="language__icon-icon">
                        <i class="ri-global-line"></i>
                    </div>

                    <div class="language__icon-data">
                        <p class="language__icon-title">30+</p>
                        <span class="language__icon-text">Language</span>
                    </div>
                </div>

                <div class="language__icon-2">
                    <div class="language__icon-orange">
                        <i class="ri-file-video-line"></i>
                    </div>

                    <div class="language__icon-data">
                        <p class="language__icon-title">Live</p>
                        <span class="language__icon-text">Webnar</span>
                    </div>
                </div>


                <!-- Youtube -->
                <div class="hero__youtube">
                    <svg width="19" height="13" viewBox="0 0 19 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.512 2.09649C18.3056 1.30295 17.8529 0.631286 17.0773 0.420036C15.6717 0.0354525 9.90381 0.000244141 9.90381 0.000244141C9.90381 0.000244141 4.13587 0.0354525 2.73028 0.420036C1.95469 0.631286 1.50469 1.30295 1.29557 2.09649C0.919691 3.53462 0.903809 6.50024 0.903809 6.50024C0.903809 6.50024 0.919691 9.46587 1.29557 10.904C1.50204 11.6975 1.95469 12.3692 2.73028 12.5805C4.13587 12.965 9.90381 13.0002 9.90381 13.0002C9.90381 13.0002 15.6717 12.965 17.0773 12.5805C17.8529 12.3692 18.3056 11.6975 18.512 10.904C18.8879 9.46587 18.9038 6.50024 18.9038 6.50024C18.9038 6.50024 18.8879 3.53462 18.512 2.09649Z"
                            fill="#FF0000" />
                        <path d="M12.9744 6.50024L8.20969 3.79191V9.20858" fill="white" />
                    </svg>
                </div>

                <!-- Advantage Component -->
                <div class="hero__advantages">
                    <h3 class="hero__advantages-title">Our Advantages</h3>

                    <ul class="hero__advantages-list">
                        <div class="hero__advantages-item">
                            <div class="hero__advantages-icon">
                                <i class="ri-checkbox-circle-line"></i>
                            </div>

                            <p class="hero__advantages-text">Fast learning</p>
                        </div>

                        <div class="hero__advantages-item">
                            <div class="hero__advantages-icon">
                                <i class="ri-checkbox-circle-line"></i>
                            </div>

                            <p class="hero__advantages-text">Youtube Platform</p>
                        </div>

                        <div class="hero__advantages-item">
                            <div class="hero__advantages-icon">
                                <i class="ri-checkbox-circle-line"></i>
                            </div>

                            <p class="hero__advantages-text">Easy to learn</p>
                        </div>
                    </ul>

                    <a class="hero__advantages-button">
                        See More <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <img src="<?= get_template_directory_uri() . '/assets/images/hero-image-2.png' ?>" alt="" class="hero__img">

            </div>
        </div>
    </section>

    <section class="testimonials section">
        <h2 class="section__title">Testimonials</h2>

        <div class="testimonials__container container grid">
            <div>
                <svg class="testimonials-mask">
                    <clipPath id="testimonials-clip">
                        <path
                            d="M294.5 66C302.406 66 306.36 66 309.59 66.9225C317.566 69.2001 323.8 75.4343 326.077 83.4099C327 86.6404 327 90.5936 327 98.5V268.8C327 286.722 327 295.683 323.512 302.528C320.444 308.549 315.549 313.444 309.528 316.512C302.683 320 293.722 320 275.8 320H51.2C33.2783 320 24.3175 320 17.4723 316.512C11.4511 313.444 6.55573 308.549 3.48779 302.528C0 295.683 0 286.722 0 268.8V51.2C0 33.2783 0 24.3175 3.48779 17.4723C6.55573 11.4511 11.4511 6.55574 17.4723 3.48779C24.3175 0 33.2783 0 51.2 0H229C237.373 0 241.56 0 244.967 1.03343C252.637 3.36023 258.64 9.36273 260.967 17.0332C262 20.4399 262 24.7106 262 33.2519C262 41.3237 262 45.3596 262.923 48.5901C265.2 56.5657 271.434 62.7999 279.41 65.0775C282.64 66 286.594 66 294.5 66Z"
                            fill="white" />
                    </clipPath>
                </svg>

                <article class="testimonials__card">
                    <div class="testimonials__card-icon">
                        <i class="ri-double-quotes-r"></i>
                    </div>

                    <div class="testimonials__card-bg">
                        <div>
                            <div class=" testimonials__profile">
                                <img src="<?= get_template_directory_uri() . '/assets/images/testemonials-img-1.png' ?>"
                                    alt="" class="testemonials__img">

                                <div class="testemonials__card-data">
                                    <div class="testemonials__data-title">John Kelisom</div>
                                    <span class="testemonials__data-categorie">CEO At Ubiza</span>
                                </div>
                            </div>

                            <p class="testemonials__card-text">
                                Always a pleasure to work with matias team. such professional
                                and happy people and you know you receive a quick, innovative
                                and no fuss service. and you know you receive a quick,
                                innovative and no fuss service.
                            </p>
                        </div>

                        <div class="testemonials__card-rate">
                            <span class="testemonials__rate-text">5.0</span>

                            <ul class="testemonials__rate-stars">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-line"></i>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>

            <div>
                <svg class="testimonials-mask">
                    <clipPath id="testimonials-clip">
                        <path
                            d="M294.5 66C302.406 66 306.36 66 309.59 66.9225C317.566 69.2001 323.8 75.4343 326.077 83.4099C327 86.6404 327 90.5936 327 98.5V268.8C327 286.722 327 295.683 323.512 302.528C320.444 308.549 315.549 313.444 309.528 316.512C302.683 320 293.722 320 275.8 320H51.2C33.2783 320 24.3175 320 17.4723 316.512C11.4511 313.444 6.55573 308.549 3.48779 302.528C0 295.683 0 286.722 0 268.8V51.2C0 33.2783 0 24.3175 3.48779 17.4723C6.55573 11.4511 11.4511 6.55574 17.4723 3.48779C24.3175 0 33.2783 0 51.2 0H229C237.373 0 241.56 0 244.967 1.03343C252.637 3.36023 258.64 9.36273 260.967 17.0332C262 20.4399 262 24.7106 262 33.2519C262 41.3237 262 45.3596 262.923 48.5901C265.2 56.5657 271.434 62.7999 279.41 65.0775C282.64 66 286.594 66 294.5 66Z"
                            fill="white" />
                    </clipPath>
                </svg>

                <article class="testimonials__card">
                    <div class="testimonials__card-icon">
                        <i class="ri-double-quotes-r"></i>
                    </div>

                    <div class="testimonials__card-bg">
                        <div>
                            <div class=" testimonials__profile">
                                <img src="<?= get_template_directory_uri() . '/assets/images/testemonials-img-2.png' ?>"
                                    alt="" class="testemonials__img">

                                <div class="testemonials__card-data">
                                    <div class="testemonials__data-title">Marcos Santos </div>
                                    <span class="testemonials__data-categorie">Student</span>
                                </div>
                            </div>

                            <p class="testemonials__card-text">
                                Discovering this online Japanese learning platform has been an absolute delight! From
                                its
                                user-friendly interface to its immersive lessons, every aspect is designed to facilitate
                                effective learning.
                            </p>
                        </div>

                        <div class="testemonials__card-rate">
                            <span class="testemonials__rate-text">5.0</span>

                            <ul class="testemonials__rate-stars">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-line"></i>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>

            <div>
                <svg class="testimonials-mask">
                    <clipPath id="testimonials-clip">
                        <path
                            d="M294.5 66C302.406 66 306.36 66 309.59 66.9225C317.566 69.2001 323.8 75.4343 326.077 83.4099C327 86.6404 327 90.5936 327 98.5V268.8C327 286.722 327 295.683 323.512 302.528C320.444 308.549 315.549 313.444 309.528 316.512C302.683 320 293.722 320 275.8 320H51.2C33.2783 320 24.3175 320 17.4723 316.512C11.4511 313.444 6.55573 308.549 3.48779 302.528C0 295.683 0 286.722 0 268.8V51.2C0 33.2783 0 24.3175 3.48779 17.4723C6.55573 11.4511 11.4511 6.55574 17.4723 3.48779C24.3175 0 33.2783 0 51.2 0H229C237.373 0 241.56 0 244.967 1.03343C252.637 3.36023 258.64 9.36273 260.967 17.0332C262 20.4399 262 24.7106 262 33.2519C262 41.3237 262 45.3596 262.923 48.5901C265.2 56.5657 271.434 62.7999 279.41 65.0775C282.64 66 286.594 66 294.5 66Z"
                            fill="white" />
                    </clipPath>
                </svg>

                <article class="testimonials__card">
                    <div class="testimonials__card-icon">
                        <i class="ri-double-quotes-r"></i>
                    </div>

                    <div class="testimonials__card-bg">
                        <div>
                            <div class=" testimonials__profile">
                                <img src="<?= get_template_directory_uri() . '/assets/images/testemonials-img-3.png' ?>"
                                    alt="" class="testemonials__img">

                                <div class="testemonials__card-data">
                                    <div class="testemonials__data-title">Carmen Martinez</div>
                                    <span class="testemonials__data-categorie">Student</span>
                                </div>
                            </div>

                            <p class="testemonials__card-text">
                                Learning Japanese through this online platform has been a game-changer! Structured
                                lessons,
                                interactive exercises, and cultural insights make it both effective and enjoyable.
                                Highly
                                recommend for anyone
                            </p>
                        </div>

                        <div class="testemonials__card-rate">
                            <span class="testemonials__rate-text">5.0</span>

                            <ul class="testemonials__rate-stars">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-line"></i>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="features section" id="features">
        <div class=" features__title-div">
            <img src="<?= get_template_directory_uri() . '/assets/images/feature-title.svg' ?>" alt=""
                class="features__title-img">

            <h2 class="features__title">
                Exciting and Robust<br>
                <span class="orange__text-color">Features</span> That Set<br>
                Our <span class="orange__text-color">Product</span> Apart.
            </h2>
        </div>

        <div class="swiper features__content container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <svg class="features-mask">
                        <clipPath id="features-clip">
                            <path
                                d="M163.5 38.0936C193.901 38.0936 190.81 0 226.364 0H274.236C292.705 0 301.939 0 308.994 3.59088C315.199 6.7495 320.244 11.7896 323.406 17.9887C327 25.0362 327 34.2619 327 52.7133V342.287C327 360.738 327 369.964 323.406 377.011C320.244 383.21 315.199 388.251 308.994 391.409C301.939 395 292.705 395 274.236 395H52.7645C34.2952 395 25.0605 395 18.0062 391.409C11.801 388.251 6.75605 383.21 3.59436 377.011C2.38419e-07 369.964 0 360.738 0 342.287V52.7133C0 34.2619 2.38419e-07 25.0362 3.59436 17.9887C6.75605 11.7896 11.801 6.7495 18.0062 3.59088C25.0605 0 34.2952 0 52.7644 0H101.667C133.614 0 133.099 38.0936 163.5 38.0936Z"
                                fill="white" />
                        </clipPath>
                    </svg>

                    <article class="features__card">
                        <div class="fetures__card-circle">
                            <i class="ri-global-line"></i>
                        </div>

                        <div class="features__card-bg">
                            <img src="<?= get_template_directory_uri() . '/assets/images/feature-1.png' ?>" alt=""
                                class="features__card-img">

                            <h3 class="features__card-title">
                                Most intelligent personalized dictionary each word has
                            </h3>

                            <p class="features__card-text">
                                Playable Video example sentences that are sourced from Youtube - Example sentences can
                                be
                                filtered based on chosen definition
                            </p>

                            <button href="#" class="button button-flex">
                                <a href="#" class="text">Learn More</a>

                                <div class="button__icon">
                                    <i class="ri-arrow-right-up-line"></i>
                                </div>
                            </button>
                        </div>
                    </article>
                </div>

                <div class="swiper-slide">
                    <svg class="features-mask">
                        <clipPath id="features-clip">
                            <path
                                d="M163.5 38.0936C193.901 38.0936 190.81 0 226.364 0H274.236C292.705 0 301.939 0 308.994 3.59088C315.199 6.7495 320.244 11.7896 323.406 17.9887C327 25.0362 327 34.2619 327 52.7133V342.287C327 360.738 327 369.964 323.406 377.011C320.244 383.21 315.199 388.251 308.994 391.409C301.939 395 292.705 395 274.236 395H52.7645C34.2952 395 25.0605 395 18.0062 391.409C11.801 388.251 6.75605 383.21 3.59436 377.011C2.38419e-07 369.964 0 360.738 0 342.287V52.7133C0 34.2619 2.38419e-07 25.0362 3.59436 17.9887C6.75605 11.7896 11.801 6.7495 18.0062 3.59088C25.0605 0 34.2952 0 52.7644 0H101.667C133.614 0 133.099 38.0936 163.5 38.0936Z"
                                fill="white" />
                        </clipPath>
                    </svg>

                    <article class="features__card">
                        <div class="fetures__card-circle">
                            <i class="ri-global-line"></i>
                        </div>

                        <div class="features__card-bg">
                            <img src="<?= get_template_directory_uri() . '/assets/images/feature-2.png' ?>" alt=""
                                class="features__card-img">

                            <h3 class="features__card-title">
                                Intelligent popup dictionary on subtitles
                            </h3>

                            <p class="features__card-text">
                                When hovering or clicking on subtitles, you get to see the dictionary entry for each
                                word.
                                And
                                if the word has multiple meanings, only the relevant meaning is displayed.
                            </p>

                            <button href="#" class="button button-flex">
                                <a href="#" class="text">Learn More</a>

                                <div class="button__icon">
                                    <i class="ri-arrow-right-up-line"></i>
                                </div>
                            </button>
                        </div>
                    </article>
                </div>

                <div class="swiper-slide">
                    <svg class="features-mask">
                        <clipPath id="features-clip">
                            <path
                                d="M163.5 38.0936C193.901 38.0936 190.81 0 226.364 0H274.236C292.705 0 301.939 0 308.994 3.59088C315.199 6.7495 320.244 11.7896 323.406 17.9887C327 25.0362 327 34.2619 327 52.7133V342.287C327 360.738 327 369.964 323.406 377.011C320.244 383.21 315.199 388.251 308.994 391.409C301.939 395 292.705 395 274.236 395H52.7645C34.2952 395 25.0605 395 18.0062 391.409C11.801 388.251 6.75605 383.21 3.59436 377.011C2.38419e-07 369.964 0 360.738 0 342.287V52.7133C0 34.2619 2.38419e-07 25.0362 3.59436 17.9887C6.75605 11.7896 11.801 6.7495 18.0062 3.59088C25.0605 0 34.2952 0 52.7644 0H101.667C133.614 0 133.099 38.0936 163.5 38.0936Z"
                                fill="white" />
                        </clipPath>
                    </svg>

                    <article class="features__card">
                        <div class="fetures__card-circle">
                            <i class="ri-global-line"></i>
                        </div>

                        <div class="features__card-bg">
                            <img src="<?= get_template_directory_uri() . '/assets/images/feature-3.png' ?>" alt=""
                                class="features__card-img">

                            <h3 class="features__card-title">
                                Friendly for all levels
                            </h3>

                            <p class="features__card-text">
                                We keep track of your vocabulary and grammar progress so that we can show you which
                                videos
                                are
                                appropriate for your level, whether beginner, intermediate or advanced
                            </p>

                            <button href="#" class="button button-flex">
                                <a href="#" class="text">Learn More</a>

                                <div class="button__icon">
                                    <i class="ri-arrow-right-up-line"></i>
                                </div>
                            </button>
                        </div>
                    </article>
                </div>

                <div class="swiper-slide">
                    <svg class="features-mask">
                        <clipPath id="features-clip">
                            <path
                                d="M163.5 38.0936C193.901 38.0936 190.81 0 226.364 0H274.236C292.705 0 301.939 0 308.994 3.59088C315.199 6.7495 320.244 11.7896 323.406 17.9887C327 25.0362 327 34.2619 327 52.7133V342.287C327 360.738 327 369.964 323.406 377.011C320.244 383.21 315.199 388.251 308.994 391.409C301.939 395 292.705 395 274.236 395H52.7645C34.2952 395 25.0605 395 18.0062 391.409C11.801 388.251 6.75605 383.21 3.59436 377.011C2.38419e-07 369.964 0 360.738 0 342.287V52.7133C0 34.2619 2.38419e-07 25.0362 3.59436 17.9887C6.75605 11.7896 11.801 6.7495 18.0062 3.59088C25.0605 0 34.2952 0 52.7644 0H101.667C133.614 0 133.099 38.0936 163.5 38.0936Z"
                                fill="white" />
                        </clipPath>
                    </svg>

                    <article class="features__card">
                        <div class="fetures__card-circle">
                            <i class="ri-global-line"></i>
                        </div>

                        <div class="features__card-bg">
                            <img src="<?= get_template_directory_uri() . '/assets/images/feature-4.png' ?>" alt=""
                                class="features__card-img">

                            <h3 class="features__card-title">
                                AI powered explanations of subtitles
                            </h3>

                            <p class="features__card-text">
                                Don't fully understand a sentence from a video? Using AI, we provide you a clearer
                                understanding
                                of the meaning of the sentence and the grammatical points used.
                            </p>

                            <button href="#" class="button button-flex">
                                <a href="#" class="text">Learn More</a>

                                <div class="button__icon">
                                    <i class="ri-arrow-right-up-line"></i>
                                </div>
                            </button>
                        </div>
                    </article>
                </div>

                <div class="swiper-slide">
                    <svg class="features-mask">
                        <clipPath id="features-clip">
                            <path
                                d="M163.5 38.0936C193.901 38.0936 190.81 0 226.364 0H274.236C292.705 0 301.939 0 308.994 3.59088C315.199 6.7495 320.244 11.7896 323.406 17.9887C327 25.0362 327 34.2619 327 52.7133V342.287C327 360.738 327 369.964 323.406 377.011C320.244 383.21 315.199 388.251 308.994 391.409C301.939 395 292.705 395 274.236 395H52.7645C34.2952 395 25.0605 395 18.0062 391.409C11.801 388.251 6.75605 383.21 3.59436 377.011C2.38419e-07 369.964 0 360.738 0 342.287V52.7133C0 34.2619 2.38419e-07 25.0362 3.59436 17.9887C6.75605 11.7896 11.801 6.7495 18.0062 3.59088C25.0605 0 34.2952 0 52.7644 0H101.667C133.614 0 133.099 38.0936 163.5 38.0936Z"
                                fill="white" />
                        </clipPath>
                    </svg>

                    <article class="features__card">
                        <div class="fetures__card-circle">
                            <i class="ri-global-line"></i>
                        </div>

                        <div class="features__card-bg">
                            <img src="<?= get_template_directory_uri() . '/assets/images/feature-5.png' ?>" alt=""
                                class="features__card-img">

                            <h3 class="features__card-title">
                                Import & Analyze Video
                            </h3>

                            <p class="features__card-text">
                                Learn from any publicly available Youtube video with our import tool. Also, get a
                                difficult
                                breakdown of a video before watching it.
                            </p>

                            <button href="#" class="button button-flex">
                                <a href="#" class="text">Learn More</a>

                                <div class="button__icon">
                                    <i class="ri-arrow-right-up-line"></i>
                                </div>
                            </button>
                        </div>
                    </article>
                </div>

                <div class="swiper-slide">
                    <svg class="features-mask">
                        <clipPath id="features-clip">
                            <path
                                d="M163.5 38.0936C193.901 38.0936 190.81 0 226.364 0H274.236C292.705 0 301.939 0 308.994 3.59088C315.199 6.7495 320.244 11.7896 323.406 17.9887C327 25.0362 327 34.2619 327 52.7133V342.287C327 360.738 327 369.964 323.406 377.011C320.244 383.21 315.199 388.251 308.994 391.409C301.939 395 292.705 395 274.236 395H52.7645C34.2952 395 25.0605 395 18.0062 391.409C11.801 388.251 6.75605 383.21 3.59436 377.011C2.38419e-07 369.964 0 360.738 0 342.287V52.7133C0 34.2619 2.38419e-07 25.0362 3.59436 17.9887C6.75605 11.7896 11.801 6.7495 18.0062 3.59088C25.0605 0 34.2952 0 52.7644 0H101.667C133.614 0 133.099 38.0936 163.5 38.0936Z"
                                fill="white" />
                        </clipPath>
                    </svg>

                    <article class="features__card">
                        <div class="fetures__card-circle">
                            <i class="ri-global-line"></i>
                        </div>

                        <div class="features__card-bg">
                            <img src="<?= get_template_directory_uri() . '/assets/images/feature-6.png' ?>" alt=""
                                class="features__card-img">

                            <h3 class="features__card-title">
                                Gamified
                            </h3>

                            <p class="features__card-text">
                                Elevate your Japanese learning experience with our innovative platform. Our cutting-edge
                                level
                                up system and engaging animations add an extra layer of excitement to mastering new
                                vocabulary.
                            </p>

                            <button href="#" class="button button-flex">
                                <a href="#" class="text">Learn More</a>

                                <div class="button__icon">
                                    <i class="ri-arrow-right-up-line"></i>
                                </div>
                            </button>
                        </div>
                    </article>
                </div>

                <div class="swiper-slide">
                    <svg class="features-mask">
                        <clipPath id="features-clip">
                            <path
                                d="M163.5 38.0936C193.901 38.0936 190.81 0 226.364 0H274.236C292.705 0 301.939 0 308.994 3.59088C315.199 6.7495 320.244 11.7896 323.406 17.9887C327 25.0362 327 34.2619 327 52.7133V342.287C327 360.738 327 369.964 323.406 377.011C320.244 383.21 315.199 388.251 308.994 391.409C301.939 395 292.705 395 274.236 395H52.7645C34.2952 395 25.0605 395 18.0062 391.409C11.801 388.251 6.75605 383.21 3.59436 377.011C2.38419e-07 369.964 0 360.738 0 342.287V52.7133C0 34.2619 2.38419e-07 25.0362 3.59436 17.9887C6.75605 11.7896 11.801 6.7495 18.0062 3.59088C25.0605 0 34.2952 0 52.7644 0H101.667C133.614 0 133.099 38.0936 163.5 38.0936Z"
                                fill="white" />
                        </clipPath>
                    </svg>

                    <article class="features__card">
                        <div class="fetures__card-circle">
                            <i class="ri-global-line"></i>
                        </div>

                        <div class="features__card-bg">
                            <img src="<?= get_template_directory_uri() . '/assets/images/feature-7.png' ?>" alt=""
                                class="features__card-img">

                            <h3 class="features__card-title">
                                SRS
                            </h3>

                            <p class="features__card-text">
                                Introducing our revolutionary SRS-based video quiz system, designed to enhance your
                                retention of
                                vocabulary and grammar like never before. Say goodbye to traditional rote memorization
                                methods
                            </p>

                            <button href="#" class="button button-flex">
                                <a href="#" class="text">Learn More</a>

                                <div class="button__icon">
                                    <i class="ri-arrow-right-up-line"></i>
                                </div>
                            </button>
                        </div>
                    </article>
                </div>
            </div>

            <div class="swiper-buttons">
                <div class="swiper-button-prev">
                    <i class="ri-arrow-left-line"></i>
                </div>

                <div class="swiper-button-next">
                    <i class="ri-arrow-right-line"></i>
                </div>
            </div>
        </div>
    </section>

    <section class="analize section">
        <div class="analize__container container grid">
            <div class="video__component">
                <img src="<?= get_template_directory_uri() . '/assets/images/analize-img.svg' ?>" alt=""
                    class="analize-img">
                <h3 class="video__component-title">Japanese with John Miyazaki</h3>
                <p class="video__component-description">N5 - Beginner level</p>

                <div class="video__component-play">
                    <div class="video__play-content">
                        <div class="video__progress-text">
                            <span>1:10</span>

                            <span>15:00</span>
                        </div>

                        <div class="video__progreess"></div>

                        <div class="video__component-actions">
                            <div class="video__actions-flex">
                                <button class="video__component-button background-orange white__color">
                                    <i class="ri-pause-mini-fill"></i>
                                </button>

                                <button class="video__component-button">
                                    <i class="ri-loop-left-fill"></i>
                                </button>

                                <button class="video__component-button">
                                    <i class="ri-loop-right-line"></i>
                                </button>
                            </div>

                            <div class="video__actions-flex">
                                <button class="video__component-button">
                                    <i class="ri-movie-2-line"></i>
                                </button>
                                <button class="video__component-button">
                                    <i class="ri-folder-video-line"></i>
                                </button>
                                <button class="video__component-button">
                                    <i class="ri-sidebar-unfold-line"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <img src="<?= get_template_directory_uri() . '/assets/images/analize.png' ?>" alt=""
                        class="video__component-img" />
                </div>

                <div class="video__component-bottom">
                    <div class="video__component-tabs">
                        <div class="video__tab tab-active">Vocabulary</div>
                        <div class="video__tab tab-desable">
                            Grammar
                            <span>0</span>
                        </div>
                    </div>

                    <div class="video__component-legends">
                        <div class="video__legend-content">
                            <h3 class="video__legend-text">
                                今日は、動詞の時制の微妙な点に迫り、
                            </h3>

                            <button class="video__legend-copy">
                                <i class="ri-file-copy-fill"></i>
                            </button>
                        </div>

                        <div class="video__legend-content">
                            <h3 class="video__legend-text">
                                Today, we will delve into the...
                            </h3>

                            <button class="video__legend-copy">
                                <i class="ri-file-copy-fill"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="analize__data">
                <h2 class="analize__title">
                    <span class="orange__text-color">Import</span> & Analyze<br> Video
                </h2>
                <p class="analize__description">
                    Learn from any publicly available Youtube video with our import tool. Also,
                    get a difficult breakdown of a video before watching it.
                    Learn from any publicly available Youtube video with our
                    import tool. Also, get a difficult breakdown of a video before watching it.
                </p>

                <button href="#" class="button button-flex">
                    <a href="#" class="text">Learn More</a>

                    <div class="button__icon">
                        <i class="ri-arrow-right-up-line"></i>
                    </div>
                </button>
            </div>
        </div>
    </section>

    <section class="demo section" id="demo">
        <div class="demo__container container grid">
            <div class="demo__data">
                <h2 class="demo__title">
                    Most intelligent<br>
                    <span class="orange__text-color">personalized</span><br>
                    dictionary each<br>
                    word has
                </h2>

                <p class="demo__description">
                    Always a pleasure to work with matias team.
                    such professional and happy people and you
                    know you receive a quick, innovative and no fuss service.
                </p>

                <div class="demo__data-infos">

                    <div class="demo__infos-item">
                        <div class="demo__item-icon">
                            <i class="ri-checkbox-circle-line"></i>
                        </div>

                        <h3 class="demo__item-text">Fast Progress</h3>
                    </div>

                    <div class="demo__infos-item">
                        <div class="demo__item-icon">
                            <i class="ri-checkbox-circle-line"></i>
                        </div>

                        <h3 class="demo__item-text">Easy Platform</h3>
                    </div>

                    <div class="demo__infos-item">
                        <div class="demo__item-icon">
                            <i class="ri-checkbox-circle-line"></i>
                        </div>

                        <h3 class="demo__item-text">Learn Easy</h3>
                    </div>

                    <div class="demo__infos-item">
                        <div class="demo__item-icon">
                            <i class="ri-checkbox-circle-line"></i>
                        </div>

                        <h3 class="demo__item-text">Start Now</h3>
                    </div>
                </div>

                <button href="#" class="button button-flex">
                    <a href="#" class="text">Learn More</a>

                    <div class="button__icon">
                        <i class="ri-arrow-right-up-line"></i>
                    </div>
                </button>

            </div>

            <div class="video__component">
                <img src="<?= get_template_directory_uri() . '/assets/images/demo-img.svg' ?>" alt="" class="demo-img">
                <h3 class="video__component-title">Japanese with John Miyazaki</h3>
                <p class="video__component-description">N5 - Beginner level</p>

                <div class="video__component-play">
                    <div class="video__play-content">
                        <div class="video__progress-text">
                            <span>1:10</span>

                            <span>15:00</span>
                        </div>

                        <div class="video__progreess"></div>

                        <div class="video__component-actions">
                            <div class="video__actions-flex">
                                <button class="video__component-button background-orange white__color">
                                    <i class="ri-pause-mini-fill"></i>
                                </button>

                                <button class="video__component-button">
                                    <i class="ri-loop-left-fill"></i>
                                </button>

                                <button class="video__component-button">
                                    <i class="ri-loop-right-line"></i>
                                </button>
                            </div>

                            <div class="video__actions-flex">
                                <button class="video__component-button">
                                    <i class="ri-movie-2-line"></i>
                                </button>
                                <button class="video__component-button">
                                    <i class="ri-folder-video-line"></i>
                                </button>
                                <button class="video__component-button">
                                    <i class="ri-sidebar-unfold-line"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <img src="<?= get_template_directory_uri() . '/assets/images/demo.png' ?>" alt=""
                        class="video__component-img" />
                </div>

                <div class="video__component-bottom">
                    <div class="video__component-tabs">
                        <div class="video__tab tab-active">Vocabulary</div>
                        <div class="video__tab tab-desable">
                            Grammar
                            <span>0</span>
                        </div>
                    </div>

                    <div class="video__component-legends">
                        <div class="video__legend-content">
                            <h3 class="video__legend-text">
                                今日は、動詞の時制の微妙な点に迫り、
                            </h3>

                            <button class="video__legend-copy">
                                <i class="ri-file-copy-fill"></i>
                            </button>
                        </div>

                        <div class="video__legend-content">
                            <h3 class="video__legend-text">
                                Today, we will delve into the...
                            </h3>

                            <button class="video__legend-copy">
                                <i class="ri-file-copy-fill"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="advantages section" id="advantages">

        <h2 class="advantages__title">
            The <span class="orange__text-color">Advantage</span> of<br> <span
                class="orange__text-color">Language</span> Immersion
        </h2>

        <div class="advantages__container container grid">
            <div class="advantages__image">
                <img src="<?= get_template_directory_uri() . '/assets/images/dashboard-img.png' ?>" alt="">
            </div>

            <div class="advantages__content grid">

                <div>
                    <svg class="testimonials-mask">
                        <clipPath id="testimonials-clip">
                            <path
                                d="M294.5 66C302.406 66 306.36 66 309.59 66.9225C317.566 69.2001 323.8 75.4343 326.077 83.4099C327 86.6404 327 90.5936 327 98.5V268.8C327 286.722 327 295.683 323.512 302.528C320.444 308.549 315.549 313.444 309.528 316.512C302.683 320 293.722 320 275.8 320H51.2C33.2783 320 24.3175 320 17.4723 316.512C11.4511 313.444 6.55573 308.549 3.48779 302.528C0 295.683 0 286.722 0 268.8V51.2C0 33.2783 0 24.3175 3.48779 17.4723C6.55573 11.4511 11.4511 6.55574 17.4723 3.48779C24.3175 0 33.2783 0 51.2 0H229C237.373 0 241.56 0 244.967 1.03343C252.637 3.36023 258.64 9.36273 260.967 17.0332C262 20.4399 262 24.7106 262 33.2519C262 41.3237 262 45.3596 262.923 48.5901C265.2 56.5657 271.434 62.7999 279.41 65.0775C282.64 66 286.594 66 294.5 66Z"
                                fill="white" />
                        </clipPath>
                    </svg>

                    <article class="advantages__card">
                        <div class="testimonials__card-icon">
                            <i class="ri-global-line"></i>
                        </div>

                        <div class="advantages__card-bg">
                            <h3 class="advantages__card-title">
                                Replicates the way infants naturally acquire language.
                            </h3>

                            <p class="advantages__card-text">
                                Helps develop your intuition rather than translating
                                from your native language, youll begin to think in Japanese.
                            </p>

                            <button href="#" class="button button-flex">
                                <a href="#" class="text">Learn More</a>

                                <div class="button__icon">
                                    <i class="ri-arrow-right-up-line"></i>
                                </div>
                            </button>
                        </div>
                    </article>
                </div>


                <div>
                    <svg class="testimonials-mask">
                        <clipPath id="testimonials-clip">
                            <path
                                d="M294.5 66C302.406 66 306.36 66 309.59 66.9225C317.566 69.2001 323.8 75.4343 326.077 83.4099C327 86.6404 327 90.5936 327 98.5V268.8C327 286.722 327 295.683 323.512 302.528C320.444 308.549 315.549 313.444 309.528 316.512C302.683 320 293.722 320 275.8 320H51.2C33.2783 320 24.3175 320 17.4723 316.512C11.4511 313.444 6.55573 308.549 3.48779 302.528C0 295.683 0 286.722 0 268.8V51.2C0 33.2783 0 24.3175 3.48779 17.4723C6.55573 11.4511 11.4511 6.55574 17.4723 3.48779C24.3175 0 33.2783 0 51.2 0H229C237.373 0 241.56 0 244.967 1.03343C252.637 3.36023 258.64 9.36273 260.967 17.0332C262 20.4399 262 24.7106 262 33.2519C262 41.3237 262 45.3596 262.923 48.5901C265.2 56.5657 271.434 62.7999 279.41 65.0775C282.64 66 286.594 66 294.5 66Z"
                                fill="white" />
                        </clipPath>
                    </svg>

                    <article class="advantages__card">
                        <div class="testimonials__card-icon">
                            <i class="ri-flag-2-line"></i>
                        </div>

                        <div class="advantages__card-bg">
                            <h3 class="advantages__card-title">
                                Sustainable way of learning Japanese
                            </h3>

                            <p class="advantages__card-text">
                                It's fun because you get to choose content you enjoy and it's not intimidating because
                                you can choose videos appropriate for your level
                            </p>

                            <button href="#" class="button button-flex">
                                <a href="#" class="text">Learn More</a>

                                <div class="button__icon">
                                    <i class="ri-arrow-right-up-line"></i>
                                </div>
                            </button>
                        </div>
                    </article>
                </div>

                <div>
                    <svg class="advantages-mask">
                        <clipPath id="advantages-clip">
                            <path
                                d="M294.5 66C302.406 66 306.36 66 309.59 66.9225C317.566 69.2001 323.8 75.4343 326.077 83.4099C327 86.6404 327 90.5936 327 98.5V268.8C327 286.722 327 295.683 323.512 302.528C320.444 308.549 315.549 313.444 309.528 316.512C302.683 320 293.722 320 275.8 320H51.2C33.2783 320 24.3175 320 17.4723 316.512C11.4511 313.444 6.55573 308.549 3.48779 302.528C0 295.683 0 286.722 0 268.8V51.2C0 33.2783 0 24.3175 3.48779 17.4723C6.55573 11.4511 11.4511 6.55574 17.4723 3.48779C24.3175 0 33.2783 0 51.2 0H229C237.373 0 241.56 0 244.967 1.03343C252.637 3.36023 258.64 9.36273 260.967 17.0332C262 20.4399 262 24.7106 262 33.2519C262 41.3237 262 45.3596 262.923 48.5901C265.2 56.5657 271.434 62.7999 279.41 65.0775C282.64 66 286.594 66 294.5 66Z"
                                fill="white" />
                        </clipPath>
                    </svg>

                    <article class="advantages__card">
                        <div class="testimonials__card-icon">
                            <i class="ri-honour-line"></i>
                        </div>

                        <div class="advantages__card-bg">
                            <h3 class="advantages__card-title">
                                Designed to help you speak like a native
                            </h3>

                            <p class="advantages__card-text">
                                Through shadowing (repeating a phrase or sentence that has just been said) a Native
                                speaker from Youtube videos, you learn how people speak in real life
                            </p>

                            <button href="#" class="button button-flex">
                                <a href="#" class="text">Learn More</a>

                                <div class="button__icon">
                                    <i class="ri-arrow-right-up-line"></i>
                                </div>
                            </button>
                        </div>
                    </article>
                </div>
            </div>

            <button href="#" class="advantages__button button button-flex">
                <a href="#" class="text">More About Platform</a>

                <div class="button__icon">
                    <i class="ri-arrow-right-up-line"></i>
                </div>
            </button>
        </div>
    </section>
</main>

<?php
// Footer Component
get_template_part('template-parts/footer');
?>

<?php
get_footer();
?>