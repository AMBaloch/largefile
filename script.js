
/* <CUSTOM JS  */
const menuToggle = document.getElementById('menuToggle');
const mobileMenu = document.getElementById('mobileMenu');
const closeMenu  = document.getElementById('closeMenu');

menuToggle.addEventListener('click', () => {
  mobileMenu.classList.add('show');
});

closeMenu.addEventListener('click', () => {
  mobileMenu.classList.remove('show');
});

// garlley java
// home page java 
