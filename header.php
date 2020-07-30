<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Best Tour Plan - Hotel Booking</title>
        <link
            href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&family=Nunito:wght@400;700;800&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="css/swiper-bundle.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=11e2213f-b130-4c50-a59e-6432b6608680"></script>
        <script src="mapbasics.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/parallax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
        <!-- jQuery Modal -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    </head>
    <body>
        <div id="ex1" class="modal">
            <p>Thanks for clicking. That felt good.</p>
        </div>
        <!-- Link to open the modal -->
        <header class="navbar navbar_mobile_fixed">
            <div class="container">
                <div class="navbar-top">
                    <a href="#" class="logo">
                        <img
                            src="img/horizontal-logo.svg"
                            alt="Logo: Best Tour Plan"
                            class="logo-img"
                        />
                    </a>

                    <form action="#" class="search navbar__search navbar__search_mobile_hidden">
                        <input
                            type="text"
                            class="search__input"
                            placeholder="Search Location"
                        />
                        <button class="search__button">
                            <img src="img/search.svg" alt="Icon: search" />
                        </button>
                    </form>

                    <a href="#" class="user navbar__user navbar__user_mobile_hidden">
                        <img
                            src="img/user-avatar.jpg"
                            alt="Avatar: Nathan"
                            class="user__avatar"
                        />
                        <span class="user__name">Nathan</span>
                    </a>
                    <!-- /.user -->
                    <button class="menu-button navbar-top__menu-button">
                        <span class="menu-button__line"></span>
                        <span class="menu-button__line"></span>
                        <span class="menu-button__line"></span>
                    </button>
                </div>
                <!-- /.navbar-top -->
            </div>
            <!-- /.container -->
            <div class="navbar-bottom">
                <div class="container">
                    <ul class="navbar-menu">
                        <li class="navbar-menu__item navbar-menu__item_mobile_visible">
                            <a href="#" class="user navbar__user navbar__user_mobile_visible">
                                <img
                                    src="img/user-avatar.jpg"
                                    alt="Avatar: Nathan"
                                    class="user__avatar"
                                />
                                <span class="user__name user__name_light">Nathan</span>
                            </a>
                        </li>
                        <li class="navbar-menu__item navbar-menu__item_mobile_visible">
                            <form action="#" class="search navbar__search navbar__search_mobile_visible">
                                <input
                                    type="text"
                                    class="search__input"
                                    placeholder="Search Location"
                                />
                                <button class="search__button">
                                    <img src="img/search.svg" alt="Icon: search" />
                                </button>
                            </form>
                        </li>
                        <li class="navbar-menu__item">
                            <a href="#" class="navbar-menu__link">All deals</a>
                        </li>
                        <li class="navbar-menu__item">
                            <a href="#" class="navbar-menu__link">Hotel</a>
                        </li>
                        <li class="navbar-menu__item">
                            <a href="activities.php" class="navbar-menu__link">Activities</a>
                        </li>
                        <li class="navbar-menu__item">
                            <a href="#" class="navbar-menu__link"
                                >Hotel day packages</a
                            >
                        </li>
                        <li class="navbar-menu__item">
                            <a href="restaurants.php" class="navbar-menu__link"
                                >Restaurants</a
                            >
                        </li>
                        <li class="navbar-menu__item">
                            <a href="#" class="navbar-menu__link">Events</a>
                        </li>
                        <li class="navbar-menu__item">
                            <a href="#" class="navbar-menu__link">Rodrigues</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <nav class="breadcrump">
            <div class="container">
                <ul class="breadcrump-list">
                    <li class="breadcrump-list__item">
                        <a href="" class="breadcrump-list__link">Home</a>
                    </li>
                    <li class="breadcrump-list__item">
                        <a href="" class="breadcrump-list__link"
                            >Flash Offers</a
                        >
                    </li>
                    <li class="breadcrump-list__item">
                        Grand Hilton Hotel
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.breadcrump -->