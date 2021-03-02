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