<?php
namespace FacturaScripts\Plugins\Planificacion\Model;

use FacturaScripts\Core\Model\Base\ModelClass;

class PuestoActividad extends ModelClass
{
    /** @var int */
    public $puesto_id;
    
    /** @var int */
    public $actividad_id;

    public static function tableName(): string
    {
        return 'puesto_actividad';
    }

    public function primaryColumn(): string
    {
        return 'puesto_id';
    }
}