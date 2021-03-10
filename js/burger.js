const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');
    
    var menu = document.getElementById('burger');
    var closeIcon = document.getElementById('closeIcon';

    burger.addEventListener('click', handleMenuClick);

    function handleMenuClick(event) {
      if (event.target instanceof HTMLAnchorElement) {
        closeIcon.checked = false;
      }
    }{
		//Toggle Nav
        nav.classList.toggle('nav-active');
    
		//Animate Links
    	navLinks.forEach((link, index) => {
        	if (link.style.animation) {
				link.style.animation = '';
			} else {
				link.style.animation = `navLinkFade 0.3s ease forwards ${index / 6 + 1.5}s`;
			}
		});
		//Burger Animation
		burger.classList.toggle('toggle');
	};
	

navSlide;