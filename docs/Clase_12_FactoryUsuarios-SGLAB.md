# Clase 12 – Polimorfismo en SGLAB (Registros)

## 🎯 Objetivo
Aplicar **polimorfismo** en los registros de laboratorio (`RegistroUsuario`, `RegistroBoot`, `RegistroApagado`).

## 🧩 Contenidos
- Clase abstracta: `Registro`.
- Clases concretas con distintos comportamientos.
- Ventaja: recorrer registros de manera uniforme aunque cambie el tipo.

## 💻 Código de ejemplo

```php
<?php
namespace App\Models;

abstract class Registro {
    public string $fecha;
    public string $estado;
    public string $ip;
    public string $descripcion;

    public function __construct($fecha, $estado, $ip, $descripcion) {
        $this->fecha = $fecha;
        $this->estado = $estado;
        $this->ip = $ip;
        $this->descripcion = $descripcion;
    }

    abstract public function mostrarRegistro(): string;
}

class RegistroUsuario extends Registro {
    public function mostrarRegistro(): string {
        return "Registro Usuario en {$this->fecha}: {$this->descripcion}";
    }
}

class RegistroBoot extends Registro {
    public function mostrarRegistro(): string {
        return "Registro Boot en {$this->fecha} desde IP {$this->ip}";
    }
}

class RegistroApagado extends Registro {
    public function mostrarRegistro(): string {
        return "Registro Apagado en {$this->fecha} – Estado: {$this->estado}";
    }
}
```
