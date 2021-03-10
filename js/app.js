const navSlide = () => {
	const burger = document.querySelector('.burger');
	const nav = document.querySelector('.nav-links');
	const navLinks = document.querySelectorAll('.nav-links li');

	burger.addEventListener('click', () => {
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
	});
	nav.addEventListener('click', (e) => {
		if (!e.target.matches('a')) return;

		console.log(e.target);

		nav.classList.toggle('nav-active');
		burger.classList.toggle('toggle');

		navLinks.forEach(link => {
			link.style.animation = '';
		})
	});
}

navSlide();
