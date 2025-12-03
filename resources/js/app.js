import { animate, inView } from 'motion';

// Wait for DOM to be ready
document.addEventListener('DOMContentLoaded', function() {
    // Animate hero section elements on load
    const heroLeft = document.querySelector('.hero-left');
    const heroRight = document.querySelector('.hero-right');
    const heroImage = document.querySelector('.hero-image');

    if (heroLeft) {
        animate(heroLeft,
            { opacity: [0, 1], x: [-50, 0] },
            { duration: 0.8, delay: 0.2 }
        );
    }

    if (heroRight) {
        animate(heroRight,
            { opacity: [0, 1], x: [50, 0] },
            { duration: 0.8, delay: 0.4 }
        );
    }

    if (heroImage) {
        animate(heroImage,
            { opacity: [0, 1], scale: [0.95, 1] },
            { duration: 1, delay: 0.6 }
        );
    }

    // Animate bride & groom section on scroll into view
    const brideGroomSection = document.querySelector('.bride-groom-section');
    if (brideGroomSection) {
        inView(brideGroomSection, () => {
            animate(brideGroomSection,
                { opacity: [0, 1], y: [50, 0] },
                { duration: 0.8 }
            );
        });
    }

    // Animate photos with stagger when in view
    const photos = document.querySelectorAll('.photo-animate');
    if (photos.length > 0) {
        photos.forEach((photo, index) => {
            inView(photo, () => {
                animate(photo,
                    { opacity: [0, 1], scale: [0.9, 1] },
                    { delay: index * 0.2, duration: 0.6 }
                );
            });
        });
    }

    // Animate text elements when in view
    const animateTexts = document.querySelectorAll('.text-animate');
    if (animateTexts.length > 0) {
        animateTexts.forEach((text, index) => {
            inView(text, () => {
                animate(text,
                    { opacity: [0, 1], y: [20, 0] },
                    { delay: index * 0.1, duration: 0.6 }
                );
            });
        });
    }

    // Animate wedding day section
    const weddingDaySection = document.querySelector('.wedding-day-section');
    if (weddingDaySection) {
        inView(weddingDaySection, () => {
            animate(weddingDaySection,
                { opacity: [0, 1], y: [50, 0] },
                { duration: 0.8 }
            );
        });
    }

    // Animate countdown items
    const countdownItems = document.querySelectorAll('.countdown-item');
    if (countdownItems.length > 0) {
        countdownItems.forEach((item, index) => {
            inView(item, () => {
                animate(item,
                    { opacity: [0, 1], scale: [0.8, 1], y: [20, 0] },
                    { delay: index * 0.1, duration: 0.6 }
                );
            });
        });
    }

    // Animate event sections
    const eventSections = document.querySelectorAll('.event-section');
    if (eventSections.length > 0) {
        eventSections.forEach((section, index) => {
            inView(section, () => {
                animate(section,
                    { opacity: [0, 1], y: [30, 0] },
                    { delay: index * 0.2, duration: 0.8 }
                );
            });
        });
    }

    // Animate love story section
    const loveStorySection = document.querySelector('.love-story-section');
    if (loveStorySection) {
        inView(loveStorySection, () => {
            animate(loveStorySection,
                { opacity: [0, 1], y: [50, 0] },
                { duration: 0.8 }
            );
        });
    }

    // Animate story items with stagger
    const storyItems = document.querySelectorAll('.story-item');
    if (storyItems.length > 0) {
        storyItems.forEach((item, index) => {
            inView(item, () => {
                animate(item,
                    { opacity: [0, 1], y: [30, 0] },
                    { delay: index * 0.2, duration: 0.6 }
                );
            });
        });
    }

    // Animate video section
    const videoSection = document.querySelector('.video-section');
    if (videoSection) {
        inView(videoSection, () => {
            animate(videoSection,
                { opacity: [0, 1], y: [50, 0] },
                { duration: 0.8 }
            );
        });
    }

    // Animate quote section
    const quoteSection = document.querySelector('.quote-section');
    if (quoteSection) {
        inView(quoteSection, () => {
            const quoteCard = quoteSection.querySelector('.bg-white.rounded-sm');
            if (quoteCard) {
                animate(quoteCard,
                    { opacity: [0, 1], y: [30, 0] },
                    { duration: 0.8, delay: 0.2 }
                );
            }
        });
    }

    // Animate map section
    const mapSection = document.querySelector('.map-section');
    if (mapSection) {
        inView(mapSection, () => {
            animate(mapSection,
                { opacity: [0, 1], y: [50, 0] },
                { duration: 0.8 }
            );
        });
    }

    // Animate gallery images with stagger
    const galleryImages = document.querySelectorAll('.gallery-image');
    if (galleryImages.length > 0) {
        galleryImages.forEach((item, index) => {
            inView(item, () => {
                animate(item,
                    { opacity: [0, 1], y: [30, 0] },
                    { delay: index * 0.1, duration: 0.6, easing: 'ease-out' }
                );
            });
        });
    }
});

