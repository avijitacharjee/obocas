@extends('public.layout')
@section('content')
    <!-- Banner -->
    <div class="banner">
        <!-- Banner Text -->
        <div class="hero-banner-wrapper">
            <header class="banner_header">
                <div class="container">
                    <div class="header-large">
                        <h1> Find your next stay </h1>
                        <div class="sub-heading">Search deals on hotels, homes, and much
                            more...
                        </div>
                    </div>
                    <div class="searchbox_cross_product__title header-smal">
                        <h1 id="form_search_h1" class="b-no-tap-highlight">
                            Search
                        </h1>
                        <label class="search_hotels_subtext" for="input_destination">
                            Destinations, properties, even an address
                        </label>
                    </div>
                </div>
            </header>
        </div>
        <!-- /Banner Text -->
        <div class="container" style="position: relative;">
            <!-- Banner Search Box -->
            <div class="hero-banner-searchbox">
                <div class="sb-searchbox__outer" data-sb-outer>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <form id="" action="/search" method="GET"
                                    class="sb-searchbox sb-searchbox--painted sb-searchbox--xp js--sb-searchbox"
                                    data-component="search/searchbox/searchbox-xp" data-sb-id="main"
                                    data-sb-flags=" AEJPAcBacPONDcFGHT:0 calendar_on_destination_change:1 open_location_in_map_checkbox:1 with_popular_nearby_suggestions:1 can_show_sb_entire_place_checkbox:1 icon_revamp:1 region_second_line:1"
                                    data-is-first-visible="1">
                                    <div class="xp__fieldset js--sb-fieldset accommodation " data-view="accommodation">
                                        <div class="row">
                                            <div class="col-lg-10 col-sm-12 pr-md-0">
                                                <!-- Place Select Option -->
                                                <div class="place_option" style="height: 100%;">
                                                    <div class="form-group" style="height: 100%;">
                                                        <input type="text" name="search_data" style="height:100%;"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <!-- /Place Select Option -->
                                            </div>
                                            <div class="col-lg-2 col-sm-12 pl-md-0 responsive-pt-5">
                                                <!-- Submit/Search Button -->
                                                <div class="xp__button">
                                                    <div class="sb-searchbox-submit-col -button-messages"></div>
                                                    <div class="sb-searchbox-submit-col -submit-button ">
                                                        <button data-sb-id="main" type="submit"
                                                            class="sb-searchbox__button ">
                                                            <span>
                                                                Search
                                                            </span>
                                                            <span class="sb-submit-helper"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- Submit/Search Button -->
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Banner Search Box -->
        </div>
    </div>
    <!-- /Banner -->
    <!-- Carousel -->
    <style>
        .index-carousel {
            border-radius: 10px;
            /* background: linear-gradient(145deg, #f0f0f0, #cacaca); */
            margin-bottom: 25px;
            box-shadow: 5px 5px 12px #c3c3c3,
                -5px -5px 12px #fdfdfd;
        }
    </style>
    @if ($carousalImages)
        <div class="row">
            <div class="col-md-6">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"
                    style="margin: 0px 0px 10px 120px">
                    <div class="carousel-inner index-carousel">
                        @foreach ($carousalImages as $carousalImage)
                            <div @class(['carousel-item', 'active' => $loop->first]) data-bs-interval="2500">
                                <img src="{{ asset('') }}storage/{{ $carousalImage->image }}" class="d-block w-100"
                                    alt="...">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"
                    style="margin: 0px 120px 0px 0px">
                    <div class="carousel-inner index-carousel">
                        @foreach ($carousalImages as $carousalImage)
                            <div @class(['carousel-item', 'active' => $loop->first]) data-bs-interval="2500">
                                <img src="{{ asset('') }}storage/{{ $carousalImage->image }}" class="d-block w-100"
                                    alt="...">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- /Carousel -->
    <div id="" class="container">
        <div class="features-images">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="unified-postcard">
                        <div class="unified-postcard__content unified-postcard__content_pe"
                            style="background: url({{ asset('frontend/assets/images/city-1.webp') }}) no-repeat center center; background-size: cover;">
                            <div class="unified-postcard__overlay">
                                <div class="unified-postcard__header">
                                    <h3>
                                        <a href="/search?search_data=dhaka">Dhaka</a>
                                    </h3>
                                    <p>
                                        4,223 properties
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="unified-postcard">
                        <div class="unified-postcard__content unified-postcard__content_pe"
                            style="background: url({{ asset('frontend/assets/images/city-2.webp') }}) no-repeat center center; background-size: cover;">
                            <div class="unified-postcard__overlay">
                                <div class="unified-postcard__header">
                                    <h3>
                                        <a href="/search?search_data=chittagong">Chittagong</a>
                                    </h3>
                                    <p>
                                        4,223 properties
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="unified-postcard">
                        <div class="unified-postcard__content unified-postcard__content_pe"
                            style="background: url({{ asset('frontend/assets/images/city-3.webp') }}) no-repeat center center; background-size: cover;">
                            <div class="unified-postcard__overlay">
                                <div class="unified-postcard__header">
                                    <h3>
                                        <a href="/search?search_data=cox">
                                            Cox's Bazar
                                        </a>
                                    </h3>
                                    <p>
                                        4,040 properties
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="unified-postcard">
                        <div class="unified-postcard__content unified-postcard__content_pe"
                            style="background: url({{ asset('frontend/assets/images/city-4.webp') }}) no-repeat center center; background-size: cover;">
                            <div class="unified-postcard__overlay">
                                <div class="unified-postcard__header">
                                    <h3>
                                        <a href="/search?search_data=sylhet">
                                            Sylhet
                                        </a>
                                    </h3>
                                    <p>
                                        4,040 properties
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="unified-postcard">
                        <div class="unified-postcard__content unified-postcard__content_pe"
                            style="background: url({{ asset('frontend/assets/images/city-5.webp') }}) no-repeat center center; background-size: cover;">
                            <div class="unified-postcard__overlay">
                                <div class="unified-postcard__header">
                                    <h3>
                                        <a href="/search?search_data=rangamati">
                                            Rangamati
                                        </a>
                                    </h3>
                                    <p>
                                        4,040 properties
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Explore Bangladesh -->
        {{-- <div class="bui-spacer--largest popular-destinations-carousel-block mt-5">
      <div class="bui-title bui-title--headline_3 bui-spacer--large">
        <span class="bui-title__text">Explore Bangladesh</span>
        <span class="bui-title__subtitle">These popular destinations have a lot to offer</span>
      </div>
      <!-- Slider -->
      <div class="bui-carousel bui-carousel--small bui-u-bleed@small">
        <ul class="bui-carousel__inner ExploreSlider">
          @for ($i = 0; $i < 8; $i++)
          <li class="bui-carousel__item">
            <a class="bui-card bui-card--media bui-card--transparent popular-destinations-carousel-link"
              href="">
              <div class="bui-card__image-container">
                <img class="bui-card__image" src="{{ asset('frontend/assets/images/explore-bangladesh-1.webp')}}" alt="" />
              </div>
              <div class="bui-card__content">
                <div class="bui-title bui-title--strong_1 bui-card__title">
                  <span class="bui-card__title text-dark">Cox&#39;s Bazar</span>
                  <span class="bui-title__subtitle">60 properties</span>
                </div>
              </div>
            </a>
          </li>
          @endfor
        </ul>
      </div>
      <!-- Slider -->
    </div> --}}
        <!-- Explore Bangladesh -->
        <!-- Get inspiration for your next trip -->
        {{-- <div class="d-index__section bui-spacer--largest promote_articles mt-5">
      <h2 class="bui-f-font-display_two bui-spacer--large d-index__header-section">
        Get inspiration for your next trip
      </h2>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <!-- Single -->
          <a href="" class="promote_article">
            <div class="js-lazy-image promote_article_img"
              style="background: url('frontend/assets/images/inspiration-trip.webp');"></div>
            <div class="promote_article__overlay"></div>
            <div class="promote_article__content">
              <h3 class="promote_article__header text-white" id="promote_article_title_1">
                The best Michelin-starred hotel restaurants
              </h3>
              <p id="promote_article_desc_1" class="promote_article__description text-white">
                Have an unforgettable dining experience without leaving your hotel.
              </p>
            </div>
          </a>
          <!-- Single -->
        </div>
        <div class="col-lg-4 col-md-6">
          <!-- Single -->
          <a href="" class="promote_article ">
            <div class="js-lazy-image promote_article_img"
              style="background: url('frontend/assets/images/inspiration-trip-2.webp');"></div>
            <div class="promote_article__overlay"></div>
            <div class="promote_article__content">
              <h3 class="promote_article__header text-white" id="promote_article_title_2">
                Destination inspiration: Seoul, South Korea
              </h3>
              <p id="promote_article_desc_2" class="promote_article__description text-white">
                Mouth-watering food, dazzling nightlife, and shopping to rival Fifth Avenue.
              </p>
            </div>
          </a>
          <!-- Single -->
        </div>
        <div class="col-lg-4 col-md-12">
          <!-- Single -->
          <a href="" class="promote_article promote-articles-margin">
            <div class="js-lazy-image promote_article_img"
              style="background: url('frontend/assets/images/inspiration-trip-3.webp');"></div>
            <div class="promote_article__overlay"></div>
            <div class="promote_article__content">
              <h3 class="promote_article__header text-white" id="promote_article_title_3">
                The top 7 brunch spots in Los Angeles
              </h3>
              <p id="promote_article_desc_3" class="promote_article__description text-white">
                From ricotta toast to kimchi fried rice, 7 memorable late-morning meals to
                enjoy in LA.
              </p>
            </div>
          </a>
          <!-- Single -->
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <!-- Single type-2 -->
          <a href="" class="promote_article promote-articles-2-col ">
            <div class="js-lazy-image promote_article_img"
              style="background: url('frontend/assets/images/inspiration-trip-4.webp');"></div>
            <div class="promote_article__overlay"></div>
            <div class="promote_article__content">
              <h3 class="promote_article__header text-white" id="promote_article_title_4">5
                family-friendlysummer hikes in the Alps
              </h3>
              <p id="promote_article_desc_4" class="promote_article__description text-white">
                Discover snow-capped summertime wilderness on a family-friendly hiking
                adventure.
              </p>
            </div>
          </a>
          <!-- Single type-2 -->
        </div>
        <div class="col-lg-6 col-md-6">
          <!-- Single type-2 -->
          <a href="" class="promote_article promote-articles-2-col ">
            <div class="js-lazy-image promote_article_img"
              style="background: url('frontend/assets/images/inspiration-trip-5.webp');"></div>
            <div class="promote_article__overlay"></div>
            <div class="promote_article__content">
              <h3 class="promote_article__header text-white" id="promote_article_title_5">
                The 5 finest views in the USA
              </h3>
              <p id="promote_article_desc_5" class="promote_article__description text-white">
                Panoramic and photogenic national parks to take your breath away.
              </p>
            </div>
          </a>
          <!-- Single type-2 -->
        </div>
      </div>
    </div> --}}
        <!-- Get inspiration for your next trip -->
        <!-- Homes guests love -->
        <div class="d-index__section bui-spacer--largest bh-carousel--new">
            <h2 class="bui-f-font-display_two bui-spacer--large d-index__header-section ">
                Homes guests love
            </h2>
            <!-- Slider -->
            <div class="bui-carousel bui-carousel--medium u-bleed@small">
                <ul class="bui-carousel__inner js-bh-carousel-async-inner HomeGuest">
                    @foreach ($hotels as $hotel)
                        <!-- Single Slider -->
                        <li class="bui-carousel__item">
                            <a href="/property/{{ $hotel->id }}"
                                class="bui-card bui-card--media bui-card--transparent">
                                <div class="bui-card__image-container bh-carousel--new__photo"
                                    style="
                                        background: url('{{ asset('/storage') }}/{{ explode(';', $hotel->property_images)[0] }}');
                                        ">
                                </div>
                                <div class="bui-card__content bh-carousel--new__content">
                                    <h3 class="bui-card__title bh-carousel--new__title">
                                        <span>{{ $hotel->property_name }}</span>
                                    </h3>
                                    <p class="bui-card__subtitle"> {{ $hotel->city ?? $hotel->address }} </p>
                                    <p class="bh-carousel--new__price bui_color_black">
                                        Starting from BDT {{ $hotel->room_price_x_persons }}
                                    </p>
                                    {{--
                                    <div style="margin-top: 4px">
                                        <div
                                            class="bui-review-score c-score bui-review-score--inline bui-review-score--small">
                                            <div class="bui-review-score__badge" aria-label="Scored  ">
                                                8.9
                                            </div>
                                            <div class="bui-review-score__content">
                                                <div class="bui-review-score__title"> Excellent
                                                </div>
                                                <div class="bui-review-score__text"> 2,892 reviews </div>
                                            </div>
                                        </div>
                                    </div>
                                    --}}
                                </div>
                            </a>
                        </li>
                        <!-- /Single Slider -->
                    @endforeach
                </ul>
            </div>
            <!-- Slider -->
        </div>
        <!-- Homes guests love -->
    </div>
    @guest
        <div class="d-flex justify-content-center">
            <div class="bui-group__item">
                <svg class="bk-icon -streamline-account_create" height="24" style="display:none;" width="24"
                    viewBox="0 0 24 24" role="presentation">
                    <path
                        d="M22.5 17.25a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0zm1.5 0a6.75 6.75 0 1 0-13.5 0 6.75 6.75 0 0 0 13.5 0zm-7.5-3v6a.75.75 0 0 0 1.5 0v-6a.75.75 0 0 0-1.5 0zM14.25 18h6a.75.75 0 0 0 0-1.5h-6a.75.75 0 0 0 0 1.5zM1.5 17.25a6.003 6.003 0 0 1 8.356-5.518.75.75 0 0 0 .588-1.38A7.504 7.504 0 0 0 0 17.25a.75.75 0 0 0 1.5 0zm9.375-12.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0zm1.5 0a4.875 4.875 0 1 0-9.75 0 4.875 4.875 0 0 0 9.75 0z" />
                </svg>
                <a class="bui-button bui-button--secondary js-header-login-link" href="/hotel-signin">
                    <span class="bui-button__text">
                        List your property
                    </span>
                </a>
            </div>
        </div>
    @endguest
@endsection
