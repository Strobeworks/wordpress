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
//sale_banner
const sale_bannerToggle = () => {
    let sale_banner = document.getElementById('sale_banner_');
    let sale_card = document.getElementById('sale_card_');

    if (sale_card.classList.contains('card_open')) {
        sale_card.classList.remove('card_open');
        sale_banner.classList.remove('card_open');
        sale_card.classList.add('card_close');
    } else {
        sale_card.classList.add('card_open');
        sale_banner.classList.add('card_open');

    }
}

//floating_cart
const floating_cart_toggle = () => {
    let vedway_floating_cart = document.getElementsByClassName('vedway_floating_cart')[0];
    let vedway_floating_cart_inner = document.getElementsByClassName('vedway_floating_cart_inner')[0];

    if (vedway_floating_cart.classList.contains('card_open')) {
        vedway_floating_cart.classList.remove('card_open');
        vedway_floating_cart.classList.add('card_close');
        vedway_floating_cart_inner.classList.remove('card_open');
        vedway_floating_cart_inner.classList.add('card_close');
    } else {
        vedway_floating_cart.classList.add('card_open');
        vedway_floating_cart_inner.classList.add('card_open');
        vedway_floating_cart.classList.remove('card_close');
        vedway_floating_cart_inner.classList.remove('card_close');
    }
}


///blog

const toggleBlogCard = (id) => {
    var blog_item_one = document.getElementById('blog_item_one');
    var blog_item_two = document.getElementById('blog_item_two');
    var blog_item_three = document.getElementById('blog_item_three');
    var blog_item_four = document.getElementById('blog_item_four');
    var items = document.getElementsByClassName('blog_item_inner ');
    var item = document.getElementsByClassName('item');

    for (let index = 0; index < items.length; index++) {

        items[index].classList.remove('active')

        item[index].classList.remove('active');
    }

    if (id == 1) {
        blog_item_one.classList.toggle('active');
        item[0].classList.toggle('active');
    }
    if (id == 2) {
        blog_item_two.classList.toggle('active');
        item[1].classList.toggle('active');
    }
    if (id == 3) {
        blog_item_three.classList.toggle('active');
        item[2].classList.toggle('active');
    }
    if (id == 4) {
        blog_item_four.classList.toggle('active');
        item[3].classList.toggle('active');
    }
}