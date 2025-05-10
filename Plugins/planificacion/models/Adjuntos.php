<?php
namespace FacturaScripts\Plugins\Planificacion\Model;

use FacturaScripts\Core\Model\Base\ModelClass;

class Adjuntos extends ModelClass
{
    /** @var int */
    public $id;
    
    /** @var int */
    public $tarea_id;
    
    /** @var string */
    public $tipo;
    
    /** @var string */
    public $nombre_archivo;
    
    /** @var string */
    public $ruta_archivo;
    
    /** @var string */
    public $mime_type;
    
    /** @var int */
    public $tamano;
    
    /** @var string */
    public $fecha_subida;
    
    /** @var int */
    public $usuario_id;

    public static function tableName(): string
    {
        return 'adjuntos';
    }

    public function primaryColumn(): string
    {
        return 'id';
    }

    public function clear()
    {
        parent::clear();
        $this->fecha_subida = date('Y-m-d H:i:s');
    }
}