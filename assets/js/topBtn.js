/** @format */

let lastSCroll = 0;

function scrollProgress() {
	nowScroll = true;

	setInterval(() => {
		if (nowScroll) {
			nowScroll = false;
			hasScroll();
		}
	}, 300);
}
document.querySelector(".Top__btn").addEventListener("click", () => {
	window.scrollTo({ left: 0, top: 0, behavior: "smooth" });
});
function hasScroll() {
	let scrollTop =
		window.pageYOffset || window.scrollY || document.documentElement.scrollTop;
}
window.addEventListener("scroll", scrollProgress);
