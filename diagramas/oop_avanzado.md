# Clase de PHP: Programación Orientada a Objetos Avanzada

## 📘 Introducción a los Principios OOP

La Programación Orientada a Objetos (OOP) en PHP se basa en cuatro principios fundamentales:

1. **Encapsulación**
2. **Abstracción**
3. **Herencia**
4. **Polimorfismo**

A continuación, se presentan diagramas UML y ejemplos de código para cada principio utilizando como base el sistema **SGLAB**.

---

## 🔒 Encapsulación

**Definición:** Ocultar los detalles internos y exponer solo lo necesario.

**Ejemplo en UML:** ver `encapsulacion.drawio`

```php
class Usuario {
    private string $nombre;
    private string $email;

    public function __construct(string $nombre, string $email) {
        $this->nombre = $nombre;
        $this->email = $email;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }
}
```

---

## 🧩 Abstracción

**Definición:** Definir estructuras sin implementación completa.

**Ejemplo en UML:** ver `abstraccion.drawio`

```php
abstract class Dispositivo {
    protected string $serial;

    public function __construct(string $serial) {
        $this->serial = $serial;
    }

    abstract public function registrar(): bool;
}
```

---

## 🧬 Herencia

**Definición:** Crear nuevas clases basadas en clases existentes.

**Ejemplo en UML:** ver `herencia.drawio`

```php
class PC extends Dispositivo {
    private string $estado;

    public function registrar(): bool {
        $this->estado = 'Registrado';
        return true;
    }
}
```

---

## 🔄 Polimorfismo

**Definición:** Múltiples formas de implementar la misma interfaz.

**Ejemplo en UML:** ver `polimorfismo.drawio`

```php
interface Notificable {
    public function notificar(string $mensaje): void;
}

class EmailNotificacion implements Notificable {
    public function notificar(string $mensaje): void {
        echo "Enviando email: $mensaje";
    }
}

class SmsNotificacion implements Notificable {
    public function notificar(string $mensaje): void {
        echo "Enviando SMS: $mensaje";
    }
}
```

---

📌 Cada diagrama UML correspondiente está preparado en formato `.drawio` para importar en [draw.io](https://app.diagrams.net).
