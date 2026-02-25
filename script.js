document.addEventListener('DOMContentLoaded', () => {
    
    // 1. Инициализация иконок
    lucide.createIcons();

    // 2. Плавный скролл Lenis
    const lenis = new Lenis();
    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // 3. Мобильное меню
    const burger = document.querySelector('.burger');
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-nav a');

    if (burger && mobileMenu) {
        const toggleMenu = () => {
            burger.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
        };
        burger.addEventListener('click', toggleMenu);
        mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));
    }

    // --- 4. АНИМАЦИЯ HERO (ИСПРАВЛЕННАЯ) ---
    // Сначала проверим наличие текста
    const heroTitleElement = document.querySelector('#hero-text');
    
    if (heroTitleElement) {
        const heroText = new SplitType('#hero-text', { types: 'words, chars' });
        
        // Прячем элементы ПЕРЕД началом анимации через JS
        gsap.set(['.hero-description', '.hero-btns'], { autoAlpha: 0, y: 30 });
        gsap.set('.char', { opacity: 0, y: 50 });

        const tlHero = gsap.timeline({ defaults: { ease: 'power4.out' } });

        tlHero.to('.char', {
            opacity: 1,
            y: 0,
            duration: 1,
            stagger: 0.02,
        })
        .to('.hero-description', {
            autoAlpha: 1,
            y: 0,
            duration: 0.8
        }, '-=0.6')
        .to('.hero-btns', {
            autoAlpha: 1,
            y: 0,
            duration: 0.8
        }, '-=0.6');
    }

    // 5. Глобальная анимация секций (через autoAlpha для надежности)
    gsap.registerPlugin(ScrollTrigger);

    // Анимируем карточки и списки
    const revealElements = document.querySelectorAll('.about-card, .price-card, .case-card, .tools-list li');
    
    revealElements.forEach((el) => {
        gsap.from(el, {
            scrollTrigger: {
                trigger: el,
                start: 'top 90%',
                toggleActions: 'play none none none' // Проигрывать только один раз
            },
            y: 30,
            autoAlpha: 0,
            duration: 1,
            ease: 'power2.out'
        });
    });

    // 6. Валидация телефона и Капча (как в предыдущем шаге)
    const phoneInput = document.getElementById('phone-input');
    if (phoneInput) {
        phoneInput.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/\D/g, '');
        });
    }

    const captchaLabel = document.getElementById('captcha-label');
    const captchaInput = document.getElementById('captcha-input');
    if (captchaLabel) {
        const n1 = Math.floor(Math.random() * 10);
        const n2 = Math.floor(Math.random() * 10);
        const correct = n1 + n2;
        captchaLabel.innerText = `Сколько будет ${n1} + ${n2}?`;

        const form = document.getElementById('ai-form');
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            if (parseInt(captchaInput.value) !== correct) {
                alert('Капча введена неверно!');
                return;
            }
            const btn = form.querySelector('button');
            btn.innerText = 'Отправка...';
            setTimeout(() => {
                form.reset();
                btn.style.display = 'none';
                document.getElementById('form-success').style.display = 'block';
            }, 1500);
        });
    }

    // 7. Cookie Popup
    const cp = document.getElementById('cookie-popup');
    if (cp && !localStorage.getItem('cookies-accepted')) {
        setTimeout(() => cp.classList.add('active'), 2000);
        document.getElementById('accept-cookies').addEventListener('click', () => {
            localStorage.setItem('cookies-accepted', 'true');
            cp.classList.remove('active');
        });
    }
});