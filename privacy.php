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
            <span class="section-tag" data-gsap="fade-up">Privacy Policy</span>
            <h1 data-gsap="fade-up">Политика конфиденциальности</h1>

            <div class="legal-content">
                <div class="policy-hero-card" data-gsap="fade-up">
                    <p>
                        Политика конфиденциальности распространяется на персональные данные,
                        предоставляемые клиентами <strong><?= $domainTitle ?></strong>, как для оказания услуг по карьерному консультированию, так и для других взаимодействий в электронном формате.
                    </p>
                </div>

                <div class="policy-notice" data-gsap="fade-up">
                    <p>
                        <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения в положения Политики. Обратите внимание, что наши услуги могут содержать ссылки на ресурсы третьих лиц.
                    </p>
                </div>

                <h2 data-gsap="fade-up">Порядок сбора, хранения и уничтожения</h2>
                <div class="storage-info" data-gsap="fade-up">
                    <div class="storage-item">
                        <div class="storage-icon"><i data-lucide="clock"></i></div>
                        <div class="storage-text">
                            <span>Срок хранения</span>
                            <strong>До 75 лет</strong>
                        </div>
                    </div>
                    <div class="storage-item">
                        <div class="storage-icon"><i data-lucide="shield-check"></i></div>
                        <div class="storage-text">
                            <span>Безопасность</span>
                            <strong>Только с вашего согласия</strong>
                        </div>
                    </div>
                </div>
                
                <p data-gsap="fade-up">
                    Для предотвращения утечки данных мы используем полный комплекс мер информационной безопасности. Уничтожение или блокирование данных осуществляется по запросу клиента или при достижении целей сбора.
                </p>

                <div class="data-collection-grid" data-gsap="fade-up">
                    <div class="data-box">
                        <h3><i data-lucide="cpu"></i> Техническая информация</h3>
                        <ul>
                            <li>IP-адрес и время доступа</li>
                            <li>Источники перехода на <strong><?= $fullDomain ?></strong></li>
                            <li>Данные браузера и просмотры блоков</li>
                        </ul>
                    </div>
                    <div class="data-box">
                        <h3><i data-lucide="id-card"></i> Персонализация</h3>
                        <ul>
                            <li>Имя пользователя</li>
                            <li>E-mail и номер телефона</li>
                            <li>Данные о контрактах и услугах</li>
                        </ul>
                    </div>
                </div>

                <h2 data-gsap="fade-up">Цели обработки персональных данных</h2>
                <ul class="legal-list" data-gsap="fade-up">
                    <li>Предоставление доступа к инновационной платформе обучения.</li>
                    <li>Учет пожеланий при разработке новых решений.</li>
                    <li>Информирование об акциях и материалах блога.</li>
                    <li>Обеспечение качественной обратной связи.</li>
                </ul>

                <h2 data-gsap="fade-up">Использование Cookies</h2>
                <p data-gsap="fade-up">
                    Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона Германия), чтобы сделать использование <strong><?= $fullDomain ?></strong> удобнее.
                </p>

                <div class="rights-block" data-gsap="fade-up">
                    <h2>Ваши права</h2>
                    <p>Если вы хотите отредактировать свои данные или прекратить их обработку, свяжитесь с нами:</p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="contact-btn">
                        <i data-lucide="mail"></i>
                        <span>hello@<?= $fullDomain ?></span>
                    </a>
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