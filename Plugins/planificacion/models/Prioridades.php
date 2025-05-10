<?php
namespace FacturaScripts\Plugins\Planificacion\Model;

use FacturaScripts\Core\Model\Base\ModelClass;

class Prioridades extends ModelClass
{
    /** @var int */
    public $id;
    
    /** @var string */
    public $nombre;
    
    /** @var int */
    public $nivel;

    public static function tableName(): string
    {
        return 'prioridades';
    }

    public function primaryColumn(): string
    {
        return 'id';
    }
}