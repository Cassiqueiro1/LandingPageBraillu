document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('[data-testimonial-carousel]');

    if (!carousel) {
        return;
    }

    const slides = Array.from(carousel.querySelectorAll('[data-carousel-slide]'));
    const indicators = Array.from(carousel.querySelectorAll('[data-carousel-indicator]'));
    const previousButton = carousel.querySelector('[data-carousel-prev]');
    const nextButton = carousel.querySelector('[data-carousel-next]');
    const status = carousel.querySelector('[data-carousel-status]');

    if (!slides.length || !indicators.length || !previousButton || !nextButton || !status) {
        return;
    }

    let currentIndex = 0;

    carousel.classList.add('is-enhanced');

    const updateCarousel = (newIndex, announce = true) => {
        currentIndex = (newIndex + slides.length) % slides.length;

        slides.forEach((slide, index) => {
            const isActive = index === currentIndex;

            slide.classList.toggle('is-active', isActive);
            slide.hidden = !isActive;
            slide.setAttribute('aria-hidden', isActive ? 'false' : 'true');
        });

        indicators.forEach((indicator, index) => {
            const isActive = index === currentIndex;

            indicator.classList.toggle('is-active', isActive);

            if (isActive) {
                indicator.setAttribute('aria-current', 'true');
            } else {
                indicator.removeAttribute('aria-current');
            }
        });

        if (announce) {
            const currentSlide = slides[currentIndex];
            const personName = currentSlide.dataset.name || 'participante';
            status.textContent = `Depoimento de ${personName}, ${currentIndex + 1} de ${slides.length}.`;
        }
    };

    previousButton.addEventListener('click', () => {
        updateCarousel(currentIndex - 1);
    });

    nextButton.addEventListener('click', () => {
        updateCarousel(currentIndex + 1);
    });

    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            updateCarousel(index);
        });
    });

    updateCarousel(0, false);
});