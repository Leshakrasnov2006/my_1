<?php
/**
 * WebCraft Studio - Контакты
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
    <title><?= $company['name'] ?> - Контакты</title>
    <style>
        /* Стили для страницы "Контакты" */
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
        
        /* Contact Section */
        .contact {
            padding: 80px 0;
        }
        
        .contact-info {
            margin-bottom: 40px;
        }
        
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
        }
        
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid <?= $colors['text'] ?>;
            border-radius: 5px;
        }
        
        .contact-form button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: <?= $colors['primary'] ?>;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .contact-form button:hover {
            background-color: #1a56c9;
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

    <!-- Contact Section -->
    <section class="contact">
        <div class="container">
            <h2 class="section-title">Контакты</h2>
            <div class="contact-info">
                <p><strong>Телефон:</strong> <?= $contacts['phone'] ?></p>
                <p><strong>Email:</strong> <?= $contacts['email'] ?></p>
                <p><strong>Социальные сети:</strong></p>
                <?php foreach ($contacts['social'] as $platform => $url): ?>
                    <a href="<?= $url ?>" target="_blank">[<?= $platform ?>]</a>
                <?php endforeach; ?>
            </div>
            <form class="contact-form" action="#" method="post">
                <input type="text" name="name" placeholder="Ваше имя" required>
                <input type="email" name="email" placeholder="Ваш email" required>
                <textarea name="message" placeholder="Ваше сообщение" required></textarea>
                <button type="submit">Отправить</button>
            </form>
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