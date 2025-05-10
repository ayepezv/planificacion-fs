<?php
namespace FacturaScripts\Plugins\Planificacion\Controllers;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditJustificaciones extends EditController
{
    public function getModelClassName(): string
    {
        return 'Justificacion';
    }

    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'planificacion';
        $pageData['title'] = 'Justificación';
        $pageData['icon'] = 'fas fa-exclamation-triangle';
        return $pageData;
    }
}