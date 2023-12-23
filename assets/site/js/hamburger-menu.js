const hamburger = document.getElementsByClassName('hamburger-menu');

console.log(hamburger)

for (var el of hamburger) {
    el.addEventListener("click", function () {
        el.classList.toggle('__active')
        document.querySelector('nav').classList.toggle('__active')
    });
}