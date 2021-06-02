//Cutting Contants Text

const conTxt = document.querySelectorAll('.con-txt p a');

conTxt.forEach(element => {
  const cutTxt = element.textContent.slice(0, 10) + "...";
  element.textContent = cutTxt;
});


//Mobile Menu Activate

const mobileMenu = document.querySelector('.mobile-menu');

mobileMenu.onclick = () => {
  mobileMenu.classList.toggle('active');
}
