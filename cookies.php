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
    <title><?= $domainTitle ?> — AI для жизни и работы</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><circle cx=%2250%22 cy=%2250%22 r=%2245%22 fill=%22%23800020%22/><path d=%22M30 50 L70 50 M50 30 L50 70%22 stroke=%22white%22 stroke-width=%228%22 stroke-linecap=%22round%22/></svg>">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
    
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="./#about" class="logo">
                    <span class="logo-dot"></span>
                    <?= $domainTitle ?>
                </a>
                
                <ul class="nav-menu">
                    <li><a href="./#about">Обучение</a></li>
                    <li><a href="./#tools">Инструменты</a></li>
                    <li><a href="./#cases">Кейсы</a></li>
                    <li><a href="./#pricing">Тарифы</a></li>
                </ul>

                <a href="./#contact" class="btn btn-outline nav-cta">Связаться</a>

                <button class="burger" aria-label="Menu">
                    <span></span>
                    <span></span>
                </button>
            </nav>
        </div>
    </header>

    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-tag" data-gsap="fade-up">Legal Documents</span>
            <h1 data-gsap="fade-up">Политика использования файлов cookie</h1>

            <div class="legal-content">
                <p class="lead-text" data-gsap="fade-up">
                    Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                    взаимодействия с нашим сайтом, обеспечить его корректную работу и
                    анализировать активность пользователей, мы используем файлы cookie и
                    схожие технологии.
                </p>

                <div class="legal-section" data-gsap="fade-up">
                    <h2>Что такое файлы cookie?</h2>
                    <p>
                        Файл cookie — это небольшой фрагмент данных (текстовый файл),
                        который веб-сайт сохраняет на вашем устройстве, когда вы его посещаете. 
                        Это позволяет платформе <strong><?= $domainTitle ?></strong> «помнить» ваши действия 
                        и предпочтения в течение определенного времени.
                    </p>
                </div>

                <div class="legal-section" data-gsap="fade-up">
                    <h2>Какие типы файлов cookie мы используем?</h2>
                    <p>
                        Мы классифицируем файлы cookie, используемые на сайте <strong><?= $fullDomain ?></strong>, по
                        следующим категориям:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <strong>Строго необходимые:</strong> Критически важны для функционирования платформы.
                        </li>
                        <li>
                            <strong>Аналитические:</strong> Сбор анонимной информации о том, как посетители используют наш сайт.
                        </li>
                        <li>
                            <strong>Функциональные:</strong> Позволяют запоминать ваш выбор для персонализированного опыта.
                        </li>
                        <li>
                            <strong>Маркетинговые:</strong> Используются для доставки релевантных объявлений.
                        </li>
                    </ul>
                </div>

                <div class="legal-section" data-gsap="fade-up">
                    <h2>Зачем мы используем файлы cookie?</h2>
                    <ul class="legal-list">
                        <li>Обеспечение стабильной и безопасной работы платформы.</li>
                        <li>Анализ пользовательского поведения для оптимизации курсов.</li>
                        <li>Персонализация контента для пользователей в Европе.</li>
                        <li>Предоставление релевантных маркетинговых материалов.</li>
                    </ul>
                </div>

                <div class="legal-section" data-gsap="fade-up">
                    <h2>Ваш выбор и управление</h2>
                    <p>
                        Вы имеете полный контроль над файлами cookie. Вы можете в любой
                        момент изменить свои настройки в браузере. Однако отключение строго необходимых cookie 
                        может привести к некорректной работе некоторых функций.
                    </p>
                </div>

                <div class="contact-info-block" data-gsap="fade-up">
                    <h2>Контактная информация</h2>
                    <p>
                        Если у вас возникли вопросы касательно политики на <strong><?= $domainTitle ?></strong>, свяжитесь с нами:
                    </p>
                    <ul class="contact-data">
                        <li>
                            <i data-lucide="mail"></i>
                            <strong>Email:</strong> <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>
                        </li>
                        <li>
                            <i data-lucide="phone"></i>
                            <strong>Телефон:</strong> <a href="tel:+4930863060553">+49 30 863060553</a>
                        </li>
                        <li>
                            <i data-lucide="map-pin"></i>
                            <strong>Адрес:</strong> Friedrichstraße 176, 10117 Berlin, Germany
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <a href="./#about" class="logo white">
                        <span class="logo-dot"></span>
                        <?= $domainTitle ?>
                    </a>
                    <p class="footer-tagline">Технологии, которые работают на вас. Просто о сложном мире ИИ.</p>
                </div>

                <div class="footer-col">
                    <h4>Меню</h4>
                    <ul class="footer-links">
                        <li><a href="./#about">Обучение</a></li>
                        <li><a href="./#tools">Инструменты</a></li>
                        <li><a href="./#cases">Кейсы</a></li>
                        <li><a href="./#pricing">Тарифы</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Юридическая информация</h4>
                    <ul class="footer-links">
                        <li><a href="./privacy.php">Privacy Policy</a></li>
                        <li><a href="./cookies.php">Cookie Policy</a></li>
                        <li><a href="./terms.php">Terms of Service</a></li>
                        <li><a href="./return.php">Return Policy</a></li>
                        <li><a href="./disclaimer.php">Disclaimer</a></li>
                        <li><a href="./contact.php">Contact Us</a></li>
                        <li><a href="./personal-data-policy.php">Personal Data</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Контакты</h4>
                    <ul class="footer-contacts">
                        <li>
                            <i data-lucide="phone" class="icon-sm"></i>
                            <a href="tel:+4930863060553">+49 30 863060553</a>
                        </li>
                        <li>
                            <i data-lucide="mail" class="icon-sm"></i>
                            <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                        </li>
                        <li>
                            <i data-lucide="map-pin" class="icon-sm"></i>
                            <span>Friedrichstraße 176, 10117 Berlin, Germany</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2026 <?= $domainTitle ?>. Все права защищены. Предложение активно только в странах ЕС.</p>
            </div>
        </div>
    </footer>
    <div class="mobile-menu">
        <div class="mobile-menu-inner">
            <ul class="mobile-nav">
                <li><a href="./#about">Обучение</a></li>
                <li><a href="./#tools">Инструменты</a></li>
                <li><a href="./#cases">Кейсы</a></li>
                <li><a href="./#pricing">Тарифы</a></li>
                <li><a href="./#contact" class="btn btn-primary">Связаться</a></li>
            </ul>
        </div>
    </div>
    <div id="cookie-popup" class="cookie-popup">
        <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
        <button id="accept-cookies" class="btn btn-primary btn-sm">Принять</button>
    </div>
    <script src="https://unpkg.com/split-type"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.27/bundled/lenis.min.js"></script>
    <script src="script.js"></script>
</body>
</html>