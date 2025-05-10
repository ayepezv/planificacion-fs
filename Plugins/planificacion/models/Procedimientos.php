<?php
namespace FacturaScripts\Plugins\Planificacion\Model;

use FacturaScripts\Core\Model\Base\ModelClass;

class Procedimientos extends ModelClass
{
    /** @var int */
    public $id;
    
    /** @var int */
    public $subproceso_id;
    
    /** @var string */
    public $codigo;
    
    /** @var string */
    public $nombre;
    
    /** @var string */
    public $objetivo;
    
    /** @var string */
    public $alcance;
    
    /** @var string */
    public $version;
    
    /** @var string */
    public $fecha_aprobacion;
    
    /** @var string */
    public $documento_url;
    
    /** @var string */
    public $fecha_creacion;
    
    /** @var string */
    public $fecha_actualizacion;

    public static function tableName(): string
    {
        return 'procedimientos';
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