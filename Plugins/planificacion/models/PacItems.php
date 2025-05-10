<?php
namespace FacturaScripts\Plugins\Planificacion\Model;

use FacturaScripts\Core\Model\Base\ModelClass;

class PacItems extends ModelClass
{
    /** @var int */
    public $id;
    
    /** @var int */
    public $partida_id;
    
    /** @var int */
    public $anio;
    
    /** @var string */
    public $codigo;
    
    /** @var string */
    public $descripcion;
    
    /** @var string */
    public $tipo_compra;
    
    /** @var string */
    public $procedimiento;
    
    /** @var float */
    public $monto_referencial;
    
    /** @var string */
    public $estado;
    
    /** @var string */
    public $fecha_creacion;
    
    /** @var string */
    public $fecha_actualizacion;

    public static function tableName(): string
    {
        return 'pac_items';
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