document.addEventListener("DOMContentLoaded", () => {
    const track = document.querySelector('.slider-track');
    const slides = document.querySelectorAll('.slide');
    const indicators = document.querySelectorAll('.indicator');
    let currentIndex = 0;

    function updateIndicators() {
        indicators.forEach((indicator, i) => {
            indicator.classList.toggle('active', i === currentIndex);
        });
    }

    function slide() {
        currentIndex++;
        if (currentIndex > slides.length - 3) {
            currentIndex = 0;
        }
        const offset = currentIndex * (100 / 3);
        track.style.transform = `translateX(-${offset}%)`;
        updateIndicators();
    }

    indicators.forEach((indicator, i) => {
        indicator.addEventListener('click', () => {
            currentIndex = i;
            const offset = currentIndex * (100 / 3);
            track.style.transform = `translateX(-${offset}%)`;
            updateIndicators();
        });
    });

    setInterval(slide, 3500);
});
