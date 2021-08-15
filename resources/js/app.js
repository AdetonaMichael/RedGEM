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

//setting default attribute to disabled of minus button
document.querySelector(".minus-btn").setAttribute("disabled","disabled");

//taking value to increment decrement input value
var valueCount

//taking price value in variable
var price = 0.0003;

//price calculation function
function priceTotal() {
    var total = valueCount * price;
    document.getElementById("price").innerText = total
}

//plus button
document.querySelector(".plus-btn").addEventListener("click", function() {
    //getting value of input
    valueCount = document.getElementById("quantity").value;

    //input value increment by 1
    valueCount++;

    //setting increment input value
    document.getElementById("quantity").value = valueCount;

    if (valueCount > 1) {
        document.querySelector(".minus-btn").removeAttribute("disabled");
        document.querySelector(".minus-btn").classList.remove("disabled")
    }

    //calling price function
    priceTotal()
})

//plus button
document.querySelector(".minus-btn").addEventListener("click", function() {
    //getting value of input
    valueCount = document.getElementById("quantity").value;

    //input value increment by 1
    valueCount--;

    //setting increment input value
    document.getElementById("quantity").value = valueCount

    if (valueCount == 1) {
        document.querySelector(".minus-btn").setAttribute("disabled", "disabled")
    }

    //calling price function
    priceTotal()
})