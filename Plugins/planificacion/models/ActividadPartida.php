<?php
namespace FacturaScripts\Plugins\Planificacion\Model;

use FacturaScripts\Core\Model\Base\ModelClass;

class ActividadPartida extends ModelClass
{
    /** @var int */
    public $actividad_id;
    
    /** @var int */
    public $partida_id;
    
    /** @var int */
    public $pac_item_id;
    
    /** @var string */
    public $descripcion;

    public static function tableName(): string
    {
        return 'actividad_partida';
    }

    public function primaryColumn(): string
    {
        return 'actividad_id';
    }
}