require('./bootstrap');
// grabing everything that we need
const btn= document.querySelector('button.mobile-menu-button');
const  menu = document.querySelector('.mobile-menu');

// add event listener
btn.addEventListener("click", () =>{
    menu.classList.toggle("hidden");
});

// counter codes

const counters = document.querySelectorAll('.counter');
const speed = 1500; // The lower the slower

counters.forEach(counter => {
	const updateCount = () => {
		const target = +counter.getAttribute('data-target');
		const count = +counter.innerText;

		// Lower inc to slow and higher to slow
		const inc = target / speed;

		// console.log(inc);
		// console.log(count);

		// Check if target is reached
		if (count < target) {
			// Add inc to count and output in counter
			counter.innerText = count + inc;
			// Call function every ms
			setTimeout(updateCount, 1);
		} else {
			counter.innerText = target;
		}
	};

	updateCount();
});


// Date count down code
const countdown = () => {
    const countDate = new Date ("September 24, 2021 00:00:00").getTime();
    const now = new Date().getTime();
    const gap = countDate - now; 

    // How does time work exactly ?
    const second = 1000;
    const minute = second * 60;
    const hour = minute * 60;
    const day = hour * 24;

    // Calculating it
    const textDay  = Math.floor(gap / day);
    const textHour = Math.floor((gap % day) /hour );
    const textMinute = Math.floor((gap % hour)/ minute);
    const textSecond = Math.floor((gap % minute)/ second);

    document.querySelector('.day').innerText = textDay;
    document.querySelector('.hour').innerText = textHour;
    document.querySelector('.minute').innerText = textMinute;
    document.querySelector('.second').innerText = textSecond;
};

setInterval(countdown, 1000);