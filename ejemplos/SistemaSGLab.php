<?php

/*
 * ============================================
 * EL SUJETO (El objeto observado)
 * ============================================
 *
 * Esta es la clase para una computadora del laboratorio.
 * Implementa SplSubject para que pueda ser observada.
 */
class EquipoSGLab implements \SplSubject
{
    public string $nombre;
    private string $estado; // El estado que será observado

    // SplObjectStorage es una forma eficiente de "guardar" a los observadores
    private \SplObjectStorage $observadores;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
        $this->estado = 'disponible';
        $this->observadores = new \SplObjectStorage();
    }

    // --- Métodos de SplSubject ---

    /**
     * Adjunta (suscribe) un Observador.
     * El "PanelDocente" llamará a esto.
     */
    public function attach(\SplObserver $observador): void
    {
        echo "[Equipo {$this->nombre}]: El panel del docente se ha suscrito.\n";
        $this->observadores->attach($observador);
    }

    /**
     * Quita (desuscribe) un Observador.
     */
    public function detach(\SplObserver $observador): void
    {
        $this->observadores->detach($observador);
    }

    /**
     * Notifica a TODOS los observadores suscritos.
     */
    public function notify(): void
    {
        echo "[Equipo {$this->nombre}]: Mi estado cambió. ¡Notificando a {$this->observadores->count()} observador(es)!\n";
        foreach ($this->observadores as $observador) {
            // Llama al método "update" del observador
            $observador->update($this);
        }
    }

    // --- Métodos de Negocio (del Equipo) ---

    /**
     * Este es el método que cambia el estado Y dispara la notificación.
     */
    public function cambiarEstado(string $nuevoEstado): void
    {
        echo "\n[Acción]: Alguien está usando el {$this->nombre}...\n";
        $this->estado = $nuevoEstado;
        
        // ¡LA CLAVE! Notifica a todos los que estén escuchando.
        $this->notify();
    }

    public function getEstado(): string
    {
        return $this->estado;
    }
}


/*
 * ============================================
 * EL OBSERVADOR (El que mira)
 * ============================================
 *
 * Este es el panel de control del docente.
 * Implementa SplObserver.
 */
class PanelDocente implements \SplObserver
{
    public string $nombreDocente;
    
    // Aquí el panel guarda el estado que "sabe" de los equipos
    private array $estadosEquipos = [];

    public function __construct(string $nombreDocente)
    {
        $this->nombreDocente = $nombreDocente;
        echo "[Panel de {$this->nombreDocente}]: Panel de control iniciado.\n";
    }

    /**
     * ¡LA REACCIÓN!
     * Este método es llamado por el Sujeto (EquipoSGLab)
     * cuando llama a notify().
     *
     * @param \SplSubject $sujeto El equipo que cambió de estado.
     */
    public function update(\SplSubject $sujeto): void
    {
        // Verificamos que sea un EquipoSGLab (aunque en este caso es el único)
        if ($sujeto instanceof EquipoSGLab) {
            echo "[Panel de {$this->nombreDocente}]: ¡Notificación recibida!\n";
            
            // Actualizamos nuestro estado interno
            $this->estadosEquipos[$sujeto->nombre] = $sujeto->getEstado();
            
            echo "[Panel de {$this->nombreDocente}]: El {$sujeto->nombre} ahora está: {$sujeto->getEstado()}\n";
        }
    }

    /**
     * Un método simple para ver lo que "sabe" el panel.
     */
    public function mostrarEstadoDelAula(): void
    {
        echo "\n--- ESTADO DEL AULA (Vista del Docente {$this->nombreDocente}) ---\n";
        if (empty($this->estadosEquipos)) {
            echo "No se está observando ningún equipo.\n";
            return;
        }
        
        foreach ($this->estadosEquipos as $nombre => $estado) {
            echo "- $nombre: $estado\n";
        }
        echo "--------------------------------------------------\n";
    }
}


/*
 * ============================================
 * DEMO DE USO (La Simulación)
 * ============================================
 */

echo "--- INICIO DE LA SIMULACIÓN SGLab ---\n\n";

// 1. El docente inicia su panel de control.
$panelProfeAna = new PanelDocente("Ana");

// 2. Se "encienden" los equipos del laboratorio.
$equipo01 = new EquipoSGLab("PC-01");
$equipo02 = new EquipoSGLab("PC-02 (Proyector)");

// 3. El panel del docente se "suscribe" a los equipos que quiere monitorear.
// (Esto pasaría cuando el docente "abre" el aula en el sistema)
$equipo01->attach($panelProfeAna);
$equipo02->attach($panelProfeAna);

// 4. El panel actualiza su vista inicial (opcional, para ver el estado base)
$panelProfeAna->update($equipo01);
$panelProfeAna->update($equipo02);
$panelProfeAna->mostrarEstadoDelAula();


// 5. ¡COMIENZA LA ACCIÓN! Un estudiante inicia sesión en la PC-01.
// El docente NO hace nada. El equipo SÍ.
$equipo01->cambiarEstado("ocupado_por_alumno_lopez");

// 6. El docente revisa su panel (el panel ya fue notificado automáticamente)
$panelProfeAna->mostrarEstadoDelAula();


// 7. La PC-02 (Proyector) reporta un error.
$equipo02->cambiarEstado("error_lampara_quemada");

// 8. El docente revisa su panel de nuevo.
$panelProfeAna->mostrarEstadoDelAula();

?>