$(document).ready(function () {
    $(".mobile-menu-btn").on('click', function () {
        $(".bui-overlay__content").addClass("active");
    });

    $(".bui-modal__close").on('click', function () {
        $(".bui-overlay__content").removeClass("active");
    });

    $("#mobile-filter-btn").on('click', function () {
        $(".mobile-filter-modal").addClass("active");
    });

    $("#mobile-filter-close-btn").on('click', function () {
        $(".mobile-filter-modal").removeClass("active");
    });



    // ExploreSlider
    $('.ExploreSlider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        infinite: false,
        dots: false,
        prevArrow: '<button class="slide-arrow prev-arrow"><svg class="bk-icon -streamline-arrow_nav_left bui-carousel__prev" height="32" width="32" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M14.55 18a.74.74 0 0 1-.53-.22l-5-5A1.08 1.08 0 0 1 8.7 12a1.1 1.1 0 0 1 .3-.78l5-5a.75.75 0 0 1 1.06 0 .74.74 0 0 1 0 1.06L10.36 12l4.72 4.72a.74.74 0 0 1 0 1.06.73.73 0 0 1-.53.22zm-4.47-5.72zm0-.57z"></path></svg></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><svg class="bk-icon -streamline-arrow_nav_right bui-carousel__next" height="32" width="32" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M9.45 6c.2 0 .39.078.53.22l5 5c.208.206.323.487.32.78a1.1 1.1 0 0 1-.32.78l-5 5a.75.75 0 0 1-1.06 0 .74.74 0 0 1 0-1.06L13.64 12 8.92 7.28a.74.74 0 0 1 0-1.06.73.73 0 0 1 .53-.22zm4.47 5.72zm0 .57z"></path></svg></button>',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: false
            },

        }]
    });


    // Homes guests
    $('.HomeGuest').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: false,
        autoplay: true,
        dots: false,
        prevArrow: '<button class="slide-arrow prev-arrow"><svg class="bk-icon -streamline-arrow_nav_left bui-carousel__prev" height="32" width="32" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M14.55 18a.74.74 0 0 1-.53-.22l-5-5A1.08 1.08 0 0 1 8.7 12a1.1 1.1 0 0 1 .3-.78l5-5a.75.75 0 0 1 1.06 0 .74.74 0 0 1 0 1.06L10.36 12l4.72 4.72a.74.74 0 0 1 0 1.06.73.73 0 0 1-.53.22zm-4.47-5.72zm0-.57z"></path></svg></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><svg class="bk-icon -streamline-arrow_nav_right bui-carousel__next" height="32" width="32" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M9.45 6c.2 0 .39.078.53.22l5 5c.208.206.323.487.32.78a1.1 1.1 0 0 1-.32.78l-5 5a.75.75 0 0 1-1.06 0 .74.74 0 0 1 0-1.06L13.64 12 8.92 7.28a.74.74 0 0 1 0-1.06.73.73 0 0 1 .53-.22zm4.47 5.72zm0 .57z"></path></svg></button>',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                centerMode: false
            },

        }]
    });   

    // Confirm Page 
    $('.extend-trip').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: false,
        autoplay: false,
        dots: false,
        prevArrow: '<button class="slide-arrow prev-arrow"><svg class="bk-icon -streamline-arrow_nav_left bui-carousel__prev" height="32" width="32" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M14.55 18a.74.74 0 0 1-.53-.22l-5-5A1.08 1.08 0 0 1 8.7 12a1.1 1.1 0 0 1 .3-.78l5-5a.75.75 0 0 1 1.06 0 .74.74 0 0 1 0 1.06L10.36 12l4.72 4.72a.74.74 0 0 1 0 1.06.73.73 0 0 1-.53.22zm-4.47-5.72zm0-.57z"></path></svg></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><svg class="bk-icon -streamline-arrow_nav_right bui-carousel__next" height="32" width="32" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M9.45 6c.2 0 .39.078.53.22l5 5c.208.206.323.487.32.78a1.1 1.1 0 0 1-.32.78l-5 5a.75.75 0 0 1-1.06 0 .74.74 0 0 1 0-1.06L13.64 12 8.92 7.28a.74.74 0 0 1 0-1.06.73.73 0 0 1 .53-.22zm4.47 5.72zm0 .57z"></path></svg></button>',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                centerMode: false
            },

        }]
    });


    // // googleMap
    // var mapOptions = {
        
    //     center: new google.maps.LatLng(-34.397, 150.644),
    //     mapTypeId: google.maps.MapTypeId.ROADMAP
    //   }
    //   var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

});


