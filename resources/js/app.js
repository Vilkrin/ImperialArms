// Imperial Arms - Main JavaScript

// Mobile menu functionality
document.addEventListener("DOMContentLoaded", function () {
    const mobileMenuBtn = document.getElementById("mobile-menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener("click", function () {
            mobileMenu.classList.toggle("hidden");

            // Toggle menu icon
            const icon = mobileMenuBtn.querySelector("svg");
            if (mobileMenu.classList.contains("hidden")) {
                icon.innerHTML =
                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>';
            } else {
                icon.innerHTML =
                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>';
            }
        });
    }

    // Close mobile menu when clicking on a link
    const mobileMenuLinks = mobileMenu?.querySelectorAll("a");
    if (mobileMenuLinks) {
        mobileMenuLinks.forEach((link) => {
            link.addEventListener("click", function () {
                mobileMenu.classList.add("hidden");
                const icon = mobileMenuBtn.querySelector("svg");
                icon.innerHTML =
                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>';
            });
        });
    }
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute("href"));
        if (target) {
            target.scrollIntoView({
                behavior: "smooth",
                block: "start",
            });
        }
    });
});

// Add scroll effects for navbar
window.addEventListener("scroll", function () {
    const nav = document.querySelector("nav");
    if (window.scrollY > 50) {
        nav?.classList.add("backdrop-blur-lg");
    } else {
        nav?.classList.remove("backdrop-blur-lg");
    }
});

// Animation on scroll (simple intersection observer)
const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
};

const observer = new IntersectionObserver(function (entries) {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = "1";
            entry.target.style.transform = "translateY(0)";
        }
    });
}, observerOptions);

// Observe elements with animation classes
document.querySelectorAll(".card-imperial").forEach((card) => {
    card.style.opacity = "0";
    card.style.transform = "translateY(20px)";
    card.style.transition = "opacity 0.6s ease, transform 0.6s ease";
    observer.observe(card);
});

// Add loading state management
window.addEventListener("load", function () {
    document.body.classList.add("loaded");
});

// Add keyboard navigation support
document.addEventListener("keydown", function (e) {
    // ESC key closes mobile menu
    if (e.key === "Escape") {
        const mobileMenu = document.getElementById("mobile-menu");
        const mobileMenuBtn = document.getElementById("mobile-menu-btn");
        if (mobileMenu && !mobileMenu.classList.contains("hidden")) {
            mobileMenu.classList.add("hidden");
            const icon = mobileMenuBtn.querySelector("svg");
            icon.innerHTML =
                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>';
        }
    }
});

// Add focus management for accessibility
document.querySelectorAll("button, a").forEach((element) => {
    element.addEventListener("focus", function () {
        this.classList.add("focus-visible");
    });

    element.addEventListener("blur", function () {
        this.classList.remove("focus-visible");
    });
});

// Sidebar toggle functionality
const sidebarToggle = document.getElementById("sidebar-toggle");
const sidebar = document.getElementById("sidebar");

sidebarToggle.addEventListener("click", () => {
    if (sidebar.classList.contains("w-64")) {
        sidebar.classList.remove("w-64");
        sidebar.classList.add("w-14");
        // Hide text elements when collapsed
        sidebar.querySelectorAll("h2, p, span").forEach((el) => {
            if (!el.closest("svg")) {
                el.style.display = "none";
            }
        });
    } else {
        sidebar.classList.remove("w-14");
        sidebar.classList.add("w-64");
        // Show text elements when expanded
        sidebar.querySelectorAll("h2, p, span").forEach((el) => {
            el.style.display = "";
        });
    }
});

// Notification dropdown functionality
const notificationBtn = document.getElementById("notification-btn");
const notificationMenu = document.getElementById("notification-menu");

notificationBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    notificationMenu.classList.toggle("hidden");
    // Close user menu if open
    document.getElementById("user-menu").classList.add("hidden");
});

// User menu dropdown functionality
const userMenuBtn = document.getElementById("user-menu-btn");
const userMenu = document.getElementById("user-menu");

userMenuBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    userMenu.classList.toggle("hidden");
    // Close notification menu if open
    notificationMenu.classList.add("hidden");
});

// Close dropdowns when clicking outside
document.addEventListener("click", (e) => {
    if (!e.target.closest(".notification-dropdown")) {
        notificationMenu.classList.add("hidden");
    }
    if (!e.target.closest(".user-dropdown")) {
        userMenu.classList.add("hidden");
    }
});
