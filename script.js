function isElementVisible(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
    );
}

function handleVisibility() {
    const elements = document.querySelectorAll('.animate-on-scroll');

    elements.forEach(function(element) {
        if (isElementVisible(element)) {
            element.classList.add('visible');
        }
    });
}

window.addEventListener('scroll', handleVisibility);

window.addEventListener('load', handleVisibility);

const menuToggle = document.querySelector('.menu-toggle');
const navContainer = document.querySelector('.nav-container');

menuToggle.addEventListener('click', () => {
    menuToggle.classList.toggle('active');
    navContainer.classList.toggle('active');
});