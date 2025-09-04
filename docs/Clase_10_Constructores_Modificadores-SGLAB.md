# Clase 10 – Patrón Singleton en SGLAB

## 🎯 Objetivo
Garantizar una **única conexión PDO** para todo el sistema SGLAB.

## 🧩 Contenidos
- ¿Qué es un **Singleton**?
- Evita múltiples instancias del mismo recurso (ej. conexión a BD).
- Ventajas: control centralizado, eficiencia.

## 💻 Código de ejemplo

```php
<?php
namespace App\Database;

use PDO;
use PDOException;
use Dotenv\Dotenv;

class ConexionDB {
    private static ?self $instancia = null;
    private PDO $conexion;

    private function __construct() {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
        $dotenv->load();

        $dsn = "mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']};charset={$_ENV['DB_CHARSET']}";
        $user = $_ENV['DB_USER'];
        $pass = $_ENV['DB_PASS'];

        try {
            $this->conexion = new PDO($dsn, $user, $pass);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("❌ Error: " . $e->getMessage());
        }
    }

    public static function getInstancia(): self {
        return self::$instancia ??= new self();
    }

    public function getConexion(): PDO {
        return $this->conexion;
    }
}
```
