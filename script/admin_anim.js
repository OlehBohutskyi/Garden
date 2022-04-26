const mainPageButton = document.querySelector('.admin-block_list_setting__main-page');
const articleButton = document.querySelector('.admin-block_list__articles');
const userButton = document.querySelector('.admin-block_list__users');

const mainPage = document.querySelector('.admin-block_main_main-page');
const articlePage = document.querySelector('.admin-block_main_articles');
const userPage = document.querySelector('.admin-block_main_users');

let mainPageIsOpen = false;
let articlePageIsOpen = false;
let userPageIsOpen = false;

mainPageButton.addEventListener('click', () =>{

    if(mainPageIsOpen){
        mainPage.classList.remove('show');
        mainPageIsOpen = false;
    }
    if(articlePageIsOpen){
        articlePage.classList.remove('show');
        articlePageIsOpen = false;
    }
    if(userPageIsOpen){
        userPage.classList.remove('show');
        userPageIsOpen = false;
    }

    if (!mainPageIsOpen){
        mainPage.classList.add('show');
        mainPageIsOpen = true;
    }
    else {
        mainPage.classList.remove('show');
        mainPageIsOpen = false;
    }
});

articleButton.addEventListener('click', () => {

    if(mainPageIsOpen){
        mainPage.classList.remove('show');
        mainPageIsOpen = false;
    }
    if(articlePageIsOpen){
        articlePage.classList.remove('show');
        articlePageIsOpen = false;
    }
    if(userPageIsOpen){
        userPage.classList.remove('show');
        userPageIsOpen = false;
    }

    if (!articlePageIsOpen) {
        articlePage.classList.add('show');
        articlePageIsOpen = true;
    }
    else {
        articlePage.classList.remove('show');
        articlePageIsOpen = false;
    }
});

userButton.addEventListener('click', () => {

    if(mainPageIsOpen){
        mainPage.classList.remove('show');
        mainPageIsOpen = false;
    }
    if(articlePageIsOpen){
        articlePage.classList.remove('show');
        articlePageIsOpen = false;
    }
    if(userPageIsOpen){
        userPage.classList.remove('show');
        userPageIsOpen = false;
    }

    if (!userPageIsOpen){
        userPage.classList.add('show');
        userPageIsOpen = true;
    }
    else{
        userPage.classList.remove('show');
        userPageIsOpen = false;
    }
});