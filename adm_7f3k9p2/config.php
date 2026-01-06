<?php
// Подключаем корневой config.php для доступа к базе
require_once dirname(__DIR__) . '/config.php';

// Дополнительные настройки для админки
ini_set('display_errors', 0); // Отключаем отображение ошибок
error_reporting(E_ALL);

// Путь к админке
define('ADMIN_PATH', '/adm_7f3k9p2');

// Настройки авторизации
define('ADMIN_USERNAME', 'admin');
define('ADMIN_PASSWORD', 'xzjdurgp23894'); // Убедись, что пароль заменён

// Настройки для загрузки изображений
define('UPLOAD_DIR', BASE_PATH . '/static/1_task/');
define('UPLOAD_URL', '/static/1_task/');

// Настройка безопасных сессий
session_set_cookie_params([
    'lifetime' => 0,
    'path' => ADMIN_PATH . '/',
    'secure' => true, // Только HTTPS
    'httponly' => true,
    'samesite' => 'Strict'
]);
session_start();
?>