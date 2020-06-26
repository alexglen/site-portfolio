const headerWrapper = document.querySelector(".header-wrapper");

window.onscroll = function () {
	if (window.pageYOffset > 5) {
		headerWrapper.classList.add("header-active");
	} else {
		headerWrapper.classList.remove("header-active");
	}
};

window.onload = function () {
	window.scrollTo(0, 0);
};

const form = document.querySelector("form");
form.addEventListener("submit", function () {
	alert("Отправлено!");
});

// scrolling animation
const anchors = document.querySelectorAll('a[href*="#"]');

for (let anchor of anchors) {
	anchor.addEventListener("click", function (e) {
		e.preventDefault();
		const blockID = anchor.getAttribute("href").substr(1);

		document.getElementById(blockID) &&
			document.getElementById(blockID).scrollIntoView({
				behavior: "smooth",
				block: blockID === "main" ? "end" : "start",
			});
	});
}

var animateButton = function (e) {
	e.preventDefault;
	//reset animation
	e.target.classList.remove("animate");

	e.target.classList.add("animate");
	setTimeout(function () {
		e.target.classList.remove("animate");
	}, 700);
};

var bubblyButtons = document.getElementsByClassName("bubbly-button");

for (var i = 0; i < bubblyButtons.length; i++) {
	bubblyButtons[i].addEventListener("click", animateButton, false);
}
