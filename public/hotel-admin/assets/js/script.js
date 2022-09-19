function selects() {
    var ele = document.getElementsByName('image_check');
    for (var i = 0; i < ele.length; i++) {
        if (ele[i].type == 'checkbox') {
            ele[i].checked = true;
            // alert("melon");
            $(".photo-item__photo").addClass("active");
            $(".disabled_button").attr('disabled', false);
        } else {
            $(".photo-item__photo").removeClass("active");
            $(".disabled_button").attr('disabled', true);
        }
    }
}

function deSelect() {
    var ele = document.getElementsByName('image_check');
    for (var i = 0; i < ele.length; i++) {
        if (ele[i].type == 'checkbox')
            ele[i].checked = false;
        $(".photo-item__photo").removeClass("active");
        $(".disabled_button").attr('disabled', true)

    }
}


function singleselects() {
    var ele = document.getElementsByName('image_check');
    $(".photo-item__photo").addClass("active");
    $(".disabled_button").attr('disabled', false);

    if (ele.checked == true) {
        // ele.checked = true;
        $(".photo-item__photo").removeClass("active");
        $(".disabled_button").attr('disabled', false);
    }

}


// Get all the desired elements into a node list
let elements = document.querySelectorAll(".Select_properties");

// Convert the node list into an Array so we can
// safely use Array methods with it
let elementsArray = Array.prototype.slice.call(elements);

// Loop over the array of elements
elementsArray.forEach(function(elem){
  // Assign an event handler
  elem.addEventListener("click", function(){
      if (elem.checked) {
        document.getElementById('Select_properties_btn').removeAttribute("disabled");
      }
      if (!elem.checked) {
        document.getElementById('Select_properties_btn').setAttribute("disabled", "true");
      }
  });
});



$(function () {

    $(".modal-close").on('click', function () {
        $(".delete-model").removeClass("bui-is-active");
    });


    // Filter Photo Tab
    $(".bui-tab__link").on('click', function () {
        $(".bui-tab__link").removeClass("active");
    });

    $(".filter_all").on('click', function () {
        $(".filter_all").addClass("active");
    });
    $(".filter_low").on('click', function () {
        $(".filter_low").addClass("active");
    });
    $(".filter_missing").on('click', function () {
        $(".filter_missing").addClass("active");
    });
    $(".filter_tags").on('click', function () {
        $(".filter_tags").addClass("active");
    });




    $(".ext-search-trigger").on('click', function () {
        $(".ext-search__wrap").addClass("ext-search__wrap--open");
    });



    $(".ext-search-input__cancel-link").on('click', function () {
        $(".ext-search__wrap").removeClass("ext-search__wrap--open");
    });
    $(".main").on('click', function () {
        $(".ext-search__wrap").removeClass("ext-search__wrap--open");
    });















    $("#rate-button").on('click', function () {
        $(".rate-type").toggleClass("d-none");
    });



    $(".add-meal-plan-button").on('click', function () {
        $(".add-meal-plan").removeClass("d-none");
    });
    $(".add-meal-plan-button-close").on('click', function () {
        $(".add-meal-plan").addClass("d-none");
    });


    $(".policy-button").on('click', function () {
        $(".policy-column-6").addClass("d-none");
        $(".policy-column-3").addClass("d-none");
        $(".policy-column-9").removeClass("d-none");
    });

    $(".policy-button-close").on('click', function () {
        $(".policy-column-6").removeClass("d-none");
        $(".policy-column-3").removeClass("d-none");
        $(".policy-column-9").addClass("d-none");
    });
    $(".meals-button").on('click', function () {
        $(".meals-column-6").addClass("d-none");
        $(".meals-column-3").addClass("d-none");
        $(".meals-column-9").removeClass("d-none");
    });

    $(".meals-button-close").on('click', function () {
        $(".meals-column-6").removeClass("d-none");
        $(".meals-column-3").removeClass("d-none");
        $(".meals-column-9").addClass("d-none");
    });

    $(".stay-button").on('click', function () {
        $(".stay-column-6").addClass("d-none");
        $(".stay-column-3").addClass("d-none");
        $(".stay-column-9").removeClass("d-none");
    });

    $(".stay-button-close").on('click', function () {
        $(".stay-column-6").removeClass("d-none");
        $(".stay-column-3").removeClass("d-none");
        $(".stay-column-9").addClass("d-none");
    });

    $(".price-button").on('click', function () {
        $(".price-column-6").addClass("d-none");
        $(".price-column-3").addClass("d-none");
        $(".price-column-9").removeClass("d-none");
    });

    $(".price-button-close").on('click', function () {
        $(".price-column-6").removeClass("d-none");
        $(".price-column-3").removeClass("d-none");
        $(".price-column-9").addClass("d-none");
    });

    $(".difference-button").on('click', function () {
        $(".difference-column-6").addClass("d-none");
        $(".difference-column-3").addClass("d-none");
        $(".difference-column-9").removeClass("d-none");
    });

    $(".difference-button-close").on('click', function () {
        $(".difference-column-6").removeClass("d-none");
        $(".difference-column-3").removeClass("d-none");
        $(".difference-column-9").addClass("d-none");
    });

    $(".rooms-button").on('click', function () {
        $(".rooms-column-6").addClass("d-none");
        $(".rooms-column-3").addClass("d-none");
        $(".rooms-column-9").removeClass("d-none");
    });

    $(".rooms-button-close").on('click', function () {
        $(".rooms-column-6").removeClass("d-none");
        $(".rooms-column-3").removeClass("d-none");
        $(".rooms-column-9").addClass("d-none");
    });

    $(".name-button").on('click', function () {
        $(".name-column-6").addClass("d-none");
        $(".name-column-3").addClass("d-none");
        $(".name-column-9").removeClass("d-none");
    });

    $(".name-button-close").on('click', function () {
        $(".name-column-6").removeClass("d-none");
        $(".name-column-3").removeClass("d-none");
        $(".name-column-9").addClass("d-none");
    });














    $(".more-filters").on('click', function () {
        $(".filters.bui-panel").toggleClass("d-none");
    });

    $("#bui-table__row1").on('click', function () {
        $("#bui-table__row1").toggleClass("bui-table__row--expanded");
    });
    $("#bui-table__row2").on('click', function () {
        $("#bui-table__row2").toggleClass("bui-table__row--expanded");
    });

    $(".ext-navigation__mobile-trigger").on('click', function () {
        $(".ext-navigation").toggleClass("ext-navigation--mobile-opened");
    });

    $(".ext-navigation__mobile-overlay").on('click', function () {
        $(".ext-navigation").removeClass("ext-navigation--mobile-opened");
    });





    $(".bui-accordion__row-inner").on('click', function () {
        $(".bui-accordion__row").toggleClass("bui-is-active");
        $(".main_gallery").toggleClass("mt-250");
        $(".360photo").toggleClass("mt-255");
        $(".deluxeroom").toggleClass("mt-275");
        $(".photo-page-footer").toggleClass("mt-315");
    });
    $(".bui-accordion_close").on('click', function () {
        $(".bui-accordion__row").removeClass("bui-is-active");
        $(".main_gallery").removeClass("mt-250");
        $(".360photo").removeClass("mt-255");
        $(".deluxeroom").removeClass("mt-275");
        $(".photo-page-footer").removeClass("mt-315");
    });


    // 
    // 

    $(".photo-item__drag-icon-container").on('click', function () {
        $(".edit-photo-modal").addClass("bui-is-active");
    });
    $(".bui-modal__close").on('click', function () {
        $(".edit-photo-modal").removeClass("bui-is-active");
    });
    $(".bui-modal__overlay").on('click', function () {
        $(".edit-photo-modal").removeClass("bui-is-active");
    });




});

let turn = 0;

function turnFan() {
    let x = document.getElementById("rotate-photo");
    turn += 90;
    x.style.transform = "rotate(" + (turn % 360) + "deg)"
}








function Check() {
    var privatehost = document.getElementById("privatehost");
    var inputcheckpms = document.getElementById("inputcheckpms");
    var inputtextpms = document.getElementById("inputtextpms");

    if (privatehost.checked) {
        $(".host-button").attr('disabled', false)
    } else {
        $(".host-button").attr('disabled', true)
    }

    if (inputcheckpms.checked) {
        $(inputtextpms).attr('disabled', true)
        $(".update-info").attr('disabled', true)
        $(".reset").attr('disabled', true)
    } else {
        $(inputtextpms).attr('disabled', false)
        $(".update-info").attr('disabled', false)
        $(".reset").attr('disabled', false)
    }


}

function Check2() {
    var inputtextcm = document.getElementById("inputtextcm");
    var inputcheckcm = document.getElementById("inputcheckcm");
    if (inputcheckcm.checked) {
        $(inputtextcm).attr('disabled', true)
        $(".update-info").attr('disabled', true)
        $(".reset").attr('disabled', true)
    } else {
        $(inputtextcm).attr('disabled', false)
        $(".update-info").attr('disabled', false)
        $(".reset").attr('disabled', false)
    }
}

function UnCheck() {
    var professionalhost = document.getElementById("professionalhost");
    if (professionalhost.checked) {
        $(".host-button").attr('disabled', true)
    }
}