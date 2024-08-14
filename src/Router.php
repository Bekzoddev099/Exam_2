<?php

declare(strict_types=1);

class Router{
    public $updates;

    public function __construct(){
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->updates = json_decode(file_get_contents('php://input'));
        }
    }

    public static function get(string $path, callable $callback): void {
        
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && $requestUri === $path) {
            $callback();
        }
    }

    public static function post(string $path, callable $callback): void {
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $requestUri === $path) {
            $callback();
        }
    }

    public function isTelegramUpdate(): bool {
        return isset($this->updates->update_id);
    }
}
