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
            <h1 data-aos="fade-right">Политика конфиденциальности</h1>

            <p data-aos="fade-up">
                Политика конфиденциальности распространяется на персональные данные,
                предоставляемые клиентами <strong><?= $domainTitle ?></strong>, как для оказания услуг по разработке 
                <em>технологий нового поколения</em>, так и для других взаимодействий в электронном
                формате, включая участие в экспертных программах и техническую поддержку AI-инструментов.
            </p>

            <p data-aos="fade-up" data-aos-delay="100">
                <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения в действующие положения. 
                Обратите внимание, что наши ресурсы могут содержать ссылки на сторонние платформы (например, библиотеки визуализации), 
                которые имеют свои собственные правила. Предоставляя свои данные, вы даете полное согласие
                на их обработку методами, которые предусматривает наша <em>передовая цифровая инфраструктура</em>.
            </p>

            <h2 data-aos="fade-up">Порядок сбора, хранения и уничтожения данных</h2>
            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> собирает данные только с согласия
                пользователя для предоставления доступа к блогу, участия в стратегических сессиях по AI и 
                внедрения <em>решений, которые меняют правила игры</em>. Для предотвращения утечек мы используем 
                современные протоколы шифрования и комплексные меры безопасности ЕС.
            </p>

            <p data-aos="fade-up">
                Максимальный срок хранения персональных данных составляет 75 лет. В остальных случаях данные 
                хранятся до завершения деятельности проекта или до момента официального отзыва согласия пользователем.
            </p>

            <h2 data-aos="fade-up">Техническая информация:</h2>
            <ul data-aos="fade-up">
                <li>время доступа и IP-адрес в сети;</li>
                <li>источники перехода на ресурс <strong><?= $fullDomain ?></strong>;</li>
                <li>информационные блоки, просмотренные пользователем;</li>
                <li>номер телефона (при обращении по линии <em>экспертной поддержки</em>).</li>
            </ul>

            <h2 data-aos="fade-up">Информация о действиях пользователя:</h2>
            <ul data-aos="fade-up">
                <li>сведения о запросах через формы обратной связи;</li>
                <li>данные о полученных консультациях по внедрению ботов;</li>
                <li>произведенные платежи и финансовая информация, предусмотренная законодательством <strong>Италии и ЕС</strong>.</li>
            </ul>

            <h2 data-aos="fade-up">Цели обработки:</h2>
            <ul data-aos="fade-up">
                <li>предоставление доступа к аналитике и консалтингу;</li>
                <li>учет пожеланий при создании <em>AI-инструментов для реальных задач</em>;</li>
                <li>информирование о новых материалах в блоге через e-mail рассылки;</li>
                <li>обеспечение качественной поддержки на всех этапах.</li>
            </ul>

            <h2 data-aos="fade-up">
                Передача данных третьим лицам возможна только:
            </h2>
            <ul data-aos="fade-up">
                <li>при получении прямого согласия пользователя;</li>
                <li>по требованию компетентных органов <strong>Италии</strong> в соответствии с законом;</li>
                <li>в случаях стратегического слияния компании.</li>
            </ul>

            <h2 data-aos="fade-up">Использование файлов cookie</h2>
            <p data-aos="fade-up">
                Cookies позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона Италия), 
                чтобы сделать использование <strong><?= $fullDomain ?></strong> максимально эффективным. 
                Вы можете отключить их в любое время в настройках своего браузера.
            </p>

            <h2 data-aos="fade-up">Права пользователя</h2>
            <p data-aos="fade-up">
                Если вы хотите отредактировать данные или прекратить их обработку согласно нормам <strong>GDPR</strong>, 
                пожалуйста, свяжитесь с командой <strong><?= $domainTitle ?></strong>:
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