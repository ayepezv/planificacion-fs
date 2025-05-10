<?php
namespace FacturaScripts\Plugins\Planificacion\Model;

use FacturaScripts\Core\Model\Base\ModelClass;

class Puestos extends ModelClass
{
    /** @var int */
    public $id;
    
    /** @var string */
    public $denominacion;
    
    /** @var string */
    public $grupo_ocupacional;
    
    /** @var string */
    public $unidad_administrativa;
    
    /** @var string */
    public $descripcion;
    
    /** @var string */
    public $fecha_creacion;
    
    /** @var string */
    public $fecha_actualizacion;

    public static function tableName(): string
    {
        return 'puestos';
    }

    public function primaryColumn(): string
    {
        return 'id';
    }

    public function clear()
    {
        parent::clear();
        $this->fecha_creacion = date('Y-m-d H:i:s');
        $this->fecha_actualizacion = date('Y-m-d H:i:s');
    }
}