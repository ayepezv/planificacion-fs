<?php
namespace FacturaScripts\Plugins\Planificacion\Model;

use FacturaScripts\Core\Model\Base\ModelClass;

class PartidasPresupuestarias extends ModelClass
{
    /** @var int */
    public $id;
    
    /** @var int */
    public $subproceso_id;
    
    /** @var int */
    public $anio;
    
    /** @var string */
    public $codigo;
    
    /** @var string */
    public $nombre;
    
    /** @var float */
    public $presupuesto_codificado;
    
    /** @var float */
    public $monto_comprometido;
    
    /** @var float */
    public $monto_devengado;
    
    /** @var float */
    public $monto_pagado;
    
    /** @var string */
    public $fecha_creacion;
    
    /** @var string */
    public $fecha_actualizacion;

    public static function tableName(): string
    {
        return 'partidas_presupuestarias';
    }

    public function primaryColumn(): string
    {
        return 'id';
    }

    public function clear()
    {
        parent::clear();
        $this->monto_comprometido = 0.00;
        $this->monto_devengado = 0.00;
        $this->monto_pagado = 0.00;
        $this->fecha_creacion = date('Y-m-d H:i:s');
        $this->fecha_actualizacion = date('Y-m-d H:i:s');
    }
}