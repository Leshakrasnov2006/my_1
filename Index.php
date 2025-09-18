<?php
/**
 * WebCraft Studio - Главная страница
 * ИП Разработка программного обеспечения
 */

// Данные предприятия
$company = [
    'name' => 'WebCraft Studio',
    'legal_form' => 'Индивидуальный предприниматель (ИП)',
    'activity' => 'Разработка современных и функциональных веб-сайтов и веб-приложений. Специализация: корпоративные сайты, интернет-магазины, лендинги и веб-сервисы под ключ',
    'team' => 'Сам ИП (full-stack разработчик) и два привлекаемых на аутсорс фрилансера: UX/UI-дизайнер и специалист по контекстной рекламе',
    'work_location' => 'Удаленно. Офисом является домашний кабинет или коворкинг'
];

// Цветовая схема
$colors = [
    'primary' => '#2A6AEE',
    'accent' => '#FF6B35',
    'text' => '#333333',
    'background' => '#F5F5F5',
    'white' => '#FFFFFF'
];

// Навигация
$navigation = [
    'Главная' => 'index.php',
    'Услуги' => 'services.php',
    'Портфолио' => 'portfolio.php',
    'Обо мне' => 'aboutme.php',
    'Блог' => 'theblog.php',
    'Контакты' => 'contacts.php'
];
// Преимущества
$benefits = [
    [
        'icon' => '🎯',
        'title' => 'Индивидуальный подход',
        'description' => 'Каждый проект уникален и делается с нуля.'
    ],
    [
        'icon' => '⏱️',
        'title' => 'Сроки и бюджет соблюдаем строго',
        'description' => 'Работаем по четкому ТЗ и договору.'
    ],
    [
        'icon' => '🔧',
        'title' => 'Техническая поддержка',
        'description' => 'Современный код, SEO-базовая верстка.'
    ],
    [
        'icon' => '🛡️',
        'title' => 'Поддержка после запуска',
        'description' => 'Поможем с любыми вопросами.'
    ]
];

// Портфолио
$portfolio = [
    [
        'image' => 'project1.jpg',
        'title' => 'Корпоративный сайт для ООО "ТехноПром"',
        'description' => 'Современный дизайн с адаптивной версткой и системой управления контентом'
    ],
    [
        'image' => 'project2.jpg',
        'title' => 'Интернет-магазин "CoffeeTime"',
        'description' => 'Полностью функциональный магазин с интеграцией платежной системы и CRM'
    ],
    [
        'image' => 'project3.jpg',
        'title' => 'Лендинг для курсов английского языка',
        'description' => 'Высококонверсионная посадочная страница с формой захвата leads'
    ]
];

// Процесс работы
$work_process = [
    '1. Заявка',
    '2. Обсуждение',
    '3. Договор',
    '4. Дизайн',
    '5. Разработка',
    '6. Запуск!'
];

// Контакты
$contacts = [
    'phone' => '+7 (999) 123-45-67',
    'email' => 'info@webcraft-studio.ru',
    'social' => [
        'VK' => 'https://vk.com/webcraftstudio',
        'TG' => 'https://t.me/webcraftstudio'
    ]
];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $company['name'] ?> - Создание сайтов под ключ</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: <?= $colors['text'] ?>;
            background-color: <?= $colors['white'] ?>;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header */
        header {
            background: <?= $colors['white'] ?>;
            padding: 20px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: <?= $colors['primary'] ?>;
        }
        
        nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }
        
        nav a {
            text-decoration: none;
            color: <?= $colors['text'] ?>;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        nav a:hover {
            color: <?= $colors['primary'] ?>;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, <?= $colors['primary'] ?> 0%, #1a56c9 100%);
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }
        
        .hero p {
            font-size: 1.2em;
            margin-bottom: 40px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .cta-button {
            display: inline-block;
            background: <?= $colors['accent'] ?>;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 1.1em;
            transition: background 0.3s;
        }
        
        .cta-button:hover {
            background: #e55a2b;
        }
        
        /* Benefits Section */
        .benefits {
            padding: 80px 0;
            background: <?= $colors['background'] ?>;
        }
        
        .section-title {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 60px;
            color: <?= $colors['primary'] ?>;
        }
        
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .benefit-card {
            background: <?= $colors['white'] ?>;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .benefit-icon {
            font-size: 3em;
            margin-bottom: 20px;
        }
        
        .benefit-title {
            font-size: 1.3em;
            margin-bottom: 15px;
            color: <?= $colors['primary'] ?>;
        }
        
        /* Portfolio Section */
        .portfolio {
            padding: 80px 0;
        }
        
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .portfolio-item {
            background: <?= $colors['white'] ?>;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .portfolio-image {
            width: 100%;
            height: 200px;
            background: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3em;
        }
        
        .portfolio-content {
            padding: 20px;
        }
        
        .portfolio-title {
            font-size: 1.2em;
            margin-bottom: 10px;
            color: <?= $colors['primary'] ?>;
        }
        
        .portfolio-button {
            display: inline-block;
            background: <?= $colors['primary'] ?>;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        
        .portfolio-button:hover {
            background: #1a56c9;
        }
        
        /* Process Section */
        .process {
            padding: 80px 0;
            background: <?= $colors['background'] ?>;
        }
        
        .process-steps {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .process-step {
            text-align: center;
            flex: 1;
            min-width: 150px;
        }
        
        .process-step-number {
            background: <?= $colors['primary'] ?>;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-weight: bold;
        }
        
        /* CTA Section */
        .cta-section {
            padding: 80px 0;
            text-align: center;
        }
        
        .cta-text {
            font-size: 2em;
            margin-bottom: 30px;
            color: <?= $colors['primary'] ?>;
        }
        
        /* Footer */
        footer {
            background: <?= $colors['text'] ?>;
            color: white;
            padding: 40px 0;
            text-align: center;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .social-links a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 20px;
            }
            
            nav ul {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .hero h1 {
                font-size: 2em;
            }
            
            .process-steps {
                flex-direction: column;
            }
            
            .footer-content {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">WebCraft Studio</div>
                <nav>
                    <ul>
                        <?php foreach ($navigation as $title => $url): ?>
                            <li><a href="<?= $url ?>"><?= $title ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>СОЗДАЕМ САЙТЫ, КОТОРЫЕ РАБОТАЮТ</h1>
            <p>Привлекайте новых клиентов и увеличивайте продажи с помощью современного и удобного веб-сайта</p>
            <a href="#contact" class="cta-button">ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ</a>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits">
        <div class="container">
            <h2 class="section-title">НАШИ ПРЕИМУЩЕСТВА</h2>
            <div class="benefits-grid">
                <?php foreach ($benefits as $benefit): ?>
                    <div class="benefit-card">
                        <div class="benefit-icon"><?= $benefit['icon'] ?></div>
                        <h3 class="benefit-title"><?= $benefit['title'] ?></h3>
                        <p><?= $benefit['description'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio">
        <div class="container">
            <h2 class="section-title">ПОСЛЕДНИЕ РАБОТЫ</h2>
            <div class="portfolio-grid">
                <?php foreach ($portfolio as $item): ?>
                    <div class="portfolio-item">
                        <div class="portfolio-image">📱</div>
                        <div class="portfolio-content">
                            <h3 class="portfolio-title"><?= $item['title'] ?></h3>
                            <p><?= $item['description'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div style="text-align: center;">
                <a href="portfolio.php" class="portfolio-button">СМОТРЕТЬ ВСЕ РАБОТЫ</a>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process">
        <div class="container">
            <h2 class="section-title">КАК МЫ РАБОТАЕМ?</h2>
            <div class="process-steps">
                <?php foreach ($work_process as $step): ?>
                    <div class="process-step">
                        <div class="process-step-number"><?= substr($step, 0, 1) ?></div>
                        <p><?= $step ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2 class="cta-text">ОСТАЛИСЬ ВОПРОСЫ? СВЯЖИТЕСЬ С НАМИ!</h2>
            <a href="contacts.php" class="cta-button">ОТПРАВИТЬ СООБЩЕНИЕ</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="copyright">WebCraft Studio © 2024</div>
                <div class="contacts">
                    <p>Тел: <?= $contacts['phone'] ?></p>
                    <p>Email: <?= $contacts['email'] ?></p>
                </div>
                <div class="social-links">
                    <?php foreach ($contacts['social'] as $platform => $url): ?>
                        <a href="<?= $url ?>" target="_blank">[<?= $platform ?>]</a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>