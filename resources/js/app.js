//import './bootstrap';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

window.addEventListener('DOMContentLoaded', () => {

    // 1. HERO ENTRANCE TIMELINE
    const heroTl = gsap.timeline();

    // Smoothly fade-in background image and overlay scale
    heroTl.fromTo("#hero", 
        { scale: 1.1, opacity: 0 }, 
        { scale: 1, opacity: 1, duration: 1.4, ease: "power3.out" }
    );

    // Stagger text and button items down up gracefully
    heroTl.fromTo(".hero-fade", 
        { y: 30, opacity: 0 }, 
        { y: 0, opacity: 1, duration: 0.8, stagger: 0.15, ease: "power2.out" },
        "-=0.8" // Starts slightly before background finishes animation
    );

    // Slide up availability bar from bottom
    heroTl.fromTo(".hero-bar", 
        { y: 50, opacity: 0 }, 
        { y: 0, opacity: 1, duration: 0.8, ease: "back.out(1.2)" },
        "-=0.4"
    );


    // 2. SCROLL TRIGGER ANIMATIONS FOR SECTIONS
    // Loops through basic structural sections
    gsap.utils.toArray(".scroll-section").forEach((section) => {
        gsap.fromTo(section, 
            { y: 60, opacity: 0 },
            { 
                y: 0, 
                opacity: 1, 
                duration: 1, 
                ease: "power2.out",
                scrollTrigger: {
                    trigger: section,
                    start: "top 80%", // Triggers when the top of section hits 80% viewport height
                    toggleActions: "play none none none" // Plays once, stays visible
                }
            }
        );
    });


    // 3. STAGGERED GRID ELEMENT CARDS
    // Animates room cards inside the wrapper systematically
    gsap.fromTo(".room-card", 
        { y: 40, opacity: 0 },
        { 
            y: 0, 
            opacity: 1, 
            duration: 0.8, 
            stagger: 0.2, // 0.2 second intervals between elements
            ease: "power1.out",
            scrollTrigger: {
                trigger: "#rooms",
                start: "top 75%",
            }
        }
    );

    // Animates facility card elements
    gsap.fromTo(".facility-card", 
        { y: 40, opacity: 0 },
        { 
            y: 0, 
            opacity: 1, 
            duration: 0.8, 
            stagger: 0.15,
            ease: "power1.out",
            scrollTrigger: {
                trigger: "#facilities",
                start: "top 75%",
            }
        }
    );

    // Add this alongside your existing entry timelines in resources/js/app.js
if (document.querySelector("#about-hero")) {
    const aboutTl = gsap.timeline();
    
    aboutTl.fromTo("#about-hero",
        { opacity: 0, scale: 1.03 },
        { opacity: 1, scale: 1, duration: 1, ease: "power3.out" }
    );
    
    aboutTl.fromTo(".about-hero-fade",
        { y: 20, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.7, stagger: 0.15, ease: "power2.out" },
        "-=0.6"
    );
}

// Add this alongside your other load timelines in resources/js/app.js
if (document.querySelector("#contact-hero")) {
    const contactTl = gsap.timeline();
    
    contactTl.fromTo("#contact-hero",
        { opacity: 0, scale: 1.03 },
        { opacity: 1, scale: 1, duration: 1, ease: "power3.out" }
    );
    
    contactTl.fromTo(".contact-hero-fade",
        { y: 20, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.7, stagger: 0.15, ease: "power2.out" },
        "-=0.6"
    );
}

// Add this alongside your entry timelines in resources/js/app.js
if (document.querySelector("#rooms-hero")) {
    const roomsPageTl = gsap.timeline();
    
    roomsPageTl.fromTo("#rooms-hero",
        { opacity: 0, scale: 1.03 },
        { opacity: 1, scale: 1, duration: 1, ease: "power3.out" }
    );
    
    roomsPageTl.fromTo(".rooms-hero-fade",
        { y: 20, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.7, stagger: 0.15, ease: "power2.out" },
        "-=0.6"
    );

    // Staggered load specifically for the dedicated grid list view
    gsap.fromTo(".room-page-card", 
        { y: 45, opacity: 0 },
        {
            y: 0,
            opacity: 1,
            duration: 0.8,
            stagger: 0.12,
            ease: "power2.out",
            scrollTrigger: {
                trigger: "#rooms-page-grid",
                start: "top 85%"
            }
        }
    );
}

// Add this alongside your entry timelines in resources/js/app.js
if (document.querySelector("#services-hero")) {
    const servicesPageTl = gsap.timeline();
    
    servicesPageTl.fromTo("#services-hero",
        { opacity: 0, scale: 1.03 },
        { opacity: 1, scale: 1, duration: 1, ease: "power3.out" }
    );
    
    servicesPageTl.fromTo(".services-hero-fade",
        { y: 20, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.7, stagger: 0.15, ease: "power2.out" },
        "-=0.6"
    );

    // Staggered entry specifically for the services feature layout grid
    gsap.fromTo(".service-page-card", 
        { y: 45, opacity: 0 },
        {
            y: 0,
            opacity: 1,
            duration: 0.8,
            stagger: 0.12,
            ease: "power2.out",
            scrollTrigger: {
                trigger: "#services-page-grid",
                start: "top 85%"
            }
        }
    );
}




});