<?php
/**
 * WebCraft Studio - Портфолио
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
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $company['name'] ?> - Портфолио</title>
    <style>
        /* Стили для страницы портфолио */
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
        
        /* Portfolio Section */
        .portfolio {
            padding: 80px 0;
        }
        
        .section-title {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 60px;
            color: <?= $colors['primary'] ?>;
        }
        
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
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
            
            .portfolio-grid {
                grid-template-columns: 1fr;
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

    <!-- Portfolio Section -->
    <section class="portfolio">
        <div class="container">
            <h2 class="section-title">НАШЕ ПОРТФОЛИО</h2>
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
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="copyright">WebCraft Studio © 2024</div>
                <div class="contacts">
                    <p>Тел: +7 (999) 123-45-67</p>
                    <p>Email: info@webcraft-studio.ru</p>
                </div>
                <div class="social-links">
                    <a href="https://vk.com/webcraftstudio" target="_blank">[VK]</a>
                    <a href="https://t.me/webcraftstudio" target="_blank">[TG]</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>