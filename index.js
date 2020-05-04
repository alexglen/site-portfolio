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

const sertificate = document.querySelector(".sertificate-small");
sertificate.addEventListener("click", function () {
	this.classList.toggle("sertificate-fullscreen");
});
