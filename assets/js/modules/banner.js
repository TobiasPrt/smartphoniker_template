/**
 * ES6 Module: banner block
 * 
 * @package Smartphoniker
 * @since 1.0.0
 */


const banner = document.getElementById('banner');
const header = document.getElementById('header');
const nav = document.getElementById('nav');
const bannerButton = document.getElementById('closeBanner');


/**
 * Adds event listener for banner block.
 * 
 * @since 1.0.0
 */
export function addBannerEventListener() {
    banner && bannerButton.addEventListener('click', () => hideBanner(), false)
}


/**
 * Hides banner block.
 *
 * @since 1.0.0
 */
function hideBanner() {
    banner.classList.toggle("banner--isHidden");
    // Adjust header size
    header.classList.toggle("header--bannerIsHidden");
    // Adjust nav position
    nav.classList.toggle("nav__list--bannerIsHidden");
}


