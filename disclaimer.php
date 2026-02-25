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
            <span class="section-tag" data-gsap="fade-up">Risk Disclosure</span>
            <div class="legal-header" data-gsap="fade-up">
                <div class="warning-icon-box">
                    <i data-lucide="alert-triangle"></i>
                </div>
                <h1>Отказ от ответственности</h1>
            </div>

            <div class="legal-content">
                <div class="legal-block" data-gsap="fade-up">
                    <p>
                        <strong>Общая информация:</strong> Все материалы, статьи и сведения,
                        опубликованные на сайте <strong><?= $domainTitle ?></strong>, носят исключительно
                        информационно-ознакомительный характер. Они не являются и не должны
                        рассматриваться как персональная инвестиционная рекомендация,
                        профессиональный юридический или финансовый совет.
                    </p>
                </div>

                <div class="legal-block" data-gsap="fade-up">
                    <p>
                        <strong>Отсутствие гарантий:</strong> Команда <strong><?= $domainTitle ?></strong> не дает никаких гарантий
                        относительно точности, полноты или актуальности представленной информации. Любые упоминания потенциального роста или пассивного дохода не гарантируют аналогичных результатов в будущем.
                    </p>
                </div>

                <div class="legal-block risk-highlight" data-gsap="fade-up">
                    <p>
                        <strong>Ограничение ответственности:</strong> Администрация сайта <strong><?= $fullDomain ?></strong>
                        не несет ответственности за любые прямые или косвенные убытки, возникшие в результате использования информации с этого ресурса. Вся ответственность за использование методологий лежит исключительно на пользователе.
                    </p>
                </div>

                <div class="legal-block alert-box" data-gsap="fade-up">
                    <p>
                        <strong>Предупреждение о рисках:</strong> Любая деятельность, направленная на
                        изменение финансового статуса, сопряжена с рисками. Перед принятием решений мы настоятельно рекомендуем провести собственное исследование и проконсультироваться с независимым специалистом.
                    </p>
                </div>

                <div class="legal-block agreement-footer" data-gsap="fade-up">
                    <p>
                        <strong>Подтверждение пользователя:</strong> Продолжая использовать
                        сайт <strong><?= $domainTitle ?></strong>, вы подтверждаете, что вам исполнилось 18 лет, вы
                        действуете по собственной воле и полностью принимаете данные условия.
                    </p>
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