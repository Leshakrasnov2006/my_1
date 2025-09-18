<?php
/**
 * WebCraft Studio - Обо мне
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

// Обо мне
$about = [
    'title' => 'Обо мне',
    'description' => 'Привет! Меня зовут Алексей, и я являюсь основателем WebCraft Studio. С 2020 года я занимаюсь разработкой веб-сайтов и приложений. Моя цель — создавать качественные и функциональные решения для бизнеса. Я всегда стремлюсь к тому, чтобы каждый проект был уникальным и отвечал всем требованиям клиентов.'
];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $company['name'] ?> - Обо мне</title>
    <style>
        /* Стили для страницы "Обо мне" */
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
        
        /* About Section */
        .about {
            padding: 80px 0;
        }
        
        .section-title {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 60px;
            color: <?= $colors['primary'] ?>;
        }
        
        .about-content {
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .about-image {
            width: 100%;
            max-width: 400px;
            margin-bottom: 20px;
            border: 5px solid <?= $colors['primary'] ?>; /* Добавляем рамку */
            box-shadow: 0 5px 15px rgba(0,0,0,0.1); /* Добавляем тень */
            border-radius: 10px; /* Закругленные углы */
            object-fit: cover; /* Сохраняем пропорции изображения */
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

    <!-- About Section -->
    <section class="about">
        <div class="container">
            <h2 class="section-title"><?= $about['title'] ?></h2>
            <div class="about-content">
                <img src="images/men1.jpg" alt="Изображение программиста" class="about-image">
                <p><?= $about['description'] ?></p>
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