//vedway splash screen
const vedway_splash = () => {
    let body = document.body;

    console.log(document.readyState);
    // body.classList.remove('vedway-loading')

}

//window.addEventListener('readystatechange', vedway_splash());



var anchorOne = document.getElementById("menu");
var anchorTwo = document.getElementById("menuIco");

anchorOne.addEventListener("click", toggleNav);
anchorTwo.addEventListener("click", toggleNav);

function toggleNav() {
    let navElement = document.querySelector("aside");
    navElement.classList.toggle("active");
}

const vedway_available = (e) => {
    var vedway_radio = document.getElementsByName('vedway_var_options');
    var vedway_select = document.getElementById('available');
    var vedway_form = document.getElementsByClassName('variations_form cart');
    for (const option of vedway_select) {
        // console.log(option); 
        if (option.value === e.value) {
            // console.log(option.value + ' is the selected');
            vedway_select.selectedIndex = option.index;
            $('#available').trigger('change');
        }
    }
}

const toggleAccordian = () => {
    let accordian = document.getElementById('accordian');
    let arrow = document.getElementById('svg');
    accordian.classList.toggle('active');
    arrow.classList.toggle('active');

}

const single_extras = (value) => {
    let ingredients = document.getElementById('ingredients');
    let nutrition = document.getElementById('nutrition');
    let blur = document.getElementsByClassName('vedway-product-main')[0];

    const toggle_List_Close = () => {
        if (ingredients.classList.contains('active')) {
            ingredients.classList.remove('active');
        } else if (nutrition.classList.contains('active')) {
            nutrition.classList.remove('active');
        }
        blur.classList.remove('active');
    }
    const toggle_List_Open = (item) => {
        item.classList.add('active');
        blur.classList.add('active');
    }

    if (value == 'close') {
        toggle_List_Close();
    } else if (value == 'list') {
        toggle_List_Open(ingredients);
    } else if (value == 'chart') {
        toggle_List_Open(nutrition);
    }


}