document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация иконок и AOS
    lucide.createIcons();
    AOS.init({ duration: 1000, once: true, easing: 'ease-out-cubic' });

    // 2. Мобильное меню
    const burger = document.querySelector('.burger');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-link');

    const toggleMenu = () => {
        burger.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
    };

    burger.addEventListener('click', toggleMenu);
    mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));

    // 3. Хедер при скролле
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        header.style.padding = window.scrollY > 50 ? '1rem 0' : '1.5rem 0';
        header.style.background = window.scrollY > 50 ? 'rgba(255,255,255,0.9)' : 'rgba(255,255,255,0.7)';
    });

    // 4. Валидация формы и Капча
    const form = document.getElementById('ajax-form');
    const phoneInput = document.getElementById('phone-input');
    const captchaLabel = document.getElementById('captcha-label');
    const captchaInput = document.getElementById('captcha-input');
    const successMsg = document.getElementById('form-success');

    // Генерация простой капчи
    let a = Math.floor(Math.random() * 10);
    let b = Math.floor(Math.random() * 10);
    captchaLabel.innerText = `Сколько будет ${a} + ${b}?`;

    phoneInput.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/\D/g, ''); // Только цифры
    });

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        
        if (parseInt(captchaInput.value) !== (a + b)) {
            alert('Неверный ответ капчи!');
            return;
        }

        // Имитация AJAX
        const btn = form.querySelector('button');
        btn.innerText = 'Отправка...';
        btn.disabled = true;

        setTimeout(() => {
            form.reset();
            btn.style.display = 'none';
            successMsg.style.display = 'flex';
            
            anime({
                targets: successMsg,
                translateY: [20, 0],
                opacity: [0, 1],
                duration: 600,
                easing: 'easeOutQuart'
            });
        }, 1500);
    });

    // 5. Cookie Popup
    const cookiePopup = document.getElementById('cookie-popup');
    const acceptBtn = document.getElementById('accept-cookies');

    if (!localStorage.getItem('cookies-accepted')) {
        setTimeout(() => {
            cookiePopup.classList.add('show');
            anime({
                targets: '.cookie-popup',
                translateY: [100, 0],
                opacity: [0, 1],
                duration: 800,
                easing: 'easeOutExpo'
            });
        }, 2000);
    }

    acceptBtn.addEventListener('click', () => {
        localStorage.setItem('cookies-accepted', 'true');
        cookiePopup.classList.remove('show');
    });

    // 6. Анимации Anime.js (Hero)
    anime({
        targets: '.hero__title .word',
        translateY: [40, 0],
        opacity: [0, 1],
        delay: anime.stagger(150, {start: 500}),
        duration: 1200,
        easing: 'easeOutExpo'
    });

    anime({
        targets: '.hero__orb',
        translateX: () => anime.random(-50, 50),
        translateY: () => anime.random(-50, 50),
        duration: 4000,
        direction: 'alternate',
        loop: true,
        easing: 'easeInOutQuad'
    });
});