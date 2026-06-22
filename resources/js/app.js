import './bootstrap';

const root = document.documentElement;
const storedTheme = localStorage.getItem('theme');
const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

if (storedTheme === 'dark' || (!storedTheme && prefersDark)) {
    root.classList.add('dark');
}

document.querySelector('[data-theme-toggle]')?.addEventListener('click', () => {
    root.classList.toggle('dark');
    localStorage.setItem('theme', root.classList.contains('dark') ? 'dark' : 'light');
});

const mobileMenu = document.querySelector('[data-mobile-menu]');
const mobileMenuButton = document.querySelector('[data-mobile-menu-button]');

mobileMenuButton?.addEventListener('click', () => {
    const isOpen = !mobileMenu?.classList.contains('hidden');
    mobileMenu?.classList.toggle('hidden', isOpen);
    mobileMenuButton.setAttribute('aria-expanded', String(!isOpen));
});

document.querySelectorAll('[data-mobile-menu] a').forEach((link) => {
    link.addEventListener('click', () => {
        mobileMenu?.classList.add('hidden');
        mobileMenuButton?.setAttribute('aria-expanded', 'false');
    });
});

const sections = [...document.querySelectorAll('main section[id]')];
const navLinks = [...document.querySelectorAll('[data-nav-link]')];

const setActiveLink = (id) => {
    navLinks.forEach((link) => {
        link.classList.toggle('is-active', link.getAttribute('href') === `#${id}`);
    });
};

const sectionObserver = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                setActiveLink(entry.target.id);
            }
        });
    },
    {
        rootMargin: '-35% 0px -55% 0px',
        threshold: 0,
    },
);

sections.forEach((section) => sectionObserver.observe(section));

const animatedSections = [...document.querySelectorAll('[data-animated-section]')];
const motionQuery = window.matchMedia('(prefers-reduced-motion: reduce)');

if (!motionQuery.matches && animatedSections.length > 0) {
    const animationObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                entry.target.classList.toggle('is-animated', entry.isIntersecting);
            });
        },
        {
            rootMargin: '120px 0px 120px 0px',
            threshold: 0.15,
        },
    );

    animatedSections.forEach((section) => animationObserver.observe(section));
}

const scrollTopButton = document.querySelector('[data-scroll-top]');

const toggleScrollTopButton = () => {
    const isVisible = window.scrollY > 500;
    scrollTopButton?.classList.toggle('opacity-0', !isVisible);
    scrollTopButton?.classList.toggle('translate-y-4', !isVisible);
    scrollTopButton?.classList.toggle('pointer-events-none', !isVisible);
};

toggleScrollTopButton();
window.addEventListener('scroll', toggleScrollTopButton, { passive: true });
scrollTopButton?.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

const filterButtons = [...document.querySelectorAll('[data-filter]')];
const projectCards = [...document.querySelectorAll('[data-project-card]')];

filterButtons.forEach((button) => {
    button.addEventListener('click', () => {
        const filter = button.dataset.filter;

        filterButtons.forEach((item) => item.classList.toggle('is-active', item === button));
        projectCards.forEach((card) => {
            const shouldShow = filter === 'all' || card.dataset.technologies?.split(' ').includes(filter);
            card.classList.toggle('hidden', !shouldShow);
        });
    });
});
