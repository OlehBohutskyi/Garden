const menuBtn = document.querySelector('.header_nav_menu__button');
const flyoutMenu = document.querySelector('#flyoutMenu');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
    if(!menuOpen){
        menuBtn.classList.add('open');
        flyoutMenu.classList.add('show');
        menuOpen = true;
    }else{
        menuBtn.classList.remove('open');
        flyoutMenu.classList.remove('show');
        menuOpen = false;
    }
});


const flowerBlock = document.querySelectorAll('.flower_block_two_card');

// flowerBlock.addEventListener('click', () => {
//     flowerBlock.children[1].classList.add('show');
// });

flowerBlock.forEach(element => element.addEventListener('mouseenter', () => {
    element.children[1].classList.add('show');
}));

flowerBlock.forEach(element => element.addEventListener('mouseleave', () => {
    element.children[1].classList.remove('show');
}));