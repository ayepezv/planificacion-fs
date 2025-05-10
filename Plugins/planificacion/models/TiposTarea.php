<?php
namespace FacturaScripts\Plugins\Planificacion\Model;

use FacturaScripts\Core\Model\Base\ModelClass;

class TiposTarea extends ModelClass
{
    /** @var int */
    public $id;
    
    /** @var int */
    public $actividad_id;
    
    /** @var string */
    public $nombre;
    
    /** @var string */
    public $descripcion;
    
    /** @var int */
    public $tiempo_estimado_min;
    
    /** @var bool */
    public $requiere_evidencia;
    
    /** @var bool */
    public $es_hito_presupuestario;
    
    /** @var string */
    public $fecha_creacion;

    public static function tableName(): string
    {
        return 'tipos_tarea';
    }

    public function primaryColumn(): string
    {
        return 'id';
    }

    public function clear()
    {
        parent::clear();
        $this->requiere_evidencia = false;
        $this->es_hito_presupuestario = false;
        $this->fecha_creacion = date('Y-m-d H:i:s');
    }
}