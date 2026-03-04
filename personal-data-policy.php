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
            <h1 data-aos="fade-right">Политика обработки персональных данных</h1>

            <h2 data-aos="fade-up">1. Общие положения</h2>
            <p data-aos="fade-up">
                Настоящая политика обработки персональных данных (далее —
                «Политика») определяет порядок и условия обработки персональных
                данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                устанавливает меры по обеспечению безопасности этих данных в соответствии с регламентом GDPR.
            </p>
            <p data-aos="fade-up">
                1.1. Важнейшей целью и условием осуществления своей деятельности
                Оператор считает соблюдение прав и свобод человека при
                обработке его персональных данных, включая защиту прав на
                неприкосновенность частной жизни и личную тайну в рамках <em>инновационных технологий</em>.
            </p>
            <p data-aos="fade-up">
                1.2. Настоящая Политика применяется ко всей информации, которую
                Оператор может получить о посетителях (далее — «Пользователи»)
                веб-сайта <strong><?= $fullDomain ?></strong>.
            </p>

            <h2 data-aos="fade-up">2. Основные понятия</h2>
            <ul data-aos="fade-up">
                <li>
                    <strong>Веб-сайт</strong> — совокупность графических и
                    информационных материалов, обеспечивающих их доступность в сети интернет по адресу
                    <strong><?= $fullDomain ?></strong>.
                </li>
                <li><strong>Пользователь</strong> — любой посетитель блога об AI-ассистентах.</li>
                <li>
                    <strong>Персональные данные</strong> — любая информация,
                    относящаяся прямо или косвенно к Пользователю.
                </li>
                <li>
                    <strong>Обработка персональных данных</strong> — любое действие, совершаемое с 
                    использованием средств автоматизации для улучшения <em>цифровой инфраструктуры</em> проекта.
                </li>
            </ul>

            <h2 data-aos="fade-up">3. Данные, которые мы обрабатываем</h2>
            <p data-aos="fade-up">Оператор может обрабатывать следующие категории данных:</p>
            <ul data-aos="fade-up">
                <li>
                    <strong>Данные от Пользователя:</strong>
                    <ul>
                        <li>Имя и фамилия;</li>
                        <li>Адрес электронной почты (Email);</li>
                        <li>Номера телефонов (валидация по стандартам <strong>Италии</strong>).</li>
                    </ul>
                </li>
                <li>
                    <strong>Данные, собираемые автоматически:</strong>
                    <ul>
                        <li>
                            Сбор обезличенных данных о посетителях (в т.ч. файлов «cookie») 
                            с помощью сервисов Google Analytics для анализа интереса к AI-инструментам.
                        </li>
                    </ul>
                </li>
            </ul>

            <h2 data-aos="fade-up">4. Цели обработки</h2>
            <ul data-aos="fade-up">
                <li>
                    Идентификация Пользователя для предоставления доступа к кейсам и 
                    <em>экспертной поддержке</em> на всех этапах.
                </li>
                <li>
                    Установление обратной связи, включая направление уведомлений о новых статьях в блоге 
                    <strong><?= $domainTitle ?></strong>.
                </li>
                <li>
                    Информирование Пользователя посредством электронных писем. 
                    Вы всегда можете отказаться от рассылок, написав на 
                    <a href="mailto:support@<?= $fullDomain ?>" class="back-home">support@<?= $fullDomain ?></a> 
                    с пометкой «Отказ».
                </li>
            </ul>

            <h2 data-aos="fade-up">5. Безопасность и хранение</h2>
            <p data-aos="fade-up">
                Оператор принимает все необходимые технические меры для защиты данных от неправомерного доступа. 
                Вся обработка ведется в строгом соответствии с требованиями <strong>GDPR (EU)</strong>. 
                Ваши данные никогда не будут переданы третьим лицам без вашего явного согласия.
            </p>

            <h2 data-aos="fade-up">6. Заключительные положения</h2>
            <p data-aos="fade-up">
                Пользователь может получить любые разъяснения, обратившись к 
                Оператору по официальным каналам связи проекта <strong><?= $domainTitle ?></strong>:
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