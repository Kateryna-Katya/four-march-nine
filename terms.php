<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Инновационные AI-боты
    </title>
<link rel="icon" type="image/svg+xml"
    href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Cdefs%3E%3ClinearGradient id='g' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%236366f1' /%3E%3Cstop offset='100%25' style='stop-color:%23a855f7' /%3E%3C/linearGradient%3E%3C/defs%3E%3Ccircle cx='16' cy='16' r='14' fill='none' stroke='url(%23g)' stroke-width='2' opacity='0.2'/%3E%3Cpath d='M16 8v16M8 16h16M10.5 10.5l11 11M21.5 10.5l-11 11' stroke='url(%23g)' stroke-width='2.5' stroke-linecap='round'/%3E%3Ccircle cx='16' cy='16' r='3' fill='url(%23g)'/%3E%3C/svg%3E">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Outfit:wght@400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>

            <nav class="nav" id="main-nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#tech" class="nav__link">Технологии</a></li>
                    <li><a href="./#cases" class="nav__link">Кейсы</a></li>
                    <li><a href="./#process" class="nav__link">Процесс</a></li>
                    <li><a href="./#blog" class="nav__link">Блог</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--header">
                <span>Связаться</span>
            </a>

            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>

<main>
    <section class="pages">
        <div class="container">
            <h1 data-aos="fade-right">Условия использования</h1>

            <p data-aos="fade-up">
                Добро пожаловать на сайт <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                (далее — «Условия») представляют собой юридически
                обязывающий договор между вами (далее — «Пользователь») и платформой <strong><?= $domainTitle ?></strong>
                (далее — «Оператор»). Пожалуйста, внимательно ознакомьтесь с ними. 
                Используя наш ресурс и любые <em>решения, которые меняют правила игры</em>, вы подтверждаете свое согласие с
                данными Условиями.
            </p>

            <h2 data-aos="fade-up">1. Предмет Соглашения</h2>
            <p data-aos="fade-up">
                Оператор предоставляет Пользователю доступ к сайту <strong><?= $fullDomain ?></strong> и его функционалу, 
                включая доступ к материалам блога об AI, экспертным консультациям и инструментам 
                автоматизации (далее — «Услуги»). Настоящее Соглашение регулирует все аспекты
                взаимодействия Пользователя с нашей <em>передовой цифровой инфраструктурой</em>.
            </p>

            <h2 data-aos="fade-up">2. Обязанности и права Пользователя</h2>
            <p data-aos="fade-up">
                Вы обязуетесь использовать сайт исключительно в законных целях. При использовании платформы 
                <strong><?= $domainTitle ?></strong> запрещается:
            </p>
            <ul data-aos="fade-up">
                <li>
                    Предпринимать действия, которые могут нарушить нормальную работу сайта или привести к 
                    перегрузке систем <strong><?= $domainTitle ?></strong>.
                </li>
                <li>
                    Использовать сторонние скрипты для парсинга контента без предварительного 
                    письменного разрешения.
                </li>
                <li>
                    Предоставлять недостоверную информацию при заполнении форм на <em>бесплатную консультацию</em>.
                </li>
            </ul>

            <h2 data-aos="fade-up">3. Интеллектуальная собственность</h2>
            <p data-aos="fade-up">
                Весь контент на сайте <strong><?= $fullDomain ?></strong>, включая программный код анимаций и тексты об 
                <em>инновационных технологиях</em>, является объектом интеллектуальной собственности. 
                Вам предоставляется ограниченная лицензия на использование материалов в личных целях. 
                Любое копирование без разрешения правообладателя строго запрещено.
            </p>

            <h2 data-aos="fade-up">4. Ограничение ответственности</h2>
            <p data-aos="fade-up">
                Услуги предоставляются по принципу «как есть». Мы не даем гарантий, что информация в блоге 
                является единственно верной в контексте динамичного рынка <strong>Италии и ЕС</strong>. 
                Оператор не несет ответственности за убытки, возникшие в результате использования 
                предложенных методологий или <em>AI-инструментов для реальных задач</em>.
            </p>

            <h2 data-aos="fade-up">5. Разрешение споров</h2>
            <p data-aos="fade-up">
                Все разногласия стороны стремятся разрешить путем переговоров. В случае недостижения 
                согласия спор подлежит рассмотрению в соответствии с действующим законодательством по 
                месту регистрации Оператора в <strong>Италии (Рим)</strong>.
            </p>

            <h2 data-aos="fade-up">6. Контактная информация</h2>
            <p data-aos="fade-up">
                Если у вас возникли вопросы, связанные с настоящими Условиями,
                пожалуйста, свяжитесь с нами:
                <br><br>
                <strong>Email:</strong> <a href="mailto:support@<?= $fullDomain ?>" class="back-home">support@<?= $fullDomain ?></a><br>
                <strong>Телефон:</strong> <a href="tel:+390697638399" class="back-home">+39 06 9763 8399</a><br>
                <strong>Адрес:</strong> Via del Corso, 18, 00186 Roma RM, Italy
            </p>

        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__col">
                    <a href="./#hero" class="logo logo--footer">
                        <span class="logo__dot"></span>
                        <span class="logo__text">
                            <?= $domainTitle ?>
                        </span>
                    </a>
                    <p class="footer__description">
                        Передовая цифровая инфраструктура для автоматизации вашего бизнеса с помощью AI.
                    </p>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Навигация</h4>
                    <ul class="footer__links">
                        <li><a href="./#hero">Главная</a></li>
                        <li><a href="./#tech">Технологии</a></li>
                        <li><a href="./#cases">Кейсы</a></li>
                        <li><a href="./#blog">Блог</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Документы</h4>
                    <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Контакты (IT)</h4>
                    <ul class="footer__contacts">
                        <li>
                            <i data-lucide="phone"></i>
                            <a href="tel:+390697638399">+39 06 9763 8399</a>
                        </li>
                        <li>
                            <i data-lucide="mail"></i>
                            <a href="mailto:hello@<?= $fullDomain ?>">hello@
                                <?= $fullDomain ?>
                            </a>
                        </li>
                        <li>
                            <i data-lucide="map-pin"></i>
                            <span>Via del Corso, 18, 00186 Roma RM, Italy</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer__bottom">
                <p>&copy;
                   2026
                    <?= $domainTitle ?>. Все права защищены.
                </p>
                <div class="footer__legal-row">
                    <a href="return.php">Return Policy</a>
                    <a href="disclaimer.php">Disclaimer</a>
                    <a href="personal-data-policy.php">Personal Data</a>
                </div>
            </div>
        </div>
    </footer>
        <div id="cookie-popup" class="cookie-popup">
            <div class="cookie-popup__content glass">
                <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                        политике</a>.</p>
                <button id="accept-cookies" class="btn btn--primary">Принять</button>
            </div>
        </div>
        
        <div class="mobile-menu" id="mobile-menu">
            <nav class="mobile-menu__nav">
                <a href="./#hero" class="mobile-link">Главная</a>
                <a href="./#tech" class="mobile-link">Технологии</a>
                <a href="./#cases" class="mobile-link">Кейсы</a>
                <a href="./#process" class="mobile-link">Процесс</a>
                <a href="./#blog" class="mobile-link">Блог</a>
                <a href="./#contact" class="mobile-link btn btn--primary">Связаться</a>
            </nav>
        </div>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="script.js"></script>
</body>

</html>