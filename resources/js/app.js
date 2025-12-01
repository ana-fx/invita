import { animate, scroll, stagger, inView } from 'motion';

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
    
    // Animate gallery section
    const gallerySection = document.querySelector('.gallery-section');
    if (gallerySection) {
        inView(gallerySection, () => {
            animate(gallerySection, 
                { opacity: [0, 1], y: [50, 0] },
                { duration: 0.8 }
            );
        });
    }
    
    // Animate gallery items with stagger
    const galleryItems = document.querySelectorAll('.gallery-item');
    if (galleryItems.length > 0) {
        galleryItems.forEach((item, index) => {
            inView(item, () => {
                animate(item,
                    { opacity: [0, 1], scale: [0.9, 1] },
                    { delay: index * 0.1, duration: 0.6 }
                );
            });
        });
    }
});

