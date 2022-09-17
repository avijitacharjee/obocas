$(document).ready(function () {


    $("#automation_id_choose_owner_type_single").on('click', function () {
        $("#automation_id_choose_owner_type_single").addClass("selectable-box--selected");
        $("#automation_id_choose_owner_type_more_than_one").removeClass("selectable-box--selected");
        $(".properties-number").addClass("d-none");
        $("#automation_id_number_of_properties").val(1);
    });

    $("#automation_id_choose_owner_type_more_than_one").on('click', function () {
        $("#automation_id_choose_owner_type_more_than_one").addClass("selectable-box--selected");
        $("#automation_id_choose_owner_type_single").removeClass("selectable-box--selected");
        $("#automation_id_number_of_properties").val(2);
        
        $(".properties-number").removeClass("d-none");
    });


    $("#create_room").on('click', function () {
        $(".seg-cr-empty-state").addClass("hidden");
        $("#room_form").removeClass("hidden");
    });

    $(".edit-room").on('click', function () {
        $("#room_summaries").addClass("hidden");
        $("#room_form").removeClass("hidden");
    });




    $('.part_of_chain_yes').on('click', function () {
        $('.chain_name').removeClass('hidden');
    });
    $('.part_of_chain_no').on('click', function () {
        $('.chain_name').addClass('hidden');
    });


    $('.charge_credit_card_yes').on('click', function () {
        $('.creditcard_section').removeClass('hidden');
    });
    $('.charge_credit_card_no').on('click', function () {
        $('.creditcard_section').addClass('hidden');
    });


    $('.invoice_address_yes').on('click', function () {
        $('#recipient_address').addClass('hidden');
    });
    $('.invoice_address_no').on('click', function () {
        $('#recipient_address').removeClass('hidden');
    });


    $('.is_xml_property_yes').on('click', function () {
        $('#channel_manager_name_div').removeClass('hidden');
    });
    $('.is_xml_property_no').on('click', function () {
        $('#channel_manager_name_div').addClass('hidden');
    });

    $('.extra_beds_available_yes').on('click', function () {
        $('#extra_beds_setup').removeClass('hidden');
    });
    $('.extra_beds_available_no').on('click', function () {
        $('#extra_beds_setup').addClass('hidden');
    });    
    
    
    $('.menu_hamburguer').on('click', function () {
        $('.account-menu_mobile').toggleClass('active-mobile-menu');
    });



    $(".Children").change(function () {
        if ($(this).is(':checked'))
            $('.Children_body').removeClass('hidden');
        else
            $('.Children_body').addClass('hidden');
    });

    $(".Adults").change(function () {
        if ($(this).is(':checked'))
            $('.Adults_body').removeClass('hidden');
        else
            $('.Adults_body').addClass('hidden');
    });



});


function roomType() {
    $('.roomName').removeClass('hidden');

    // value = document.getElementById("pets_allowed").value;
    // if (value == 'no') {
    //     $('.pet_cost_question').addClass('hidden');
    // }
}

function parkingType() {
    $('.conditional').removeClass('hidden');

    // value = document.getElementById("pets_allowed").value;
    // if (value == 'no') {
    //     $('.pet_cost_question').addClass('hidden');
    // }
}

function breakfastType() {
    $('#breakfast_types').removeClass('hidden');
    $('.breakfast_price').removeClass('hidden');

    // value = document.getElementById("pets_allowed").value;
    // if (value == 'no') {
    //     $('.pet_cost_question').addClass('hidden');
    // }
}

function photoChange() {
    $('#property-photos').removeClass('hidden');
    $('.photos-content-empty').addClass('hidden');
    $('.property-photos_top').removeClass('hidden');
}


function petsType() {
    $('.pet_cost_question').removeClass('hidden');
    value = document.getElementById("pets_allowed").value;
    if (value == 'no') {
        $('.pet_cost_question').addClass('hidden');
    }
}



function addItem() {
    // (B1) CREATE NEW LIST ITEM
    var item = document.createElement("li");
    item.innerHTML = "New";
    // $(document).ready(function() {
    //     $("ul").append('<li>Scooter</li>');
    // });
    // (B2) APPEND TO LIST
    document.getElementById("demoA").appendChild(item);
}

function cont() {
    let numberOfHotels = document.getElementById('automation_id_number_of_properties').value;
    let href = 'property2/' + numberOfHotels;
    location.href = href;
}