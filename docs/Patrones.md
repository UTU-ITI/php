Diagramas UML para PHP Orientado a Objetos
📊 Diagrama de Principios OOP en PHP
Diagram
Code





















🔐 Diagrama de Encapsulación
Diagram
Code













🧠 Diagrama de Abstracción
Diagram
Code


📈 Diagrama de Herencia
Diagram
Code



🔄 Diagrama de Polimorfismo
Diagram
Code



🗄️ Diagrama de Ejemplo de Base de Datos
Diagram
Code




🧪 Diagrama de Patrones de Diseño
Diagram
Code




📝 Código de Ejemplo para los Diagramas
Encapsulación (BankAccount)
php
class BankAccount {
    private float $balance = 0;
    private string $accountNumber;
    
    public function __construct(string $accountNumber) {
        $this->accountNumber = $accountNumber;
    }
    
    public function deposit(float $amount): void {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }
    
    public function withdraw(float $amount): bool {
        if ($amount > 0 && $this->balance >= $amount) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }
    
    public function getBalance(): float {
        return $this->balance;
    }
    
    public function getAccountNumber(): string {
        return $this->accountNumber;
    }
}
Herencia (Vehicle)
php
abstract class Vehicle {
    protected string $brand;
    protected string $model;
    protected float $speed = 0;
    
    public function __construct(string $brand, string $model) {
        $this->brand = $brand;
        $this->model = $model;
    }
    
    abstract public function accelerate(): void;
    
    public function brake(): void {
        $this->speed = max(0, $this->speed - 10);
    }
    
    public function getInfo(): string {
        return "{$this->brand} {$this->model}";
    }
}

class Car extends Vehicle {
    private int $doors;
    
    public function __construct(string $brand, string $model, int $doors) {
        parent::__construct($brand, $model);
        $this->doors = $doors;
    }
    
    public function accelerate(): void {
        $this->speed += 15;
    }
    
    public function openTrunk(): void {
        echo "Trunk opened";
    }
}
Polimorfismo (Shape)
php
interface Shape {
    public function calculateArea(): float;
    public function calculatePerimeter(): float;
}

class Circle implements Shape {
    private float $radius;
    
    public function __construct(float $radius) {
        $this->radius = $radius;
    }
    
    public function calculateArea(): float {
        return pi() * pow($this->radius, 2);
    }
    
    public function calculatePerimeter(): float {
        return 2 * pi() * $this->radius;
    }
}

class Rectangle implements Shape {
    private float $width;
    private float $height;
    
    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function calculateArea(): float {
        return $this->width * $this->height;
    }
    
    public function calculatePerimeter(): float {
        return 2 * ($this->width + $this->height);
    }
}
📋 Resumen de los Principios OOP
Principio	Descripción	Ejemplo
Encapsulación	Ocultar los detalles internos y exponer solo lo necesario	Propiedades privadas con métodos públicos de acceso
Abstracción	Definir estructuras sin implementación completa	Clases abstractas e interfaces
Herencia	Crear nuevas clases basadas en clases existentes	Extender una clase base con extends
Polimorfismo	Múltiples formas de implementar la misma interfaz	Diferentes clases implementando 