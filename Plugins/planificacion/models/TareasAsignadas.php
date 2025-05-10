<?php
namespace FacturaScripts\Plugins\Planificacion\Model;

use FacturaScripts\Core\Model\Base\ModelClass;

class TareasAsignadas extends ModelClass
{
    /** @var int */
    public $id;
    
    /** @var int */
    public $tipo_tarea_id;
    
    /** @var int */
    public $usuario_id;
    
    /** @var int */
    public $asignador_id;
    
    /** @var string */
    public $fecha_asignacion;
    
    /** @var string */
    public $fecha_limite;
    
    /** @var int */
    public $prioridad_id;
    
    /** @var int */
    public $estado_id;
    
    /** @var string */
    public $descripcion;
    
    /** @var string */
    public $fecha_inicio;
    
    /** @var string */
    public $fecha_fin;
    
    /** @var int */
    public $tiempo_ejecucion_min;
    
    /** @var string */
    public $observaciones;
    
    /** @var string */
    public $evaluacion_cumplimiento;
    
    /** @var string */
    public $fecha_actualizacion;

    public static function tableName(): string
    {
        return 'tareas_asignadas';
    }

    public function primaryColumn(): string
    {
        return 'id';
    }

    public function clear()
    {
        parent::clear();
        $this->fecha_asignacion = date('Y-m-d H:i:s');
        $this->fecha_actualizacion = date('Y-m-d H:i:s');
    }
}