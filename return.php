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
            <span class="section-tag" data-gsap="fade-up">Payment & Refunds</span>
            <h1 data-gsap="fade-up">Политика возврата средств</h1>
            
            <div class="legal-content">
                <div class="policy-hero-card refund-accent" data-gsap="fade-up">
                    <p>
                        Мы стремимся к максимальной прозрачности во взаимоотношениях с нашими клиентами. 
                        В <strong><?= $domainTitle ?></strong> предусмотрена четкая процедура возврата средств, 
                        основанная на защите прав потребителей и качестве предоставляемых услуг.
                    </p>
                </div>

                <h2 data-gsap="fade-up">Условия для оформления возврата</h2>
                <div class="refund-grid" data-gsap="fade-up">
                    <div class="refund-card">
                        <div class="r-icon"><i data-lucide="file-text"></i></div>
                        <h3>Несоответствие</h3>
                        <p>Если содержание материалов существенно отличается от заявленного на <strong><?= $domainTitle ?></strong>.</p>
                    </div>
                    <div class="refund-card">
                        <div class="r-icon"><i data-lucide="settings"></i></div>
                        <h3>Тех. проблемы</h3>
                        <p>Критические ошибки на платформе, которые не были устранены в течение 48 часов.</p>
                    </div>
                    <div class="refund-card">
                        <div class="r-icon"><i data-lucide="timer"></i></div>
                        <h3>14 дней</h3>
                        <p>Право на отказ в течение 14 дней в соответствии с регламентами ЕС для онлайн-услуг.</p>
                    </div>
                </div>

                <div class="procedure-block" data-gsap="fade-up">
                    <h2>Процедура запроса</h2>
                    <p>Для инициации возврата на <strong><?= $fullDomain ?></strong> выполните следующие шаги:</p>
                    <div class="steps-mini">
                        <div class="step-mini">
                            <span class="step-num">01</span>
                            <div class="step-text">Письмо на <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a></div>
                        </div>
                        <div class="step-mini">
                            <span class="step-num">02</span>
                            <div class="step-text">Тема: «Запрос на возврат средств»</div>
                        </div>
                        <div class="step-mini">
                            <span class="step-num">03</span>
                            <div class="step-text">Укажите ФИО и данные платежной транзакции</div>
                        </div>
                    </div>
                </div>

                <h2 data-gsap="fade-up">Сроки и способ возврата</h2>
                <p data-gsap="fade-up">
                    После одобрения запроса, возврат средств производится в течение <strong>7–14 рабочих дней</strong>. 
                    Средства возвращаются тем же способом, которым была совершена оплата. 
                    Срок зачисления зависит от вашего банка в Германии или стране вашего пребывания.
                </p>

                <div class="warning-block" data-gsap="fade-up">
                    <div class="warning-head">
                        <i data-lucide="info"></i>
                        <h3>Важные ограничения</h3>
                    </div>
                    <ul class="legal-list">
                        <li>Запрос подан по истечении 14 календарных дней.</li>
                        <li>Вы изучили или скачали более 50% обучающего контента.</li>
                        <li>Нарушение правил сообщества <strong><?= $domainTitle ?></strong>.</li>
                    </ul>
                </div>

                <div class="contact-footer-policy" data-gsap="fade-up">
                    <h2>Свяжитесь с нами</h2>
                    <p>По всем финансовым вопросам обращайтесь в службу поддержки:</p>
                    <a href="mailto:support@<?= $fullDomain ?>" class="policy-mail">support@<?= $fullDomain ?></a>
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