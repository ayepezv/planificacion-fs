<?php
namespace FacturaScripts\Plugins\Planificacion\Model;

use FacturaScripts\Core\Model\Base\ModelClass;

class Justificaciones extends ModelClass
{
    /** @var int */
    public $id;
    
    /** @var int */
    public $tarea_id;
    
    /** @var string */
    public $motivo;
    
    /** @var bool */
    public $solicita_ampliacion;
    
    /** @var string */
    public $nueva_fecha_limite;
    
    /** @var int */
    public $tiempo_adicional_min;
    
    /** @var string */
    public $fecha_solicitud;
    
    /** @var string */
    public $estado_aprobacion;
    
    /** @var int */
    public $usuario_aprobador_id;
    
    /** @var string */
    public $fecha_aprobacion;
    
    /** @var string */
    public $observaciones;

    public static function tableName(): string
    {
        return 'justificaciones';
    }

    public function primaryColumn(): string
    {
        return 'id';
    }

    public function clear()
    {
        parent::clear();
        $this->solicita_ampliacion = false;
        $this->fecha_solicitud = date('Y-m-d H:i:s');
    }
}