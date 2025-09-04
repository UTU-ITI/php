# Clase 9 – Patrón Factory en SGLAB

## 🎯 Objetivo
Implementar una **fábrica de usuarios** que centralice la creación según el tipo (`Estudiante`, `Docente`, `Asistente`, `Administrador`).

## 🧩 Contenidos
- ¿Qué es un **Factory**?
- Ventajas: centralizar la creación, facilitar cambios futuros, mejorar mantenibilidad.
- Aplicación al sistema SGLAB (Usuarios y Perfiles).

## 💻 Código de ejemplo

```php
<?php
namespace App\Factories;

use App\Models\Usuarios;
use App\Models\Perfiles;

class UsuarioFactory {
    public static function crearUsuario(
        string $tipo,
        string $nombre,
        string $email,
        string $password
    ): Usuarios {
        $perfil = new Perfiles(rand(1,1000), $tipo, "Permisos básicos");
        return new Usuarios(rand(1,1000), $nombre, $email, $password, $perfil);
    }
}
```
