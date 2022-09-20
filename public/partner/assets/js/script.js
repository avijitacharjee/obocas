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
    $(".singin-popup-btn").on('click', function() {
        $(".singin-popup").toggleClass("d-none");
    });    
    $(".singin-popup-close").on('click', function() {
    // $(".signin-modal-container").on('click', function() {
        $(".singin-popup").addClass("d-none");
    });




});