# Clase 11 – Herencia en SGLAB (Personas → Usuarios)

## 🎯 Objetivo
Aplicar **herencia** en el modelo: `Usuarios` hereda de `Personas`.  
Un usuario tiene además **email, password y perfil**.

## 🧩 Contenidos
- Clase padre: `Personas`.
- Clase hija: `Usuarios`.
- Uso de `extends` y `parent::__construct()`.

## 💻 Código de ejemplo

```php
<?php
namespace App\Models;

class Personas {
    public string $ci;
    public string $nombre;
    public string $apellido;
    public string $direccion;
    public string $fechaNacimiento;

    public function __construct($ci, $nombre, $apellido, $direccion, $fechaNacimiento) {
        $this->ci = $ci;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->direccion = $direccion;
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function altaPersona(): void {
        echo "Alta persona: {$this->nombre} {$this->apellido}";
    }
}

class Usuarios extends Personas {
    public int $id;
    public string $email;
    public string $password;
    public Perfiles $perfil;

    public function __construct($id, $nombre, $email, $password, Perfiles $perfil) {
        parent::__construct(rand(1000000,9999999), $nombre, "Apellido", "Dirección", "2000-01-01");
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->perfil = $perfil;
    }

    public function login(string $id, string $password): ?Usuarios {
        if ($this->password === $password) {
            return $this;
        }
        return null;
    }
}
```
