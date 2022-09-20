var preloder = document.getElementById('loaging');

function loading() {
    preloder.style.display = 'none';
};

$(function() {


    //=========Index Tab
    $("#tab_buttons .info-container").on('click', function() {
        $(".arrow-container .arrow").removeClass("arrow_show");
        $("#tabs .tab").removeClass("show_tab");
    });

    $("#tab_buttons #button_one").on('click', function() {
        $(".arrow-container #arrow_one").addClass("arrow_show");
        $("#tabs #tab_one").addClass("show_tab");
    });

    $("#tab_buttons #button_tow").on('click', function() {
        $(".arrow-container #arrow_tow").addClass("arrow_show");
        $("#tabs #tab_tow").addClass("show_tab");
    });

    $("#tab_buttons #button_three").on('click', function() {
        $(".arrow-container #arrow_three").addClass("arrow_show");
        $("#tabs #tab_three").addClass("show_tab");
    });
    //=========/Index Tab


    $(".mobile_user_photo").on('click', function() {
        $(".mobile_user_photo-dropdown-menu").toggleClass("active");
    });

    $(".dropdown_button").on('click', function() {
        $(".dropdown_menu").toggleClass("dropdown_show");
    });

    $(".page-component-content").on('click', function() {
        $(".dropdown_menu").removeClass("dropdown_show");
    });

    // Side Plane
    $(".hamberger-menu").on('click', function() {
        $(".sidebar-panel").removeClass("hide-panel");
        $(".sidebar-panel").addClass("show-panel");
    });
    $(".overlay-sidebar-panel").on('click', function() {
        $(".sidebar-panel").removeClass("show-panel");
        $(".sidebar-panel").addClass("hide-panel");
    });


    // Profile Page Tab 

    $(".tab_menu .item").on('click', function() {
        $(".tab_menu .item").removeClass("active");
        $(".profile_page_tab").addClass("d-none");
    });


    $(".tab_menu .tab_menu_item_one").on('click', function() {
        $(".tab_menu .tab_menu_item_one").addClass("active");
        $(".profile-content-container").removeClass("d-none");
    });


    $(".tab_menu .tab_menu_item_tow").on('click', function() {
        $(".tab_menu .tab_menu_item_tow").addClass("active");
        $(".bank-info-component").removeClass("d-none");
    });


    // Report Page Tab
    $(".report_page_tab_nemu .item").on('click', function() {
        $(".report_page_tab_nemu .item").removeClass("active");
        $(".report_page_tab").addClass("d-none");
    });

    $(".report_page_tab_nemu .report_tab_nemu").on('click', function() {
        $(".report_page_tab_nemu .report_tab_nemu").addClass("active");
        $(".reporting-page").removeClass("d-none");
    });

    $(".report_page_tab_nemu .invoice_tab_nemu").on('click', function() {
        $(".report_page_tab_nemu .invoice_tab_nemu").addClass("active");
        $(".invoice-page").removeClass("d-none");
    });

    // Report Page Tab
    $(".buttons-wrapper .button-border").on('click', function() {
        $(".buttons-wrapper .button-border").removeClass("button-border-blue");
    });

    $(".buttons-wrapper .booking").on('click', function() {
        $(".buttons-wrapper .booking").addClass("button-border-blue");
    });

    $(".buttons-wrapper .departure").on('click', function() {
        $(".buttons-wrapper .departure").addClass("button-border-blue");
    });

    $(".buttons-wrapper .payment").on('click', function() {
        $(".buttons-wrapper .payment").addClass("button-border-blue");
    });


    // Chart Data
    $(".radio-text-wrapper .option").on('click', function() {
        $(".radio-text-wrapper .option").removeClass("option-selected");
    });

    $(".radio-text-wrapper .one-month").on('click', function() {
        $(".radio-text-wrapper .one-month").addClass("option-selected");
    });

    $(".radio-text-wrapper .three-month").on('click', function() {
        $(".radio-text-wrapper .three-month").addClass("option-selected");
    });

    $(".radio-text-wrapper .six-month").on('click', function() {
        $(".radio-text-wrapper .six-month").addClass("option-selected");
    });

    $(".radio-text-wrapper .one-year").on('click', function() {
        $(".radio-text-wrapper .one-year").addClass("option-selected");
    });


});