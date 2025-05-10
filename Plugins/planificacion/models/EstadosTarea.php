<?php
namespace FacturaScripts\Plugins\Planificacion\Model;

use FacturaScripts\Core\Model\Base\ModelClass;

class EstadosTarea extends ModelClass
{
    /** @var int */
    public $id;
    
    /** @var string */
    public $nombre;

    public static function tableName(): string
    {
        return 'estados_tarea';
    }

    public function primaryColumn(): string
    {
        return 'id';
    }
}