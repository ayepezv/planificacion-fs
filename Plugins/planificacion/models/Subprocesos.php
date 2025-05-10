<?php
namespace FacturaScripts\Plugins\Planificacion\Model;

use FacturaScripts\Core\Model\Base\ModelClass;

class Subprocesos extends ModelClass
{
    /** @var int */
    public $id;
    
    /** @var int */
    public $proceso_id;
    
    /** @var string */
    public $codigo;
    
    /** @var string */
    public $nombre;
    
    /** @var string */
    public $descripcion;
    
    /** @var string */
    public $fecha_creacion;
    
    /** @var string */
    public $fecha_actualizacion;

    public static function tableName(): string
    {
        return 'subprocesos';
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

    public function test(): bool
    {
        $this->fecha_actualizacion = date('Y-m-d H:i:s');
        return parent::test();
    }
}