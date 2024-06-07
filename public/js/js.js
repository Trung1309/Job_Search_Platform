// active
const hambuger = document.querySelector(".hambuger");
const navMenu = document.querySelector(".nav-menu-mobile");


hambuger.addEventListener("click", () => {
    hambuger.classList.toggle("active");
    navMenu.classList.toggle("active")
})
/*document.querySelectorAll(".nav-menu-mobile").forEach(n => n.
    addEventListener("click", () => {
        hambuger.classList.remove("active");
        navMenu.classList.remove("active");
    }))*/



// add thêm item nếu trong menu có sub menu
const menuItemMobile = document.querySelectorAll('.menu-mobile .nav-menu-mobile li');
menuItemMobile.forEach(item => {
    const subMenu = item.querySelector('ul.sub-menu');
    if (subMenu) {
        const iconSpan = document.createElement('span');
        const icon = document.createElement('i');
        icon.className = 'fa-solid fa-chevron-down'; // Replace with the class of your icon library, e.g., Font Awesome
        iconSpan.appendChild(icon);
        // Add the icon to the beginning of the <li> element
        item.appendChild(iconSpan);
    }
});

/* Click button xổ ra menu con */
$('.menu-mobile .nav-menu-mobile li .sub-menu').hide();
$(".menu-mobile .nav-menu-mobile li>span").click(function(){
    $(this).parent().children("ul").toggle('');
    $(this).find('.fa-chevron-down').toggleClass('icon-rotate');
})



$(document).ready(function(){
    $(".owl-carousel").owlCarousel();
  });


//  Menu của bộ lọc
  const menuFilter = document.querySelectorAll('.menu-filter li');
  menuFilter.forEach(item => {
    const subMenuFilter = item.querySelector('ul.sub-menu-filter');
    if (subMenuFilter) {
        const iconSpan = document.createElement('span');
        const icon = document.createElement('i');
        icon.className = 'fa-solid fa-chevron-down'; // Replace with the class of your icon library, e.g., Font Awesome
        iconSpan.appendChild(icon);
        // Add the icon to the beginning of the <li> element
        item.appendChild(iconSpan);
    }
});

const menuFilterActive = document.querySelectorAll('.menu-filter li');
menuFilterActive.forEach(item => {
  const subMenuFilterActive = item.querySelector('ul.sub-menu-filter-active');
  if (subMenuFilterActive) {
      const iconSpan = document.createElement('span');
      const icon = document.createElement('i');
      icon.className = 'fa-solid fa-chevron-down'; // Replace with the class of your icon library, e.g., Font Awesome
      iconSpan.appendChild(icon);
      // Add the icon to the beginning of the <li> element
      item.appendChild(iconSpan);
  }
});

$('.menu-filter .sub-menu-filter-active').show();
$('.menu-filter .sub-menu-filter').hide();
$(".menu-filter li>span").click(function(){
    $(this).parent().children("ul").toggle('');
})


const hinhDaiDien = document.getElementById('hinhDaiDien');
const imagePreview = document.getElementById('imagePreview');

hinhDaiDien.addEventListener('change', function() {
  const file = this.files[0];

  if (file) {
    const reader = new FileReader();

    reader.onload = function(e) {
      imagePreview.src = e.target.result;
    }

    reader.readAsDataURL(file);
  }
});

// up hình đại diện

$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
});


